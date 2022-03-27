<?php 
function Update_data(){
include"koneksi.php";
$sqls = mysqli_query($con,"Select * from tbl_produk where id_produk = $_GET[edit]");
$rs = mysqli_fetch_array($sqls);
?>
<form method="POST">
<div class="text-center">
<h3 class="h4 text-gray-900 mb 4">FORM EDIT DATA PRODUK</h3>
</div>
	<div class="form-group">
	<label>Merek Produk :</label>
	<input type="hidden" name="id_produk" class="form-control" value="<?php echo"$rs[id_produk]" ?>">
	<input type="text" name="merek" class="form-control" value="<?php echo"$rs[merek]" ?>">
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
	<label>Sisa Stok :</label>
	<input type="text" name="stok" class="form-control" value="<?php echo"$rs[stok]" ?>">
	</div>

	<div class="form-group">
	<label>Keterangan Produk :</label>
	<textarea name="ket" class="form-control"><?php echo"$rs[ket]" ?></textarea>
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Update Data">
	</div>

</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST"){
	include"koneksi.php";
	mysqli_query($con,"update tbl_produk set merek='$_POST[merek]', nm_produk='$_POST[nm_produk]', harga='$_POST[harga]', stok='$_POST[stok]', ket='$_POST[ket]' where id_produk='$_POST[id_produk]'");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Diupdate!');
	document.location='index.php?page=data_produk'; </script>";
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
<h3 class="h4 text-gray-900 mb 4">FORM INPUT DATA PRODUK</h3>
</div>
	<div class="form-group">
	<label>Merek :</label>
	<input type="text" name="merek" class="form-control">
	</div>

	<div class="form-group">
	<label>Nama Produk :</label>
	<input type="text" name="nm_produk" class="form-control">
	</div>

	<div class="form-group">
	<label>Harga :</label>
	<input type="text" name="harga" class="form-control">
	</div>

	<div class="form-group">
	<label>Sisa Stok :</label>
	<input type="text" name="stok" class="form-control">
	</div>

	<div class="form-group">
	<label>Keterangan Produk :</label>
	<textarea name="ket" class="form-control"></textarea>
	</div>

	<div class="form-group">
	<input type="submit" name="submit" class="btn btn-info" value="Simpan Data">
	</div>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	include"koneksi.php";
	mysqli_query($con, "insert into tbl_produk (merek, nm_produk, harga, stok, ket) values ('$_POST[merek]', '$_POST[nm_produk]','$_POST[harga]','$_POST[stok]','$_POST[ket]')");

	echo"<script language = 'JavaScript'> confirm('Data Berhasil Disimpan!');
	document.location='index.php?page=data_produk'; </script>";
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






