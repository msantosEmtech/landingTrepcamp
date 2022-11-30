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

    public function Insert(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $datos = array('Name' => null,
				'LastName' => null,
				'Email' => $email,
				'IdGender' => null,
				'CountryCode' => null,
				'RegisterDate' => date('Y-m-d H:i:s'),
				'Birthday' => null,
                'Password' => $password,
                'Status' => 0);

        $result = $this->Users->Add($datos);

        if($result){

            $correoEnvio = $this->EnviarCorreo($email);

            if($correoEnvio == 1){
                echo json_encode(1);
            }else{
                echo json_encode(0);
            }
            
        }else{
            echo json_encode(-1);
        }

    }

    public function verified(){
        $this->load->library('encryption');
        $email = $this->input->get('email');
        $emailDescryt = $this->encryption->decrypt(strval($email));
        $result = $this->Users->verified($emailDescryt);

        if($result !=false){
            $this->signIn();
        }else{
            $this->index();
        }
    }

    public function EnviarCorreo($correo){
	    $this->load->library(['email']);
        $this->email->set_mailtype("html");
        
		if(EMAIL_ENABLED)
		{
            $this->load->library('encryption');
            $ciphertext = $this->encryption->encrypt(strval($correo));
            $url = base_url('Login/verified?email=').$ciphertext;
            $vista = '<p>Please verified address - '.$url.' </p>';
            
		    $mailbody = $vista;

			$this->email->from(EMAIL_FROM, EMAIL_FROM_NAME);
			$this->email->to($correo);
			$this->email->subject(EMAIL_SUBJECT);
			$this->email->message($mailbody);
			
            if ($this->email->send()) {
                return 1;
            } else {
                // return show_error($this->email->print_debugger());
                return 0;
            }
            // $this->email->print_debugger(array('headers'));
		}
	}

    public function InitSession(){
        //load session library
        $this->load->library('session');
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = $this->Users->GetByCredentials($email, $password);

        if(isset($data) && $data != null){
            if($data['user_name'] != null && $data['user_name'] != ""){
                $datosRes = array('status' => 1);
            }else{
                $datosRes = array('status' => 2);
            }
            $this->session->set_userdata('user', $data);
            echo json_encode($datosRes);
        }
        else{
            $datosRes = array('status' => 0);
            echo json_encode($datosRes);
        }
    }

    public function logOut(){
        //load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');

        $this->session->sess_destroy();
		redirect(base_url('Login/signIn'),"refresh");
    }

}
