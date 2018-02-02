<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/* Get url css file */
if(!function_exists('css_url'))
{
    function css_url($name)
    {
        return base_url().'assets/css/'.$name.'.css';
    }
}

/* Get url js file */
if(!function_exists('js_url'))
{
    function js_url($name)
    {
        return base_url().'assets/js/'.$name.'.js';
    }
}

/* Get url image file */
if(!function_exists('img_url'))
{
    function img_url($name)
    {
        return base_url().'assets/images/'.$name;
    }
}

/* Get url vendor files */
if(!function_exists('vendor_url'))
{
    function vendor_url($name)
    {
        return base_url().'assets/vendor/'.$name;
    }
}
