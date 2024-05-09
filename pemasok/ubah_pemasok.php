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
    <link rel="stylesheet" href="../src/output.css">

</head>

<body>
    <?php include "../index.php"?>

    <main class="grid grid-cols-1   max-w-4xl ml-80">
        <div class="flex justify-between place-items-center mt-16 mb-6">
            <h2 class="font-sans font-semibold text-sky-500 text-3xl">Ubah Data Pemasok</h2>
            <button type="button" onclick="window.location.href = '/crud_perusahaan/pemasok/tampil_pemasok.php'"
                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-3 text-center me-2 mb-2">Kembali</button>

        </div>
        <form action="proses_ubah_pemasok.php" method="POST">
            <input type="hidden" name="id_pemasok" value="<?=$data_set["id_pemasok"]?>">
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="nama_barang">Nama
                    Barang</label>
                <input type="text" name="nama_barang" value="<?=$data_set["nama_barang"]?>" id="nama_barang"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="stok">Stok</label>
                <input type="text" name="stok" value="<?=$data_set["stok"]?>" id="stok"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    for="persediaan_bahan_baku">Persediaan Bahan Baku</label>
                <input type="text" name="persediaan_bahan_baku" value="<?=$data_set["persediaan_bahan_baku"]?>"
                    id="persediaan_bahan_baku"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="harga_jual">Harga
                    Jual</label>
                <input type="text" name="harga_jual" value="<?=$data_set["harga_jual"]?>" id="harga_jual"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    for="pengiriman">Pengiriman</label>
                <input type="text" name="pengiriman" value="<?=$data_set["pengiriman"]?>" id="pengiriman"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="kode_pesanan">Kode
                    Pesanan</label>
                <input type="text" name="kode_pesanan" value="<?=$data_set["kode_pesanan"]?>" id="kode_pesanan"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <button type="submit" id="ubah"
                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-6 py-3 text-center me-2 mb-2 mt-5">Ubah</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>