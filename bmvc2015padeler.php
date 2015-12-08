<?php
if(!defined('IN_INDEX'))
{
   die('Direct access not permitted');
}
require_once('bib.inc.php');

$title = $db->getEntryByKey('bmvc2015padeler')->fields['title'];
?>

<h1><?php echo $title;?></h1>

<div class="col-md-6">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/9r43PtJ0Fwg?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-6">
	<h2>Abstract</h2>
	<p>
	The analysis and the understanding of object manipulation scenarios based on computer vision techniques can be greatly facilitated if we can gain access to the full articulation of the manipulating hands and the 3D pose of the manipulated objects. Currently, there exist methods for tracking hands in interaction with objects whose 3D models are known. There are also methods that can reconstruct 3D models of objects that are partially observable in each frame of a sequence. However, to the best of our knowledge, no method can track hands in interaction with unknown objects. In this paper we propose such a method. Experimental results show that hand tracking can be achieved with an accuracy that is comparable to the one obtained by methods that assume knowledge of the object models. Additionally, as a by-product, the proposed method delivers accurate 3D models of the manipulated objects.
	</p>
</div>

<div class="col-md-12">
	<h2>References</h2>
	<?php
		// printing all 2014 entries
		$query = array('keys'=>['bmvc2015padeler', 'bmvc2011oikonom', 'cvpr2014kyriazis']);
		$entries=$db->multisearch($query);
		uasort($entries, 'compare_bib_entries'); 
		foreach ($entries as $bibentry) { 
		  echo $bibentry->toHTML(); 
		}
	?>
</div>