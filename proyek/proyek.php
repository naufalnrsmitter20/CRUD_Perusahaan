<?php 
    include "header.php";
?>

<h2>Daftar Proyek</h2>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Proyek</th>
            <th>Tanggal Pelaksanaan Proyek</th>
            <th>Jumlah Pekerja</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi.php';
        $insert = pg_query($conn, "SELECT * FROM public.proyek");

        if ($insert) {
            $no = 1;
            while ($row = pg_fetch_assoc($insert)) {
                $status = (strtotime($row['tanggal_selesai']) < strtotime(date('Y-m-d'))) ? 'Sudah Selesai' : 'Done';

                echo "<tr>";
                echo "<td>{$no}</td>";
                echo "<td>{$row['nama_proyek']}</td>";
                echo "<td>".date('d-m-Y', $row['tanggal_mulai'])." - ".date('d-m-Y', $row['tanggal_selesai'])."</td>";
                echo "<td>{$row['jumlah_pekerja']}</td>";
                echo "<td>{$status}</td>";
                echo "<td>
                <a href=\"ubah_proyek.php?id_proyek={$row['id_proyek']}\" \" class='btn btn-primary'>Ubah</a>
                <a href=\"hapus_proyek.php?id_proyek={$row['id_proyek']}\" onclick=\"return confirm('Apakah anda yakin mau menghapus proyek ini?');\" class='btn btn-primary'>Hapus</a>
                </td>";
                echo "</tr>";
                $no++;
            }
            pg_free_result($insert);
        } else {
            echo "<tr><td colspan='6'>Error executing query: " . pg_last_error($conn) . "</td></tr>";
        }

        pg_close($conn);
        ?>
    </tbody>
</table>

<?php 
    include "footer.php";
?>
