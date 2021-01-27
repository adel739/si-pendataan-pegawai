<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pegawai</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pegawai WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">

                    <div class="text-center">
                        <h2>Sistem Informasi Data Pegawai Rumah Sakit Umum Daerah H. Abdul Manan Simatupang Kisaran </h2>
                        <h4>Jalan Sisingamangaraja No.315, Kisaran, Kota Kisaran Barat <br> Kabupaten Asahan, Sumatera Utara, Kode Pos : 21211</h4>
                        <hr>
                        <h3>DATA PEGAWAI</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Ruangan</td> <td><?= $data['ruangan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pegawai</td> <td><?= $data['nama_pegawai'] ?></td>
                                </tr>
                                <tr>
                                    <td><center>Nomor Telepon</center></td> <td><strong><?= $data['no_telepon'] ?> <br> <?= $data['nip'] ?> <br> <?= $data['alamat'] ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Profesi</td> <td><?= $data['profesi'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
								<tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                                </tr>
								<tr>
                                    <td>Agama</td> <td><?= $data['agama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td> <td><?= $data['status'] ?></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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