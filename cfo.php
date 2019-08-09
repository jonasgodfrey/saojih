<?php
include('config.php');
include('db.php');
?>
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

        if(!empty($day) && !empty($location_id) && !empty($stationnos_id) && !empty($hour)){

    $query = "INSERT INTO decoded(Day,Hour,location_id,stationnos_id,iR,iX,h,visibility_id,n,winddirection_id,ff,I1,sn1,t1,t2,t3,I2,sn2,td1,td2,td3,I4,p1,p2,p3,p4,I6,r1,r2,r3,tr,presentweather_id,pastweather_id,lowcloud_id,mediumcloud_id,highcloud_id,h1,h2,h3,h4,atherm,
levelpress,baroread,wetbulb,rhumidity,vappressure)
    VALUES('$day','$hour','$location_id','$stationnos_id','$indi','$station','$height','$visibility_id','$b1','$winddirection_id','$b3','$c1','$c2','$c3','$c4','$c5','$d1','$d2','$d3','$d4','d5',
        '$e1','$e2','$e3','$e4','$e5','$f1','$f2','$f3','$f4','$f5','$g1','$presentweather_id','$pastweather_id','$h1','$h2','$lowcloud_id','$mediumcloud_id','$highcloud_id','$j1','$j2','$j3','$j4',
    '$j5','$k1','$k2','$k3','$k4','$k5','$l1','$l2','$l3','$l4','$l5','$m1','$m2','$m3','$m4','$m5','$n1','$n2','$n3','$n4','$n5',
    '$p1','$p2','$p3','$p4','$p5','$r1','$r2','$r3','$r4','$r5','$r6')";

    if(mysqli_query($conn, $query)){
    $message = "Data at $hour Successfully entered";
    echo "<script type='text/javascript'>alert('$message'); </script>";
    }else{
    echo 'ERROR: '.mysqli_error($conn);

}
    }
    ?>