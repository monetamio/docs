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
    
    public function data($base, $slug, $directory, $language)
    {
        $data = false;
        if(file_exists($base.'/_libs/defaults/index.json'))
        {
            $contents = file_get_contents($base.'/_libs/defaults/index.json');
            $raw_data = json_decode($contents, true);
            $data = $this->filter($raw_data, $directory, $slug, $language);
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
        $data['urls'] = array();
        $data['urls']['slug'] = $slug;
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
        $header = '';
        $content = '';
        $footer = '';
        if(file_exists($slug.'HEADER.md'))
        {
            $header = $this->markdown(file_get_contents($slug.'HEADER.md'));
        }
        if(file_exists($slug.'README.md'))
        {
            $content = $this->markdown(file_get_contents($slug.'README.md'));
        }
        if(file_exists($slug.'FOOTER.md'))
        {
            $footer = $this->markdown(file_get_contents($slug.'FOOTER.md'));
        }
        return $header.$content.$footer;
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
        $url = '';
        $self = $server['PHP_SELF'];
        if(isset($server['REDIRECT_URL']))
        {
            $url = $server['REDIRECT_URL'];
        }
        $self_array = array_slice(explode('/', $self), 1, -1);
        $url_array = array_slice(explode('/', $url), count($self_array) + 1, -1);
        if(count($url_array) < 1) return '';
        else return $url_array[0].'/';
    }
    
    public function language($server)
    {
        $url = '';
        $self = $server['PHP_SELF'];
        if(isset($server['REDIRECT_URL']))
        {
            $url = $server['REDIRECT_URL'];
        }
        $self_array = array_slice(explode('/', $self), 1, -1);
        $url_array = array_slice(explode('/', $url), count($self_array) + 1, -1);
        if(count($url_array) > 0) return $url_array[0];
        else return '';
    }
    
    public function slug($server)
    {
        $url = '';
        $slug = '';
        $self = $server['PHP_SELF'];
        if(isset($server['REDIRECT_URL']))
        {
            $url = $server['REDIRECT_URL'];
        }
        $self_array = array_slice(explode('/', $self), 1, -1);
        $url_array = array_slice(explode('/', $url), count($self_array) + 1, -1);
        foreach($url_array as $url)
        {
            $slug.= $url.'/';
        }
        return $slug;
    }
    
    public function filter($data, $directory, $slug, $language)
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
                    if($slug && $directory == $slug && $key > 0)
                    {
                        $sidebar['css'] = '';
                    }
                    if($slug && $directory != $slug)
                    {
                        $sidebar['css'] = '';
                    }
                    if($language.'/'.$sidebar['slug'] == $slug)
                    {
                        $sidebar['css'] = 'active';
                    }
                    if(is_array($sidebar['links']))
                    {
                        foreach($sidebar['links'] as $link_key => $link)
                        {
                            if($slug && $directory == $slug && $key > 0)
                            {
                                $link['css'] = '';
                            }
                            elseif($slug && $directory != $slug)
                            {
                                $link['css'] = '';
                            }
                            if(isset($link['slug']) && strpos($slug, $link['slug']) !== false)
                            {
                                $link['css'] = 'active';
                                $sidebar['css'] = 'active';
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