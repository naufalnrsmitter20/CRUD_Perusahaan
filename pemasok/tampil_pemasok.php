<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="col-8 mx-auto mt-5">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Persediaan Bahan Baku</th>
                    <th>Harga Jual</th>
                    <th>Pengiriman</th>
                    <th>Kode Pesanan</th>
                    <th>Aksi</th>
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
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data["nama_barang"] ?></td>
                    <td><?=$data["stok"] ?></td>
                    <td><?=$data["persediaan_bahan_baku"] ?></td>
                    <td><?=$data["harga_jual"] ?></td>
                    <td><?=$data["pengiriman"] ?></td>
                    <td><?=$data["kode_pesanan"] ?></td>
                    <td class="d-flex gap-2 justify-content-center">
                        <a class="btn btn-warning" href="ubah_pemasok.php?id_pemasok=<?=$data['id_pemasok']?>">Edit</a>
                        <a class="btn btn-danger" href="hapus_pemasok.php?id_pemasok=<?=$data["id_pemasok"]?>"
                            onclick="return confirm('Yakin Ingin menghapus data <?=$data['nama_barang']?>?')">Hapus</a>
                    </td>
                </tr>
                <?php    
                }
                ?>
            </tbody>
        </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>