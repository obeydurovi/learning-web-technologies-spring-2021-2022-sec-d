<?php	
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if( $username != null &&  $password != null){

			$user = $_SESSION['user'];
			if($user['username'] == $username && $user['password'] == $password){
				
				setcookie('status', 'true', time()+3600, '/');
				header('location: home.php');
			}else{
				echo "invalid user";
			}
		}else{
			echo "null submission";
		}
	}

?>