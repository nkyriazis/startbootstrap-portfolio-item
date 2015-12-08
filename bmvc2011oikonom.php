<?php
if(!defined('IN_INDEX'))
{
   die('Direct access not permitted');
}
require_once('bib.inc.php');

$title = $db->getEntryByKey('bmvc2011oikonom')->fields['title'];
?>

<h1><?php echo $title;?></h1>

<div class="col-md-6">
	<iframe width="420" height="315" src="https://www.youtube.com/embed/Fxa43qcm1C4?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-6">
	<h2>Abstract</h2>
	<p>
	We present a novel solution to the problem of recovering and tracking the 3D position, orientation and full articulation of a human hand from markerless visual observations obtained by a Kinect sensor. We treat this as an optimization problem, seeking for the hand model parameters that minimize the discrepancy between the appearance and 3D structure of hypothesized instances of a hand model and actual hand observations. This optimization problem is effectively solved using a variant of Particle Swarm Optimization (PSO). The proposed method does not require special markers and/or a complex image acquisition setup. Being model based, it provides continuous solutions to the problem of tracking hand articulations. Extensive experiments with a prototype GPU-based implementation of the proposed method demonstrate that accurate and robust 3D tracking of hand articulations can be achieved in near real-time (15Hz).
	</p>
</div>

<div class="col-md-6">
	<h2>Highlights</h2>
	<ul>
		<li>First approach to demonstrate practical real-time 3D hand tracking from RGBD input.</li>
		<li>Current status is the method can perform at a rate &gt;30fps.</li>
		<li>Tracking a single hand from RGBD input can be performed in <a href="./?id=cvpr2015makris">thrice the speed</a> (&gt;90fps).</li>
		<li>An implementation can be found <a href="http://cvrlcode.ics.forth.gr/handtracking">here</a>.</li>
		<li>A demo founded upon this work has received the <a href="http://gesture.chalearn.org/dissemination/icpr2012/demonstration-competition">1st prize in CHALEARN 2012</a></li></ul>
</div>

<div class="col-md-12">
	<h2>References</h2>
	<?php
		// printing all 2014 entries
		$query = array('keys'=>['bmvc2011oikonom', 'kyriazisPhd', 'kyriazisTR420']);
		$entries=$db->multisearch($query);
		uasort($entries, 'compare_bib_entries'); 
		foreach ($entries as $bibentry) { 
		  echo $bibentry->toHTML(); 
		}
	?>
</div>