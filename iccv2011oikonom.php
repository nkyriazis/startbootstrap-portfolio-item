<?php
if(!defined('IN_INDEX'))
{
   die('Direct access not permitted');
}
require_once('bib.inc.php');

$title = $db->getEntryByKey('iccv2011oikonom')->fields['title'];
?>

<h1><?php echo $title;?></h1>

<div class="col-md-6">
	<iframe width="420" height="315" src="https://www.youtube.com/embed/N3ffgj1bBGw?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-6">
	<h2>Abstract</h2>
	<p>
	Due to occlusions, the estimation of the full pose of a human hand interacting with an object is much more challenging than pose recovery of a hand observed in isolation. In this work we formulate an optimization problem whose solution is the 26-DOF hand pose together with the pose and model parameters of the manipulated object. Optimization seeks for the joint hand-object model that (a) best explains the incompleteness of observations resulting from occlusions due to hand-object interaction and (b) is physically plausible in the sense that the hand does not share the same physical space with the object. The proposed method is the first that solves efficiently the continuous, full-DOF, joint hand-object tracking problem based solely on camera input. Additionally, it is the first to demonstrate how hand-object interaction can be exploited as a context that facilitates hand pose estimation, instead of being considered as a complicating factor. Extensive quantitative and qualitative experiments with simulated and real world image sequences as well as a comparative evaluation with a state-of-the-art method for pose estimation of isolated hands, support the above findings.
	</p>
</div>

<div class="col-md-12">
	<h2>References</h2>
	<?php
		$query = array('keys'=>['iccv2011oikonom', 'kyriazisPhd']);
		$entries=$db->multisearch($query);
		uasort($entries, 'compare_bib_entries'); 
		foreach ($entries as $bibentry) { 
		  echo $bibentry->toHTML(); 
		}
	?>
</div>