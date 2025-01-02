<?php

// php date .............

date_default_timezone_set("Asia/Dhaka");

echo "Today is_ ".date("D h: i: s a _ d M, Y") ."<br>";



// string to time function 

$start_date = strtotime("sunday");
$end_date = strtotime("+1 week", $start_date); // 1 week pore sunday er date ta dekhabe
echo date("d-m-y",  $end_date)."<br>";


$end_date = strtotime("+6 weeks", $start_date);

while($start_date < $end_date) {
    echo date("M d", $start_date)."<br>";
    $start_date = strtotime("+1 week", $start_date);
}


?>