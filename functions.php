<?php
function getYears($start_date){
    $days = '365';
    $start_date = new DateTime($start_date.' 00:00:00');
    $end_date = new DateTime(date("Y/m/d",strtotime("+$days days")));
    $dd = date_diff($start_date,$end_date);
    return"$dd->y year(s)";
}

function getYMD($start_date){
    $days = '365';
    $start_date = new DateTime($start_date.' 00:00:00');
    $end_date = new DateTime(date("Y/m/d",strtotime("+$days days")));
    $dd = date_diff($start_date,$end_date);
   return "$dd->y year(s) $dd->m month(s) $dd->d day(s)";
}
?>
