<?php 
    include_once("connect.php");
    if($_GET["id_pemasok"]){
        $insert = pg_query("DELETE FROM pemasok WHERE id_pemasok = '".$_GET["id_pemasok"]."'");
        if($insert){
            echo "<script>alert('Berhasil Menghapus Data');location.href='tampil_pemasok.php';</script>";
        } else {
            echo "<script>alert('Gagal Menghapus Data');location.href='tampil_pemasok.php';</script>";
        }
    }
?>