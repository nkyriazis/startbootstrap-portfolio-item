<?php
if(!defined('IN_INDEX'))
{
   die('Direct access not permitted');
}
require_once('bib.inc.php');

$title = $db->getEntryByKey('eccv2010ktzevani')->fields['title'];
?>

<h1><?php echo $title;?></h1>

<div class="col-md-6">
	<iframe width="420" height="315" src="https://www.youtube.com/embed/n0KC7wL_D_Q?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div class="col-md-6">
	<h2>Abstract</h2>
	<p>
	We present work on exploiting modern graphics hardware towards the real-time production of a textured 3D mesh representation of a scene observed by a multicamera system. The employed computational infrastructure consists of a network of four PC workstations each of which is connected to a pair of cameras. One of the PCs is equipped with a GPU that is used for parallel computations. The result of the processing is a list of texture mapped triangles representing the reconstructed surfaces. In contrast to previous works, the entire processing pipeline (foreground segmentation, 3D reconstruction, 3D mesh computation, 3D mesh smoothing and texture mapping) has been implemented on the GPU. Experimental results demonstrate that an accurate, high resolution, texture-mapped 3D reconstruction of a scene observed by eight cameras is achievable in real time.
	</p>
</div>

<div class="col-md-12">
	<h2>References</h2>
	<?php
		$query = array('keys'=>['eccv2010ktzevani']);
		$entries=$db->multisearch($query);
		uasort($entries, 'compare_bib_entries'); 
		foreach ($entries as $bibentry) { 
		  echo $bibentry->toHTML(); 
		}
	?>
</div>