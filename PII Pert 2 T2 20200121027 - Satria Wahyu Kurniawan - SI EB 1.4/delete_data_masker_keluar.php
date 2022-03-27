<?php
include"koneksi.php";
mysqli_query($con,"delete from tbl_masker_keluar where id_masker_keluar = '$_GET[id]'");

echo"<script language = 'JavaScript'> confirm('Data Berhasil Dihapus!');
	document.location='data_masker_keluar.php'; </script>";

?>