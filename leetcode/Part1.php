<?php

$nums = [2,7,11,15] ; $target = 9 ;
    twoSum($nums,$target);
 
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = [] ;
        for($i= 0 ;$i<count($nums) ;$i++){
            for($j= 0 ;$j<count($nums) ;$j++){
               if($i !=$j){ // 不能和自己相加
                if(($nums[$i] + $nums[$j]) == $target){
                    if(!in_array($i ,$result)){
                      $result[] = $i ;
                    }
  
                    if(!in_array($j ,$result)){
                      $result[] = $j ;
                    }
             
               }
               } 
          
            }
        }

         var_dump($result);
        //  return $result; //错误
    }


?>