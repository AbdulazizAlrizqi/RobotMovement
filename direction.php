<?php
$servername="localhost";
$username="root";
$password="";
$database_name="robotdata";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if(!$conn){
  die("failed" . mysqli_connect_error());
}

if (isset($_POST['button'])){

  $button_value = $_POST['button'];
  $sql_query = "insert into robotmovement (direction)
  VALUES ('$button_value')";

  if (mysqli_query ($conn, $sql_query)) {
    echo $button_value;
  }
  else{
    echo "Error: " . $sql_query . "" . mysqli_error($conn);
  }
}

mysqli_close($conn);

?>