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
                    <h5>CFO Quality Assessment</h5>
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
           <!--  <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        
                    </div>
                </div>
            </div> -->
            <div class="row-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                <form class="form-inline" method="post" action="observedparam.php" style="padding: 6px">
                    Date:<input type="" name="days" class="form-control" value="<?php echo date("d/m/Y");?>">
                        <input type="submit" name="submit" value="Search" class="btn btn-success btn-md">
                </form>
            </div>
        </div>
    </div>           
            <div class="col-sm-4">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<div class="container"><br>
                        <div class="card">
                        <div class="card-body card-block">                       
                    <h4 align="center" style="font-family: Georgia, serif;">Weather Forecast Quality Assessment</h4><hr><br>
                      
                      <table class="table table-bordered" style="padding-left: -4px;color: #558B2F">
      <thead style="color: green">
        <tr> 
        <!-- <th scope="col">Date</th>  -->      
        <th scope="col">Date</th><th scope="col">GMT(Hr)</th>
        <th scope="col">Forecasted.Temp</th><th scope="col">Obsrv.Temp</th><th scope="col">Temp.Var</th><th scope="col">Forecasted.R/Hum</th><th scope="col">Obsrv.R/Hum</th><th scope="col">R/Hum.Var</th><!-- <th scope="col">Cloud (Low)</th> --><!-- <th scope="col">Weather (Present)</th> -->
        </tr>
  </thead>
    <?php
    if(isset($_POST['submit'])){
      //  Get form data    
    $days = mysqli_real_escape_string($conn, $_POST['days']);
    $sql = "SELECT day,hour,temp1,atm,day1,rhumidity,rh FROM decoded,weather_forecast WHERE(day='$days')AND(day1='$days') ORDER BY day desc, hour desc";
    $result = $conn-> query($sql);

    if($result->num_rows . 0) {
                while ($row = $result->fetch_assoc()){     


        echo "<tr><td>".$row['day']."</td><td>".$row['hour']."</td><td>".$row['atm']."</td><td>".$row['temp1']."</td><td>".(($row['atm'])-($row['temp1']))."</td><td>".$row['rh'].'%'."</td><td>".$row['rhumidity'].'%'."</td><td>".(($row['rh'])-($row['rhumidity']))."</td>"; 

        }
        echo "</table>";

    }

    else{
        $message = "upload observed and forecast values first";
    echo "<script type='text/javascript'>alert('$message'); </script>";

    }
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
