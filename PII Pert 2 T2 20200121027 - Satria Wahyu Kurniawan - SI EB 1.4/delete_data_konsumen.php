<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_konsumen where id_pembeli = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='data_konsumen.php'; </script>";

?>