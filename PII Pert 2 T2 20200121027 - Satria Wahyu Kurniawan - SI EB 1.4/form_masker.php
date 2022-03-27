<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_masker where id_produk = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA MASKER</h3>
</div>
<div class="form-group">
	<label>Tanggal Penerimaan :</label>
	<input type="date" name="tgl_penerimaan" class="form-control" value="<?php echo"$rs[tgl_penerimaan]" ?>">
	</div>

	<div class="form-group">
	<label>Jumlah :</label>
	<input type="hidden" name="id_produk" class="form-control" value="<?php echo"$rs[id_produk]" ?>">
	<input type="text" name="jumlah" class="form-control" value="<?php echo"$rs[jumlah]" ?>">
	</div>

	<div class="form-group">
	<label>Nama Produk :</label>
	<input type="text" name="nm_produk" class="form-control" value="<?php echo"$rs[nm_produk]" ?>">
	</div>

	<div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control" value="<?php echo"$rs[harga]" ?>">
	</div>

	<div class="form-group">
	<label>Merek :</label>
	<input type="text" name="merek" class="form-control" value="<?php echo"$rs[merek]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_masker set tgl_penerimaan='$_POST[tgl_penerimaan]', jumlah='$_POST[jumkah]', nm_produk='$_POST[nm_produk]', harga='$_POST[harga]', merek='$_POST[merek]' where id_produk='$_POST[id_produk]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='index.php?page=data_masker'; </script>";
}
?>



<?php
}
?>


<?php 
function Input_data(){
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA MASKER</h3>
</div>
	<div class="form-group">
	<label>Tanggal Penerimaan :</label>
	<input type="date" name="tgl_penerimaan" class="form-control" value="<?php echo"$rs[tgl_penerimaan]" ?>">
	</div>

	<div class="form-group">
	<label>Jumlah :</label>
	<input type="hidden" name="id_produk" class="form-control" value="<?php echo"$rs[id_produk]" ?>">
	<input type="text" name="jumlah" class="form-control" value="<?php echo"$rs[jumlah]" ?>">
	</div>

	<div class="form-group">
	<label>Nama Produk :</label>
	<input type="text" name="nm_produk" class="form-control" value="<?php echo"$rs[nm_produk]" ?>">
	</div>

	<div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control" value="<?php echo"$rs[harga]" ?>">
	</div>

	<div class="form-group">
	<label>Merek :</label>
	<input type="text" name="merek" class="form-control" value="<?php echo"$rs[merek]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"insert into tbl_masker (tgl_penerimaan, jumlah, nm_produk, harga, merek) values ('$_POST[tgl_penerimaan]', '$_POST[jumlah]', '$_POST[nm_produk]', '$_POST[harga]', '$_POST[merek]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_masker'; </script>";
}
?>
<?php
}
?>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$id = $_GET['id'];
if($id == "update"){
	Update_data();
}else{
	Input_data();
}
?>





