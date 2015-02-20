<?php  
	/**
	* 
	*/
	class Module extends CI_controller
	{
		
		public function __construct(){
			parent::__construct();
		}

		public function get($id){
			echo $id;
		}
	}
?>