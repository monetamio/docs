<?php

/*

BLOCKSTRAP WEBSITE

http://blockstrap.com

*/

error_reporting(-1);

$php_base = dirname(__FILE__);
include_once($php_base.'/_libs/php/bs.php');
$bs = new blockstrap_core($php_base);

function no_lang($string)
{
    return substr($string, 3);
}
function sort_by_ts($a, $b)
{
    if ($a == $b) 
    {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

$base = $bs->base($_SERVER);
$slug = $bs->slug($_SERVER);
$language = $bs->language($_SERVER);
$directory = $bs->directory($_SERVER);

$data = $bs->data($php_base, $slug, $directory, $language);
$html = $bs->html($php_base, $slug, $directory);
$content = $bs->content($php_base, $slug, $directory, true);

if($slug)
{
    if($language && strlen($language) != 2)
    {
        $url = rtrim($base.'en/'.$slug, '/').'/';
        header('Location: '.$url, true, 302);
        exit;
    }
    elseif(isset($data['404']) && $data['404'] === true)
    {
        // HARDCODED FOR NOW
        $language = 'en';
        $slug_array = explode('/', $slug);
        header("HTTP/1.0 404 Not Found");
        $slug = $language.'/404';
        $data = $bs->data($php_base, $slug, $directory, $language);
        $data['base'] = '';
        foreach($slug_array as $level)
        {
            $data['base'] = $data['base'].'../';
        }
        $html = $bs->html($php_base, $slug, $directory);
        $content = $bs->content($php_base, $slug, $directory, $base);
    }
    elseif($directory && $directory[2] == '/' && $directory == $slug.'/')
    {
        $url = $base;
        header('Location: '.$url, true, 302);
        exit;
    }
}

if(isset($_GET['debug']) && $_GET['debug'] == true)
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
