<?php
function random_float($start_number = 33350896, $end_number = 9000000000000, $mul = 1000000){
     if($start_number > $end_number)
         return false;
         return mt_rand($start_number*$mul,$end_number*$mul)/$mul;
}
?>           