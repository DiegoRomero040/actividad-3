<?php 

   function esBisiesto($año=NULL) {
    $año = ($año==NULL)? date('Y'):$año;
    return ( ($año%4 == 0 && $año%100 != 0) || $año%400 == 0 );
}
?>