<?php
$conn=pg_connect("host=localhost port=5432 dbname=tugas_php user=postgres password=Sy4mil080808d_a");
/* check connection */
if (!$conn) {
    echo "<h1>Doesn’t work</h1>";
}
?>
