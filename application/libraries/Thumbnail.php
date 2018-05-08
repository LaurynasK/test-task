<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thumbnail
{
    public $CI;
    
    public $source;
    public $widht;
    public $height;
    public $thumbnail_location;
    public $image_library;
    
    public function __construct()
    {
        $this->CI =& get_instance();
        
        $this->source = FCPATH . "imgs/";
        $this->widht = 450;
        $this->height = 300;
        $this->thumbnail_location = FCPATH . "imgs/thumbnails/";
        $this->image_library = 'gd2';
        
        $this->CI->load->library('image_lib');
    }
    
    public function _create_thumbnail($fileName) 
    {
        $config['image_library']  = $this->image_library;
        $config['source_image']   = $this->source . $fileName;       
        $config['width']          = $this->widht;
        $config['height']         = $this->height;
        $config['new_image']      = $this->thumbnail_location . $fileName;
        
        $this->CI->image_lib->initialize($config);
        if (! $this->CI->image_lib->resize()) { 
            echo $this->CI->image_lib->display_errors();
            return false;
        } else {
            return true;
        }
    }
}