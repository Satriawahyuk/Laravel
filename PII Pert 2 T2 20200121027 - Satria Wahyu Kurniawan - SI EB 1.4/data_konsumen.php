<html>
<head>
    <title>Ilfeel Mask by Rissan.id</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<div class="row justify-content-center">
	<div class="col-xl-12 col-lg-12 col-md-12">
	<div class="card shadow-sm my-0">
	<div class="card-body p-4">
	<div class="row">

	<div class="col-lg-4">
		<?php 
		include"form_data_konsumen.php";
		?>
	</div>

	<div class="col-lg-8">

		<form action="data_konsumen.php" method="GET">
		<div class="Form-Group">
			<input type="date" name="dari" class="col-lg-3"> s/d 
			<input type="date" name="sampai" class="col-lg-3">
			<button type="submit" value="cari" class="btn btn-sm btn-info mb-2 mt-1">Searching Data</button>
			<a href="data_konsumen_cetak.php" target="_blank" class="btn btn-sm btn-success mb-2 mt-1">Print Data</a>
		</div>
	</form>

		<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<td>No.</td>
				<td>Tanggal Transaksi</td>
				<td>Jenis Masker</td>
				<td>Nama Konsumen</td>
				<td>Nama Produk</td>
				<td>Harga</td>
				<td>Jumlah</td>
				<td>Total</td>
				<td>Action</td>
			<tr>		
			</thead>
			<tbody>
	<?php
		include"koneksi.php";
		$no=1;

		if(isset($_GET['dari']) && isset($_GET['sampai'])){
		$dari = $_GET['dari'];
		$sampai = $_GET['sampai'];
		$sqls = mysqli_query($con,"Select * from tbl_konsumen where tgl_transaksi between '$dari' AND '$sampai' ");
		}
		else{
		$sqls = mysqli_query($con,"Select tbl_konsumen.*, tbl_masker.* from tbl_konsumen JOIN tbl_masker ON tbl_konsumen.nm_produk = tbl_masker.nm_produk  ");
		}
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td><?php echo"$no"; ?></td>
			<td><?php echo"$rs[tgl_transaksi]"; ?></td>
			<td><?php echo"$rs[merek]"; ?></td>
			<td><?php echo"$rs[nm_konsumen]"; ?></td>
			<td><?php echo"$rs[nm_produk]"; ?></td>
			<td><?php echo"$rs[harga]"; ?></td>
			<td><?php echo"$rs[jumlah]"; ?></td>
			<td><?php echo"$rs[total]"; ?></td>
			<td>
				<?php echo"<a href='data_konsumen.php?id=update&&edit=$rs[id_pembeli]'>Edit</a>"; ?> | 
				
				<a href="<?php echo"delete_data_konsumen.php?id=$rs[id_pembeli]"; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')">Delete</a>
			</td>
		</tr>
	<?php $no++;	}
	?>
			</tbody>
		</table>
		</div>
	</div>

	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>

