<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Proyek</h3>
    <form action="proses_proyek_baru.php" method="post">
        Nama Proyek :
        <input type="text" name="nama_proyek" value="" class="form-control">
        Tanggal Mulai Proyek : 
        <input type="date" name="tanggal_mulai" value="" class="form-control">
        Tanggal Selesai Proyek : 
        <input type="date" name="tanggal_selesai" value="" class="form-control">
        Jumlah Pekerja Proyek : 
        <input type="number" name="jumlah_pekerja" value="" class="form-control"><br></br>
        <input type="submit" name="simpan" value="Tambah Proyek" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
