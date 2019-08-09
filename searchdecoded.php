   <?php
    include('config.php');
    include('db.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
    
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
                    <h5>Hourly Collectives From MET. Stations</h5>
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
            <div class="col-sm-5">
                <div class="page-header float-left">
                    <div class="page-title col-md-12">
                        <h1></h1>
                    </div>
                </div>
            </div>
             <div class="col-sm-3">
                    <form action="searchdecoded.php" method="post">
                        <div class="form-group">                           
                            <!--  -->
                        </div>
                    </form>
                    </div>

            <div class="col-sm-4">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <a href="decoded.php"><button  role="button" class="btn-btn btn-md btn-success" value="View More">Back</button></a>
                        </ol>
                    </div>
                </div>
            </div>
            </div>    
<div class="container">  
    <div class="card">
        <div class="card-body">
            <div style="overflow-x: auto">
    <table class="table table-bordered" style="padding-left: -4px;color: #558B2F">
      <thead style="color: green">
        <tr> 
        <!-- <th scope="col">Date</th>  -->      
        <th scope="col">Date</th><th scope="col">GMT(Hr)</th><th>Station</th><th>Station_no</th>
        <th scope="col">HeightOfLC</th><th scope="col">Visibility</th><th scope="col">Wind.Direction</th><th scope="col">Wind.Speed</th><th scope="col">Dry.Bulb.Temp</th><th scope="col">Dew.Point.Temp</th><th scope="col">MSLP</th><th scope="col">Rainfall.Duration</th><th scope="col">Present.Weather</th><th scope="col">Past.Weather</th><th scope="col">Low.Cloud</th><th scope="col">Medium.Cloud</th><th>High.Cloud</th>
        
        </tr>
  </thead>
    <?php
    if(isset($_POST['submit'])){ 
$location_id = mysqli_real_escape_string($conn, $_POST['loca']);
$days = mysqli_real_escape_string($conn, $_POST['days']);

    // $date =date("d/m/Y");

    $sql = "SELECT `day`, `Hour`, `location_id`, `stationnos_id`, `h`, `visibility_id`, `winddirection_id`, `ff`, `temp1`, `temp2`, `mslp`, `r1`, `r2`, `r3`, `tr`, `presentweather_id`, `pastweather_id`, `lowcloud_id`, `mediumcloud_id`, `highcloud_id`, `atherm`, `levelpress`, `baroread`, `wetbulb`, `rhumidity`, `vappressure` FROM `decoded`WHERE (day='$days' AND location_id='$location_id')ORDER BY hour desc";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){  

        $visibility_id=$row['visibility_id'];
        $sql2="SELECT visibility_description FROM visibility WHERE visibility_id='$visibility_id'";      $result2 = mysqli_query($conn, $sql2);
        $row_main = mysqli_fetch_array($result2);


        $presentweather_id=$row['presentweather_id'];
        $sql3="SELECT presentweather_description FROM present_weather WHERE presentweather_id='$presentweather_id'";      $result3 = mysqli_query($conn, $sql3);
        $row_main2 = mysqli_fetch_array($result3);

         $pastweather_id=$row['pastweather_id'];
        $sql4="SELECT pastweather_description FROM past_weather WHERE pastweather_id='$pastweather_id'";      $result4 = mysqli_query($conn, $sql4);
        $row_main3 = mysqli_fetch_array($result4);

                $winddirection_id=$row['winddirection_id'];
        $sql5="SELECT direction FROM wind_direction WHERE winddirection_id='$winddirection_id'";      $result5 = mysqli_query($conn, $sql5);
        $row_main4 = mysqli_fetch_array($result5);

        $highcloud_id=$row['highcloud_id'];
        $sql6="SELECT highcloud_description FROM high_cloud WHERE highcloud_id='$highcloud_id'";      $result6 = mysqli_query($conn, $sql6);
        $row_main5 = mysqli_fetch_array($result6);

        $location_id=$row['location_id'];
        $sql7="SELECT location_name FROM locations WHERE location_id='$location_id'";
                 $result7 = mysqli_query($conn, $sql7);
        $row_main6 = mysqli_fetch_array($result7);

         $stationnos_id=$row['stationnos_id'];
        $sql8="SELECT station_nos FROM station_no WHERE stationnos_id='$stationnos_id'";
                 $result8 = mysqli_query($conn, $sql8);
        $row_main7 = mysqli_fetch_array($result8);

    $mediumcloud_id=$row['mediumcloud_id'];
    $sql9="SELECT mediumcloud_description FROM medium_cloud WHERE mediumcloud_id='$mediumcloud_id'";
                 $result9 = mysqli_query($conn, $sql9);
        $row_main8 = mysqli_fetch_array($result9);

        $lowcloud_id=$row['lowcloud_id'];
    $sql10="SELECT lowcloud_description FROM low_cloud WHERE lowcloud_id='$lowcloud_id'";
                 $result10 = mysqli_query($conn, $sql10);
        $row_main9 = mysqli_fetch_array($result10);

        echo "<tr><td>".$row["day"]."</td><td>".$row["Hour"]."</td><td>".$row_main6['location_name']."</td><td>".$row_main7['station_nos']."</td><td>".$row['h']."</td><td>".$row_main['visibility_description'].'km'."</td><td>".$row_main4['direction']."</td><td>".$row['ff'].' knots'."</td><td>".$row['temp1'].' °C'."</td><td>".$row['temp2'].' °C'."</td><td>".$row['mslp']."</td><td>".($row['r1'].$row['r2'].$row['r3'].'mm of Rainfall in the last '.$row['tr']*'4'.' hrs')."</td><td>".$row_main2['presentweather_description']."</td><td>".$row_main3['pastweather_description']."</td><td>".$row_main9['lowcloud_description']."</td><td>".$row_main8['mediumcloud_description']."</td><td>".$row_main5['highcloud_description']."</td>";  

        }
        echo "</table>";

    }
    else{
        $message = "No Result";
    echo "<script type='text/javascript'>alert('$message'); </script>";
    
    }

}

    $conn-> close();

    ?> 
</table>
</div>
                </div>
            </div>         



                </div>

            </div>
   
    </div>
 






    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
        <!--  Chart js -->
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/lib/chart-js/chartjs-init.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
