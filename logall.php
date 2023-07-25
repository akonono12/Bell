<?php
	include("dbconn.php");
	session_start();
	session_destroy();
	$_SESSION['msg']="";
	
	if (isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
       
		$query = mysqli_query($conn, "SELECT * FROM account WHERE username = '{$username}' AND password = '{$password}'");
		$user = mysqli_fetch_array($query);
		if(mysqli_num_rows($query)==0){
			$_SESSION['msg'] = "Username/Password is incorrect";
               
		}
		else {
            $username=$user['username'];
			$_SESSION['id'] = $user['user_id'];
            $_SESSION['level'] = $user['level'];
            @$_SESSION['name']=$username;
if(!$_SESSION['anything'])
{
    header('location:login=form.php');
}		
			if($user['level']==0){
        $_SESSION['anything']='something';
        header('location:index.php');
					header("Location: studenthome.php");
			}
			if($user['level']==1){
				$_SESSION['anything']='something';
				header("Location:teach_home.php");
			}
			if($user['level']==2){
				echo " hello admin";
			}


		}
			
	}
	
?>
