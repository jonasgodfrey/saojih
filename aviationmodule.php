<?php 

  include('config.php');
  include('db.php');

?>    
<!doctype html>
 <html class="no-js" lang=""> 
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAOJIH</title>
    <meta name="description" content="">
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
                    <h5>Synoptic Weather Trend Analysis</h5>
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
                    <div class="page-title">
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 8px">
             <form method="post" action="aviationmodule.php">
            <div class="form-inline">                
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
                <input type="submit" name="submit" value="Search" class="btn btn-success btn-md">
            </div>
            </form>
        </div>
    </div>

        <div class="content mt-3">

            
            <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">                       

                        <div class="col-lg-6">
                            <div class="card">
                                <?php
                        if(isset($_POST['submit'])){
                        $location_id = mysqli_real_escape_string($conn, $_POST['location']);
                        $date =date("d/m/Y");

                                $sql = "SELECT day,hour,temp1,ff,rhumidity,temp2,location_id FROM decoded WHERE(day='$date' AND location_id='$location_id')ORDER BY hour ASC";
                                $result = $conn-> query($sql);
                                $json=[];
                                $json5=[];
                                $json6=[];
                                $json7=[];
                                $json8=[];

                                while ($row = $result-> fetch_assoc()){
                                    extract($row);
                                    $json[]=$hour;  
                                    $json5[]=(int)$temp1;
                                    $json6[]=$ff;
                                    $json7[]=(int)$rhumidity;  
                                    $json8[]=(int)$temp2;     
                                }
                            }

                                ?> 
                                <div class="card-body">
                        <h4 class="mb-3">Dry Bulb Temp</h4>
                        <canvas id="myChart"></canvas>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                        <script type="text/javascript">

                            var ctx = document.getElementById('myChart').getContext('2d');
                            var chart = new Chart(ctx, {
    // The type of chart we want to create
                        type: 'line',

// The data for our dataset

                            data: {
                         labels: <?php echo json_encode($json);?>,
                    datasets: [{
                         label:'Dry Bulb Temp (C)',
                         backgroundColor:'transparent',
                         borderWidth:'3',
                         borderColor: '#6200EE',
                         data: <?php echo json_encode($json5);?>,
                        }]
                    },

// Configuration options go here
                options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Time'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: '¡ÆC'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
                });
                </script>       
                                </div>
                            </div>
                        </div><!-- /# column -->
                        
                        <div class="col-lg-6">
                            <div class="card">                                 
                                <div class="card-body">
                                    <h4 class="mb-3">Wind Speed</h4>                                    
                                    <canvas id="myChart2"></canvas>                        
                        <script type="text/javascript">

                            var ctx = document.getElementById('myChart2').getContext('2d');
                            var chart = new Chart(ctx, {
    // The type of chart we want to create
                        type: 'line',

// The data for our dataset

                            data: {
                         labels: <?php echo json_encode($json);?>,
                    datasets: [{
                         label:'Wind Speed',
                         backgroundColor:'transparent',
                         borderWidth:'3',
                         borderColor: '#C51162',
                         data: <?php echo json_encode($json6);?>,
                        }]
                    },

// Configuration options go here
                options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Time'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Knots'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
                });
        </script>     
                                </div>
                            </div>
                        </div><!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Relative Humidity</h4>
                                    <canvas id="myChart3"></canvas>
                        <script type="text/javascript">
                            var ctx = document.getElementById('myChart3').getContext('2d');
                            var chart = new Chart(ctx, {
    // The type of chart we want to create
                        type: 'line',

// The data for our dataset

                            data: {
                         labels: <?php echo json_encode($json);?>,
                    datasets: [{
                         label:'Relative Humidity (%) ',
                         backgroundColor:'#F3E5F5',
                         borderWidth:'3',
                         borderColor: '#BB86FC',
                         data: <?php echo json_encode($json7);?>,
                        }]
                    },

// Configuration options go here
                options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Time'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: '%'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
                });
                </script>                                          
                                </div>
                            </div>
                        </div><!-- /# column -->
                        

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-3">Dew Point Temperature</h4>
                                    <canvas id="myChart4"></canvas>
                                    <script type="text/javascript">
                            var ctx = document.getElementById('myChart4').getContext('2d');
                            var chart = new Chart(ctx, {
    // The type of chart we want to create
                        type: 'line',
// The data for our dataset
                            data: {
                         labels: <?php echo json_encode($json);?>,
                    datasets: [{
                         label:'D.P Temp(C)',
                         backgroundColor:'#D7CCC8',
                         borderWidth:'3',
                         borderColor: '#4E342E',
                         data: <?php echo json_encode($json8);?>,
                        }]
                    },

// Configuration options go here
                options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Time'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: '¡ÆC'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
                });
                </script> 

                                </div>
                            </div>
                        </div><!-- /# column -->              


                        



                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div>

           

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
 -->    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
 -->    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>    
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>

        <!--  Chart js -->
    
    
   

</body>
</html>
