<?php
$_GET['library']=1;
require_once('bibtexbrowser.php');
global $db;
$db = new BibDataBase();
$db->load('media/bib.bib');
?>