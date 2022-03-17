<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test';
$conn = new mysqli($host, $user, $password, $dbname );
if($conn-> connect_error){
    die("connection failed" .$conn -> connect_error);
}
function dbread($sql) {
    // 連線 query
    // 回傳 資料陣列
    global $conn;
    $result = $conn->query($sql);
    return mysqli_fetch_array($result);
   
}

global $result;
$list = dbread('SELECT * FROM basketball');
for($x = 0;$x < $result; $x++){
    var_dump($list[$x]);
}
var_dump($list);


// [
//     [
//         'id'     => 'ttttt',
//         'con'    => 'ttttt',
//         'team_a' => 'ttttt',
//         'team_b' => 'ttttt',
//         'lose'   => 'ttttt',
//         'win'    => 'ttttt',
//     ],
//     // ....
// ]

?>