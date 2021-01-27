<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM profesi WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Masa Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="profesi" class="col-sm-3 control-label">Profesi</label>
                            <div class="col-sm-9">
                                <input type="text" name="profesi" value="<?=$data['profesi']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Profesi Pegawai" required>
                            </div>
                        </div>
                         
                         <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pegawai" value="<?=$data['nama_pegawai']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" value="<?=$data['tgl_masuk']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_berhenti" class="col-sm-3 control-label">Tanggal Berhenti</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_berhenti" value="<?=$data['tgl_berhenti']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Berhenti Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="masa_jabatan" class="col-sm-3 control-label">Masa Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="masa_jabatan" value="<?=$data['masa_jabatan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Masa Jabatan Pegawai" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Masa Pegawai</button>
                            </div>
                        </div>
                    </form>

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
    $sql="UPDATE profesi SET profesi='$profesi',nama_pegawai='$nama_pegawai',tgl_masuk='$tgl_masuk',tgl_berhenti='$tgl_berhenti',masa_jabatan='$masa_jabatan',
    keterangan='$keterangan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=profesi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>
