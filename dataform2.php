<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MetConnectApp</title>
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


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="./"><i class="fa fa-user fa-lg"></i>


                <a class="navbar-brand hidden" href="./"><i class="fa fa-user"></i></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="admin.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                    <li class="active">
                        <a href="dataform.php"><i class="menu-icon fa fa-laptop"></i>Manage Weather Data</a>
                        
                    </li>
                    <li>
                        <a href="form.php"> <i class="menu-icon fa fa-table"></i>Data Entry</a>                        
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-th"></i>Manage Parameters</a>
                    </li> 
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-laptop"></i>Logout</a>
                    </li>                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    
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
                        <h1>Manage Weather Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        <a href="dataform.php"><button  role="button" class="btn-btn btn-md btn-success" value="View More">Back</button></a>
                        </ol>
                    </div>
                </div>
            </div>
           
    <table class="table table-stripped" style="padding-left: -4px;color: #558B2F">
      <thead style="color: green">
        <tr> 
        <!-- <th scope="col">Date</th>  -->      
        <th scope="col">Hour</th>
        <!-- <th scope="col">Param.1</th><th scope="col">Param.2</th><th scope="col">Param.3</th><th scope="col">Param.4</th><th scope="col">Param.5</th>
        <th scope="col">Param.6</th><th scope="col">Param.7</th><th scope="col">Param.8</th><th scope="col">Param.9</th><th scope="col">Param.10</th>
        <th scope="col">Param.11</th>--><th scope="col">Param.12</th>
        <th scope="col">Param.13</th><br> <th scope="col">Param.14</th> 
        <th scope="col">Therm</th><th scope="col">Level_Pressure</th><th scope="col">Baro_Read</th><th scope="col">Wet_Bulb</th><th scope="col">R_Humidity</th><th scope="col">Vapor_Pressure</th>
        </tr>
  </thead>
    <?php
    include('config.php');
    include('db.php');

    $sql = "SELECT Hour,I21,sn3,tntx1,tntx2,tntx3,I5,I89,p241,p242,p243,Ieight,ns,c,hs1,hs2,Inine,sp1,sp2,sp3,sp4,atherm,levelpress,baroread,wetbulb,rhumidity,vappressure FROM parameter1";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()){         

        echo "<tr><td>".$row["Hour"]."</td><td>".($row['I21']+$row['sn3']+$row['tntx1']+$row['tntx2']+$row['tntx3'])."</td><td>".($row['I5']+$row['I89']+$row['p241']+$row['p242']+$row['p243'])."</td><td>".($row['Ieight']+$row['ns']+$row['c']+$row['hs1']+$row['hs2'])."</td><td>".($row['Inine']+$row['sp1']+$row['sp2']+$row['sp3']+$row['sp4']).$row["atherm"]."</td><td>".$row["levelpress"]."</td><td>".$row["baroread"]."</td><td>".$row["wetbulb"]."</td><td>".$row["rhumidity"]."</td><td>".$row["vappressure"];   

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
