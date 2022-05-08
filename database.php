<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$pqr1_ip = "127.0.0.1";
$par2_name = "root";
$par3_p = "";
$par4_db = "tariffs";

$induction = mysqli_connect($pqr1_ip, $par2_name, $par3_p, $par4_db);

if ($induction == false)
{
    echo "Ошибка подключения";
}

?>