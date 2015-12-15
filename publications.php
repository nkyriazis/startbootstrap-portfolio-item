<?php
require_once('bib.inc.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<div class="col-md-12">
	<h2>Publications</h2>
	<div class="row">
    <p>Analytics can be found at <a href="https://scholar.google.gr/citations?user=fUsz0D8AAAAJ&hl=en">Google Scholar</a>.</p>
	<?php
        display_bib($db->bibdb);
	?>
	</div>
</div>
