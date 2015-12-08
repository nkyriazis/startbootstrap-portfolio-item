<?php
require_once('bib.inc.php')
?>

<div class="col-md-12">
	<h2>Publications</h2>
	<div class="newspaper col-md-12">
	<?php
		// printing all 2014 entries
		foreach ($db->bibdb as $bibentry) { 
			echo $bibentry->toHTML(); 
		}
	?>
	</div>
</div>
