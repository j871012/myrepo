<?php

$str = file_get_contents('https://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=26');
$pattern = '/<tr.*?>(.*?)<\/tr>/is';
preg_match_all($pattern , $str, $match);
$first=$match[1];
$list = [];

foreach($first as $pp){
    $id = NULL;
    $con = NULL;
    $team_a = NULL;
    $team_b = NULL;
    $lose = NULL;
    $win = NULL;
    
    $pattern1 = '/<td class="wh-1.*?">(.*?)<\/td>/is';
    preg_match_all($pattern1 , $pp , $match1);
    $first=$match1[1];
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $ff=$num[1];
        foreach($ff as $aa){
            preg_match_all('/<i>(.*?)<\/i>/is',$aa,$ss);
            $id_1=$ss[1];  
            $id = $id_1[0];  
        }
    }   

    $pattern2 = '/<td class="wh-2">(.*?)<\/td>/is';
    preg_match_all($pattern2 , $pp , $match2);
    $first=$match2[0];
    foreach($first as $val){
        preg_match_all('/<span .*?>(.*?)<\/span>/is',$val,$num);
        $con_1=$num[1];
        $con = $con_1[0];
    }

    $pattern4 = '/<td class="wh-4 .*?">(.*?)<\/td>/is';
    preg_match_all($pattern4 , $pp,$match4);
    $first=$match4[1];
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $team_a_1=$num[1];
        $team_a = $team_a_1[0];
    }

    $pattern6 = '/<td class="wh-6 .*?">.*?<\/td>/is';
    preg_match_all($pattern6 , $pp,$match6);
    $first=$match6[0];
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $team_b_1=$num[1];
        $team_b = $team_b_1[0];
    }

    $pattern7 = '/<td class="wh-7 .*?">.*?<\/td>/is';
    preg_match_all($pattern7 , $pp,$match7);
    $first=$match7[0];
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $ratio=$num[1];
        $lose=$ratio[0];
        $win=$ratio[1];
             
    }
    
    $test = array(
        'id'     => $id,
        'con'    => $con,
        'team_a' => $team_a,
        'team_b' => $team_b,
        'lose'   => $lose,
        'win'    => $win,
    );
    if($test ['id'] == NULL){
        continue;
    }else{
        array_push($list, $test);
    }    

}

$result = count($list); 
// var_dump($list);
// insert

include 'mysql.php';
for($i = 0;$i < $result; $i++){
    $sql = "INSERT INTO basketball (baskid, con, team_a, team_b, lose, win )VALUES";
    for($j = 0;$j < $i; $j++){
        $sql .= "
        (" . $list[$j]['id'] . ",'" . ($list[$j]['con']) . "' ,'" . ($list[$j]['team_a']) . "','" . ($list[$j]['team_b']) . "', " . $list[$j]['lose'] . "," . $list[$j]['win'] . "),";     
    }
    $sql .= "
    (" . $list[$i]['id'] . ",'" . ($list[$i]['con']) . "' ,'" . ($list[$i]['team_a']) . "','" . ($list[$i]['team_b']) . "', " . $list[$i]['lose'] . "," . $list[$i]['win'] . ")";
}
$conn->query($sql);
var_dump($sql);
exit;

?>

<!DOCTYPE html>
<html>
<style>
table {
  font-family: arial, sans-serif; 
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align:lerf ; 
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<table>
    <?php
    for($i = 0; $i < $result; $i++){
    ?>
        <tr>
            <td>
            <?php
            echo ($list[$i]['id']);
            ?>
            </td>
            <td>
            <?php
            echo ($list[$i]['con']);
            ?>
            </td>
            <td>
            <?php
            echo ($list[$i]['team_a']);
            ?>
            </td>
            <td>
            <?php
            echo ($list[$i]['team_b']);
            ?>
            </td>
            <td>
            <?php
            echo ($list[$i]['lose']);
            ?>
            </td>
            <td>
            <?php
            echo ($list[$i]['win']);
            ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>