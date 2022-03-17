
<?php

$str = file_get_contents('https://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=26&issue=2022-03-08');
$pattern = '/<tr.*?>(.*?)<\/tr>/is';
preg_match_all($pattern , $str, $match);
$first=$match[1];
foreach($first as $pp){

    $pattern1 = '/<td class="wh-1.*?">(.*?)<\/td>/is';
    preg_match_all($pattern1 , $pp , $match1,PREG_PATTERN_ORDER);
    $first=$match1[1];
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $ff=$num[1];
        foreach($ff as $aa){
            preg_match_all('/<i>(.*?)<\/i>/is',$aa,$ss);
            $x=$ss[1];    
            
            foreach($x as $y){
                $arr = array('id' => $y);
                echo($arr['id']);
                
            }
        }
        echo "\t";
    }
    
    //print_r($match1);

    $pattern2 = '/<td class="wh-2">(.*?)<\/td>/is';
    preg_match_all($pattern2 , $pp , $match2);
    $first=$match2[0];
    //print_r($first);
    foreach($first as $val){
        preg_match_all('/<span .*?>(.*?)<\/span>/is',$val,$num);
        $ff=$num[1];
        foreach($ff as $a1){
            $arr = array('con' => $a1);
            echo($arr['con']);
        }
    
    }

    $pattern4 = '/<td class="wh-4 .*?">(.*?)<\/td>/is';
    preg_match_all($pattern4 , $pp,$match4);
    $first=$match4[1];
    //print_r($first);
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $ff=$num[1];
        foreach($ff as $a2){
            $arr = array('team_a' => $a2);
            echo($arr['team_a']);
        }
        echo "\t";
    }

    $pattern6 = '/<td class="wh-6 .*?">.*?<\/td>/is';
    preg_match_all($pattern6 , $pp,$match6);
    $first=$match6[0];
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $ff=$num[1];
        foreach($ff as $a3){
            $arr = array('team_b' => $a3);
            echo($arr['team_b']);
        }
        echo "\t";
    }

    $pattern7 = '/<td class="wh-7 .*?">.*?<\/td>/is';
    preg_match_all($pattern7 , $pp,$match7);
    $first=$match7[0];
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        //print_r($num);
        $ff=$num[1];
        $ii=$ff[0];
        $arr = array('win' => $ii);
        echo($arr['win']);
        //print_r($ii);
        echo "\t";
        $jj=$ff[1];
        $arr = array('lose' => $jj);
        echo($arr['lose']);
        //print_r($jj);
        echo "<br>";
    }
    
    
}
/*var_dump($arr['id']);
var_dump($arr['con']);
var_dump($arr['team_a']);
var_dump($arr['team_b']);
var_dump($arr['win']);
var_dump($arr['lose']);*/

?>