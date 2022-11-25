<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$linkJsVista = base_url('assets/js/home/home.js');
        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );
        $this->load->view('header');
		$this->load->view('profile/index');
        $this->load->view('footer', $footer);
	}
}
