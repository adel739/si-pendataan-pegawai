<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Masa Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM profesi WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Profesi</td> <td><?= $data['profesi'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pegawai</td> <td><?= $data['nama_pegawai'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Berhenti</td> <td><?= $data['tgl_berhenti'] ?></td>
                        </tr>
                        <tr>
                            <td>Masa Jabatan</td> <td><?= $data['masa_jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=profesi&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Masa Pegawai </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

