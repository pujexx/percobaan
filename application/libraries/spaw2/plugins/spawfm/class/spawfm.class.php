<?php
error_reporting(E_ALL);
class SpawFm
{
  var $thumbnails_enabled = false;
  var $current_dir = false;
  var $current_dir_data = false;
  var $current_type = false;
  var $image_ext = array('.gif', '.png', '.jpg', '.jpeg');
  
  function SpawFm()
  {
  }
  
  
  function normalizeDir($dir, $stripslashes = false, $noleadslash = false)
  {
    if (!strlen($dir))
      return false;
    $dir = str_replace('\\', '/', $dir);
    if (!$noleadslash and !preg_match('#[a-z]+://#i', $dir))
      $dir = preg_replace('|^/*(.*)|', '/$1', $dir);
    $dir = SpawFm::addTrailingSlash($dir);
    if ($stripslashes) 
      return SpawVars::stripSlashes($dir);
    return $dir;
  }
  
  function addTrailingSlash($dir)
  {
    return preg_replace('|/*$|', '', $dir).'/';
  }
  
  
  function getFileIcon($filename)
  {
    $icons = SpawFm::getFileIconsDefinition($filename);
    return $icons['icon'];
  }
  
  function getFileIconBig($filename)
  {
    $icons = SpawFm::getFileIconsDefinition($filename);
    return $icons['icon_big'];
  }
  
  function getFileIconsDefinition($filename) 
  {
    global $config;
    static $spawfm_ftypes_icons;
    $icons = false;
    $ext = SpawFm::getFileExtension($filename);
    if (!isset($spawfm_ftypes_icons[$ext])) {
      // search for icon definition for this extension 
      $icons_def = $config->getConfigValue('PG_SPAWFM_FILETYPES_ICONS');
      foreach ($icons_def as $definition) {
        if (in_array($ext, $definition['extensions'])) {
          $icons = array(
            'icon'      => $definition['icon'],
            'icon_big'  => $definition['icon_big'],
          );
          break;
        }
      }
      
      // set default icon if definition not found
      if (!$icons) {
        $icons = $config->getConfigValue('PG_SPAWFM_FILETYPES_ICON_DEFAULT');
      }
      $spawfm_ftypes_icons[$ext] = $icons;
    } else {
      $icons = $spawfm_ftypes_icons[$ext];
    }
    return $icons;
  }
  
  function getFileThumbnail($filename)
  {
    $icons = SpawFm::getFileIconsDefinition($filename);
    return '../plugins/spawfm/img/'.$icons['icon_big'];
  }
  
  function getFileSize($file)
  {
    $fsize = @filesize($this->getCurrentFsDir().$file);
    if (!$fsize)
      $fsize = 0;
    return $fsize;
  }
   
  function getFileDate($file)
  {
    $fdate = @filemtime($this->getCurrentFsDir().$file);
    if (!$fdate)
      $fdate = 0;
    return $fdate;
  }
  
  function isImage($file)
  {
    $ext = $this->getFileExtension($file);
    if (in_array($ext, $this->image_ext)) {
      return true;
    }
    return false;
  }
  
  function isThumbailsModePossible($dir_path)
  {
    // check required system tools for image resizing
    // check if current directory is writable
    return true;
  }
  
  function getCurrentDir()
  {
    return !empty($this->current_dir_data['dir']) ? $this->current_dir_data['dir'] : false;
  }
  
  function getCurrentFsDir()
  {
    return !empty($this->current_dir_data['fsdir']) ? $this->current_dir_data['fsdir'] : false;
  }
  
  function setCurrentDirData($dir_data)
  {
    $this->current_dir_data = $dir_data;
  }
  
  function getCurrentDirData()
  {
    return $this->current_dir_data;
  }
  
  function unsetCurrentDirData()
  {
    $this->current_dir_data = false;
  }
  
  function getCurrentDirSetting($name)
  {
    $data = $this->getCurrentDirData();
    if (isset($data['params'][$name])) {
      return $data['params'][$name];
    }
    return false;
  }
  
  function setCurrentType($type)
  {
    $this->current_type = $type;
  }
  function getCurrentType()
  {
    return $this->current_type;
  }
  
  // returns allowed extensions for selected directory and type
  function getAllowedExtensions()
  {
    global $config;
    $allowed_ext = array();
    if (!$this->getCurrentDir() or !$curr_dir_data = $this->getCurrentDirData()) {
      return $allowed_ext;
    }
    
    $filetypes = $config->getConfigValue('PG_SPAWFM_FILETYPES');
    
    if ($curr_type = $this->getCurrentType()) {
      $allowed_ext = $filetypes[$curr_type];
    } elseif (!empty($curr_dir_data['params']['allowed_filetypes'])) {
      if (!is_array($curr_dir_data['params']['allowed_filetypes'])) {
        $curr_dir_data['params']['allowed_filetypes'] = array($curr_dir_data['params']['allowed_filetypes']);
      }
      if (sizeof($curr_dir_data['params']['allowed_filetypes'])) {
        foreach ($curr_dir_data['params']['allowed_filetypes'] as $ftype) {
          if (strlen($ftype) and $ftype{0} == '.') { // extension specified
            $allowed_ext[] = $ftype;
          } elseif (isset($filetypes[$ftype])) { // filetype group specified
            $allowed_ext = array_merge($allowed_ext, $filetypes[$ftype]);
          }
        }
      }
    }
    return $allowed_ext;
  }
  
  // returns list of files in current directory
  function getFilesList()
  {
    global $lang;
    $files = array();
    
    if (!$this->getCurrentFsDir()) {
      return $files;
    }

    $allowed_ext = $this->getAllowedExtensions();
    if ($dh = @opendir($this->getCurrentFsDir())) {
      while (false !== ($file = readdir($dh))) {
        if (!is_dir($this->getCurrentFsDir().$file)) {  
          $ext = SpawFm::getFileExtension($file);
          if (in_array('.*', $allowed_ext) or in_array($ext, $allowed_ext)) {
            $files[] = $file;
          }
        }
      }
      closedir($dh);
    } else {
      return false;
    }
    
    // reorder files by title
    sort($files, SORT_STRING);
    
    // load files' details
    foreach ($files as $key=>$file) {
      $ext = SpawFm::getFileExtension($file);
      if (!strlen($fdescr = $lang->m($ext, 'filetypes'))) {
        $fdescr = strtoupper(substr($ext, 1)).' '.
                  $lang->m('filetype_suffix', 'file_details');
      }
      // additional info
      if ($imgsize = @getimagesize($this->getCurrentFsDir().$file)) {
        $other = $lang->m('img_dimensions', 'file_details').': '.$imgsize[0].'x'.$imgsize[1];
      } else {
        $other = '';
      }
      
      // get thumbail
      // TO DO
      
      $files[$key] = array(
        'type'      => 'F',
        'name'      => $file,
        'size'      => $this->getFileSize($file),
        'date'      => $this->getFileDate($file),
        'fdescr'    => $fdescr,
        'icon'      => '../plugins/spawfm/img/'.$this->getFileIcon($file),
        'icon_big'  => '../plugins/spawfm/img/'.$this->getFileIconBig($file),
        'thumb'     => $this->getFileThumbnail($file),
        'other'     => $other
      );
    }
    
    return $files;
  }
  
  // returns list of files in current directory
  function getDirectoriesList()
  {
    global $lang, $config;
    $directories = array();
    
    if (!$this->getCurrentFsDir()) {
      return $directories;
    }

    if ($dh = @opendir($this->getCurrentFsDir())) {
      while (false !== ($file = readdir($dh))) {
        if (is_dir($this->getCurrentFsDir().$file) and $file{0} != '.') {
          $directories[] = $file;
        }
      }
      closedir($dh);
    } else {
      return false;
    }
    
    // sort
    sort($directories);
    
    // load details
    foreach ($directories as $key=>$file) {
      $directories[$key] = array(
        'name'      => $file,
        'date'      => $this->getFileDate($file),
        'size'      => $this->getFileSize($file),
        'descr'     => $lang->m('file_folder', 'file_details'),
        'icon'      => '../plugins/spawfm/img/'.$config->getConfigValueElement('PG_SPAWFM_FILETYPES_ICON_FOLDER', 'icon'),
        'icon_big'  => '../plugins/spawfm/img/'.$config->getConfigValueElement('PG_SPAWFM_FILETYPES_ICON_FOLDER', 'icon_big'),
        'thumb'     => $this->getFileThumbnail($file),
        'other'     => ''
      );
    }
    
    return $directories;
  }
  
  function setThumbnailsEnabled($status = false)
  {
    $this->thumbnails_enabled = $status;
  }
  
  function getThumbnailsEnabled()
  {
    return $this->thumbnails_enabled;
  }
  
  // static helper methods
  function getFileExtension($filename)
  {
    return strtolower(strrchr($filename, '.'));
  }
  
  // adds slashes before single quotes
  function escJsStr($str)
  {
    return addcslashes($str, '\'');
  }
  
  // strip leading slash
  function stripLeadSlash($dir)
  {
    if (strlen($dir) and ($dir{0} == '/' or $dir{0} == '\\')) {
      return substr($dir, 1);
    }
    return $dir;
  }
  
  // escape HTML special chars
  function escapeHtml($str)
  {
    return str_replace(
      array('<', '>', '"'), 
      array('&lt;', '&gt;', '&quot;'), 
      $str
    );
  }
}
?>