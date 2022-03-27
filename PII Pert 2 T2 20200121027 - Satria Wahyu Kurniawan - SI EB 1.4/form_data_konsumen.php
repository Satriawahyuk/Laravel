<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_konsumen where id_pembeli = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA KONSUMEN</h3>
</div>
	<div class="form-group">
	<label>Tanggal Transaksi :</label>
	<input type="hidden" name="id_pembeli" class="form-control" value="<?php echo"$rs[id_pembeli]" ?>">
	<input type="date" name="tgl_transaksi" class="form-control" value="<?php echo"$rs[tgl_transaksi]" ?>">
	</div>

    <div class="form-group">
	<label>Jenis Masker :</label>
	<input type="text" name="merek" class="form-control" value="<?php echo"$rs[merek]" ?>">
	</div>

	<div class="form-group">
	<label>Nama Konsumen :</label>
	<input type="text" name="nm_konsumen" class="form-control" value="<?php echo"$rs[nm_konsumen]" ?>">
	</div>

    <div class="form-group">
	<label>Nama Masker :</label>
	<input type="text" name="nm_produk" class="form-control" value="<?php echo"$rs[nm_produk]" ?>">
	</div>

    <div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control" value="<?php echo"$rs[harga]" ?>">
	</div>

	<div class="form-group">
	<label>Jumlah :</label>
	<input type="text" name="jumlah" class="form-control" value="<?php echo"$rs[jumlah]" ?>">
	</div>

	<div class="form-group">
	<label>Total :</label>
	<input type="text" name="total" class="form-control" value="<?php echo"$rs[total]" ?>">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_konsumen set tgl_transaksi='$_POST[tgl_transaksi]', merek='$_POST[merek]', nm_konsumen='$_POST[nm_konsumen]', nm_produk='$_POST[nm_produk]', harga='$_POST[harga]', jumlah='$_POST[jumlah]', total='$_POST[total]' where id_pembeli='$_POST[id_pembeli]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='data_konsumen.php'; </script>";
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
<h3 class="h4 text-gray-900 mb 4">INPUT DATA KONSUMEN</h3>
</div>
	<div class="form-group">
	<label>Tanggal Transaksi :</label>
	<input type="date" name="tgl_transaksi" class="form-control">
	</div>

    <div class="form-group">
	<label>Merek :</label>
	<input type="text" name="merek" class="form-control">
	</div>

	<div class="form-group">
	<label>Nama Konsumen :</label>
	<input type="text" name="nm_konsumen" class="form-control">
	</div>

    <div class="form-group">
	<label>Nama Masker:</label>
	<input type="text" name="nm_produk" class="form-control">
	</div>

    <div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control">
	</div>

	<div class="form-group">
	<label>Jumlah :</label>
	<input type="text" name="jumlah" class="form-control">
	</div>

	<div class="form-group">
	<label>total :</label>
	<input type="text" name="total" class="form-control">
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into tbl_konsumen (tgl_transaksi, merek, nm_konsumen, nm_produk, harga, jumlah, total) values ('$_POST[tgl_transaksi]', '$_POST[merek]', '$_POST[nm_konsumen]', '$_POST[nm_produk]', '$_POST[harga]', '$_POST[jumlah]','$_POST[total]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='data_konsumen.php'; </script>";
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






