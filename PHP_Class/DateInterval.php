<?php
$start_date = date_create("2021-01-01");
$end_date   = date_create("2021-01-05"); // If you want to include this date, add 1 day

$interval   = DateInterval::createFromDateString('1 day');

$daterange  = new DatePeriod($start_date, $interval ,$end_date);

var_dump($start_date);

echo '<br>';

foreach($daterange as $date1){

   echo $date1->format('Y-m-d').'<br>';
}
 
echo '<br>';

// reverse the array

$daterange = array_reverse(iterator_to_array($daterange));
         
foreach($daterange as $date1){
   echo $date1->format('Y-m-d').'<br>';
}
?>