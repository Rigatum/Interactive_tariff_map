<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$pqr1_ip = "127.0.0.1";
$par2_name = "u1706490_default";
$par3_p = "zptEzH6OzR7K291F";
$par4_db = "u1706490_default";

$induction = mysqli_connect($pqr1_ip, $par2_name, $par3_p, $par4_db);
mysqli_set_charset($induction, 'utf8' ) ;
if ($induction == false)
{
    echo "Ошибка подключения";
}

?>