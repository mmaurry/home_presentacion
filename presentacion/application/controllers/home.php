<?php

/**
* 
*/
class Home extends CI_Controller
{
	public function index()
	{
		$data = array('title' => 'Home', 'mensaje' => 'Hola wuachin!');
		$this->load->view('home',$data);
	}
}