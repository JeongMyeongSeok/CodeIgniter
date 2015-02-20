<?php  
	class Erros extends CI_controller{
		public function notfound(){
			$this->load->view('head');
			$this->load->view('erros/404');
			$this->load->view('footer');
		}
	}
?>