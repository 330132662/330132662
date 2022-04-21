<?php
$a = [9, 9, 9, 9, 9, 9, 9];
$b = [9, 9, 9, 9];
//addTwoNumbers($a ,$b);
function addTwoNumbers($l1, $l2)
{
    var_dump($l1);
    var_dump($l2);
    // 拆分成字符串
    $astr = implode("", $l1);
    $bStr = implode("", $l2);

    $amount = strrev($astr + $bStr);
    var_dump($amount);

}

lengthOfLongestSubstring("pwwkew");//kew
//                        012345
function lengthOfLongestSubstring($s)
{
    $n = 0;

    $length = strlen($s);
    $temp = '';
    for ($t = 0; $t < $length; $t++) {
//        echo "当前值" . $temp . ",,";
        if ($temp != "") {
            $s1 = $temp;
        } else {
            $s1 = substr($s, 0, $t);//当前之前的所有
        }

        $s2 = substr($s, $t, 1); //  当前
        if ($s1 != "" && $s2 != "") {
            echo $t . ":S1:[" . $s1 . "]比S2[" . $s2 . "]：";
            if (false === strpos($s1, $s2)) {
                $temp = ($s1 . $s2);
//                echo "结果" . $temp;
            } else {
                echo "重置,";
                $temp = $s2;

            }
            echo $t . "的值[" . $temp . "]<br/>";

        }

    }

//    echo $temp;
    exit();

    //  如果n!= n+1 count++  ;  n == n+1 : count = 0
    /*echo substr($s, 0,1)."#" ;
  echo substr($s, 1,1)."#";
  echo substr($s, 3)."#" ;
     echo substr($s, 4)."#" ;
     echo substr($s,5)."#" ;*/
}