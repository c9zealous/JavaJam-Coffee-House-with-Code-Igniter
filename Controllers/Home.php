<?php 
   class Home extends CI_Controller { 
	
      public function index() { 
         $this->load->view('home'); 
		$this->load->helper('url');
		
      } 
	 public function menu() { 
         $this->load->view('menu'); 
      } 
	
 public function musician() { 
         $this->load->view('musician'); 
      } 
	 public function jobs() { 
         $this->load->view('jobs'); 
      } 
	 public function artistdetails() { 
         $this->load->view('artistdetails'); 
      } 
   } 
?>