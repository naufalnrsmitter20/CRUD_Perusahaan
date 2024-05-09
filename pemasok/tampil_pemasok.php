<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">

</head>

<body>
    <?php include "../index.php"?>

    <main class="ml-80 max-w-7xl">
        <div class="flex justify-between place-items-center mt-16 mb-6">
            <h2 class="font-sans font-semibold text-sky-500 text-3xl">Data Pemasok</h2>
            <button type="button" onclick="window.location.href = '/crud_perusahaan/pemasok/tambah_pemasok.php'"
                class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-3 text-center me-2 mb-2">Tambah
                Pemasok</button>

        </div>

        <table class="w-full text-sm text-left border border-gray-400 rtl:text-right text-gray-500 dark:text-gray-400">
            <thead
                class="text-sm border border-gray-400 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="bg-sky-200">
                    <th class="px-6 py-3 border-e border-gray-400 text-center">No</th>
                    <th class="px-6 py-3 border-e border-gray-400 text-center">Nama Barang</th>
                    <th class="px-6 py-3 border-e border-gray-400 text-center">Stok</th>
                    <th class="px-6 py-3 border-e border-gray-400 text-center">Persediaan Bahan Baku</th>
                    <th class="px-6 py-3 border-e border-gray-400 text-center">Harga Jual</th>
                    <th class="px-6 py-3 border-e border-gray-400 text-center">Pengiriman</th>
                    <th class="px-6 py-3 border-e border-gray-400 text-center">Kode Pesanan</th>
                    <th class="px-6 py-3 border-e border-gray-400 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include_once("connect.php");
                $querys = pg_query("SELECT * FROM pemasok");
                $no = 0;
                while ($data = pg_fetch_assoc($querys)) {
                    $no++;
                    ?>
                <tr class="bg-sky-50 border-b border-gray-400 dark:bg-gray-800 text-base font-medium">
                    <td class="px-6 py-3  border-e border-gray-400 text-center"><?=$no?></td>
                    <td class="px-6 py-3  border-e border-gray-400 text-center"><?=$data["nama_barang"] ?></td>
                    <td class="px-6 py-3  border-e border-gray-400 text-center"><?=$data["stok"] ?></td>
                    <td class="px-6 py-3  border-e border-gray-400 text-center"><?=$data["persediaan_bahan_baku"] ?>
                    </td>
                    <td class="px-6 py-3  border-e border-gray-400 text-center"><?=$data["harga_jual"] ?></td>
                    <td class="px-6 py-3  border-e border-gray-400 text-center"><?=$data["pengiriman"] ?></td>
                    <td class="px-6 py-3  border-e border-gray-400 text-center"><?=$data["kode_pesanan"] ?></td>
                    <td class="flex gap-2 px-6 py-3 justify-center">
                        <a class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            href="ubah_pemasok.php?id_pemasok=<?=$data['id_pemasok']?>">Edit</a>
                        <a class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            href="hapus_pemasok.php?id_pemasok=<?=$data["id_pemasok"]?>"
                            onclick="return confirm('Yakin Ingin menghapus data <?=$data['nama_barang']?>?')">Hapus</a>
                    </td>
                </tr>
                <?php    
                }
                ?>
            </tbody>
        </table>
    </main>

</body>

</html>