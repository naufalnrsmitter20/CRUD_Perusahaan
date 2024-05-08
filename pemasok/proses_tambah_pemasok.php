<?php 
include_once("connect.php");
if($_POST){
    $nama_barang = $_POST["nama_barang"];
    $stok = $_POST["stok"];
    $persediaan_bahan_baku = $_POST["persediaan_bahan_baku"];
    $harga_jual = $_POST["harga_jual"];
    $pengiriman = $_POST["pengiriman"];
    $kode_pesanan = $_POST["kode_pesanan"];
    if(empty($nama_barang)){
        echo "<script>alert('Nama Barang tidak boleh kosong');location.href='tambah_pemasok.php';</script>";
    } elseif(empty($stok)){
        echo "<script>alert('Stok tidak boleh kosong');location.href='tambah_pemasok.php';</script>";
    } elseif(empty($persediaan_bahan_baku)){
        echo "<script>alert('Persediaan Bahan Baku tidak boleh kosong');location.href='tambah_pemasok.php';</script>";
    } elseif(empty($harga_jual)){
        echo "<script>alert('Harga Jual tidak boleh kosong');location.href='tambah_pemasok.php';</script>";
    } elseif(empty($pengiriman)){
        echo "<script>alert('Pengiriman tidak boleh kosong');location.href='tambah_pemasok.php';</script>";
    } elseif(empty($kode_pesanan)){
        echo "<script>alert('Kode Pesanan tidak boleh kosong');location.href='tambah_pemasok.php';</script>";
    } else {
        $insert=pg_query($conn, "INSERT INTO pemasok (nama_barang, stok, persediaan_bahan_baku, harga_jual, pengiriman, kode_pesanan) VALUES ('".$nama_barang."','".$stok."', '".$persediaan_bahan_baku."','".$harga_jual."','".$pengiriman."','".$kode_pesanan."')");
        if($insert){
            echo "<script>alert('Berhasil Menambahkan Data');location.href='tampil_pemasok.php';</script>";
        } else {
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }
    }
}

?>