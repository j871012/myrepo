<?php

$str = file_get_contents('https://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=26&issue=2022-03-08');
$pattern1 = '/<td class="wh-1.*?">(.*?)<\/td>/is';
preg_match_all($pattern1 , $str , $match1,PREG_PATTERN_ORDER);
$first=$match1[1];
foreach($first as $val){
    preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
    $ff=$num[1];
    foreach($ff as $aa){
        preg_match_all('/<i>(.*?)<\/i>/is',$aa,$ss);
        $x=$ss[1];
        foreach($x as $y){
            print_r($y);
        }
        

        
    }
    echo '<br>';
}
//print_r($match1);
echo '<br>';

$pattern2 = '/<td class="wh-2">(.*?)<\/td>/is';
preg_match_all($pattern2 , $str , $match2);
$first=$match2[0];
//print_r($first);
foreach($first as $val){
    preg_match_all('/<span .*?>(.*?)<\/span>/is',$val,$num);
    $ff=$num[1];
    foreach($ff as $aa){
        print_r($aa);
        echo '<br>';
    }
    
}




$pattern4 = '/<td class="wh-4 .*?">(.*?)<\/td>/is';
preg_match_all($pattern4 , $str,$match4);
$first=$match4[1];
//print_r($first);
foreach($first as $val){
    preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
    $ff=$num[1];
    foreach($ff as $aa){
        print_r($aa);
        
    }
    echo '<br>';
}

$pattern6 = '/<td class="wh-6 .*?">.*?<\/td>/is';
preg_match_all($pattern6 , $str,$match6);
$first=$match6[0];
foreach($first as $val){
    preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
    $ff=$num[1];
    foreach($ff as $aa){
        print_r($aa);
    }
    
    echo '<br>';
}
echo '<br>';

$pattern7 = '/<td class="wh-7 .*?">.*?<\/td>/is';
preg_match_all($pattern7 , $str,$match7);
$first=$match7[0];
foreach($first as $val){
    preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
    //print_r($num);
    $ff=$num[1];
    foreach($ff as $aa){
        print_r($aa);
    }
    echo'<pre>';
    echo '<br>';
}



?>