<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_masker_keluar where id_masker_keluar = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA MASKER KELUAR</h3>
</div>
	<div class="form-group">
	<label>Tanggal Keluar :</label>
    <input type="hidden" name="id_masker_keluar" class="form-control" value="<?php echo"$rs[id_masker_keluar]" ?>">
	<input type="date" name="tgl_keluar" class="form-control" value="<?php echo"$rs[tgl_keluar]" ?>">
	</div>

    <div class="form-group">
	<label>Jumlah Beli:</label>
	<input type="text" name="jml_beli" class="form-control">
	</div>

    <div class="form-group">
	<label>Pembeli :</label>
	<input type="text" name="pembeli" class="form-control">
	</div>

    <div class="form-group">
	<label>Nama Masker :</label>
	<input type="text" name="nm_produk" class="form-control">
	</div>

    <div class="form-group">
	<label>Merek :</label>
	<input type="text" name="merek" class="form-control">
	</div>

    <div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control">
	</div>

	<div class="form-group">
	<label>Diskon :</label>
	<input type="text" name="diskon" class="form-control">
	</div>

	<div class="form-group">
	<label>Total :</label>
	<textarea name="total" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_masker_keluar set tgl_keluar='$_POST[tgl_keluar]', jml_beli='$_POST[jml_beli]', pembeli='$_POST[pembeli]', nm_produk='$_POST[nm_produk]', merek='$_POST[merek]', harga='$_POST[harga]', diskon='$_POST[diskon]', total='$_POST[total]' where id_barang_keluar='$_POST[id_barang_keluar]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='data_masker_keluar.php'; </script>";
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
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA MASKER KELUAR</h3>
</div>
	<div class="form-group">
	<label>Tanggal Keluar :</label>
	<input type="date" name="tgl_keluar" class="form-control" value="<?php echo"$rs[tgl_keluar]" ?>">
	</div>

    <div class="form-group">
	<label>Jumlah Beli:</label>
	<input type="text" name="jml_beli" class="form-control">
	</div>

    <div class="form-group">
	<label>Pembeli :</label>
	<input type="text" name="pembeli" class="form-control">
	</div>

    <div class="form-group">
	<label>Nama Masker :</label>
	<input type="text" name="nm_produk" class="form-control">
	</div>

    <div class="form-group">
	<label>Merek :</label>
	<input type="text" name="merek" class="form-control">
	</div>

    <div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control">
	</div>

	<div class="form-group">
	<label>Diskon :</label>
	<input type="text" name="diskon" class="form-control">
	</div>

	<div class="form-group">
	<label>Total :</label>
	<textarea name="total" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into tbl_masker_keluar (tgl_keluar, jml_beli, pembeli, nm_produk, merek, harga, diskon, total) values ('$_POST[kd_produk]', '$_POST[pembeli]','$_POST[jml_beli]','$_POST[diskon]','$_POST[total]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='data_masker_keluar.php'; </script>";
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



