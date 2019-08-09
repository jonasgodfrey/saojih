
<?php
$message = ""; 
?>


    <?php
     require_once('config.php');
     require_once('db.php');
     require_once('core.php');

     if(loggedin()){
      header('Location: admin.php');
    }else{

    // check for submit
    if(isset($_POST['submit'])){
    //  Get form data
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($query);


        if(!$row = $result->fetch_assoc()){
          $message =  "<div class=\"alert alert-danger\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
     Invalid Login Credentials</div>";
        }else{
          $user_id = $row['user_id'];
          $user_status = $row['status'];

          if($user_status == 0){
          $update_sql = "UPDATE `users` SET `status`=1 WHERE user_id = '$user_id'";

          $conn->query($update_sql);          
            //echo "You are loggged in";

          $_SESSION['user_id'] = $user_id;
          $_SESSION['start'] = time();
          $_SESSION['expire'] = $_SESSION['start'] + (10);

          header('Location: admin.php');

        }else{
                    $message =  "<div class=\"alert alert-warning\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
     A user is logged in to this Account</div>";
        }

        }
    }
  }

?>

<!doctype html>
 <html class="no-js" lang="">
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
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url('met.png');">
 
      <div class="align-content-center" style="height: 100vh;">
        <div class="container"style="margin-top: 0px;">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <span><img class="align-content" src="" alt=""></span>
                    </a>
                    <a href="http://guuttechnologiesltd.com/"><img src="images/SLOGO.png"></a>
                  </div>
                <div class="login-form">
                    <form method="post" action="index.php">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <!-- <div class="form-group">
                            <label>Station</label>
                            <select type="text" name="station" class="form-control"><option>select station</option>
                            <option>Abuja</option><option>Lagos</option>
                            </select>
                        </div>  -->                       
                        <input  type="submit" name="submit" value="Login" class="btn btn-primary btn-flat m-b-8 m-t-8"><br><br>
                        <a href="register.php"><button  type="submit" name="submit2" value="Login" class="btn btn-success btn-flat m-b-8 m-t-8">Sign Up</button></a>               
              </form>
               <?php echo $message?>
                <br><br>
              <a href="http://guuttechnologiesltd.com/"><img class="align-content" style="margin-left: 180px" src="guut.png" alt=""></a><img class="align-content-center" src="nig1.png" alt="">
                
    <br><br>
    <h3 class="text-center" style="color:black; font-size: 16px;  margin-left:; margin-bottom:"><i>Powered by </i><font style="color:black"><a style="color:black; font-size: 16px;"><b>GUUT</b></a></font> TECHNOLOGIES LTD.</h3>
        
   </div>
   </div>
 </div>
</div>


</body>
</html>
