<?php 
// ================================================
// SPAW File Manager plugin
// ================================================
// English language file
// ================================================
// Developed: Saulius Okunevicius, saulius@solmetra.com
// Translated: Szentgyörgyi János, info@dynamicart.hu
// Copyright: Solmetra (c)2006 All rights reserved.
// ------------------------------------------------
//                                www.solmetra.com
// ================================================
// v.1.0, 2006-11-20
// ================================================

// charset to be used in dialogs
$spaw_lang_charset = 'iso-8859-2';

// language text data array
// first dimension - block, second - exact phrase
// alternative text for toolbar buttons and title for dropdowns - 'title'

$spaw_lang_data = array(
  'spawfm' => array(
    'title' => 'SPAW Fájl menedzser',
    'error_reading_dir' => 'Hiba: Nem tudom olvasni a könyvtár tartalmát.',
    'error_upload_forbidden' => 'Hiba: Fájl feltöltés nem engedéjezett ebbe a mappába.',
    'error_upload_file_too_big' => 'Feltöltési hiba: Fájl túl nagy.',
    'error_upload_failed' => 'Fájl feltöltés nem sikerült.',
    'error_upload_file_incomplete' => 'Fájl feltöltés nem fejezõdött be, próbáld újra.',
    'error_bad_filetype' => 'Hiba: Feltöltendõ fájl tipusa nem engedéjezett.',
    'error_max_filesize' => 'A legnagyobb feltöltendõ fájl mérete:',
    'error_delete_forbidden' => 'Hiba: Ebben a mappában nincs engedéjezve a törlés.',
    'confirm_delete' => 'Biztosan akarod törölni ezeket a fájlokat "[*file*]"?',
    'error_delete_failed' => 'Hiba: Fájlt nem tudtam törölni.',
    'error_no_directory_available' => 'Nincs elérhetõ tallózható mappa.',
    'download_file' => '[download file]',
  ),
  'buttons' => array(
    'ok'        => '  OK  ',
    'cancel'    => 'Mégsem',
    'view_list' => 'Nézet: lista',
    'view_details' => 'Nézet: részletek',
    'view_thumbs' => 'Nézet: kisképek',
    'rename'    => 'Átnevezés',
    'delete'    => 'Törlés',
    'go_up'     => 'Fel',
    'upload'    =>  'Feltöltés',
    ''  =>  '',
  ),
  'file_details' => array(
    'name'  =>  'Név',
    'type'  =>  'Tipus',
    'size'  =>  'Méret',
    'date'  =>  'Dátum',
    'filetype_suffix'  =>  'Fájl',
    'img_dimensions'  =>  '??Méretek??',
    ''  =>  '',
    ''  =>  '',
  ),
  'filetypes' => array(
    'any'       => 'Minden fájl (*.*)',
    'images'    => 'Kép fájlok',
    'flash'     => 'Flash mozik',
    'documents' => 'Dokumentumok',
    'audio'     => 'Zenei fájlok',
    'video'     => 'Videó fájlok',
    'archives'  => 'Arhív fájlok',
    '.jpg'  =>  'JPG kép fájl',
    '.jpeg'  =>  'JPG kép fájl',
    '.gif'  =>  'GIF kép fájl',
    '.png'  =>  'PNG kép fájl',
    '.swf'  =>  'Flash mozi',
    '.doc'  =>  'Microsoft Word dokumentum',
    '.xls'  =>  'Microsoft Excel dokumentum',
    '.pdf'  =>  'PDF dokumentum',
    '.rtf'  =>  'RTF dokumentum',
    '.odt'  =>  'OpenDocument szöveg',
    '.ods'  =>  'OpenDocument táblázat',
    '.sxw'  =>  'OpenOffice.org 1.0 szöveges dokumentum',
    '.sxc'  =>  'OpenOffice.org 1.0 táblázat',
    '.wav'  =>  'WAV hang fájl',
    '.mp3'  =>  'MP3 hang fájl',
    '.ogg'  =>  'Ogg Vorbis hang fájl',
    '.wma'  =>  'Windows hang fájl',
    '.avi'  =>  'AVI videó fájl',
    '.mpg'  =>  'MPEG videó fájl',
    '.mpeg'  =>  'MPEG videó fájl',
    '.mov'  =>  'QuickTime videó fájl',
    '.wmv'  =>  'Windows videó fájl',
    '.zip'  =>  'ZIP tömörítés',
    '.rar'  =>  'RAR tömörítés',
    '.gz'  =>  'gzip tömörítés',
    '.txt'  =>  'Szöveges dokumentum',
    ''  =>  '',
  ),
);
?>