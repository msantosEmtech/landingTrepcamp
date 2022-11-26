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
        $this->load->model('Genders');
        
        //Zona horaria
		date_default_timezone_set('America/Mexico_City');
	}

	public function index()
	{
        $data['title'] = "Account";
		$linkJsDatePicker = base_url('assets/plugins/bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js');
        $linkJsMoment = base_url('assets/plugins/moment/moment.js');
        $linkJsVista = base_url('assets/js/account/account.js');
        $linkCssDatepicket = base_url('assets/plugins/bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker.css');
        $linkJsAlert = base_url('assets/plugins/sweetalert/sweetalert2.all.min.js');
        $data['header'] = array(
            'linkDatePicker' => '<link rel="stylesheet" type="text/css" href="'.$linkCssDatepicket.'"/>'
        );

        $footer = array(
            'scriptAlert' => '<script src="'.$linkJsAlert.'"></script>',
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>',
            'scriptDatePicker' => '<script src="' . $linkJsDatePicker . '"></script>',
            'scriptMoment' => '<script src="' . $linkJsMoment . '"></script>'
        );

        $data['genders'] = $this->Genders->Get();

        $this->load->view('headerUser', $data);
		$this->load->view('account/index', $data);
        $this->load->view('footer', $footer);
	}

    public function Create(){
        $user = $this->session->userdata('user');

        $Name = $this->input->post('Name');
        $lastName = $this->input->post('LastName');
        $birthday = $this->input->post('Birthday');
        $gender = $this->input->post('Gender');
        $phone = $this->input->post('Phone');

        $datos = array('Name' => $Name,
				'LastName' => $lastName,
				'IdGender' => $gender,
				'Phone' => $phone,
				'ChangeDate' => date('Y-m-d H:i:s'),
				'Birthday' => $birthday);

        $result = $this->Users->Update($datos,$user['user_id']);

        if($result){
            echo json_encode(1);
            
        }else{
            echo json_encode(0);
        }
    }

}
