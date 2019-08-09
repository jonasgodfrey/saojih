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
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

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
                    
                    <div class="header-left">
                        <p>MET Data Entry</p>
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

        <br>
        <div class="content mt-3">
                        
                        <div class="card">
                        <div class="card-header"><br><br>
                        <h3 align="center" style="font-family: Georgia, serif;">Synoptic Hourly Data Entry (According to FM 102)</h3></div><br>
                        <div class="container"><br>                                            
                    <form action="form.php" method="POST">                        
                       <div class="row">                                 
                        <div class="col-md-2">                      
                            <label>Date</label><br>
                            <input text="" name="day" value="<?php echo date("d/m/Y");?>"  class="form-control" readonly>
                           </div>
                           <div class="col-md-2">                      
                            <label>Time:</label><br>
                            <select text="text" name="hour" class="form-control">
                                <option></option>
                                <option>00:00</option><option>01:00</option><option>02:00</option><option>03:00</option><option>04:00</option><option>05:00</option><option>06:00</option><option>07:00</option><option>08:00</option>
                                        <option>09:00</option><option>10:00</option><option>11:00</option><option>12:00</option><option>13:00</option>
                                        <option>14:00</option><option>15:00</option><option>16:00</option><option>17:00</option><option>18:00</option><option>19:00</option><option>20:00</option><option>21:00</option><option>22:00</option><option>23:00</option><option>24:00</option>
                            </select>
                           </div>
                        <div class="col-md-3">
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

                        <div class="col-md-5">
                            <label>Station Number:</label><br>
                                <script type="text/javascript" language="JavaScript">
                                    document.write('<select class="form-control col-lg-3" name="location_no" id="location_no" required></select>');
                                </script>
                                    <!-- <noscript>
                                        <select class="form-control" name="location_no" id="location_no" required>
                                        </select>
                                    </noscript> -->
                        </div>                            

                            </div><br><hr>                                       

                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                        <div class="col-xs-3">
                                        <label>iR:</label>
                                            <select text="text" name="indi" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select>
                                        </div>
                                                <div class="col-xs-3">
                                        <label>iX:</label>
                                            <select text="text" name="station" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select>
                                        </div>
                                                <div class="col-xs-3">
                                                <label>h:</label>
                                            <select text="text" name="height" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select>
                                                </div>
                                <div class="col-xs-3">
                           
                             <label>vv:</label><br>
                                 <select text="text" name="visib" class="form-control">
                                    <option></option>
                                 <?php

                        $res = mysqli_query($conn, "SELECT * FROM visibility");
                        $count = mysqli_num_rows($res);

                        while($row=mysqli_fetch_assoc($res)){

                          ?>
        <option value="<?php echo $row['visibility_id'] ?>"><?php echo  $row['visibility_code'] ?></option>

                          <?php
                        }
                    ?>       
                                </select>                      
                            </div>
                        </div>
                    </div>
                                            
                                            <div class="col-md-3">
                                            <div class="form-group">                          
                                           <div class="col-xs-3">                                               
                                                <label>N:</label><br>
                                            <select text="text" name="b1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select>
                                                </div>
                                            <div class="col-xs-3">
                                                 <label>dd:</label><br>
                                 <select text="text" name="b2" class="form-control">
                                    <option></option>
                                 <?php

                                        $res = mysqli_query($conn, "SELECT * FROM wind_direction");
                                            $count = mysqli_num_rows($res);

                                                while($row=mysqli_fetch_assoc($res)){

                                                ?>
                                        <option value="<?php echo $row['winddirection_id'] ?>"><?php echo  $row['winddirection_code'] ?></option>

                                        <?php
                                        }
                                        ?>  
                                </select>                      
                            </div>                                        
                                                <div class="col-xs-3">
                                                <label>ff:</label><br>
                            <select text="number" name="b3" class="form-control">
                                <<option>00</option><option>10</option><option>20</option>
                                                    <option>30</option><option>40</option><option>50</option><option>60</option>
                                                    <option>70</option><option>80</option><option>90</option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-xs-3">
                                                <label>1:</label><br>
                                                <select text="text" name="c1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Sn:</label><br>
                                                <select text="text" name="c2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>T:</label><br>
                                                <select text="text" name="c3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>T:</label><br>
                                                <select text="text" name="c4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>T:</label><br>
                                                <select text="text" name="c5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                            </div>
                                            </div>                                          
                                            <br><hr>

                                            <div class="row">
                                            <div class="col-md-4">
                                            <div class="col-xs-3">
                                                <label>2:</label><br>
                                                <select text="text" name="d1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Sn:</label><br>
                                                <select text="text" name="d2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Td:</label><br>
                                                <select text="text" name="d3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Td:</label><br>
                                                <select text="text" name="d4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Td:</label><br>
                                                <select text="text" name="d5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                               <div class="col-xs-3">
                                                <label>4:</label><br>
                                                <select text="text" name="e1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>P:</label><br>
                                                <select text="text" name="e2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>P:</label><br>
                                                <select text="text" name="e3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>P:</label><br>
                                                <select text="text" name="e4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>P:</label><br>
                                                <select text="text" name="e5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                        </div>

                                            <div class="col-md-4">
                                               <div class="col-xs-3">
                                                <label>6:</label><br>
                                                <select text="text" name="f1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>R:</label><br>
                                                <select text="text" name="f2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>R:</label><br>
                                                <select text="text" name="f3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>R:</label><br>
                                                <select text="text" name="f4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>TR:</label><br>
                                                <select text="text" name="f5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div>
                                            </div> 
                                            </div>
                                            <br><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                            <div class="col-xs-3">
                                                <label>7:</label><br>
                                                <select text="text" name="g1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div>                                       
                                             <div class="col-xs-3">
                                                 <label>W/W:</label><br>
                                                <select text="text" name="g4" class="form-control">
                                             <?php

                                        $res = mysqli_query($conn, "SELECT * FROM present_weather");
                                            $count = mysqli_num_rows($res);

                                                while($row=mysqli_fetch_assoc($res)){

                                                ?>
                                        <option value="<?php echo $row['presentweather_id'] ?>"><?php echo  $row['presentweather_code'] ?></option>

                                        <?php
                                        }
                                        ?>   
                                </select>                      
                            </div>          
                            
                            <div class="col-xs-3">
                                                 <label>W1/W2:</label><br>
                                                <select text="text" name="g2" class="form-control">
                                             <?php

                                        $res = mysqli_query($conn, "SELECT * FROM past_weather");
                                            $count = mysqli_num_rows($res);

                                                while($row=mysqli_fetch_assoc($res)){

                                                ?>
                                        <option value="<?php echo $row['pastweather_id'] ?>"><?php echo  $row['pastweather_code'] ?></option>

                                        <?php
                                        }
                                        ?>
                                </select>                      
                            </div>
                        </div>
                                            
                                            <div class="col-md-4">
                                            <div class="col-xs-3">
                                                <label>8:</label><br>
                                                <select text="text" name="h1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Nh:</label><br>
                                                <select text="text" name="h2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                            <div class="col-xs-3">
                                                 <label>CL:</label><br>
                                                <select text="text" name="h3" class="form-control">
                                             <?php
                                        $res = mysqli_query($conn, "SELECT * FROM low_cloud");
                                            $count = mysqli_num_rows($res);

                                                while($row=mysqli_fetch_assoc($res)){

                                                ?>
                                        <option value="<?php echo $row['lowcloud_id'] ?>"><?php echo  $row['lowcloud_code'] ?></option>

                                        <?php
                                        }
                                        ?>   
                                  </select>                      
                            </div>          
                                        <div class="col-xs-3">
                                                 <label>CM:</label><br>
                                                <select text="text" name="h4" class="form-control">
                                             <?php

                                        $res = mysqli_query($conn, "SELECT * FROM medium_cloud");
                                            $count = mysqli_num_rows($res);

                                                while($row=mysqli_fetch_assoc($res)){

                                                ?>
                                        <option value="<?php echo $row['mediumcloud_id'] ?>"><?php echo  $row['mediumcloud_code'] ?></option>

                                        <?php
                                        }
                                        ?>  
                                  </select>                      
                            </div>
                                        <div class="col-xs-3">
                                                 <label>CH:</label><br>
                                                <select text="text" name="h5" class="form-control">
                                            <?php

                                        $res = mysqli_query($conn, "SELECT * FROM high_cloud");
                                            $count = mysqli_num_rows($res);

                                                while($row=mysqli_fetch_assoc($res)){

                                                ?>
                                        <option value="<?php echo $row['highcloud_id'] ?>"><?php echo  $row['highcloud_code'] ?></option>

                                        <?php
                                        }
                                        ?>   
                                  </select>                      
                            </div>
                                            </div>                                 
                                            
                                            <div class="col-md-4">
                                             <div class="col-xs-3">
                                                <label>9:</label><br>
                                                <select text="text" name="j1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>h:</label><br>
                                                <select text="text" name="j2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>h:</label><br>
                                                <select text="text" name="j3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>/:</label><br>
                                                <select text="text" name="j4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>/:</label><br>
                                                <select text="text" name="j5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div>
                                            </div>
                                        </div>
                                            <br><hr>
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="col-xs-3">
                                                <label>3:</label><br>
                                                <select text="text" name="k1" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>3:</label><br>
                                                <select text="text" name="k2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>3:</label><br>
                                                <select text="text" name="k3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>/:</label><br>
                                                <select text="text" name="k4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>/:</label><br>
                                                <select text="text" name="k5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select>
                                        </div>
                                    </div>
                                            <div class="col-md-4">
                                           <div class="col-xs-3">
                                                <label>2/1:</label><br>
                                                <select text="text" name="l1" class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Sn/Sn:</label><br>
                                                <select text="text" name="l2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Tn/Tx:</label><br>
                                                <select text="text" name="l3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Tn/Tx:</label><br>
                                                <select text="text" name="l4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Tn/Tx:</label><br>
                                                <select text="text" name="l5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div>                                        
                                    </div>                                
                                    <div class="col-md-4">
                                   <div class="col-xs-3">
                                                <label>5:</label><br>
                                                <select text="text" name="m1" class="form-control">
                                                <option>5</option>
                                            </select></div> 
                                        <div class="col-xs-3">
                                                <label>8/9:</label><br>
                                                <select text="text" name="m2" class="form-control">
                                                <option>8</option>
                                                <option>9</option>
                                            </select></div> 
                                       <div class="col-xs-3">
                                                <label>P24:</label><br>
                                                <select text="text" name="m3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div> 
                                        <div class="col-xs-3">
                                                <label>P24:</label><br>
                                                <select text="text" name="m4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div> 
                                        <div class="col-xs-3">
                                                <label>P24:</label><br>
                                                <select text="text" name="m5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div>
                                        </div>
                                    </div><br><hr>
                                    <div class="row">
                                    <div class="col-md-4">
                                        <div class="col-xs-3">
                                                <label>8:</label><br>
                                                <select text="text" name="n1" class="form-control">
                                                <option>8</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>Ns:</label><br>
                                                <select text="text" name="n2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>C:</label><br>
                                                <select text="text" name="n3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>hs:</label><br>
                                                <select text="text" name="n4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>hs:</label><br>
                                                <select text="text" name="n5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div>
                                    </div>                                
                                
                                <div class="col-md-4">
                                        <div class="col-xs-3">
                                                <label>8:</label><br>
                                                <select text="text" name="p1" class="form-control">
                                                <option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>SP:</label><br>
                                                <select text="text" name="p2" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>SP:</label><br>
                                                <select text="text" name="p3" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>SP:</label><br>
                                                <select text="text" name="p4" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select> 
                                            </div>
                                                <div class="col-xs-3">
                                                <label>SP:</label><br>
                                                <select text="text" name="p5" class="form-control">
                                                <option>0</option><option>1</option><option>2</option>
                                                    <option>3</option><option>4</option><option>5</option><option>6</option>
                                                    <option>7</option><option>8</option><option>9</option>
                                            </select></div>
                                    </div>                     
                                
                                    <div class="col-xs-4">                      
                            <label>Attached Thermometer:</label><br>
                            <input text="text" name="r1" class="form-control" maxlength="4" placeholder='0.61' required>
                           </div>
                       </div><br><hr>
                                <div class="row">
                                    <div class="col-xs-3">
                                       <label>Station_Level_Presure:</label><br>
                            <input text="text" name="r2" class="form-control" maxlength="5" placeholder="5.4" required>
                           </div>
                         <div class="col-xs-2">
                                       <label>Baro as Read:</label><br>
                            <input text="text" name="r3" class="form-control" placeholder="99.99" maxlength="5" required>
                           </div>                        
                        <div class="col-xs-2">
                                       <label>Wet Bulb:</label><br>
                            <input text="text" name="r4" class="form-control" maxlength="5" placeholder="20.4" required>
                           </div>
                           <div class="col-xs-2">
                                       <label>Relative Humidity:</label><br>
                            <input text="text" name="r5" class="form-control" maxlength="5" placeholder="78.99" required>
                           </div>
                            <div class="col-xs-3">
                                       <label>Vapor Presure:</label><br>
                            <input text="text" name="r6" class="form-control" maxlength="5" placeholder="21.99" required>
                           </div>                                         
                        </div>
                    <br><hr>
                    <div class="container">
                        <div class="row"> 
                        <div class="col-md-12" align="center">
                          <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Submit">
                        </div>
                        </div>
                        </div> 
                        <br><br>  
                </form>
                        </div>
                </div>
                    </div>
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
    
    <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
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

                        <?php                            
                            if(isset($_POST['submit'])){                           
                                $day = mysqli_real_escape_string($conn, $_POST['day']);
                                $hour = mysqli_real_escape_string($conn, $_POST['hour']);
                                $location_id = mysqli_real_escape_string($conn, $_POST['location']);
                            $stationnos_id = mysqli_real_escape_string($conn, $_POST['location_no']);
                                $indi = mysqli_real_escape_string($conn, $_POST['indi']);
                                $station = mysqli_real_escape_string($conn, $_POST['station']);
                                $height = mysqli_real_escape_string($conn, $_POST['height']);
                                $visibility_id = mysqli_real_escape_string($conn, $_POST['visib']);
                                $b1 = mysqli_real_escape_string($conn, $_POST['b1']);
                            $winddirection_id = mysqli_real_escape_string($conn, $_POST['b2']);
                                    $b3 = mysqli_real_escape_string($conn, $_POST['b3']);
                                    $c1 = mysqli_real_escape_string($conn, $_POST['c1']);
                                    $c2 = mysqli_real_escape_string($conn, $_POST['c2']);
                                    $c3 = mysqli_real_escape_string($conn, $_POST['c3']);
                                    $c4 = mysqli_real_escape_string($conn, $_POST['c4']);
                                    $c5 = mysqli_real_escape_string($conn, $_POST['c5']);
                                    $d1 = mysqli_real_escape_string($conn, $_POST['d1']);
                                    $d2 = mysqli_real_escape_string($conn, $_POST['d2']);
                                    $d3 = mysqli_real_escape_string($conn, $_POST['d3']);
                                    $d4 = mysqli_real_escape_string($conn, $_POST['d4']);
                                    $d5 = mysqli_real_escape_string($conn, $_POST['d5']);
                                    $e1 = mysqli_real_escape_string($conn, $_POST['e1']);
                                    $e2 = mysqli_real_escape_string($conn, $_POST['e2']);
                                    $e3 = mysqli_real_escape_string($conn, $_POST['e3']);
                                    $e4 = mysqli_real_escape_string($conn, $_POST['e4']);
                                    $e5 = mysqli_real_escape_string($conn, $_POST['e5']);
                                    $f1 = mysqli_real_escape_string($conn, $_POST['f1']);
                                    $f2 = mysqli_real_escape_string($conn, $_POST['f2']);
                                    $f3 = mysqli_real_escape_string($conn, $_POST['f3']);
                                    $f4 = mysqli_real_escape_string($conn, $_POST['f4']);
                                    $f5 = mysqli_real_escape_string($conn, $_POST['f5']);
                                    $g1 = mysqli_real_escape_string($conn, $_POST['g1']);
                                    $pastweather_id = mysqli_real_escape_string($conn, $_POST['g2']);
                                                                   
                                $presentweather_id = mysqli_real_escape_string($conn, $_POST['g4']);                         
                                    $h1 = mysqli_real_escape_string($conn, $_POST['h1']);
                                    $h2 = mysqli_real_escape_string($conn, $_POST['h2']);
                                    $lowcloud_id = mysqli_real_escape_string($conn, $_POST['h3']);
                                    $mediumcloud_id = mysqli_real_escape_string($conn, $_POST['h4']);
                                    $highcloud_id = mysqli_real_escape_string($conn, $_POST['h5']);
                                    $j1 = mysqli_real_escape_string($conn, $_POST['j1']);
                                    $j2 = mysqli_real_escape_string($conn, $_POST['j2']);
                                    $j3 = mysqli_real_escape_string($conn, $_POST['j3']);
                                    $j4 = mysqli_real_escape_string($conn, $_POST['j4']);
                                    $j5 = mysqli_real_escape_string($conn, $_POST['j5']);
                                    $k1 = mysqli_real_escape_string($conn, $_POST['k1']);
                                    $k2 = mysqli_real_escape_string($conn, $_POST['k2']);
                                    $k3 = mysqli_real_escape_string($conn, $_POST['k3']);
                                    $k4 = mysqli_real_escape_string($conn, $_POST['k4']);
                                    $k5 = mysqli_real_escape_string($conn, $_POST['k5']);
                                    $l1 = mysqli_real_escape_string($conn, $_POST['l1']);
                                    $l2 = mysqli_real_escape_string($conn, $_POST['l2']);
                                    $l3 = mysqli_real_escape_string($conn, $_POST['l3']);
                                    $l4 = mysqli_real_escape_string($conn, $_POST['l4']);
                                    $l5 = mysqli_real_escape_string($conn, $_POST['l5']);
                                    $m1 = mysqli_real_escape_string($conn, $_POST['m1']);
                                    $m2 = mysqli_real_escape_string($conn, $_POST['m2']);
                                    $m3 = mysqli_real_escape_string($conn, $_POST['m3']);
                                    $m4 = mysqli_real_escape_string($conn, $_POST['m4']);
                                    $m5 = mysqli_real_escape_string($conn, $_POST['m5']);
                                    $n1 = mysqli_real_escape_string($conn, $_POST['n1']);
                                    $n2 = mysqli_real_escape_string($conn, $_POST['n2']);
                                    $n3 = mysqli_real_escape_string($conn, $_POST['n3']);
                                    $n4 = mysqli_real_escape_string($conn, $_POST['n4']);
                                    $n5 = mysqli_real_escape_string($conn, $_POST['n5']);
                                    $p1 = mysqli_real_escape_string($conn, $_POST['p1']);
                                    $p2 = mysqli_real_escape_string($conn, $_POST['p2']);
                                    $p3 = mysqli_real_escape_string($conn, $_POST['p3']);
                                    $p4 = mysqli_real_escape_string($conn, $_POST['p4']);
                                    $p5 = mysqli_real_escape_string($conn, $_POST['p5']);
                                    $r1 = mysqli_real_escape_string($conn, $_POST['r1']);
                                    $r2 = mysqli_real_escape_string($conn, $_POST['r2']);
                                    $r3 = mysqli_real_escape_string($conn, $_POST['r3']);
                                    $r4 = mysqli_real_escape_string($conn, $_POST['r4']);
                                    $r5 = mysqli_real_escape_string($conn, $_POST['r5']);
                                    $r6 = mysqli_real_escape_string($conn, $_POST['r6']);
                            }

        if(!empty($day) && !empty($location_id) && !empty($stationnos_id) && !empty($hour) && !empty($r5)){


    $sql1 = "INSERT INTO parameter1(Day,Hour,location_id,stationnos_id,iR,iX,h,visibility_id,n,winddirection_id,ff,I1,sn1,t1,t2,t3,I2,sn2,td1,td2,td3,I4,p1,p2,p3,p4,I6,r1,r2,r3,tr,I7,presentweather_id,pastweather_id,I8,nh,lowcloud_id,mediumcloud_id,highcloud_id,I9,h1,h2,h3,h4,I3,t3i,t3ii,slash1,slash2,I21,sn3,tntx1,tntx2,tntx3,I5,I89,p241,p242,p243,Ieight,ns,c,hs1,hs2,Inine,sp1,sp2,sp3,sp4,atherm,
levelpress,baroread,wetbulb,rhumidity,vappressure)
    VALUES('$day','$hour','$location_id','$stationnos_id','$indi','$station','$height','$visibility_id','$b1','$winddirection_id','$b3','$c1','$c2','$c3','$c4','$c5','$d1','$d2','$d3','$d4','d5',
        '$e1','$e2','$e3','$e4','$e5','$f1','$f2','$f3','$f4','$f5','$g1','$presentweather_id','$pastweather_id','$h1','$h2','$lowcloud_id','$mediumcloud_id','$highcloud_id','$j1','$j2','$j3','$j4',
    '$j5','$k1','$k2','$k3','$k4','$k5','$l1','$l2','$l3','$l4','$l5','$m1','$m2','$m3','$m4','$m5','$n1','$n2','$n3','$n4','$n5',
    '$p1','$p2','$p3','$p4','$p5','$r1','$r2','$r3','$r4','$r5','$r6')";

   $hi=$height*'30';
   $temp=($c3.$c4).('.').($c5);
   $tem=($d3.$d4).('.').($d5);
   $mslp=('1'.(($e2.$e3.$e4.$e5)*'0.1'));

        $sql2 = "INSERT INTO decoded(day,Hour,location_id,stationnos_id,h,visibility_id,winddirection_id,ff,temp1,temp2,mslp,presentweather_id,pastweather_id,lowcloud_id,mediumcloud_id,highcloud_id,atherm,levelpress,baroread,wetbulb,rhumidity,vappressure)
    VALUES('$day','$hour','$location_id','$stationnos_id','$hi','$visibility_id','$winddirection_id','$b3','$temp','$tem','$mslp','$presentweather_id','$pastweather_id','$lowcloud_id','$mediumcloud_id','$highcloud_id','$r1','$r2','$r3','$r4','$r5','$r6')";

 if(mysqli_query($conn, $sql1)){
    $message = "Data at $hour Successfully entered";
    echo "<script type='text/javascript'>alert('$message'); </script>";
    }
    else{
    echo 'ERROR: '.mysqli_error($conn);
}
    if(mysqli_query($conn, $sql2)){
    
}
else{
    echo 'ERROR: '.mysqli_error($conn);
}

}
    
    ?>