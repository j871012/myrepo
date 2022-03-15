<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test';

$conn = new mysqli($host, $user, $password, $dbname );
if($conn-> connect_error){
    die("connection failed" .$conn -> connect_error);
}
// echo "connected successfully";
// echo '<br>';
// $sql = "DROP TABLE baseball";
// // $result = $conn->query($sql);

// if($conn->query($sql) === TRUE){
//      echo" successfully";
// }else{
//     echo"error " . $sql . "<br>" . $conn->error;
// }
// $conn ->close();

?>