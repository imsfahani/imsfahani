<?php 
	
	$URL='$URL='http://94.101.140.110:2626/?wsdl';
	$ns = 'KyanOnlineSaleService'; 	
	$headerbody = array("TokenAUT" => "laviand@123");	
		 
	$Client = new SoapClient($URL);
	$_Header = new SoapHeader($ns ,'ValidationSoapHeader', $headerbody); 
	$Client->__setSoapHeaders($_Header);
	
	//$parameters['StartDate'] = '2021-04-08';
	//$parameters['EndDate'] = date("Y-m-d");
	$parameters['inventory'] = 2;
	
	$output = $Client ->GetItemListWithinventoryID($parameters)->GetItemListWithinventoryIDResult->ResponseResult; 
	print_r($output);
	?> 