<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_masker_masuk where id_masker_masuk = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='data_masker_masuk.php'; </script>";

?>