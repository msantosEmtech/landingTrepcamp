<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$linkJsVista = base_url('assets/js/show-password-toggle.min.js');
        $linkCssVista = base_url('assets/css/show-password-toggle.min.css');
        $header = array(
            'linkVista' => '<link rel="stylesheet" type="text/css" href="'.$linkCssVista.'"/>'
        );

        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );
        $this->load->view('header', $header);
		$this->load->view('login/index');
        $this->load->view('footer', $footer);
	}
}
