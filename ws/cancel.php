<?php
		require_once("lib/nusoap.php");
		 
		//Create a new soap server
		$server = new soap_server();
		
		$service_name = "Register";
		 
		//Define our namespace
		//$namespace = "http://localhost/nusoap/index.php";
		//$server->wsdl->schemaTargetNamespace = $namespace;
		 
		//Configure our WSDL
		$server->configureWSDL($service_name );
		 
		// Register our method and argument parameters
        $varname = array(
                   'uid' => "xsd:string",
                   'ascCode' => "xsd:string",
                   'ascName' => "xsd:string",
                   'roNo' => "xsd:string",
                   'stmNo' => "xsd:string",
                   'name' => "xsd:string",
                   'tel' => "xsd:string",
				   'licenseNo' => "xsd:string"
        );
		
		
		
		$server-> register($service_name ,$varname, array('code' => 'xsd:int', 'status' => 'xsd:string'));
		 
		function Register($strName,$strEmail)
		{ 
			 
			 

			return array(200 , 'Success'); 
			
		}
		 
		// Get our posted data if the service is being consumed
		// otherwise leave this data blank.
		$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
		 
		// pass our posted data (or nothing) to the soap service
		$server->service($POST_DATA);
		exit(); 
?>