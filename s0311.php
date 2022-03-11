<!DOCTYYPE html>
<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>    
<table>
<?php

$resultStr = '';
$str = file_get_contents('https://cp.zgzcw.com/lottery/jcplayvsForJsp.action?lotteryId=26&issue=2022-03-08');
$pattern = '/<tr.*?>(.*?)<\/tr>/is';
preg_match_all($pattern , $str, $match);
$first=$match[1];
$arr = [];
foreach($first as $pp){
    
    $pattern1 = '/<td class="wh-1.*?">(.*?)<\/td>/is';
    preg_match_all($pattern1 , $pp , $match1,PREG_PATTERN_ORDER);
    $first=$match1[1];
    foreach($first as $val){
        ?>
        <tr class="success"><?php
            preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
            $ff=$num[1];
            foreach($ff as $aa){
                preg_match_all('/<i>(.*?)<\/i>/is',$aa,$ss);
                $x=$ss[1];
                foreach($x as $y){
                    ?>
                    <td><?php print_r($y);?></td>
                    <?php
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
        foreach($ff as $aa){
            ?>
            <td><?php print_r($aa);
                echo "\t";?></td>
                <?php
        }
    
    }

    $pattern4 = '/<td class="wh-4 .*?">(.*?)<\/td>/is';
    preg_match_all($pattern4 , $pp,$match4);
    $first=$match4[1];
    //print_r($first);
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $ff=$num[1];
        foreach($ff as $aa){
            ?>
            <td><?php print_r($aa);?></td>
            <?php
        
        }
        echo "\t";
    }

    $pattern6 = '/<td class="wh-6 .*?">.*?<\/td>/is';
    preg_match_all($pattern6 , $pp,$match6);
    $first=$match6[0];
    foreach($first as $val){
        preg_match_all('/<a.*?>(.*?)<\/a>/is',$val,$num);
        $ff=$num[1];
        foreach($ff as $aa){
            ?>
            <td><?php print_r($aa);?></td>
            <?php
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
        $jj=$ff[1];
        ?>
        <td><?php print_r($ii);
        echo "\t";?></td>
        <td><?php print_r($jj);
        //echo "<br>";
        ?></td>
    </tr><?php
    }
    
}

echo $resultStr;
?>
</table>
</body>
</html>