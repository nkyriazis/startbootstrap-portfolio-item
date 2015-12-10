<?php
require_once('bib.inc.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<div class="col-md-12">
	<h2>Publications</h2>
	<div class="newspaper col-md-12">
	<?php
		// printing all 2014 entries
        $d = new AcademicDisplay();
        $d->setDB($db);
        $d->display();
	?>
	</div>
</div>
