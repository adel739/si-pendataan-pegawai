<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruangan" class="col-sm-3 control-label">Ruangan</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruangan" class="form-control">
                                    <option value="Ruang Rawat">Ruang Rawat</option>
                                    <option value="Ruang Dokter">Ruang Dokter</option>
                                    <option value="Ruang Umum">Ruang Umum</option>
                                    <option value="Ruang BPJS">Ruang BPJS</option>
                                    <option value="Ruang Dapur">Ruang Dapur</option>
                                    <option value="Ruang Administrasi">Ruang Administrasi</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_telepon" class="col-sm-3 control-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telepon" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Telepon Pegawai" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat Pegawai" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Induk Pegawai" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_pegawai" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pegawai" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="profesi" class="col-sm-3 control-label">Profesi</label>
                            <div class="col-sm-9">
                                <input type="text" name="profesi"class="form-control" id="inputEmail3" placeholder="Inputkan Profesi Pegawai" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputPassword3" placeholder="Inputkan Jenis Kelamin Pegawai" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" class="form-control" id="inputPassword3" placeholder="Inputkan Agama Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Single">Single</option>
									<option value="Menikah">Menikah</option>
									<option value="Janda/Duda">Janda/Duda</option>
								</select>
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
                                    <span class="fa fa-save"></span> Simpan Data Pegawai</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=pegawai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $ruangan=$_POST['ruangan'];
	$no_telepon=$_POST['no_telepon'];
	$alamat=$_POST['alamat'];
	$nip=$_POST['nip'];
    $nama_pegawai=$_POST['nama_pegawai'];
	$profesi=$_POST['profesi'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
	$agama=$_POST['agama'];
    $status=$_POST['status'];
	$keterangan=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO pegawai VALUES ('','$ruangan','$no_telepon','$alamat','$nip','$nama_pegawai','$profesi','$tgl_lahir','$jenis_kelamin','$agama','$status','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
