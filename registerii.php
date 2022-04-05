<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isSet($_POST['btn-save'])) {
    $conn = mysqli_connect('localhost', 'root', '','ms') or die("Connection failed: " . mysqli_connect_error());
    if (isSet($_POST['name']) && isSet($_POST['email']) && isSet($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

      $sqlInsert="INSERT INTO `user`(name,email,password)
      VALUES('$name','$email','$password')";
     	$query = mysqli_query($conn,$sqlInsert);
         if ($query) {
             echo '<div class="alert alert-success"style="z-index:9999" role="alert">
             You Are A Member
            </div>';
         } else {
             echo "An error occured while save the data.";
         }
     }
 }
    
    ?>
<!DOCTYPE html>
<html lang="ar" >
<head>
  <meta charset="UTF-8">
  <title>ModernSoft</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="shortcut icon" href="logo.jpg" type="image/x-icon" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="reg.css">
<style>
  @media(max-width:425px){
  #login-box {
   
    width: 414px;
    height: 418px;
}
button.social-signin.facebook {
    background: #32508E;
    margin-top: 0px;
}
}
  </style>
</head>
<body>
  <div id="login-box">
    <div class="left">
      <h1>Sign up</h1>
      <form action=""method="POST">
      <input type="text" name="name" placeholder="Username"required />
      <input type="text" name="email" placeholder="E-mail"required />
      <input type="password" name="password" placeholder="Password"required />
      <input type="password" name="cpass" placeholder="Retype password" />
      <button class="btn btn-primary"name="btn-save"><a href="" style="text-decoration: none;color: #FFF;">Log In</a></button>
    </div>
    </form>
    <div class="right">
      <span class="loginwith">Sign in with<br />social network</span>
      
      <button class="social-signin facebook"><a href="https://www.facebook.com/"style="text-decoration: none;color: #fff;">Log in with facebook</a></button>
      <button class="social-signin twitter"><a href="https://www.instagram.com/"style="text-decoration: none;color: #fff" >Log in with Instagram</a>  </button>
    </div>
    <div class="or">OR</div>
  </div>
</body>
  
</html>