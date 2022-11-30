<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');

class Intranet extends CI_Controller {

    public function __construct(){
		parent::__construct();

        if(!$this->session->userdata('user')){
			redirect(base_url('Login/signIn'));
		}

        header('Access-Control-Allow-Origin: *');
        Header('Access-Control-Allow-Headers: *');
        Header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$this->load->model('Assessment_model');
        $this->load->model('Pay');
        $this->load->model('Chapters');
        $this->load->model('User_chapter');
        $this->load->model('ChallengeDetail');
        
        //Zona horaria
		date_default_timezone_set('America/Mexico_City');
	}

	public function sumary()
	{
        $user = $this->session->userdata('user');
        $chapterActive = $this->Pay->validChapterActive();
        $user_chaper_activo = $this->Chapters->GetByIdUser($user['user_id']);

        //data de challenges
        $tiktok_challenge = $this->ChallengeDetail->Tiktok_active($user['user_id']);
        $ac_challenge = $this->ChallengeDetail->Assessment_active($user['user_id']);



        if ($user_chaper_activo) {
           $data['estado_user'] = $user_chaper_activo['user_estatus_chapter'];
        }else{
            $data['estado_user'] = 1;
        }

        $data['nombre_user'] =  $user['user_name'];
        $data['chapter_name'] = $chapterActive['chapter_description'];
     
        $data['descriptionChapterDate'] = $chapterActive['dates_description'];
        $data['idChapter'] = $chapterActive['dates_id_chapter'];

        //challenges
        if($tiktok_challenge){
            $data['tiktok_challenge'] = 1;
        }else{
            $data['tiktok_challenge'] = 0;
        }

        if($ac_challenge){
            $data['ac_challenge'] = 1;
        }else{
            $data['ac_challenge'] = 0;
        }

        if ($data['tiktok_challenge'] == 1 && $data['ac_challenge'] == 1) {
            $data['all_challenges'] = 1;//todos los retos completados
        }else{
            $data['all_challenges'] = 0;//falta algun reto de completar
        }
       
        if ($data['estado_user'] < 3) {
            $progreso = 0;
        }else if ($data['estado_user'] >= 3) {
            $progreso = 50;
        }else {
            $progreso = 100;
        }

        if ($progreso <= 9) {
            $data['chapter_progreso'] = 9;
            $data['chapter_progreso_text'] = 0;
        }else{
            $data['chapter_progreso'] = $progreso;
            $data['chapter_progreso_text'] = $progreso;
        }
        
		$linkJsVista = base_url('assets/js/intranet/sumary.js');
        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );
        $this->load->view('header');
		$this->load->view('intranet/sumary', $data);
        $this->load->view('footer', $footer);
	}

    public function payFee()
	{
        $user = $this->session->userdata('user');
        $chapterActive = $this->Pay->validChapterActive(); 
        $user_chaper_activo = $this->Chapters->GetByIdUser($user['user_id']);
       
        
        if ($user_chaper_activo) {
            $data['estado_user'] = $user_chaper_activo['user_estatus_chapter'];
         }else{
             $data['estado_user'] = 1;
         }

        $data['nombre_user'] = $user['user_name'];
        $data['chapter_name'] = $chapterActive['chapter_description'];
        // $data['chapter_date_start'] = 'December 5, 2022'; 
        // $data['chapter_date_ends'] = 'December 16, 2022'; 
        $data['descriptionChapterDate'] = $chapterActive['dates_description'];
        $data['idChapter'] = $chapterActive['dates_id_chapter'];

		$linkJsVista = base_url('assets/js/intranet/participation-fee.js');

        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );
        $this->load->view('headerUser');
        //validacion de estado del usuario
        if ($data['estado_user'] < 2) {
            $this->sumary();
        }else{
            $this->load->view('intranet/participation-fee', $data);
            
        }
	
        $this->load->view('footer', $footer);
	}

    public function takeChallenge(){
        $user = $this->session->userdata('user');
        $user_chaper_activo = $this->Chapters->GetByIdUser($user['user_id']);

        //data de challenges
        $tiktok_challenge = $this->ChallengeDetail->Tiktok_active($user['user_id']);
        $ac_challenge = $this->ChallengeDetail->Assessment_active($user['user_id']);



        if ($user_chaper_activo) {
           $data['estado_user'] = $user_chaper_activo['user_estatus_chapter'];
        }else{
            $data['estado_user'] = 1;
        }

        $data['nombre_user'] =  $user['user_name'];
        
        //challenges
        if($tiktok_challenge){
            $data['tiktok_challenge'] = 1;
        }else{
            $data['tiktok_challenge'] = 0;
        }

        if($ac_challenge){
            $data['ac_challenge'] = 1;
        }else{
            $data['ac_challenge'] = 0;
        }

        if ($data['tiktok_challenge'] == 1 && $data['ac_challenge'] == 1) {
            $data['all_challenges'] = 1;//todos los retos completados
        }else{
            $data['all_challenges'] = 0;//falta algun reto de completar
        }

        $this->load->view('header');
        //validacion de estado del usuario
        if ($data['estado_user'] <= 2) {
            $this->load->view('intranet/sumary', $data);

            $linkJsVista = base_url('assets/js/intranet/sumary.js');

            $footer = array(
                'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
            );
            $this->load->view('footer', $footer);

        }else if ($data['estado_user'] >= 3){
            $this->load->view('intranet/ac-challenge', $data);  

            $linkJsVista = base_url('assets/js/intranet/ac-challenge.js');
            $footer = array(
                'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
            );    
            $this->load->view('footer', $footer);     
        }
    }


    public function assessment()
    {
        //$this->load->model('Assessment');
        $data['arr_ac'] = $this->Assessment_model->GetAssessment();

        $linkJsVista = base_url('assets/js/intranet/assessment.js');
        $wizardPreguntas = base_url('assets/js/intranet/jquery.wizard.js');

        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>',
            'scriptPreguntas' => '<script src="' . $wizardPreguntas . '"></script>'
        );

        $this->load->view('header');
        $this->load->view('intranet/assessment',$data);
        $this->load->view('footer', $footer);
    }



    public function AddUserChallenge(){
        $id_estatus = $this->input->post('id_estatus');
        $id_chapter_active = $this->Chapters->GetChapterActive();
        $user = $this->session->userdata('user');
        
        $datos = array(
            'IdChapter' => $id_chapter_active['id_chapter'],
            'IdUser' => $user['user_id'],
            'IdPayment' => null,
            'IdStatus' => $id_estatus
        );

        $result = $this->User_chapter->AddChapterUser($datos);

        echo json_encode($result);

    }

    
}
