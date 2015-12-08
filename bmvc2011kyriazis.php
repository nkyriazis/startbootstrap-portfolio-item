<?php
if(!defined('IN_INDEX'))
{
   die('Direct access not permitted');
}
require_once('bib.inc.php');

$title = $db->getEntryByKey('bmvc2011kyriazis')->fields['title'];
?>

<h1><?php echo $title;?></h1>

<div class="col-md-6">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/Lr5wq5It4io?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-6">
	<h2>Abstract</h2>
	<p>
	A dynamic scene and, therefore, its visual observations are invariably determined by the laws of physics. We demonstrate an illustrative case where physical explanation, as a vision prior, is not a commodity but a necessity. By considering the problem of ball motion estimation we show how physics-based simulation in conjunction with visual processes can lead to the reduction of the visual input required to infer physical attributes of the observed world. Even further, we show that the proposed methodology manages to reveal certain physical attributes of the observed scene that are difficult or even impossible to extract by other means. A series of experiments on synthetic data as well as experiments with image sequences of an actual ball, support the validity of the proposed approach. The use of generic tools and the top-down nature of the proposed approach make it general enough to be a likely candidate for handling even more complex problems in larger contexts.
	</p>
</div>

<div class="col-md-12">
	<h2>References</h2>
	<?php
		$query = array('keys'=>['bmvc2011kyriazis', 'kyriazisPhd']);
		$entries=$db->multisearch($query);
		uasort($entries, 'compare_bib_entries'); 
		foreach ($entries as $bibentry) { 
		  echo $bibentry->toHTML(); 
		}
	?>
</div>