<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChallengeTiktok extends CI_Controller {

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
        $data['user'] = $this->session->userdata('user');
        $data['title'] = "Challenge Tiktok";

        $linkJsVista = base_url('assets/js/challenge/tiktok.js');
        $linkJsAlert = base_url('assets/plugins/sweetalert/sweetalert2.all.min.js');

        $footer = array(
            'scriptAlert' => '<script src="'.$linkJsAlert.'"></script>',
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );

        $this->load->view('headerUser',$data);
		$this->load->view('challenge/tiktok',$data);
        $this->load->view('footer', $footer);
	}

    public function AddTiktok(){
        
        $idUserChapter = $this->input->post('IdUserChapter');
		$tiktokUserName = $this->input->post('UserNameTiktok');
        $tiktokLink = $this->input->post('UrlTiktok');
		
		$rutaArchivo = "videos_tiktok/";
		

		if(!empty($_FILES["file_video"])){
			$video = $_FILES["file_video"];
				$this->guardarArchivo($video,$rutaArchivo);
				$rutaGuardar = "assest/videos_tiktok/".$video['name'];

                $datos = array(
                    'IdUserChapter' => $idUserChapter,
                    'IdTypeChallenge' => 1,
                    'PathVideo' => $rutaGuardar,
                    'UrlTiktok' => $tiktokLink,
                    'UserNameTiktok' => $tiktokUserName,
                    'AssessmentResult' => null,
                    'AssessmentSubmissionDate' => null
                );


				$result = $this->ChallengeDetail->Add($datos);
                if($result){
                    $result = true;
                }else{
                    $result = false;
                }
		}else{
            $result = false;
        }

		echo json_encode($result);
    }

    public function AddAssessment(){
        
        $idUserChapter = $this->input->post('IdUserChapter');
		$AssessmentResult = $this->input->post('AssessmentResult');
        $AssessmentSubmissionDate = $this->input->post('AssessmentSubmissionDate');
		
		$rutaArchivo = "videos_assessment/";
		

		if(!empty($_FILES["file_video"])){
			$video = $_FILES["file_video"];
				$this->guardarArchivo($video,$rutaArchivo);
				$rutaGuardar = "assest/videos_assessment/".$video['name'];

                $datos = array(
                    'IdUserChapter' => $idUserChapter,
                    'IdTypeChallenge' => 2,
                    'PathVideo' => $rutaGuardar,
                    'UrlTiktok' => null,
                    'UserNameTiktok' => null,
                    'AssessmentResult' => $AssessmentResult,
                    'AssessmentSubmissionDate' => $AssessmentSubmissionDate
                );


				$result = $this->ChallengeDetail->Add($datos);
                if($result){
                    $result = true;
                }else{
                    $result = false;
                }
		}else{
            $result = false;
        }

		echo json_encode($result);
    }

    private function guardarArchivo($archivo,$ruta){
        $rutaArchivo = "assest/".$ruta.$archivo["name"];
        $RESULT = @move_uploaded_file($archivo["tmp_name"], $rutaArchivo);

        return $RESULT;
    }

}
