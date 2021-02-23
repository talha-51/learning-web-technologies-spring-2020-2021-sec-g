  
<?php
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
		}else{

			if($username == $_POST['username'] && $password == $_POST['password']){
				
				echo "Success";

			}else{
				echo "invalid user...";
			}
		}
	}
?>