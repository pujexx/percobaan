<?php 
// ================================================
// SPAW PHP WYSIWYG editor control
// ================================================
// Czech language file
// ================================================
// Developed: Alan Mendelevich, alan@solmetra.lt
// Copyright: Solmetra (c)2003 All rights reserved.
// Czech translation: BrM (BrM@bridlicna.cz)
// ------------------------------------------------
//                                www.solmetra.com
// ================================================
// v.1.0, 2003-03-20
// ================================================

// charset to be used in dialogs
$spaw_lang_charset = 'utf-8';

// language text data array
// first dimension - block, second - exact phrase
// alternative text for toolbar buttons and title for dropdowns - 'title'

$spaw_lang_data = array(
  'cut' => array(
    'title' => 'Vyjmout'
  ),
  'copy' => array(
    'title' => 'Kopírovat'
  ),
  'paste' => array(
    'title' => 'Vloit'
  ),
  'undo' => array(
    'title' => 'Zpět'
  ),
  'redo' => array(
    'title' => 'Znovu'
  ),
  'hyperlink' => array(
    'title' => 'Hyperlink'
  ),
  'image_insert' => array(
    'title' => 'Vloit obrázek',
    'select' => 'Vybrat',
	'delete' => 'Smazat', // new 1.0.5
    'cancel' => 'Zruit',
    'library' => 'Knihovna',
    'preview' => 'Náhled',
    'images' => 'Obrázek',
    'upload' => 'Poslat obrázek',
    'upload_button' => 'Poslat',
    'error' => 'Chyba',
    'error_no_image' => 'Vyberte prosím obrázek',
    'error_uploading' => 'V průběhu uploadu dolo k chybě. Opakujte akci znovu',
    'error_wrong_type' => 'Chybný formát obrázku',
    'error_no_dir' => 'Knihovna fyzicky neexistuje',
	'error_cant_delete' => 'Obrázek nebylo mono smazat', // new 1.0.5
  ),
  'image_prop' => array(
    'title' => 'Vlastnosti obrázku',
    'ok' => '   OK   ',
    'cancel' => 'Storno',
    'source' => 'Zdroj',
    'alt' => 'Alternativní text',
    'align' => 'Zarovnání',
    'justifyleft' => 'Vlevo',
    'justifyright' => 'Vpravo',
    'top' => 'Nahoru',
    'middle' => 'Doprostřed',
    'bottom' => 'Dolů',
    'absmiddle' => 'Absolutní střed',
    'texttop' => 'Text nahoru',
    'baseline' => 'Základní linka',
    'width' => 'ířka',
    'height' => 'Výka',
    'border' => 'Okraje',
    'hspace' => 'Hor. space',
    'vspace' => 'Vert. space',
    'error' => 'Chyba',
    'error_width_nan' => 'ířka není číslo',
    'error_height_nan' => 'Výka není číslo',
    'error_border_nan' => 'Okraj není číslo',
    'error_hspace_nan' => 'Horizontální rozteč není číslo',
    'error_vspace_nan' => 'Vertikální rozteč není číslo',
  ),
  'inserthorizontalrule' => array(
    'title' => 'Horizontal rule'
  ),
  'table_create' => array(
    'title' => 'Vytvoř tabulku'
  ),
  'table_prop' => array(
    'title' => 'Vlastnosti tabulky',
    'ok' => '   OK   ',
    'cancel' => 'Storno',
    'rows' => 'Řádků',
    'columns' => 'Sloupců',
    'width' => 'ířka',
    'height' => 'Výka',
    'border' => 'Okraje',
    'pixels' => 'pixelů',
    'css_class' => 'Třída CSS', // <=== new 1.0.6
    'background' => 'Obrázek pozadí', // <=== new 1.0.6
    'cellpadding' => 'Odsazení v buňce',
    'cellspacing' => 'Vzdálenost buněk',
    'bg_color' => 'Barva pozadí',
    'error' => 'Chyba',
    'error_rows_nan' => 'Řádky nejsou číslo',
    'error_columns_nan' => 'Sloupce nejsou číslo',
    'error_width_nan' => 'ířka není číslo',
    'error_height_nan' => 'Výka není číslo',
    'error_border_nan' => 'Okraje nejsou číslo',
    'error_cellpadding_nan' => 'Odsazení v buňce není číslo',
    'error_cellspacing_nan' => 'Vzdálenost buňek není číslo',
  ),
  'table_cell_prop' => array(
    'title' => 'Vlastnosti buňky',
    'horizontal_align' => 'Horizontální zarovnání',
    'vertical_align' => 'Vertikální zarovnání',
    'width' => 'ířka',
    'height' => 'Výka',
    'css_class' => 'Třída CSS',
    'no_wrap' => 'Nezalamovat',
    'bg_color' => 'Barva pozadí',
    'background' => 'Obrázek pozadí', // <=== new 1.0.6
    'ok' => '   OK   ',
    'cancel' => 'Zruit',
    'justifyleft' => 'Vlevo',
    'justifycenter' => 'Na střed',
    'justifyright' => 'Vpravo',
    'top' => 'Nahoru',
    'middle' => 'Doprostřed',
    'bottom' => 'Dolů',
    'baseline' => 'Základní linka',
    'error' => 'Chyba',
    'error_width_nan' => 'ířka není číslo',
    'error_height_nan' => 'Výka není číslo',
    
  ),
  'table_row_insert' => array(
    'title' => 'Vloit řádek'
  ),
  'table_column_insert' => array(
    'title' => 'Vloit sloupec'
  ),
  'table_row_delete' => array(
    'title' => 'Vyma řádek'
  ),
  'table_column_delete' => array(
    'title' => 'Vyma sloupec'
  ),
  'table_cell_merge_right' => array(
    'title' => 'Sloučit vpravo'
  ),
  'table_cell_merge_down' => array(
    'title' => 'Sloučit dolů'
  ),
  'table_cell_split_horizontal' => array(
    'title' => 'Rozdělit buňku horizontálně'
  ),
  'table_cell_split_vertical' => array(
    'title' => 'Rozdělit buňku vertikálně'
  ),
  'style' => array(
    'title' => 'Styl'
  ),
  'fontname' => array(
    'title' => 'Font'
  ),
  'fontsize' => array(
    'title' => 'Velikost'
  ),
  'formatBlock' => array(
    'title' => 'Odstavec'
  ),
  'bold' => array(
    'title' => 'Tučné'
  ),
  'italic' => array(
    'title' => 'Kurzíva'
  ),
  'underline' => array(
    'title' => 'Podtrení'
  ),
  'insertorderedlist' => array(
    'title' => 'Číslování'
  ),
  'insertunorderedlist' => array(
    'title' => 'Odráky'
  ),
  'indent' => array(
    'title' => 'Zvětit odsazení'
  ),
  'outdent' => array(
    'title' => 'Zmenit odsazení'
  ),
  'justifyleft' => array(
    'title' => 'Vlevo'
  ),
  'justifycenter' => array(
    'title' => 'Na střed'
  ),
  'justifyright' => array(
    'title' => 'Vpravo'
  ),
  'fore_color' => array(
    'title' => 'Barva popředí'
  ),
  'bg_color' => array(
    'title' => 'Barva pozadí'
  ),
  'design' => array(
    'title' => 'Přepnout do WYSIWYG reimu'
  ),
  'html' => array(
    'title' => 'Přepnout do HTML reimu'
  ),
  'colorpicker' => array(
    'title' => 'Paleta barev',
    'ok' => '   OK   ',
    'cancel' => 'Storno',
  ),
  // <<<<<<<<< NEW >>>>>>>>>
  'cleanup' => array(
    'title' => 'Vyčitění HTML (odstranit styly)',
    'confirm' => 'Provedením akce odstraníte vechny styly, fonty a zbytečné tagy z aktuálního obsahu. Vae formátování bude částečně či úplně odstraněno.',
    'ok' => '   OK   ',
    'cancel' => 'Storno',
  ),
  'toggle_borders' => array(
    'title' => 'Přepnout okraje',
  ),
  'hyperlink' => array(
    'title' => 'Hyperlink',
    'url' => 'URL',
    'name' => 'Jméno',
    'target' => 'Cíl',
    'title_attr' => 'Popisek',
	'a_type' => 'Typ', // <=== new 1.0.6
	'type_link' => 'Odkaz', // <=== new 1.0.6
	'type_anchor' => 'Kotva', // <=== new 1.0.6
	'type_link2anchor' => 'Odkaz na kotvu', // <=== new 1.0.6
	'anchors' => 'Kotvy', // <=== new 1.0.6
    'ok' => '   OK   ',
    'cancel' => 'Storno',
  ),
  'hyperlink_targets' => array( // <=== new 1.0.5
  	'_self' => 'Stejný rámec (_self)',
	'_blank' => 'Nové okno (_blank)',
	'_top' => 'Vrchní rámec (_top)',
	'_parent' => 'Nadřazený rámec (_parent)'
  ),
  'table_row_prop' => array(
    'title' => 'Vlastnosti řádku',
    'horizontal_align' => 'Horizontální zarovnání',
    'vertical_align' => 'Vertikální zarovnání',
    'css_class' => 'Třída CSS',
    'no_wrap' => 'Nezalamovat',
    'bg_color' => 'Barva pozadí',
    'ok' => '   OK   ',
    'cancel' => 'Storno',
    'justifyleft' => 'Vlevo',
    'justifycenter' => 'Na střed',
    'justifyright' => 'Vpravo',
    'top' => 'Nahoru',
    'middle' => 'Doprostřed',
    'bottom' => 'Dolů',
    'baseline' => 'Základní linka',
  ),
  'symbols' => array(
    'title' => 'Speciální znaky',
    'ok' => '   OK   ',
    'cancel' => 'Storno',
  ),
  'symbols' => array(
    'title' => 'Speciální znaky',
    'ok' => '   OK   ',
    'cancel' => 'Storno',
  ),
  'templates' => array(
    'title' => 'ablony',
  ),
  'page_prop' => array(
    'title' => 'Vlastnosti stránky',
    'title_tag' => 'Název',
    'charset' => 'Znaková sada',
    'background' => 'Obrázek pozadí',
    'bgcolor' => 'Barva pozadí',
    'text' => 'Barva textu',
    'link' => 'Barva odkazu',
    'vlink' => 'Barva navtíveného odkazu',
    'alink' => 'Barva aktivního odkazu',
    'leftmargin' => 'Levý okraj',
    'topmargin' => 'Horní okraj',
    'css_class' => 'Třída CSS',
    'ok' => '   OK   ',
    'cancel' => 'Storno',
  ),
  'preview' => array(
    'title' => 'Náhled',
  ),
  'image_popup' => array(
    'title' => 'Odkaz na obrázek v novém okně',
  ),
  'zoom' => array(
    'title' => 'Přiblíení',
  ),
);
?>

