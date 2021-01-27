<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Masa Pegawai</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">

                    <div class="text-center">
                        <h2>Sistem Informasi Data Pegawai Rumah Sakit Umum Daerah H. Abdul Manan Simatupang Kisaran </h2>
                        <h4>Jalan Sisingamangaraja No.315, Kisaran, Kota Kisaran Barat <br> Kabupaten Asahan, Sumatera Utara, Kode Pos : 21211</h4>
                        <hr>
                        <h3>SELURUH DATA MASA PEGAWAI</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
                                    <th>No.</th>
                                    <th>Profesi</th>
                                    <th>Nama Pegawai</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Berhenti</th>
                                    <th>Masa Jabatan</th>
                                    <th>Keterangan</th>
                                </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM profesi";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['profesi'] ?></td>
                                    <td><?= $data['nama_pegawai'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['tgl_berhenti'] ?></td>
                                    <td><?= $data['masa_jabatan'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Umum, S.Kom<strong></u><br>
                                        NIP.102871291416712
                                    </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
