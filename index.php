<?php

/*

BLOCKSTRAP DOCUMENTATION

http://blockstrap.com/docs/

MIT LICENSE

*/

$data = false;
$html = false;
$content = false;
$dir = dirname(__FILE__);
$base = dirname(__FILE__);
include_once($base.'/core/bs.php');
$bs = new blockstrap_core();
$slug = 'index';

// GET DATA
if(file_exists($base.'/data/'.$slug.'.json'))
{
    $data = json_decode(file_get_contents($base.'/data/'.$slug.'.json'), true);
}

// GET HTML
if(file_exists($base.'/html/'.$slug.'.html'))
{
    $html = file_get_contents($base.'/html/'.$slug.'.html');
}

// GET CONTENT
if(file_exists($dir.'/README.md'))
{
    $content = $bs->markdown(file_get_contents($dir.'/README.md'));
}

// ADD CONTENT TO DATA
$data['content'] = $content;

// MERGE DATA AND HTML
$bs->display($html, $data);

exit;
