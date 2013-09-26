<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends MY_Controller {
	
	public function index(){	
		
		/*
		 *set up title and keywords (if not the default in custom.php config file will be set) 
		 */
		$this->title = "Codabulary";
		$this->keywords = "code, java";
		
		$this->_render('pages/categories.php');
	}
        
	
}