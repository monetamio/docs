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
    function __construct($php_base)
    {
        if(!$php_base) $php_base = dirname(__FILE__);
        $slug = $this->slug($_SERVER);
        $directory = $this->directory($_SERVER);
        $base = $this->base($_SERVER);
        include_once($php_base.'/_libs/php/vendors/parsedown.php');
        include_once($php_base.'/_libs/php/vendors/mustache.php');
    }
    
    public function base($server)
    {
        $url = '';
        $slug = $this->slug($server);
        if(isset($server['REDIRECT_URL']))
        {
            $url = $server['REDIRECT_URL'];
        }
        $base = substr($url, 0, 0 - strlen($slug.'/'));
        return $base;
    }
    
    public function data($base, $slug, $directory, $language = 'en')
    {
        $data = false;
        if($language.'/' == $slug) $language = 'en';
        if(file_exists($base.'/_libs/defaults/index.json'))
        {
            $contents = file_get_contents($base.'/_libs/defaults/index.json');
            $raw_data = json_decode($contents, true);
            $data = $this->filter($raw_data, $directory, $slug, $language, $base);
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
            elseif(file_exists($base.'/'.$language.'/'.$slug.'/data.json'))
            {
                $data = array_merge(
                    $data, 
                    json_decode(file_get_contents($base.'/'.$language.'/'.$slug.'/data.json'), true)
                );
            }
            else
            {
                $data['404'] = true;
            }
        }
        return $data;
    }
    
    public function html($base, $slug, $directory, $lang = 'en')
    {
        $html = false;
        if(file_exists($base.'/_libs/defaults/index.html'))
        {
            $html = file_get_contents($base.'/_libs/defaults/index.html');
        }
        if($slug)
        {
            // GET SPECIFIC HTML
            if(file_exists($base.'/html/'.$slug.'/index.html'))
            {
                $html = file_get_contents($base.'/html/'.$slug.'/index.html');
            }
            elseif(file_exists($base.'/'.$slug.'/index.html'))
            {
                $html = file_get_contents($base.'/'.$slug.'/index.html');
            }
            elseif(file_exists($base.'/'.$lang.'/'.$directory.'/index.html'))
            {
                $html = file_get_contents($base.'/'.$lang.'/'.$directory.'/index.html');
            }
        }
        return $html;
    }
    
    public function content($base, $slug, $directory, $home = '')
    {
        $header = '';
        $content = '';
        $footer = '';
        if(file_exists($slug.'/HEADER.md'))
        {
            $header = $this->markdown(file_get_contents($slug.'/HEADER.md'));
        }
        if($directory && file_exists($slug.'/README.md'))
        {
            $content = file_get_contents($slug.'/README.md');
            $content = str_replace('{{base}}', $home, $content);
            $content = $this->markdown($content);
        }
        elseif($home && file_exists('README.md'))
        {
            $content = file_get_contents('README.md');
            $content = str_replace('{{base}}', $home, $content);
            $content = $this->markdown($content);
        }
        if(file_exists($slug.'/FOOTER.md'))
        {
            $footer = $this->markdown(file_get_contents($slug.'/FOOTER.md'));
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
        $slug = '';
        $url = '';
        $self = $server['PHP_SELF'];
        $self_len = strlen($self) - strlen('/index.php');
        $request = substr($server['PHP_SELF'], 0, $self_len);
        $request_len = strlen($request);
        if(isset($server['REDIRECT_URL']))
        {
            $url = substr($server['REDIRECT_URL'], $request_len);
        }
        return ltrim(rtrim($url, '/'), '/');
    }
    
    public function blog($data, $base, $directory, $slug, $language = 'en')
    {
        $posts = array();
        $items = array();
        if(strpos($slug, $language.'/blog') !== false) 
        {
            $single = true;
            if($slug == $language.'/blog')
            {
                $single = false;
            }
            $blog_url = $base.'/'.$language.'/blog';
            if(file_exists($blog_url.'/data.json'))
            {
                $items = scandir($blog_url);
            }
            foreach($items as $item)
            {
                if(strpos($item,'.') === false) 
                {
                    if(file_exists($blog_url.'/'.$item.'/data.json'))
                    {
                        if(file_exists($blog_url.'/'.$item.'/README.md'));
                        {
                            if(file_exists($blog_url.'/'.$item.'/INTRO.md'));
                            {
                                $meta = json_decode(file_get_contents($blog_url.'/'.$item.'/data.json'), true);
                                $intro = $blog_url.'/'.$item.'/INTRO.md';
                                $contents = $blog_url.'/'.$item.'/README.md';
                                $slugs = explode('/', rtrim($slug, '/'));
                                if($single === true)
                                {
                                    $content = $this->markdown(file_get_contents($contents));
                                }
                                else
                                {
                                    $content = $this->markdown(file_get_contents($intro));
                                }
                                if($meta['meta']['date'] && $meta['meta']['title'])
                                {
                                    $date = $meta['meta']['date'];
                                    $title = $meta['meta']['title'];
                                    $post = array();
                                    $post['single'] = $single;
                                    $post['slug'] = $item.'/';
                                    $post['title'] = $title;
                                    $post['date'] = $date;
                                    $post['ts'] = strtotime($date);
                                    $post['html'] = $content;
                                    if($single)
                                    {
                                        if($language.'/blog/'.$post['slug'] == $slug)
                                        {
                                            $data['post'] = $post;
                                        }
                                    }
                                    $posts[] = $post;
                                }
                            }
                        }
                    }
                }
            }
            usort($posts, 'sort_by_ts');
            $data['posts'] = $posts;
        }
        return $data;
    }
    
    public function filter($data, $directory, $slug, $language = 'en', $lib_base)
    {
        $base = '';
        $slug_index = 0;
        $slug_array = explode('/', $slug);
        $slug_count = count($slug_array);
        if($slug)
        {
            while($slug_index < $slug_count)
            {
                $slug_index++;
                $base.= '../';
            }
            $data['base'] = $base;
        }
        if($directory)
        {
            if(isset($data['nav']) && is_array($data['nav']))
            {
                foreach($data['nav'] as $key => $link)
                {
                    $link['css'] = '';
                    if($link['href'] == '#')
                    {
                        $link['href'] = $base;
                    }
                    elseif($language.'/'.$link['href'] == $slug)
                    {
                        $link['css'] = 'active';
                        $link['href'] = '#';
                    }
                    $data['nav'][$key] = $link;
                }
            }
            if(isset($data['sidebar']) && is_array($data['sidebar']))
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
                    if($language.'/'.$sidebar['slug'] == $slug.'/')
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
                            if(isset($link['slug']) && strpos($slug.'/', $link['slug']) !== false)
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
        if(isset($data['sections']) && isset($data['sections'][0]['section']))
        {
            if(is_array($data['sections'][0]['section']))
            {
                foreach($data['sections'][0]['section'] as $section_key => $section)
                {
                    if(isset($section['rows']) && isset($section['rows'][0]['columns']))
                    {
                        if(is_array($section['rows'][0]['columns']))
                        {
                            foreach($section['rows'][0]['columns'] as $column_key => $column)
                            {
                                if(isset($column['list']) && isset($column['list'][0]['lists']) && isset($column['list'][0]['lists'][0]['code']))
                                {
                                    if(is_array($column['list'][0]['lists'][0]['code'][0]['pre']))
                                    {
                                        $pres = $column['list'][0]['lists'][0]['code'][0]['pre'];
                                        foreach($pres as $pre_key => $pre)
                                        {
                                            if(is_array($pre['content']))
                                            {
                                                if($pre['content']['func'] == 'snippet')
                                                {
                                                    $id = $pre['content']['id'];
                                                    $file = $base.'_libs/snippets/'.$id.'.html';
                                                    if(file_exists($file))
                                                    {
                                                        $html = file_get_contents($file);
                                                        $data['sections'][0]['section'][$section_key]['rows'][0]['columns'][$column_key]['list'][0]['lists'][0]['code'][0]['pre'][$pre_key]['content'] = $html;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return $this->blog($data, $lib_base, $directory, $slug, $language);
    }
}