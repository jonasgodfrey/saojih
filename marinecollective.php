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
                    <h5>Marine Hourly Weather Collectives</h5>
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

        </header><br><br>

        <div class="container">
<div class="card">
<div class="card-header">
<h4 align="" style="font-family: Georgia, serif;"></h4></div>
<div class="card-body">
             <div class="col-sm-4">
                    <form action="marinesearch.php" method="post" style="padding: left:200px">
                        <div class="form-group">                           
                            <div class="input-group">
                            <input type="text" name="days" value="<?php echo date("d/m/Y");?>" class="form-control">                                
                              <select type="text" class="form-control" id="InputOtherName" name="loca" placeholder="Station">
                                            <option>select station</option>
                                <?php

                                        $res = mysqli_query($conn, "SELECT * FROM locations");
                                            $count = mysqli_num_rows($res);
                                            while($row=mysqli_fetch_assoc($res)){
                                            ?>
                                            <option value="<?php echo $row['location_id'] ?>"><?php echo  $row['location_name'] ?></option>

                                            <?php
                                            }
                                        ?>      
                                </select>
                                
                              <input type="submit" name="submit" class="btn-btn  btn-primary" value="Search">                                 
                            </div>
                        </div>
                    </form>
                    </div>
</div>
                      
    <table class="table table-stripped" style="padding-left: -4px;color: #0288D1">
      <thead style="color: #0277BD">
        <tr> 
        <!-- <th scope="col">Date</th>  -->      
        <!-- <th scope="col">Location</th> --><th scope="col">Date</th><th scope="col">Station</th><th scope="col">GMT(Hr)</th><th>Tidal Height</th><th>Tidal Movement</th>
        </tr>
  </thead>
    <?php 


    $sql = "SELECT day,location_id,hour,tidal_height,tidal_movement FROM marine_weather ORDER BY day desc,hour desc";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){
        $location_id=$row['location_id'];
        $sql7="SELECT location_name FROM locations WHERE location_id='$location_id'";
                 $result7 = mysqli_query($conn, $sql7);
        $row_main6 = mysqli_fetch_array($result7);         

        echo "<tr><td>".$row["day"]."</td><td>".$row_main6["location_name"]."</td><td>".$row["hour"]."</td><td>".$row['tidal_height'].'m'."</td><td>".$row['tidal_movement']."</td>";  

        }
        echo "</table>";

    }
    else{
        echo "0 result";
    }


    $conn-> close();

    ?> 
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
