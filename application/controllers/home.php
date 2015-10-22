<?php

class Home extends CI_Controller  {
	
	function Home() {
		parent::__construct();
		header("Content-type:text/html;charset=utf-8");
		$this->load->helper(array('form', 'url'));
	}

	function index() {
		$this->load->view('frontend/template/frontend-template-all');
	}

	function about() {
		$this->load->view('frontend/template/frontend-template-header');
		$this->load->view('frontend/template/frontend-template-box');
		$this->load->view('frontend/template/frontend-template-footer');
	}

	function info() {
		$this->load->view('frontend/3rdlevel/frontend-template-all');
	}

	function test() {
		$this->load->view('frontend/2ndlevel/frontend-template-all');
	}



}

?>