<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_masker where id_produk = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='data_masker.php'; </script>";

?>