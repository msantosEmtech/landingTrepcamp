<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct(){
		parent::__construct();
        
        if(!$this->session->userdata('user')){
			redirect(base_url('Login'));
		}
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
        $linkJsLogin = base_url('assets/js/login/login.js');
        $linkCssVista = base_url('assets/css/show-password-toggle.min.css');
        $linkJsAlert = base_url('assets/plugins/sweetalert/sweetalert2.all.min.js');
        $header = array(
            'linkVista' => '<link rel="stylesheet" type="text/css" href="'.$linkCssVista.'"/>'
        );

        $footer = array(
            'scriptAlert' => '<script src="'.$linkJsAlert.'"></script>',
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>',
            'scriptLogin' => '<script src="' . $linkJsLogin . '"></script>'
        );
        $this->load->view('header', $header);
		$this->load->view('account/index');
        $this->load->view('footer', $footer);
	}

}
