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
		include"form_data_masker_keluar.php";
		?>
	</div>

	<div class="col-lg-8">

	<form action="data_masker_keluar.php" method="GET">
	<div class="Form-Group">
			<input type="date" name="dari" class="col-lg-3"> s/d 
			<input type="date" name="sampai" class="col-lg-3">
			<button type="submit" value="cari" class="btn btn-sm btn-info mb-2 mt-1">Searching Data</button>
			<a href="data_produk_cetak.php" target="_blank" class="btn btn-sm btn-success mb-2 mt-1">Print Data</a>
		</div>
	</form>

		<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
			<tr>
				<td>No.</td>
                <td>Tanggal Keluar</td>
				<td>Jumlah</td>
				<td>Pembeli</td>
				<td>Nama Masker</td>
                <td>Merek</td>
                <td>Harga</td>
				<td>Diskon</td>
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
            $sqls = mysqli_query($con,"Select * from tbl_masker_keluar where tgl_keluar between '$dari' AND '$sampai' ");
            }
            else{
            $sqls = mysqli_query($con,"Select tbl_masker_keluar.*, tbl_produk.* from tbl_masker_keluar JOIN tbl_produk ON tbl_masker_keluar.merek = tbl_produk.merek  ");
            }
            while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td><?php echo"$no"; ?></td>
            <td><?php echo"$rs[tgl_keluar]"; ?></td>
			<td><?php echo"$rs[jumlah]"; ?></td>
			<td><?php echo"$rs[pembeli]"; ?></td>
			<td><?php echo"$rs[nm_produk]"; ?></td>
            <td><?php echo"$rs[merek]"; ?></td>
            <td><?php echo"$rs[harga]"; ?></td>
			<td><?php echo"$rs[diskon]"; ?></td>
			<td><?php echo"$rs[total]"; ?></td>
			
			<td>
				<?php echo"<a href='data_masker_keluar.php?id=update&&edit=$rs[id_masker_keluar]'>Edit</a>"; ?> | 
			
				<a href="<?php echo"delete_data_masker_keluar.php?id=$rs[id_masker_keluar]"; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')">Delete</a>
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













