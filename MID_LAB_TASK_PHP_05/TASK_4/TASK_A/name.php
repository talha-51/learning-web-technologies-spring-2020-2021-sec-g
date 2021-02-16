<?php

	//echo "test";
	//$array = [1, 'alamin', 'alamin@aiub.edu'];
	//$asso = ['id'=>1, 'name'=>'alamin', 'email'=>'alamin@aiub.edu'];
	//print_r($_SERVER);
	//phpinfo();
	//print_r($_ENV);

	/*$x = 10;
	$y = 20;

	function sum(){
		//return $GLOBALS['x']+$GLOBALS['y'];

		global $x;
		global $y;
		return $x+$y;
	}

	echo sum();*/

	//print_r($_GET);
	

	if(isset($_POST['submit'])){

		$gender 		=  $_POST['gender'];

		if($gender == ""){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>