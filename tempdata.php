<?php 

  include('config.php');
  include('db.php');

    $sql = "SELECT hour,temp1 FROM decoded";
    $result = $conn-> query($sql);
    $json=[];
    $json5=[];  
        while ($row = $result-> fetch_assoc()){
    extract($row);
         $json[]=$hour;  
         $json5[]=(int)$temp1;       
    }
    echo json_encode($json);
    echo json_encode($json5);


    ?> 