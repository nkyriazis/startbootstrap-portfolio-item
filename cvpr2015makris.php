<?php
if(!defined('IN_INDEX'))
{
   die('Direct access not permitted');
}
require_once('bib.inc.php');

$title = $db->getEntryByKey('makris15hierarchical')->fields['title'];
?>

<h1><?php echo $title;?></h1>

<div class="col-md-6">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/DR8YUOAM3QM?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-6">
	<h2>Abstract</h2>
	<p>
	We present a fast and accurate 3D hand tracking method which relies on RGB-D data. The method follows a model based approach using a hierarchical particle filter variant to track the model’s state. The filter estimates the probability density function of the state’s posterior. As such, it has increased robustness to observation noise and compares favourably to existing methods that can be trapped in local minima resulting in track loses. The data likelihood term is calculated by measuring the discrepancy between the rendered 3D model and the observations. Extensive experiments with real and simulated data show that hand tracking is achieved at a frame rate of 90fps with less that 10mm average error using a GPU implementation, thus comparing favourably to the state of the art in terms of both speed and tracking accuracy.
	</p>
</div>

<div class="col-md-12">
	<h2>References</h2>
	<?php
		$query = array('keys'=>['makris15hierarchical', 'bmvc2011oikonom']);
		$entries=$db->multisearch($query);
		uasort($entries, 'compare_bib_entries'); 
		foreach ($entries as $bibentry) { 
		  echo $bibentry->toHTML(); 
		}
	?>
</div>