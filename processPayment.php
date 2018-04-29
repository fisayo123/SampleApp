<?php 
 	
 	//retrieve the form data from the post request sent from the index page

   	$amount = $_POST['amount'];
   	$referenceId = "MG" . time(); 

   	//store the reference id in a session so you can use it to sent another request to the api for transaction status later, id we had a 
   	//database we could save the reference id then retrieve it later for the query
   	//since we not using a db right now we can make do with sessions
   	session_start();
   	$_SESSION['referenceId'] = $referenceId;

   	//replace the rest of the information with your maliyo account details
	$merchantId = "1002";
	$productKey = "	5037d5f0ee3605849feb518fd5576b7482a4fdf0";
	$deviceUuid = "456789876543456796gvbndcvbnmnbv";
	//we have already retrieved the amount from the form data
	//$amount = 20000;
	$description = "Buy African Atires at its best quality";

	$data = array(
	    "reference_id" => $referenceId,
	    "merchant_id" => $merchantId,
	    "product_key" => $productKey,
	    "uuid" => $deviceUuid,
	    "amount" => $amount,
	    "description" => $description
	);

	$paymentUrl = "http://beta.monapay.com:80/v1/merchant/pay?".http_build_query($data);
	echo "Processing, please wait";
	echo "<br>";
	echo "<br>";

	//this method redirects to the parameter passed to it, in this case the built url $paymentUrl
	header("Location: $paymentUrl");

	//make a get request to confirm that the payment initialixation was successful
	$ch = curl_init();

        curl_setopt_array($ch, array(
                "Host" => "beta.monapay.com:80",
                "Content-Type" => "application/json",
                "Ocm-Spmi" => "Y5MC",
                "Authentication"=>"Basic 25ab5370735e20391ce2df6329df5c1d9fa15c41 productKey 5037d5f0ee3605849feb518fd5576b7482a4fdf",
                "url" => "http://beta.monapay.com:80/v1/merchant/verifytransaction/".$_SESSION['referenceId']
            )
        );
        $execute = curl_exec($ch);

        $response = json_decode($execute,true);

        if($response["status"] == "success"){
        	echo "COngratulations, you have successfully paid for the product";
        	echo "<br>";
        	echo $response["data"]["full_condition"];
        }elseif($response["status"] == "error"){
        	echo "Oops, an error occured while trying to make payment for the product";
        }

?>