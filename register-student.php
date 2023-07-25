
<html>
<head>

<title></title>
<form name="insertform" method="POST" action="stud-con.php">
<link rel="stylesheet" type="text/css" href="regsstyle.css"></link>
<link rel="stylesheet" type="text/css" href="font-awesome.css">
</head>
<body>


<div class="container">
<img src="images/logo.png" width="150px" height="200px">
<form>


<div class="form-input">
<input type="text" name="Fname" placeholder="Firstname"required ="">
</div>

<div class="form-input">
<input type="text" name="Mname" placeholder="Middlename" required ="">
</div>
<div class="form-input">
<input type="text" name="Lname" placeholder="Lastname" required ="">
</div>
<div class="form-input">
<input type="text" name="Year_course" placeholder="Course and Year" required ="">
</div>
<div class="form-input">
<input type="text" name="Age" placeholder="Age" required ="">
</div>
<div class="form-input">
<input type="date" name="Bdate" placeholder="Birthdate" required ="">
</div>

<div class="form-input1">
<input type="radio" name="Gender" value="Male">Male <input type="radio" name="Gender" value="Male">Female
</div>

<div class="form-input">
<input type="text" name="Address" placeholder="Address"required ="">
</div>
<div class="form-input">
<input type="text" name="username" placeholder="Username" required ="">
</div>
<div class="form-input">
<input type="password" name="password" placeholder="Password" required ="">

<input type="submit" name="submit" value="register" class="btn-register" >
<br><br>
<a href="home.php">go back</a><br>

</div>
</form>
</div>
</body>
</html>