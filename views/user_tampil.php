<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Kelola User</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>

                        </thead>
                        <tbody>
                          <tr>
                              <th>No.</th><th>Nama User</th><th>Username</th><th>Email</th><th>Keterangan</th><th>AKSI</th>
                          </tr>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM user";
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
									                  <td><?= $data['nama'] ?></td>
									                  <td><?= $data['username'] ?></td>
									                  <td><?= $data['email'] ?></td>
                                    <td><?= $data['ket'] ?> </td>
                                    <td>
                                        <a href="?page=user&actions=edit&uid=<?= $data['username'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                    </td>
                                </tr>

                                <!--Tutup Perulangan data-->
                            <?php } ?>

                        </tbody>

                    </table>

                    <br><label class="col-sm-12 control-label"><center><strong>PROFIL KELOMPOK<br><br>
                    <p align="center"><img src="img/adeliana.jpg"></img></p>
                    <label class="col-sm-12 control-label"><center><strong>NIM : 17220387<br> NAMA : ADELIANA PUTRI<br> KELAS : SOURCE 5<br> AGAMA : ISLAM<br> JENIS KELAMIN : PEREMPUAN<br><br><br></strong></center></label>

                    <p align="center"><img src="img/agung.jpg"></img></p>
                    <label class="col-sm-12 control-label"><center><strong>NIM : 17220389<br> NAMA : AGUNG GUNAWAN<br> KELAS : SOURCE 5<br> AGAMA : ISLAM<br> JENIS KELAMIN : LAKI-LAKI<br><br><br></strong></center></label>

                    <p align="center"><img src="img/ega.jpg"></img></p>
                    <label class="col-sm-12 control-label"><center><strong>NIM : 17220395<br> NAMA : EGA SUHENDRA<br> KELAS : SOURCE 5<br> AGAMA : ISLAM<br> JENIS KELAMIN : LAKI-LAKI</strong></center></label>
                </div>
            </div>

        </div>
    </div>
</div>
