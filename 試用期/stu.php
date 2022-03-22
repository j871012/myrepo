
<?php
include 'mysql.php';

$list = dbread('SELECT * FROM basketball');
var_dump($list);
// echo '<br>';
$result = dbwrite("UPDATE basketball SET  con = 'NB' ");
// var_dump($result);
// $result = dbwrite("INSERT INTO basketball(con, lose, win)VALUE('NB', '12', '23')");
// var_dump($result);

echo json_encode($list, JSON_UNESCAPED_UNICODE);







//

// $result = [
//   'insertId' => null,
//   'affectRows' => 10,
// ];

