<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        $data['user'] = $this->session->userdata('user');

        $this->load->view('headerUser');
		$this->load->view('profile/index',$data);
        $this->load->view('footer');
	}
}
