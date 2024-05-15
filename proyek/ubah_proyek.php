<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_proyek=pg_query($conn,"select * from proyek where id_proyek = ".$_GET['id_proyek']);
    $dt_proyek=pg_fetch_array($qry_get_proyek);
    ?>
    <h3>Ubah Proyek</h3>
    <form action="proses_ubah_proyek.php" method="post">
        <input type="hidden" name="id_proyek" value= 
  "<?=$dt_proyek['id_proyek']?>">
        Nama Proyek :
  <input type="text" name="nama_proyek" value=   "<?=$dt_proyek['nama_proyek']?>" class="form-control">
        Tanggal Mulai Proyek : 
  <input type="date" name="tanggal_mulai" value="<?=date('Y-m-d', $dt_proyek['tanggal_mulai'])?>" class="form-control">
        Tanggal Selesai Proyek : 
  <input type="date" name="tanggal_selesai" value="<?=date('Y-m-d', $dt_proyek['tanggal_selesai'])?>" class="form-control">
        Jumlah Pekerja Proyek : 
  <input type="number" name="jumlah_pekerja" value="<?=$dt_proyek['jumlah_pekerja']?>" class="form-control">
  <input type="submit" name="simpan" value="Ubah Proyek" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
