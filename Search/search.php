<?php
    $key=$_GET['key'];
    $array = array();

    $hostname = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ask";
    $conn = new mysqli($hostname, $username, $password,$database);
        mysqli_set_charset($conn,"utf8");

  ;
    $query= "SELECT * FROM quest_ans where question LIKE '%{$key}%'");
    $result = $conn->query($query);

    while($row=mysql_fetch_array($result))
    {
      $array[] = $row['question'];
    }
    echo json_encode($array);
?>
