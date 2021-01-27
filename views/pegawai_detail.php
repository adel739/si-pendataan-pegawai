<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pegawai WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Ruangan</td> <td><?= $data['ruangan'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td> <td><?= $data['no_telepon'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>NIP</td> <td><?= $data['nip'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pegawai</td> <td><?= $data['nama_pegawai'] ?></td>
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pegawai&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pegawai </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

