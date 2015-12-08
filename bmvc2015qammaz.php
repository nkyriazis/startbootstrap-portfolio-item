<?php
if(!defined('IN_INDEX'))
{
   die('Direct access not permitted');
}
require_once('bib.inc.php');

$title = $db->getEntryByKey('bmvc2015qammaz')->fields['title'];
?>

<h1><?php echo $title;?></h1>

<div class="col-md-6">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/nPru6PpWrK4?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-6">
	<h2>Abstract</h2>
	<p>
	3D tracking of objects and hands in an object manipulation scenario is a very interesting computer vision problem with a wide variety of applications ranging from consumer electronics to robotics and medicine. Recent advances in this research topic allow for 3D tracking of complex scenarios involving bimanual manipulation of several rigid objects using commodity hardware and with high accuracy. The problem with these approaches is that they treat tracking as a search problem whose dimensionality increases with the number of objects in the scene. This fact typically limits the number of the tracked objects and/or the processing framerate. In this paper we present a method that utilizes simple low level motion cues for dynamically assigning computational resources to parts of the scene where they are actually required. In a series of experiments, we show that this simple idea improves tracking performance dramatically at a cost of only a minor degradation of tracking accuracy.
	</p>
</div>

<div class="col-md-12">
	<h2>References</h2>
	<?php
		$query = array('keys'=>['bmvc2015qammaz', 'cvpr2014kyriazis']);
		$entries=$db->multisearch($query);
		uasort($entries, 'compare_bib_entries'); 
		foreach ($entries as $bibentry) { 
		  echo $bibentry->toHTML(); 
		}
	?>
</div>