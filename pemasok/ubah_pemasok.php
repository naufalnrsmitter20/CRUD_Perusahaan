<?php 
include_once("connect.php");

if(isset($_GET["id_pemasok"]) && !empty($_GET["id_pemasok"])) {
    $querys_pemasok = pg_query($conn, "SELECT * FROM pemasok WHERE id_pemasok = '".$_GET["id_pemasok"]."'");
    if($querys_pemasok){
        $data_set = pg_fetch_assoc($querys_pemasok);
    } else {
        echo "<script>alert('Data tidak ditemukan');location.href='tampil_pemasok.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Pemasok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="mt-5 col-6 mx-auto">
        <form action="proses_ubah_pemasok.php" method="POST">
            <input type="hidden" name="id_pemasok" value="<?=$data_set["id_pemasok"]?>">
            <div class="mt-2">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" value="<?=$data_set["nama_barang"]?>" id="nama_barang"
                    class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="stok">Stok</label>
                <input type="text" name="stok" value="<?=$data_set["stok"]?>" id="stok"
                    class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="persediaan_bahan_baku">Persediaan Bahan Baku</label>
                <input type="text" name="persediaan_bahan_baku" value="<?=$data_set["persediaan_bahan_baku"]?>"
                    id="persediaan_bahan_baku" class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="harga_jual">Harga Jual</label>
                <input type="text" name="harga_jual" value="<?=$data_set["harga_jual"]?>" id="harga_jual"
                    class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="pengiriman">Pengiriman</label>
                <input type="text" name="pengiriman" value="<?=$data_set["pengiriman"]?>" id="pengiriman"
                    class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="kode_pesanan">Kode Pesanan</label>
                <input type="text" name="kode_pesanan" value="<?=$data_set["kode_pesanan"]?>" id="kode_pesanan"
                    class="form-control border border-warning">
            </div>
            <button type="submit" id="ubah" class="btn btn-warning mt-3">Ubah</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>