<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index()
	{
        $linkStripe = base_url('assets/js/payments/stripePayJs/charge.js');
		$linkJsVista = base_url('assets/js/payments/payment.js');
        $footer = array(
            'scriptVista' => '<script src="' . $linkJsVista . '"></script>',
            'scriptStripe' => '<script src="' . $linkStripe . '"></script>'
        );

        $this->load->view('header');
		$this->load->view('payment/index');
        $this->load->view('footer', $footer);
	}


    public function payOnStripe(){
        require_once('application/libraries/stripePayLib/init.php');
        // CLAVE PRIVADA
        //test key: sk_test_51K6jXeHe7k83l43GZryV5UIWwY7jKNbrRqnbbPklZ8XNVydXeRPMCeno7JkmmbeFUEKrYm02igM4cZmpC8tMoMR200YOn4CGjh
        //live key: sk_live_0Y39ZQ3aVH7MOit2NUaTfWAs00EXkrnkQU

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
}
