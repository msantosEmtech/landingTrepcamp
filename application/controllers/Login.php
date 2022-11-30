<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        
		parent::__construct();

        header('Access-Control-Allow-Origin: *');
        Header('Access-Control-Allow-Headers: *');
        Header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$this->load->model('Users');
        
        //Zona horaria
		date_default_timezone_set('America/Mexico_City');
	}

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

    public function signIn(){
        $linkJsVista = base_url('assets/js/show-password-toggle.min.js');
        $linkCssVista = base_url('assets/css/show-password-toggle.min.css');
        $header = array(
            'linkVista' => '<link rel="stylesheet" type="text/css" href="'.$linkCssVista.'"/>'
        );

        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );
        $this->load->view('header', $header);
		$this->load->view('login/signIn');
        $this->load->view('footer', $footer);
    }
}
