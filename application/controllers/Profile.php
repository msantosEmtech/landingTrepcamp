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
		$this->load->model('Chapters');
		$this->load->model('ChallengeDetail');
        
        //Zona horaria
		date_default_timezone_set('America/Mexico_City');
	}

	public function index()
	{		
		$data['title'] = "Profile";
        $data['user'] = $this->session->userdata('user');
		$data['info_profile'] = $this->Users->GetById($data['user']['user_id']);
		$data['historicChapter'] = $this->Chapters->GetByHistoricByChapterIdUser($data['user']['user_id']);
		$data['new_historic'] = array();
		$data['historicDetail'] = $this->ChallengeDetail->GetByDetailByIdUserIdChapter($data['user']['user_id']);

        $this->load->view('headerUser', $data);
		$this->load->view('profile/index',$data);
        $this->load->view('footer');
	}

	public function downloadVideo(){
        $this->load->helper('download');
		$rutaVideo = $this->input->get('urlVideo');
		
        // $routeFile = "assets/course/syllabus/syllabusAdministrator.pdf";
        force_download(FCPATH.$rutaVideo,NULL);
    }

	public function downloadPaymentComprobant(){
		$this->load->helper('download');
		$routeDocument = $this->input->get('urlPayment');
		
        // $routeFile = "assets/course/syllabus/syllabusAdministrator.pdf";
        force_download(FCPATH.$routeDocument,NULL);
	}
}
