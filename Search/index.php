<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
  
  if(isset($_GET['submit']))
  {
    $key=$_GET['keyword'];
    $array = array();
    $hostname = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ask";
    $conn = new mysqli($hostname, $username, $password,$database);
        mysqli_set_charset($conn,"utf8");

    $query= "SELECT * FROM user_info,quest_ans WHERE quest_ans.question LIKE '%".$key."%' or user_info.fname LIKE '%".$key."%' or user_info.lname LIKE '%".$key."%' ";
    $result = $conn->query($query);
    $flag=0;

    while($row=mysqli_fetch_array($result))
    {
      echo $row['question']."<br>";
      $flag = 1;
    }

    if($flag!=1) 
    {
      echo "not found";
    }
    
  }


?>
<form action="index.php" method="get" accept-charset="utf-8">
  <input type="text" name="keyword" value="" placeholder="Search">
  <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

