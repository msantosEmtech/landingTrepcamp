<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index()
	{
		$linkJsVista = base_url('assets/js/home/home.js');
        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );
        $this->load->view('header');
		$this->load->view('payment/index');
        $this->load->view('footer', $footer);
	}
}
