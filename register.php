<?php
include('config.php');
include('db.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAOJIH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body style="background-image: url('met.png');">


    <div class="align-content-center" style="height: 100vh;">
        <div class="container"style="margin-top: 0px;">

            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <span><img class="align-content" src="" alt=""></span>
                    </a><br>
                    <a href="http://guuttechnologiesltd.com/"><img src="images/SLOGO.png" width="60" height="70"></a>
                    <strong><h4 style="color: #fff">Registeration Form</h4></strong>
                </div>
                <div class="login-form">
                    <form method="post" action="register.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="your username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="your password" required>
                        </div>                        
                        
                        <div class="form-group">
                            <label>Station</label>
                            <select type="text" name="station" class="form-control"><option></option>
<option>Abeokuta</option><option>Abuja</option><option>Akure</option><option>Awka</option><option>Bauchi</option><option>Benin</option><option>Bida</option><option>Birnin Kebbi</option><option>Calabar</option><option>Enugu</option><option>Gombe</option><option>Gusau</option><option>Ibadan</option><option>Ibi</option><option>Ijebu-Ode</option><option>Ikeja</option><option>Ikom</option><option>Ilorin</option><option>Iseyin</option><option>Jos</option><option>Kaduna</option><option>Kano</option><option>Katsina</option><option>Lafia</option><option>Lagos Marine</option><option>Lagos Roof</option><option>Lokoja</option><option>Maduguri</option><option>Markurdi</option><option>Minna</option><option>Nguru</option><option>Ogoja</option><option>Ondo</option><option>Onitsha</option><option>Oshodi</option><option>Osogbo</option><option>Owerri</option><option>PortHarcourt</option><option>Potiskum</option><option>Sharki</option><option>Sokoto</option><option>Umuahia</option><option>Uyo</option><option>Warri</option><option>Yelwa</option><option>Yola</option><option>Abuja</option><option>Abuja</option><option>Abuja</option><option>Abuja</option><option>Zaria</option>

                            </select>
                        </div>                                              
                        <input  type="submit" name="submit" value="Sign Up" class="btn btn-primary btn-flat m-b-8 m-t-8"><br><br>
                        <a href="index.php"><button  type="submit" name="submit2" value="Login" class="btn btn-success btn-flat m-b-8 m-t-8">Log in</button></a>     
                </form>
                    <br><br>
              <a href="http://guuttechnologiesltd.com/"><img class="align-content" style="margin-left: 180px" src="guut.png" alt=""></a><img class="align-content-center" src="nig1.png" alt="">
              <br>
    <h3 class="text-center" style="color:black; font-size: 16px;  margin-left:; margin-bottom:"><i>Powered by </i><font style="color:black"><a style="color:black; font-size: 16px;"><b>GUUT</b></a></font> TECHNOLOGIES LTD.</h3>
        </div><br>                
            </div>            
        </div>
        </div>
    
 <?php

      // check for submit
      if(isset($_POST['submit'])){
      //  Get form data
          $username = mysqli_real_escape_string($conn, $_POST['username']);
          $password = mysqli_real_escape_string($conn, $_POST['password']);          
          $station = mysqli_real_escape_string($conn, $_POST['station']);

      if(!empty($username) && !empty($password) && !empty($station)){


  // $sql = "INSERT INTO users(user_id,username,password,station)VALUES('','$username','$password','$station')";
  $sql = "INSERT INTO `users`(`user_id`, `username`, `password`, `station`, `status`) VALUES ('','$username','$password','$station',0)";
          if(mysqli_query($conn, $sql)){
              $message = "Registration successful";
      echo "<script type='text/javascript'>alert('$message'); </script>";

      header('Location: index.php');

          }
        }

          else{
              $message2 = "Registration Unsuccessful";
      echo "<script type='text/javascript'>alert('$message2'); </script>";



          }
      }

  ?>



    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
