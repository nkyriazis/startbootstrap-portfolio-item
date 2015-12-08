<?php
$name = "Nikolaos Kyriazis";
$site_type = "Academic site";
$request = (isset($_GET['id']) ? $_GET['id'] : 'about');

function get_youtube_thumb($id)
{
	return strtr('http://img.youtube.com/vi/videoid/0.jpg', ['videoid'=>$id]);
}

// borrowed from
// http://stackoverflow.com/questions/8540800/php-how-can-use-curl-instead-file-get-contents
// to replace get_file_contents, which is blocked
function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

function get_youtube_entry($id)
{
    $content = file_get_contents_curl("http://youtube.com/get_video_info?video_id=".$id);
	parse_str($content, $info);
	return [$info['title'], get_youtube_thumb($id)];
}

$research = [
'cvpr2014kyriazis' => get_youtube_entry('SCOtBdhDMKg'),
'cvpr2013kyriazis' => get_youtube_entry('0RCsQPXeHRQ'),
'bmvc2011kyriazis' => get_youtube_entry('Lr5wq5It4io'),
'cvpr2012oikonom' => get_youtube_entry('e3G9soCdIbc'),
'bmvc2011oikonom' =>get_youtube_entry('Fxa43qcm1C4'),
'iccv2011oikonom' => get_youtube_entry('N3ffgj1bBGw'),
'bmvc2015qammaz' =>get_youtube_entry('nPru6PpWrK4'),
'bmvc2015padeler' => get_youtube_entry('9r43PtJ0Fwg'),
'cvpr2015makris' => get_youtube_entry('DR8YUOAM3QM'),
'eccv2010tzevanidis' => get_youtube_entry('n0KC7wL_D_Q')
];
?>