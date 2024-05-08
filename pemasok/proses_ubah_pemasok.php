<?php 
if($_POST){
    $id_pemasok = $_POST["id_pemasok"];
    $nama_barang = $_POST["nama_barang"];
    $stok = $_POST["stok"];
    $persediaan_bahan_baku = $_POST["persediaan_bahan_baku"];
    $harga_jual = $_POST["harga_jual"];
    $pengiriman = $_POST["pengiriman"];
    $kode_pesanan = $_POST["kode_pesanan"];
    if(empty($nama_barang)){
        echo "<script>alert('Nama Barang tidak boleh kosong');location.href='ubah_pemasok.php';</script>";
    } elseif(empty($stok)){
        echo "<script>alert('Stok tidak boleh kosong');location.href='ubah_pemasok.php';</script>";
    } elseif(empty($persediaan_bahan_baku)){
        echo "<script>alert('Persediaan Bahan Baku tidak boleh kosong');location.href='ubah_pemasok.php';</script>";
    } elseif(empty($harga_jual)){
        echo "<script>alert('Harga Jual tidak boleh kosong');location.href='ubah_pemasok.php';</script>";
    } elseif(empty($pengiriman)){
        echo "<script>alert('Pengiriman tidak boleh kosong');location.href='ubah_pemasok.php';</script>";
    } elseif(empty($kode_pesanan)){
        echo "<script>alert('Kode Pesanan tidak boleh kosong');location.href='ubah_pemasok.php';</script>";
    } else {
        include_once("connect.php");
        $update = pg_query($conn, "UPDATE pemasok SET nama_barang='".$nama_barang."', stok='".$stok."', persediaan_bahan_baku='".$persediaan_bahan_baku."', harga_jual='".$harga_jual."', pengiriman='".$pengiriman."', kode_pesanan='".$kode_pesanan."' WHERE id_pemasok = '".$id_pemasok."' ");
        if($update){
            echo "<script>alert('Berhasil Mengubah Data');location.href='tampil_pemasok.php';</script>";
        } else {
            echo "<script>alert('Gagal Mengubah Data');location.href='ubah_pemasok.php';</script>";
        }
    }
}

?>