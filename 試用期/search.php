<?php
include 'mysql.php';


$searchs = $_POST['search'];
// $searchs = trim($searchs);
// if(!$searchs){
//     echo "[]";
//     exit;
// }
$result = dbread("SELECT * FROM basketball WHERE team_b like '%$searchs%' OR team_a like '%$searchs%'");

echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>