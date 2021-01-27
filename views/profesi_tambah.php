<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Masa Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="profesi" class="col-sm-3 control-label">Profesi</label>
                            <div class="col-sm-9">
                                <input type="text" name="profesi" class="form-control" id="inputEmail3" placeholder="Inputkan Profesi Pegawai" required>
                            </div>
                        </div>
                         
                         <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pegawai" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_berhenti" class="col-sm-3 control-label">Tanggal Berhenti</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_berhenti" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Berhenti Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="masa_jabatan" class="col-sm-3 control-label">Masa Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="masa_jabatan" class="form-control" id="inputPassword3" placeholder="Inputkan Masa Jabatan Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Masa Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=profesi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Masa Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $profesi=$_POST['profesi'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $tgl_masuk=$_POST['tgl_masuk'];
    $tgl_berhenti=$_POST['tgl_berhenti'];
    $masa_jabatan=$_POST['masa_jabatan'];
    $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO profesi VALUES ('','$profesi','$nama_pegawai','$tgl_masuk','$tgl_berhenti','$masa_jabatan','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=profesi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
