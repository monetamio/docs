<?php

/*

BLOCKSTRAP DOCUMENTATION

http://blockstrap.com/docs/

MIT LICENSE

*/

$base = dirname(__FILE__);
include_once($base.'/_libs/php/bs.php');
$bs = new blockstrap_core($base);

$slug = $bs->slug($_SERVER);
$language = $bs->language($_SERVER);
$directory = $bs->directory($_SERVER);

$data = $bs->data($base, $slug, $directory, $language);
$html = $bs->html($base, $slug, $directory);
$content = $bs->content($base, $slug, $directory);

if($_GET['debug'] == true)
{
    var_dumped($data);
    var_dumped($html);
    var_dumped($content);
}

// ADD CONTENT TO DATA
$data['content'] = $content;

// MERGE DATA AND HTML
$bs->display($html, $data);

exit;
