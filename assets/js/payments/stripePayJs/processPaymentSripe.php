<?php
require_once ('application/libraries/stripePayLib/init.php');
\Stripe\Stripe::setApiKey('sk_test_51K6jXeHe7k83l43GZryV5UIWwY7jKNbrRqnbbPklZ8XNVydXeRPMCeno7JkmmbeFUEKrYm02igM4cZmpC8tMoMR200YOn4CGjh');

$token = $_POST['stripeToken'];
$total  = $_POST["total"];
$userId = $_POST["idCustomer"];
$mail = $_POST["customerMail"];

$code = "";
$idStripe = "";
$jsonArray = [];


try {
	// Crear cargo de Stripe
    $charge = \Stripe\Charge::create(
        array(
            'amount' => $total*100,
            'currency' => "USD",
            'source' => $token,
        )
    );

    if($charge->status =="succeeded"){
        $code = 1;
        $idStripe = $charge->id;
        $jsonArray =  ['codigo' => $code, 'stripeId'=>$idStripe];
        $json = json_encode ( $jsonArray, JSON_FORCE_OBJECT );
        echo $json;
    }else{
        echo 0;
    }

}catch(Exception $e){
	echo 2;
    echo "error: ".$e->getMessage();
}


?>

