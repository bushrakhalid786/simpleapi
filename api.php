<?php

//PHP function json_encode()

		//example 1
		//in array Key=>Value

		$arr[] = array(
					 	'transaction_id'=>1,
						'user_id'=>1,
						'shipper_name'=>"Shipper Name",
						'shipper_address'=>"Shipper Address",
						'shipper_country'=>"Shipper Country",
						'shipper_contact'=>"Shipper Contact",
						'consignee_name'=>"Consignee Name",
								

							);

		// status, message, data
		$status = 1;
		$message = 'Order inserted successfully.';
		$response['data'] = $arr;
		echo json_encode(array('status'=>$status,'message'=>$message,'data'=>$response));
		

		//example 2
		// Object
		
		$myObj = new stdClass();
		$myObj->name = "John";
		$myObj->age = 30;
		$myObj->city = "New York";

		$myJSON = json_encode($myObj);

		echo $myJSON;


?>

