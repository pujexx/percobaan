<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Editor extends codexForms
{
    function Editor($name,$params) { 
        $params['attributes']['cols'] = (isset($params['attributes']['cols']))? $params['attributes']['cols'] : 40 ;
        $params['attributes']['rows'] = (isset($params['attributes']['rows']))? $params['attributes']['rows'] : 10 ;
        codexForms::initiate($name,$params);
    }

    function prepForDB($value){
        return ($value);
    }

    function prepForDisplay($value){
    	return (stripslashes($value));
    }

	function getHTML()
	{
        $CI = &get_instance();
        $CI->codextemplates->css('css-jquery.wysiwyg.pack.js','jquery.wysiwyg.css');
        $CI->codextemplates->js('js-jquery.wysiwyg.pack.js','jquery.wysiwyg.pack.js');
		
        $html = "";
		$html .= $this->prefix;
        $html .= $this->getMessage($this->name);
        $html .= '
            <label for="'.$this->element_name.'">
                '.$this->label.'
            </label>
            <textarea id="'.$this->name.'" name="'.$this->element_name.'" '.$this->getAttributes($this->attributes).'>'.stripslashes($this->value).'</textarea>
        ';
        $js ="$(function()
				{
				    $('#".$this->name."').wysiwyg();
				});";
        $CI->codextemplates->inlineJS('js-'.$this->name.'-init',$js); 
		
		$html .= $this->suffix;
		
		return $html;
	}
    
}
?>
