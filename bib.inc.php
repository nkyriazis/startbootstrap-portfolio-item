<?php
$_GET['library']=1;
require_once('bibtexbrowser.php');
global $db;
$db = new BibDataBase();
$db->load('media/bib.bib');

function display_bib($entries)
{
    $d = new AcademicDisplay();
    $d->setEntries($entries);
    $d->display();
}
?>