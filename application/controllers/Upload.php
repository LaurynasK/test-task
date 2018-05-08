<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller {
	
	public $uploadTo;
	public $max_size;
	public $allowed_types;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('upload');
		$this->load->model('file_model');
		$this->load->library('thumbnail');
		
		$this->uploadTo = FCPATH  . "imgs/";
		$this->max_size = 8192; // 8mb
		$this->allowed_types = 'gif|jpg|png';
		
	}
	
	public function do_upload()
    {
        if ($this->input->is_ajax_request()) {
            $location = $this->input->post('location');
			
		    $config['upload_path'] = $this->uploadTo; 
		    $config['allowed_types'] = $this->allowed_types;
		    $config['max_size'] = $this->max_size;
	
	        $files = $_FILES;
	        
	        $cpt = count($_FILES['userfile']['name']);
	        for($i=0; $i<$cpt; $i++){           
    	       $_FILES['userfile']['name']= $files['userfile']['name'][$i];
    	       $_FILES['userfile']['type']= $files['userfile']['type'][$i];
    	       $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
    	       $_FILES['userfile']['error']= $files['userfile']['error'][$i];
    	       $_FILES['userfile']['size']= $files['userfile']['size'][$i];    
    	       
    	       $this->upload->initialize($config);

    	       if($this->upload->do_upload('userfile')){
    	    		$_FILES['userfile']['title'] = $this->input->post('title');
    	    		$_FILES['userfile']['tags'] = $this->input->post('tags');
    	    		$this->file_model->insert_data($_FILES['userfile']);
    	    		
    	    		$this->thumbnail->_create_thumbnail($_FILES['userfile']['name']);
    	       }   
	    	}
		echo json_encode($this->upload->data());
            
        } else {
            show_404();
        }
        
    }
    
}