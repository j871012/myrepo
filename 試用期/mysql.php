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
    $num=[];
    global $conn;
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        array_push($num, $row);
    }
    return $num;
}

function dbwrite($sql) {
    // insertId
    // affectRows: 10, 1,...
    global $conn;
    $conn->query($sql);
    $lastid = $conn->insert_id;
    $affect = mysqli_affected_rows($conn);
    
    return [
        'lastid' => $lastid,
        'affect' => $affect,
    ];
    // return $lastid." , ".$affect;
}


// $list = dbread('SELECT * FROM basketball');
// var_dump($list);


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