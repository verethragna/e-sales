<?php 

 class Supervisor extends CI_Controller{
	
	function __construct(){
			parent :: __construct();
		}
		
	function index(){
			
			$this->load->view('layout/temp_spvsr');
		}
	
}

?>