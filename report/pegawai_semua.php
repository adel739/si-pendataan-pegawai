<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Pegawai</title>
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
                        <h3>SELURUH DATA PEGAWAI</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
                                    <th>No.</th>
                                    <th>Ruangan</th>
                                    <th>Nama Pegawai</th>
                                    <th>Nomor Telepon</th>
                                    <th>Profesi</center></th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pegawai";
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
                                    <td><?= $data['ruangan'] ?></td>
                                    <td><?= $data['nama_pegawai'] ?></td>
                                    <td><?= $data['no_telepon'] ?> <br> <?= $data['nip'] ?> <br> <?= $data['alamat'] ?></td>
                                    <td><?= $data['profesi'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="10" class="text-right">
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