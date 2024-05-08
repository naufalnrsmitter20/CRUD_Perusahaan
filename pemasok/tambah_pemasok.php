<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pemasok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="col-8 mx-auto mt-5">
        <form action="proses_tambah_pemasok.php" method="POST">
            <div class="mt-2">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="persediaan_bahan_baku">Persediaan Bahan Baku</label>
                <input type="text" name="persediaan_bahan_baku" id="persediaan_bahan_baku"
                    class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="harga_jual">Harga Jual</label>
                <input type="text" name="harga_jual" id="harga_jual" class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="pengiriman">Pengiriman</label>
                <input type="text" name="pengiriman" id="pengiriman" class="form-control border border-warning">
            </div>
            <div class="mt-2">
                <label for="kode_pesanan">Kode Pesanan</label>
                <input type="text" name="kode_pesanan" id="kode_pesanan" class="form-control border border-warning">
            </div>
            <button type="submit" id="submit" class="btn btn-warning mt-3">Kirim</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>