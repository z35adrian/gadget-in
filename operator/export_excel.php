<!DOCTYPE html>
<html>
<head>
	<title>EXPORT EXCEL DATA</title>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Gadget.xls");
	?>
</head>
<body>
	<center>
		<h2>DATA GADGET</h2>
		<h4>Drian</h4>
	</center>
	<?php 
	include 'koneksi.php';
	?>
	<table border="1" style="width: 100%">
		<tr>
			<th>No</th>
            <th>Jenis</th>
            <th>Mrek</th>
            <th>Seri</th>
            <th>Tahun Produksi</th>
            <th>RAM</th>
            <th>Processor</th>
            <th>OS</th>
            <th>SSD/HDD</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from inpo_gadget");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['jenis']; ?></td>
			<td><?php echo $data['merk']; ?></td>
			<td><?php echo $data['seri']; ?></td>
			<td><?php echo $data['tahun_produksi']; ?></td>
			<td><?php echo $data['ram']; ?></td>
            <td><?php echo $data['processor']; ?></td>
			<td><?php echo $data['os']; ?></td>
			<td><?php echo $data['ssd_hdd']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>