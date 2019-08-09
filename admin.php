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
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


    <?php
    include('leftpanel.php');
    ?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    
                    <div class="header-left">                     
                </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="logout.php" style="color: red" > <i class="menu-icon fa fa-sign-out"></i> Log Out</a>
                        
                    </div>

                    
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
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

        <div class="content mt-3">           
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                        </div>
                        <h1><!-- <span class="count"> --></span>
                        </h1><center>
                        <span><i class="fa fa-plane fa-4x"></i></span> 
                        <h4 class="text-light">Synoptic Weather</h4>
                        </center>


                        <div class="chart-wrapper px-0" style="height:70px;" height="70">

                            <canvas id=""></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                        </div>
                        <h1 class="mb-0">
                            <!-- <span class="count"> --></span>
                        </h1><center>
                        <span><i class="fa fa-tint fa-4x"></i></span> 
                        <h4 class="text-light">Marine Weather</h4>
                        </center>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id=""></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                        </div>
                        <h1><!-- <span class="count"> --></span>
                        </h1><center>
                        <span><i class="fa fa-leaf fa-4x"></i></span> 
                        <h4 class="text-light">Agro-MET</h4>
                        </center>
                    </div>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id=""></canvas>
                        </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">           
                        </div>
                <h1><!-- <span class="count"> --></span>
                        </h1><center>
                        <span><i class="fa fa-binoculars fa-4x"></i></span> 
                        <h4 class="text-light">Central Forecast Office</h4>
                        </center>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id=""></canvas>
                        </div>

                    </div>
                </div>
            </div>


           <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                        </div>
                        <h1><span class="count">0</span>
                        </h1><center>
                        <span><i class="fa fa-sitemap fa-4x"></i></span> 
                        <h4 class="text-light">Connected MetStations</h4>
                        </center>


                        <div class="chart-wrapper px-0" style="height:70px;" height="70">

                            <canvas id=""></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                        </div>
                        <h1 class="mb-0">
                            <span class="count">0</span>
                        </h1><center>
                        <span><i class="fa fa-cloud fa-4x"></i></span> 
                        <h4 class="text-light">Collaborated MetStations</h4>
                        </center>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id=""></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                        </div>
                        <h1><span class="count">01</span>
                        </h1><center>
                        <span><i class="fa fa-user fa-4x"></i></span> 
                        <h4 class="text-light">Users Connected</h4>
                        </center>
                    </div>
                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id=""></canvas>
                        </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">           
                        </div>
                <h1><span class="count">0</span>
                        </h1><center>
                        <span><i class="fa fa-users fa-4x"></i></span> 
                        <h4 class="text-light">Registered Users</h4>
                        </center>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id=""></canvas>
                        </div>
                    </div>
                </div>
            </div>

                    


    <div class="container">                      
        <div class="card">
            <div class="card-body">                       

        <h4 align="center" style="font-family: Georgia, serif;">Active Users</h4>
        <hr><br>            
        <table class="table table-bordered" style="padding-left: -4px;color: #558B2F">
      <thead style="color: green">
        <tr> 
        <!-- <th scope="col">Date</th>  -->      
        <th scope="col">User_id</th><th scope="col">Username</th><th scope="col">Station</th><th scope="col">Status (1=Active)(0=not-Active)</th>
        </tr>
  </thead>

  <?php 


    $sql = "SELECT user_id,username,station,status FROM users";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){

        echo "<tr><td>".$row["user_id"]."</td><td>".$row["username"]."</td><td>".$row["station"]."</td><td>".$row['status']."</td>";  

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
