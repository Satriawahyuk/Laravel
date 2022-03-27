<body onload="javascript:window.print()" style="margin:0 auto; width: 1000px">
<div style="margin-left:20px"></div>

<p>&nbsp;</p>

<table width="100%" cellpadding="0" cellspacing="0">
<tr>
		<td><div align="center"><font size="7">PT. Ilfeel Mask by Rissan.id</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="3">Jln. Jatibarang - Karangampel, Blok. Lungmalangwetan, Kecamatan. Karangampel, Kabupaten Indramayu 45283 - No. Telp : 083862366208</font></div></td>
	</tr>
</table><hr>

<label><font size="5"><u><center>Laporan Data Produk</center></u></font></label>

<p>&nbsp;</p>

<table style="border: 1px solid gray;" width="100%" cellspacing="0" cellpadding="0">

	<tr>
		<th style="border-right: 1px solid gray">No.</th>
		<th style="border-right: 1px solid gray">Merek Produk</th>
		<th style="border-right: 1px solid gray">Nama Produk</th>
		<th style="border-right: 1px solid gray">Harga</th>
		<th style="border-right: 1px solid gray">Stok</th>
	</tr>

	<?php
		include"koneksi.php";
		$no=1;
		$sqls = mysqli_query($con,"Select * from tbl_produk");
		while($rs = mysqli_fetch_array($sqls)){
		?>	
		<tr>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$no"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[merek]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[nm_produk]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[harga]"; ?></td>
			<td align="center" style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo"$rs[stok]"; ?></td>
		</tr>
	<?php $no++;	}
	?>
</table>

<p>&nbsp;</p>

<table align="right" cellpadding="0" cellspacing="0">
<tr><td>Indramayu, <?php echo date("d F Y") ?></td></tr>
	<tr><td>Direktur PT. Ilfeel Mask by Rissan.id
	<p><img src="Image/ttd.png" width="30%"></p>
	<u>H.Hatari M.Ag</u>
	</td></tr>
</table>




</body>