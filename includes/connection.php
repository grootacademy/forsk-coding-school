<?php 

// $servername = "localhost";
// $username = "root";
// $password = "";
// $my_db = 'leads';

//hosting


 $servername = "31.220.110.201:3306";

 $username = "u232016825_swiggywala";
 $password = "HareRam@987";
 $my_db = 'u232016825_leads';
// //Create connection
$conn = new mysqli($servername, $username, $password,$my_db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// 
?>