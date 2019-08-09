<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
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

    <!-- Left Panel -->

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
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title col-md-12">
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <a href="decoded2.php"><button  role="button" class="btn-btn btn-md btn-success" value="View More">Back</button></a>
                        </ol>

                    </div>
                </div>
            </div> 
</div>
    <div class="container">
    <div class="card">   
    <div class="card-body">
    <table class="table table-bordered" style="padding-left: -4px;color: #558B2F">
      <thead style="color: green">
        <tr> 
        <!-- <th scope="col">Date</th>  -->      
        <th scope="col">Date</th><th scope="col">GMT(Hr)</th><th>Station</th><th>Station_no</th>
        <th scope="col">Thermometer</th><th scope="col">Level_Pressure</th><th scope="col">Baro_Read</th><th scope="col">Wet.Bulb</th><th scope="col">R.Humidity</th><th scope="col">Vapor.Pressure</th>
        </tr>
  </thead>
    <?php
    include('config.php');
    include('db.php');

    $date =date("d/m/Y");

    $sql = "SELECT `day`, `Hour`, `location_id`, `stationnos_id`,`atherm`, `levelpress`, `baroread`, `wetbulb`, `rhumidity`, `vappressure` FROM `decoded`WHERE (day='$date')ORDER BY hour desc";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){          

        $location_id=$row['location_id'];
        $sql7="SELECT location_name FROM locations WHERE location_id='$location_id'";
                 $result7 = mysqli_query($conn, $sql7);
        $row_main6 = mysqli_fetch_array($result7);

         $stationnos_id=$row['stationnos_id'];
        $sql8="SELECT station_nos FROM station_no WHERE stationnos_id='$stationnos_id'";
                 $result8 = mysqli_query($conn, $sql8);
        $row_main7 = mysqli_fetch_array($result8);

    

        echo "<tr><td>".$row["day"]."</td><td>".$row["Hour"]."</td><td>".$row_main6['location_name']."</td><td>".$row_main7['station_nos']."</td><td>".$row['atherm'].'C'."</td><td>".$row['levelpress']."</td><td>".$row['baroread']."</td><td>".$row['wetbulb'].'C'."</td><td>".$row['rhumidity'].'%'."</td><td>".$row['vappressure']."</td>";  

        }
        echo "</table>";

    }
    else{
        echo "0 result";
    }

    $conn-> close();

    ?> 
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
