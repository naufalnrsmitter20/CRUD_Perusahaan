<?php
if($_POST){
    $nama_proyek=$_POST['nama_proyek'];
    $tanggal_mulai=strtotime($_POST['tanggal_mulai']);
    $tanggal_selesai=strtotime($_POST['tanggal_selesai']);
    $jumlah_pekerja=$_POST['jumlah_pekerja'];
    if(empty($nama_proyek)){
        echo "<script>alert('nama proyek tidak boleh kosong');location.href='proyek_baru.php';</script>";

    } elseif(empty($tanggal_mulai)){
        echo "<script>alert('tanggal mulai tidak boleh kosong');location.href='proyek_baru.php';</script>";
    } elseif(empty($tanggal_selesai)){
        echo "<script>alert('tanggal selesai tidak boleh kosong');location.href='proyek_baru.php';</script>";
    } elseif(empty($jumlah_pekerja)){
        echo "<script>alert('jumlah pekerja tidak boleh kosong');location.href='proyek_baru.php';</script>";
    } else {
        include "koneksi.php";
        $sql = "insert into proyek values ($tanggal_mulai, $tanggal_selesai, '".$nama_proyek."',$jumlah_pekerja)";
        $pro=pg_query($conn, $sql);
        if($pro){
            echo "<script>alert('Sukses menambahkan proyek');location.href='proyek.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan proyek');location.href='proyek_baru.php';</script>";
        }
    }
}
?>
