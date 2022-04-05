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
             echo '<div class="alert alert-danger"style="z-index:9999" role="alert">
             UserName Or Password Is In Correct
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

</head>

  
</html>