<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pemasok</title>
    <link rel="stylesheet" href="../src/output.css">

</head>


<body>
    <?php include "../index.php"?>
    <main class="grid grid-cols-1 max-w-4xl ml-80">
        <div class="flex justify-between place-items-center mt-16 mb-6">
            <h2 class="font-sans font-semibold text-sky-500 text-3xl">Tambah Data Pemasok</h2>
            <button type="button" onclick="window.location.href = '/crud_perusahaan/pemasok/tampil_pemasok.php'"
                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-3 text-center me-2 mb-2">Kembali</button>

        </div>
        <form action="proses_tambah_pemasok.php" method="POST">
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="nama_barang">Nama
                    Barang</label>
                <input type="text" name="nama_barang" id="nama_barang"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="stok">Stok</label>
                <input type="text" name="stok" id="stok"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    for="persediaan_bahan_baku">Persediaan Bahan Baku</label>
                <input type="text" name="persediaan_bahan_baku" id="persediaan_bahan_baku"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="harga_jual">Harga
                    Jual</label>
                <input type="text" name="harga_jual" id="harga_jual"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    for="pengiriman">Pengiriman</label>
                <input type="text" name="pengiriman" id="pengiriman"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <div class="mt-2">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="kode_pesanan">Kode
                    Pesanan</label>
                <input type="text" name="kode_pesanan" id="kode_pesanan"
                    class="bg-gray-50 border focus:ring-4 border-sky-400 text-gray-900 text-sm rounded-lg focus:ring-sky-200 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-200 dark:focus:border-blue-500">
            </div>
            <button type="submit" id="submit"
                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-6 py-3 text-center me-2 mb-2 mt-5">Tambah</button>
        </form>
    </main>

</body>

</html>