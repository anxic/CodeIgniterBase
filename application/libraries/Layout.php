<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
    private $CI;
    private $var = array();
    private $theme = 'default';

    /*
    /   Constructeur
    */

    public function __construct()
    {
        $this->CI = get_instance();
        $this->var['CONTENT'] = '';
        $this->var['TITLE'] = 'My Website';
        $this->var['METADESCRIPTION'] = '';
        $this->var['CSS'] = array();
        $this->var['JS'] = array();
        $this->var['CURRENTPAGE'] = 'index';
    }

    /*
    / Methods
    */

    /* Load a view with a template */
    public function view($name, $vars = array())
    {
        $this->var['CONTENT'] .= $this->CI->load->view($name, array_merge($vars, $this->var), true);
        $this->CI->load->view('../themes/'. $this->theme , $this->var);
    }

    /* Define the title of the page */
    public function setTitle($title)
    {
        if(is_string($title) && !empty($title))
        {
            $this->var['TITLE'] = $title;
            return true;
        }
        return false;
    }

    /* Set the meta description of the page (SEO) */
    public function setMetaDescr($descr)
    {
        if(is_string($descr) && !empty($descr))
        {
            $this->var['METADESCRIPTION'] = $descr;
            return true;
        }
        return false;
    }

    /* Define the current page (Set class active) */
    public function setCurrentPage($page)
    {
        if(is_string($page) && !empty($page))
        {
            $this->var['CURRENTPAGE'] = $page;
            return true;
        }
        return false;
    }

    /* Add css to specific page*/
    public function addCss($css)
    {
        if(!is_array($css))
            $css = array($css);

        foreach($css as $fileCss)
        {
            if(!filter_var($fileCss, FILTER_VALIDATE_URL) === FALSE)
                $this->var['CSS'][] = $fileCss;
            elseif(is_string($fileCss) && !empty($fileCss) && file_exists('./assets/css/' . $fileCss . '.css'))
                $this->var['CSS'][] = css_url($fileCss);
        }
    }

    /* Add JS to specific pages */
    public function addJs($js)
    {
        if(!is_array($js))
            $js = array($js);

        foreach($js as $fileJs)
        {
            if(!filter_var($fileJs, FILTER_VALIDATE_URL) === FALSE)
                $this->var['JS'][] = $fileJs;
            elseif(is_string($fileJs) && !empty($fileJs) && file_exists('./assets/js/' . $fileJs . '.js'))
                $this->var['JS'][] = js_url($fileCss);
        }
    }

    /* Define theme of the page */
    public function setTheme($theme)
    {
        if(is_string($theme) && !empty($theme) && file_exists($GLOBALS['application_folder'].'/themes/'.$theme.'.php'))
        {
            $this->theme = $theme;
            return true;
        }
        return false;
    }
}
