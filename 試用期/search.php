<?php
include 'mysql.php';


$searchs = $_POST['search'];
$select = $_POST['select'];
// $select = 'team_a';
// $searchs = '伊拉瓦拉';
// $searchs = trim($searchs);
// if(!$searchs){
//     echo "[]";
//     exit;
// }
// $result = dbread("SELECT * FROM basketball WHERE team_b like '%$searchs%' OR team_a like '%$searchs%'");
$result = dbread("SELECT * FROM basketball WHERE $select like '%$searchs%'");
// var_dump($result);
echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>