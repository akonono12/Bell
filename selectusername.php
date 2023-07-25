                                          
<?php
	include("dbconn.php");
	
	$_SESSION['msg']="";
	
	$username = $_SESSION['username'];
	$query = mysqli_query($conn, "SELECT * FROM `user_account` WHERE username='{$username}'");
	$user_account = mysqli_fetch_array($query);
          if(mysqli_num_rows($query)==1){
			$_SESSION['msg'] = welcome;
    

          }
           $user_account['username'];
?>