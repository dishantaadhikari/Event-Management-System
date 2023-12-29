<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect('localhost', 'root', '', 'gcuems_db');
if (!$con) {
    echo 'please check your Database connection';
}
// else{
//     echo "Connection Successfull";
// }

?>