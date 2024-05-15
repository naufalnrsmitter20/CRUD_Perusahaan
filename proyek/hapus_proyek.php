<?php 
    if($_GET['id_proyek']){
        include "koneksi.php";
        $qry_hapus=pg_query($conn,"delete from proyek where id_proyek='".$_GET['id_proyek']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus proyek');location.href='proyek.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus proyek');location.href='proyek.php';</script>";
        }
    }
?>
