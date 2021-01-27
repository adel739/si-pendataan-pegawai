<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM profesi WHERE profesi ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tanggal Berhenti</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="profesi" class="col-sm-3 control-label">profesi</label>
                            <div class="col-sm-9">
								<input type="text" name="profesi" value="<?=$data['profesi']?>" class="form-control" id="inputEmail3" placeholder="Profesi" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="nama_pegawai" class="col-sm-3 control-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pegawai" value="<?=$data['nama_pegawai']?>" class="form-control" id="inputEmail3" placeholder="Nama Pegawai" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk/label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_masuk" value="<?=$data['tgl_masuk']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Masuk" readonly="true">
                            </div>
                        </div> 
						
						<div class="form-group">
                            <label for="tgl_berhenti" class="col-sm-3 control-label">Tanggal Berhenti</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_berhenti" class="form-control" id="inputEmail3" placeholder="Tanggal Berhenti">
                            </div>
                        </div> 
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Tanggal</button>
								<a href="?page=profesi&actions=tampil" class="btn btn-danger"><span class="fa fa-ban"></span> Batal</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$tglPinjam =$_POST['tgl_masuk'];
		$potTgl = substr($tgl_masuk,8,2);
		$potBln = substr($tgl_masuk,5,2);
		$potThn = substr($tgl_masuk,0,4);
	$tglKembali=$_POST['tgl_berhenti'];
		$potTglKem = substr($tgl_berhenti,8,2);
		$potBlnKem = substr($tgl_berhenti,5,2);
		$potThnKem = substr($tgl_berhenti,0,4);
	$masa_jabatan = (($potThnKem - $potThn)*360)+(($potBlnKem - $potBln)*30)+($potTglKem - $potTgl);
    //buat sql
    $sql="UPDATE profesi SET tgl_berhenti='$tgl_berhenti', masa_jabatan='$masa_jabatan' WHERE profesi='$nope'";
	$sqlArsip="UPDATE pegawai WHERE nama_pegawai='$nope'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=profesi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>