<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function __construct(){
		parent::__construct();
        
        if(!$this->session->userdata('user')){
			redirect(base_url('Login'));
		}
        header('Access-Control-Allow-Origin: *');
        Header('Access-Control-Allow-Headers: *');
        Header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$this->load->model('Pay');
        
        //Zona horaria
		date_default_timezone_set('America/Mexico_City');
	}

	public function index()
	{
        $data['idChapter'] = !empty($this->input->get('chapter')) ? $this->input->get('chapter') : "";
        $linkStripe = base_url('assets/js/payments/stripePayJs/charge.js');
		$linkJsVista = base_url('assets/js/payments/payment.js');
        $linkJsAlert = base_url('assets/plugins/sweetalert/sweetalert2.all.min.js');
        $footer = array(
            'scriptAlert' => '<script src="'.$linkJsAlert.'"></script>',
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>',
            'scriptStripe' => '<script src="' . $linkStripe . '"></script>'
        );

        $this->load->view('headerUser', $data);
		$this->load->view('payment/index', $data);
        $this->load->view('footer', $footer);
	}


    public function payOnStripe(){
        require_once('application/libraries/stripePayLib/init.php');
        // CLAVE PRIVADA
        \Stripe\Stripe::setApiKey('sk_test_51K6jXeHe7k83l43GZryV5UIWwY7jKNbrRqnbbPklZ8XNVydXeRPMCeno7JkmmbeFUEKrYm02igM4cZmpC8tMoMR200YOn4CGjh');

        $token = $this->input->post('stripeToken');
        $total  = $this->input->post('total');
        $userId = $this->input->post('idCustomer');
        $mail = $this->input->post('customerMail');

        $code = "";
        $idStripe = "";
        $jsonArray = [];


        try {
            // Crear cargo de Stripe
            $charge = \Stripe\Charge::create(
                array(
                    'amount' => intval($total) * 100,
                    'currency' => "USD",
                    'source' => $token,
                )
            );

            if ($charge->status == "succeeded") {
                $code = 1;
                $idStripe = $charge->id;
                $jsonArray =  ['codigo' => $code, 'stripeId' => $idStripe];
                $json = json_encode($jsonArray, JSON_FORCE_OBJECT);
                echo $json;
            } else {
                echo 0;
            }
        } catch (Exception $e) {
            echo 2;
            echo "error: " . $e->getMessage();
        }
    }

    public function Create(){
        $user = $this->session->userdata('user');

        $IdChapter = $this->input->post('IdChapter');
        $Price = $this->input->post('Price');

        $datos = array('IdChapter' => $IdChapter,
				'IdUser' => $user['user_id'],
				'Date' => date('Y-m-d H:i:s'),
				'Price' => $Price,
				'ConfirmationNumber' => date('Y-m-d H:i:s'));

        $result = $this->Pay->Add($datos);

        if($result){
            echo json_encode(1);
            
        }else{
            echo json_encode(0);
        }
    }
}
