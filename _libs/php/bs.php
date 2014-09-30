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
    function __construct($base)
    {
        if(!$base) $base = dirname(__FILE__);
        include_once($base.'/_libs/php/vendors/parsedown.php');
        include_once($base.'/_libs/php/vendors/mustache.php');
    }
    
    public function data($base, $slug, $directory)
    {
        $data = false;
        if(file_exists($base.'/_libs/defaults/index.json'))
        {
            $contents = file_get_contents($base.'/_libs/defaults/index.json');
            $raw_data = json_decode($contents, true);
            $data = $this->filter($raw_data, $directory, $slug);
        }
        if($directory)
        {
            // GET SPECIFIC DATA
            if(file_exists($base.'/'.$directory.'/data.json'))
            {
                $data = array_merge(
                    $data, 
                    json_decode(file_get_contents($base.'/'.$directory.'/data.json'), true)
                );
            }
        }
        if($slug)
        {
            if(file_exists($base.'/'.$slug.'/data.json'))
            {
                $data = array_merge(
                    $data, 
                    json_decode(file_get_contents($base.'/'.$slug.'/data.json'), true)
                );
            }
        }
        return $data;
    }
    
    public function html($base, $slug, $directory)
    {
        $html = false;
        if(file_exists($base.'/_libs/defaults/index.html'))
        {
            $html = file_get_contents($base.'/_libs/defaults/index.html');
        }
        if($slug)
        {
            // GET SPECIFIC HTML
            if(file_exists($base.'/html/'.$slug.'.html'))
            {
                $html = file_get_contents($base.'/html/'.$slug.'.html');
            }
        }
        return $html;
    }
    
    public function content($base, $slug, $directory)
    {
        $content = false;
        if(file_exists($slug.'README.md'))
        {
            $content = $this->markdown(file_get_contents($slug.'README.md'));
        }
        return $content;
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
    
    public function directory($server)
    {
        $self = $server['PHP_SELF'];
        $url = $server['REDIRECT_URL'];
        $self_array = array_slice(explode('/', $self), 1, -1);
        $url_array = array_slice(explode('/', $url), count($self_array) + 1, -1);
        if(count($url_array) < 1) return '';
        else return $url_array[0].'/';
    }
    
    public function slug($server)
    {
        $slug = '';
        $self = $server['PHP_SELF'];
        $url = $server['REDIRECT_URL'];
        $self_array = array_slice(explode('/', $self), 1, -1);
        $url_array = array_slice(explode('/', $url), count($self_array) + 1, -1);
        foreach($url_array as $url)
        {
            $slug.= $url.'/';
        }
        return $slug;
    }
    
    public function filter($data, $directory, $slug)
    {
        $base = '';
        $slug_index = 0;
        $slug_array = explode('/', $slug);
        $slug_count = count($slug_array) - 1;
        while($slug_index < $slug_count)
        {
            $slug_index++;
            $base.= '../';
        }
        if($directory)
        {
            if(is_array($data['css']))
            {
                foreach($data['css'] as $key => $css)
                {
                    $css['href'] = $base.$css['href'];
                    $data['css'][$key] = $css;
                }
            }
            if(is_array($data['js']))
            {
                foreach($data['js'] as $key => $js)
                {
                    $js['src'] = $base.$js['src'];
                    $data['js'][$key] = $js;
                }
            }
            if(is_array($data['sidebar']))
            {
                foreach($data['sidebar'] as $key => $sidebar)
                {
                    $sidebar['css'] = '';
                    if(strpos($slug, $sidebar['slug']) !== false)
                    {
                        $sidebar['css'] = 'active';
                    }
                    if(is_array($sidebar['links']))
                    {
                        foreach($sidebar['links'] as $link_key => $link)
                        {
                            $link['css'] = '';
                            if(strpos($slug, $link['slug']) !== false)
                            {
                                $link['css'] = 'active';
                            }
                            $sidebar['links'][$link_key] = $link;
                        }
                    }
                    $data['sidebar'][$key] = $sidebar;
                }
            }
        }
        return $data;
    }
}