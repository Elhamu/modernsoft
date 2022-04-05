<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="ms";
mysqli_connect($servername, $username, $password);
$conn=new mysqli($servername, $username, $password,$db);
// $mysqli -> select_db("ms");

if(isset($_POST['name'])){
    $uname=$_POST['name'];
    $password=$_POST['password'];
    $sql= "select * from user where name = '". $uname."' AND password='".$password."' limit 1";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        header("Location: home.php");
        exit();
    }
    else{
        echo'<div class="alert alert-danger"style="z-index:9999" role="alert">
       UserName Or Password Is In Correct
      </div>';
    }

}
// Create connection

// Check connection

?>
<!DOCTYPE html>
<html lang="ar" >
<head>
  <meta charset="UTF-8">
  <title>ModernSoft</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">

</head>
<body>
	<div class="content">
<!-- partial:index.partial.html -->
<div class="background">
	<div class="shape"></div>
	<div class="shape"></div>
</div>
<form method="post" action="#">
	

	<h3> <?php Echo " Login Here" ?>	</h3>

	<label for="username">Username</label>
	<input type="text" placeholder="Email or Phone"name="name" id="username">

	<label for="password" class="pass">Password</label>
	<input type="password" name="password"placeholder="Password" id="password">
 <a href="registerii.php" style="text-decoration: none;color: #FFF;background:red;border-radius:5px;padding:0 10px">Not Member!</a>


 


<!-- 
    <a href="home.html"  class="button login__submit m-auto" style="text-decoration: none;
    color: #7875B5;
   
">
					<span class="button__text" >Log In Now</span>
					<i class="button__icon fas fa-chevron-right "style="       font-size: 20px;
					margin-left: 95px;
					color: #7875B5;
				"></i>
					</a> -->
					<button class="button"><a href="" style="color: black;text-decoration: none;">Log In</a></button>

</form>
</div>
 
<!-- partial -->
<script src="jquery-3.4.1.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="function.js">
 
  </script>
</body>
</html>
