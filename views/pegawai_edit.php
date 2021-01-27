<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_arsip" class="col-sm-3 control-label">Ruangan</label>
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
                            <label for="no_rak" class="col-sm-3 control-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telepon" value="<?=$data['no_telepon']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Telepon Pegawai" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputEmail3" placeholder="Alamat Pegawai" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" value="<?=$data['nip']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Induk Pegawai" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pegawai" value="<?=$data['nama_pegawai']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">Profesi</label>
                            <div class="col-sm-9">
                                <input type="text" name="profesi" value="<?=$data['profesi']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Profesi Pegawai" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengantar" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Jenis Kelamin Pegawai" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Agama Pegawai" required>
                            </div>
                        </div>


                        <!--Status-->

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
                        <!--Akhir Status-->

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pegawai</button>
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
    $sql="UPDATE pegawai SET ruangan='$ruangan',no_telepon='$no_telepon',alamat='$alamat',nip='$nip',nama_pegawai='$nama_pegawai',
	profesi='$profesi',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',status='$status',keterangan='$keterangan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>


