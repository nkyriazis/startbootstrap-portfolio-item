<?php
if(!defined('IN_INDEX'))
{
   die('Direct access not permitted');
}
require_once('bib.inc.php');

$title = $db->getEntryByKey('cvpr2013kyriazis')->fields['title'];
?>

<h1><?php echo $title;?></h1>

<div class="col-md-6">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/0RCsQPXeHRQ?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-6">
	<h2>Abstract</h2>
	<p>
	In several hand-object(s) interaction scenarios, the change in the objects' state is a direct consequence of the hand's motion. This has a straightforward representation in Newtonian dynamics. We present the first approach that exploits this observation to perform model-based 3D tracking of a table-top scene comprising passive objects and an active hand. Our forward modelling of 3D hand-object(s) interaction regards both the appearance and the physical state of the scene and is parameterized over the hand motion (26 DoFs) between two successive instants in time. We demonstrate that our approach manages to track the 3D pose of all objects and the 3D pose and articulation of the hand by only searching for the parameters of the hand motion. In the proposed framework, covert scene state is inferred by connecting it to the overt state, through the incorporation of physics. Thus, our tracking approach treats a variety of challenging observability issues in a principled manner, without the need to resort to heuristics.
	</p>
</div>

<div class="col-md-12">
	<h2>References</h2>
	<?php
		$query = array('keys'=>['cvpr2013kyriazis', 'kyriazisPhd']);
		$entries=$db->multisearch($query);
		uasort($entries, 'compare_bib_entries'); 
		foreach ($entries as $bibentry) { 
		  echo $bibentry->toHTML(); 
		}
	?>
</div>