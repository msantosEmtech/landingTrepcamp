<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intranet extends CI_Controller {

    public function __construct(){
		parent::__construct();

        header('Access-Control-Allow-Origin: *');
        Header('Access-Control-Allow-Headers: *');
        Header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$this->load->model('Assessment_model');
        
        //Zona horaria
		date_default_timezone_set('America/Mexico_City');
	}

	public function sumary()
	{
        //data provicional
        $data['estado_user'] = 4;
        $data['nombre_user'] = 'Oscar Villicaña';
        $data['chapter_name'] = 'Business Sense';
        $data['chapter_date_start'] = 'December 5, 2022'; 
        $data['chapter_date_ends'] = 'December 16, 2022'; 


        //challenges
        $data['tiktok_challenge'] = 0;//0 no se completo, 1 se completo
        $data['ac_challenge'] = 0;//0 no se completo, 1 se completo

        if ($data['tiktok_challenge'] == 1 && $data['ac_challenge'] == 1) {
            $data['all_challenges'] = 1;//todos los retos completados
        }else{
            $data['all_challenges'] = 0;//falta algun reto de completar
        }
       

        $progreso = 50; //el minio es 9 que seria igual a 0

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
        //data provicional
        $data['estado_user'] = 2;
        $data['nombre_user'] = 'Oscar Villicaña';
        $data['chapter_name'] = 'Business Sense';
        $data['chapter_date_start'] = 'December 5, 2022'; 
        $data['chapter_date_ends'] = 'December 16, 2022'; 

		$linkJsVista = base_url('assets/js/intranet/participation-fee.js');

        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
        );
        $this->load->view('header');
        //validacion de estado del usuario
        if ($data['estado_user']<2) {
            $this->load->view('intranet/sumary', $data);
        }else{
            $this->load->view('intranet/participation-fee', $data);
            
        }
	
        $this->load->view('footer', $footer);
	}

    public function takeChallenge(){
        //este apartado funciona si el estado del usuario esta en el estado 5 en delante challengeAc
        //data provicional
        $data['estado_user'] = 4;
        $data['nombre_user'] = 'Oscar Villicaña';
        $data['chapter_name'] = 'Business Sense';
        $data['chapter_date_start'] = 'December 5, 2022'; 
        $data['chapter_date_ends'] = 'December 16, 2022'; 

        //challenges
        $data['tiktok_challenge'] = 0;//0 no se completo, 1 se completo
        $data['ac_challenge'] = 0;//0 no se completo, 1 se completo

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

        }/* else if ($data['estado_user'] == 5 && $data['tiktok_challenge'] == 1 && $data['ac_challenge'] == 0){//validacion si falta el reto del AC y te mandad a completarlo 

            $this->load->view('intranet/assessment', $data); 

            $linkJsVista = base_url('assets/js/intranet/assessment.js');
            $footer = array(
                'scriptVista' => '<script src="' . $linkJsVista . '"></script>'
            );    
            $this->load->view('footer', $footer);  

        }else if ($data['estado_user'] == 5 && $data['ac_challenge'] == 1 && $data['tiktok_challenge'] ==  0){//validacion si falta el reto de tiktok y te manda a completarlo

        }else if ($data['estado_user'] == 6 && $data['all_challenges'] == 1){//validacion si ya finalizaste ambos retos

        } */

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

    
}
