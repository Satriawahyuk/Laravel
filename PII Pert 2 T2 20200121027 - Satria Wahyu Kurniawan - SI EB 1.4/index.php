<html>
<head>
	<meta charset="UTF-8">
	<title>Ilfeel Mask by Rissan.id</title>
    <link rel="shortcut icon" href="img/Rissan.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

<div class="header" style="width: 100%">
    <img src="img/Rissan.id.png">
</div>

<div class="topnav" id="myTopnav">
		<a href="index.php">Home</a>
		<a href="1 Login Page.html" style="float: right; color: red">Log In</a>
		<a href="2 Sign Up.html" style="float: right; color: red">Sign Up</a>
		<a href="javascript:void(0);" style="font-size: 15px" class="icon" onclick="myFunction()">&#9776;</a>
	</div>


<div class="row" >
	<div class="col-xl-12 col-lg-12 col-md-12">
	<div class="card shadow-sm my-0">
	<div class="card-body p-4">
	<div class="row">

	<div class="col-lg-3" style="color: #deb887">
		<h3 align="center">Menu</h3>
  			<ul>
    			<li><a href="index.php?page=data_produk">Kelola Masker</a></li>
    			<li><a href="index.php?page=data_masker_masuk">Stok Masker Masuk</a></li>
     			<li><a href="index.php?page=data_masker_keluar">Stok Masker Keluar</a></li>
     			<li><a href="index.php?page=data_masker">Jenis Masker</a></li>
     			<li><a href="index.php?page=data_konsumen">Data Pembeli</a></li>
  			</ul>
		<h3 align="center">Setting</h3>
  			<ul>
    			<li><a href="#">Setting Akun</a></li>
    			<li><a href="#">Log Out</a></li>
  			</ul>
	</div>

	<div class="col-lg-9"  >
		<?php
		if (isset($_GET['page'])){
			$page = $_GET['page'];

			switch($page){
				case 'data_produk':
				include 'data_produk.php';
				break;

				case 'data_masker_masuk':
				include 'data_masker_masuk.php';
				break;

				case 'data_masker_keluar':
				include 'data_masker_keluar.php';
				break;

				case 'data_masker':
				include 'data_masker.php';
				break;

				case 'data_konsumen':
				include 'data_konsumen.php';
				break;

				default:
				echo"Maaf, Halaman Not Found";
				break;
			}
		} else{
			include"beranda.php";
		}
		?>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer">
<p align="center">Copyright &copy; Satria Wahyu Kurniawan 2022 </p></div>
</div>
</body>
</html>




