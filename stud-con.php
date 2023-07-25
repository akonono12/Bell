<?php
	session_start();


	$_SESSION['msg']="";

if (isset($_POST['submit'])){
	
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'coldriver'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	$Fname=$_POST ['Fname'];
    $Mname=$_POST['Mname'];
    $Lname=$_POST['Lname'];
    $Year_course=$_POST['Year_course'];
    $Age=$_POST['Age'];
    $Bdate=$_POST['Bdate'];
    $Gender=$_POST['Gender'];
    $Address=$_POST['Address'];


	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=0;
	
	
        $query = mysql_query("SELECT * FROM account WHERE username='$username'") or die(mysql_error()); 
		if(!$row = mysql_fetch_array($query)){  
        $query = "INSERT INTO account (Fname,Mname,Lname,Year_course,Age ,Bdate,Gender,Address,username,password,level)
			VALUES('$Fname','$Mname','$Lname','$Year_course','$Age', '$Bdate', '$Gender', '$Address','$username','$password','$level')"; 
        $data = mysql_query ($query)or die(mysql_error());  


			
		
			

		$_SESSION['msg']="Login Registered Successfully";
	$message = "login registered successfully.";
	echo "<script type='text/javascript'>alert('$message'); window.location.href = 'register-student.php';</script>";
	}else{
		$_SESSION['msg']="Username Already Exist";
		$message = "Username Already Exist.";
				echo "<script type='text/javascript'>alert('$message'); window.location.href = 'register-student.php';</script>";
	}
	
}
?>