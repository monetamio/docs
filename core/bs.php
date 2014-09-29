<?php

/*

BLOCKSTRAP DOCUMENTATION

http://blockstrap.com/docs/

MIT LICENSE

*/

function var_dumped($results)
{
    echo '<pre>';
    var_dump($results);
    echo '</pre>';
}

class blockstrap_core
{
    function __construct()
    {
        $base = dirname(__FILE__);
        include_once($base.'/libs/parsedown.php');
        include_once($base.'/libs/mustache.php');
    }
    
    public function display($html, $data)
    {
        $template = new MustachePHP();
        echo $template->render($html, $data);
    }
    
    public function markdown($string)
    {
        $parsedown = new Parsedown();
        return $parsedown->text($string);
    }
}