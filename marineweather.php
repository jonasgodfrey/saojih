<?php
include('config.php');
include('db.php');
?>
<!doctype html>

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAOJIH</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

<?php
    include('leftpanel.php');
    ?>
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <h5>Synoptic Marine Weather Data Entry</h5>
                    <div class="header-left">                     
                </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/guut.jpg" alt="User Avatar">
                        </a>

                        
                    </div>

                    
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        
                    </div>
                </div>
            </div>            
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">SAOJIH</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

                    <div class="container"><br>
                        <div class="card">
                        <div class="card-body card-block">                       
                        <h4 align="center" style="font-family: Georgia, serif;">Synoptic Hourly Marine Weather Data Entry </h4><hr><br>

                       
                            <form action="marineweather.php" method="POST" class="form-group">
                             <div class="row"> 
                            <div class="col-md-2">                      
                            <label>Date</label><br>
                            <input text="" name="day" value="<?php echo date("d/m/Y");?>"  class="form-control" readonly>
                           </div>
                           <div class="col-md-2">                      
                            <label>Time:</label><br>
                            <select text="text" name="hour" class="form-control">
                                <option>06:00</option><option>07:00</option><option>08:00</option>
                                        <option>09:00</option><option>10:00</option><option>11:00</option><option>12:00</option><option>13:00</option>
                                        <option>14:00</option><option>15:00</option><option>16:00</option><option>17:00</option><option>18:00</option>
                            </select>
                           </div>
                           <div class="col-md-2">
                            <label>Station:</label><br>                                 
                                <?php

                                        $res = mysqli_query($conn, "SELECT * FROM locations");
                                            $count = mysqli_num_rows($res);

                                        $sql_stationnos = "SELECT * FROM station_no";
                                        $result_stationnos = mysqli_query($conn, $sql_stationnos);
                                        $row_stationnos_result = array();

                                        if ($result_stationnos->num_rows > 0) {
                          while($row_stationnos = mysqli_fetch_assoc($result_stationnos)) {
                            $row_stationnos_result[] = $row_stationnos;
                          }
                        }
                        ?>                  

                        <select class="form-control" name="location" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
                          <option class="active">-- Select station --</option>

                          <?php
                          while($row=mysqli_fetch_assoc($res)){

                            ?>
                            <option value="<?php echo  $row['location_id'] ?>"><?php echo $row['location_name'] ?></option>

                            <?php
                          }
                          ?>

                        </select>                                           
                        </div>

                        <div class="col-md-6">
                            <label>Station Number:</label><br>                                                       
                           <script type="text/javascript" language="JavaScript">
                                    document.write('<select class="form-control col-md-3" name="location_no" id="location_no" required></select>');
                            </script>       
                        </div>
                        
                    </div> <br>

                        <div class="row">
                        
                           <div class="col-md-6">                      
                            <label>Tidal Height:</label><br>
                            <input text="text" name="height" class="form-control" maxlength="5" requird>
                           </div>

                           <div class="col-md-5">                      
                            <label>Tidal Movement:</label><br>
                            <select text="text" name="movement" class="form-control" required>
                             <option>..Select.....</option>
                            <option>EBBING TIDE (ET)</option>
                            <option>RISING TIDE (RT)</option>
                            </select>
                           </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12" align="center">
                            <input type="submit" name="submit" class="btn btn-info" value="submit">
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


<script language="javascript" type="text/javascript">
  var rowFrameworkResultInJs =<?php echo json_encode($row_stationnos_result); ?>;

  console.log(rowFrameworkResultInJs);

  function dynamicdropdown(listindex)
  {
    document.getElementById("location_no").length = 0;
    document.getElementById("location_no");
    if (listindex) {
      var lookup = {};
      var j = 1;
      for (var i = 0, len = rowFrameworkResultInJs.length; i < len; i++) {
        if (rowFrameworkResultInJs[i].location_id == listindex) {
          console.log(rowFrameworkResultInJs[i].station_nos);
          document.getElementById("location_no").options[j]=new Option(rowFrameworkResultInJs[i].station_nos,rowFrameworkResultInJs[i].stationnos_id);
          j = j+1;
        }
      }
    }

    return true;
  }
</script>    

<?php                            
    if(isset($_POST['submit'])){                           
$location_id = mysqli_real_escape_string($conn, $_POST['location']);
$day = mysqli_real_escape_string($conn, $_POST['day']);
$hour = mysqli_real_escape_string($conn, $_POST['hour']);
$height = mysqli_real_escape_string($conn, $_POST['height']);
$movement = mysqli_real_escape_string($conn, $_POST['movement']);
 }                               
if(!empty($day) && !empty($height) && !empty($movement)){
$query = "INSERT INTO marine_weather(location_id,day,hour,tidal_height,tidal_movement)VALUES('$location_id','$day','$hour','$height','$movement')";

    if(mysqli_query($conn, $query)){
    $message = "Marine Data Successfully entered at $hour";
    echo "<script type='text/javascript'>alert('$message'); </script>";

    }else{

    echo 'ERROR: '.mysqli_error($conn);
}
  }

?>
</body>
</html>
