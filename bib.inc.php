<?php
@define('BIBTEXBROWSER_BIBTEX_LINKS',false);
@define('BIBTEXBROWSER_DOI_LINKS',false);
@define('BIBTEXBROWSER_GSID_LINKS',false);
@define('BIBTEXBROWSER_LAYOUT','list');
@define('ABBRV_TYPE','none');
@define('BIBTEXBROWSER_BIBTEX_VIEW', 'reconstructed');
$_GET['library']=1;
require_once('bibtexbrowser.php');
global $db;
$db = new BibDataBase();
$db->load('media/bib.bib');
?>