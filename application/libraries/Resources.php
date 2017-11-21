<?php
/**
 * Resource Library
 *
 * An open source library in CodeIgniter to manage JS and CSS files in a controller
 *
 * @package	CodeIgniter Resource Library
 * @author	D-Inventions Technologies Private Limited
 * @link	http://d-inventions.com
 * @since	Version 1.0.0
 * @filesource
 */
(defined('BASEPATH')) OR exit('No direct script access allowed');

class Resources {
    private $js = NULL;
    private $css = NULL;
    private $CI = NULL;
    public function __construct()
    {
        $this->CI =& get_instance();
    }
    public function add_js($resouce)
    {
        $this->js .= $this->CI->load->view('load_js',[ 'js' => $resouce ], TRUE);
    }
    public function add_css($resouce)
    {
        $this->css .= $this->CI->load->view('load_css',[ 'css' => $resouce ], TRUE);
    }
    public function load_js()
    {
        return $this->js;
    }
    public function load_css()
    {
        return $this->css;
    }
}
