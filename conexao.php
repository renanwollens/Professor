<?php
$link = new mysqli("localhost", "root", "", "database");
/* check connection */
if ($link->connect_errno) {
    printf("Connect failed: %s\n", $link->connect_error);
    exit();
}
mysqli_set_charset ( $link, "utf8" );
?>

