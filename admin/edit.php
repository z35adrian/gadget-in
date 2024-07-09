<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Edit Gadget</title>
	<link href="../css/styles.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">EDIT GADGET</h3>
								</div>
								<div class="card-body">
									<?php
									include 'koneksi.php';
									$id = $_GET['id'];
									$data = mysqli_query($koneksi, "select * from inpo_gadget where id='$id'");
									while ($d = mysqli_fetch_array($data)) {
									?>
										<form method="POST" action="update.php" enctype="multipart/form-data">
											<div class="form-floating mb-3 ">
												<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
												<input type="text" name="jenis" placeholder="Jenis" value="<?php echo $d['jenis']; ?>" class="form-control" id="jenis">
												<label for="jenis">Jenis</label>
											</div>
											<div class="row">
												<div class="form-floating mb-3 col">
													<input type="text" name="merk" placeholder="Merk" value="<?php echo $d['merk']; ?>" class="form-control">
													<label for="merk" style="margin-left:12px">Merk</label>
												</div>
												<div class="form-floating mb-3 col">
													<input type="text" name="seri" id="seri" placeholder="Seri" value="<?php echo $d['seri']; ?>" class="form-control">
													<label for="seri" style="margin-left:12px">Seri</label>
												</div>
											</div>
											<div class="row">
												<div class="form-floating mb-3 col">
													<input type="date" name="tahun_produksi" id="tahun_produksi" placeholder="Tahun Produksi" value="<?php echo $d['tahun_produksi']; ?>" class="form-control">
													<label for="tahun_produksi" style="margin-left:12px">Tahun Produksi</label>
												</div>
												<div class="form-floating mb-3 col">
													<input type="text" placeholder="RAM" id="ram" name="ram" value="<?php echo $d['ram']; ?>" class="form-control">
													<label for="ram" style="margin-left:12px">RAM</label>
												</div>
											</div>
											<div class="form-floating mb-3 col">
												<input type="text" id="processor" name="processor" placeholder="Processor" value="<?php echo $d['processor']; ?>" class="form-control">
												<label for="processor">Processor</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="text" id="os" name="os" placeholder="OS" value="<?php echo $d['os']; ?>" class="form-control">
												<label for="os">OS</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="text" id="ssd_hdd" name="ssd_hdd" placeholder="SSD/HDD" value="<?php echo $d['ssd_hdd']; ?>" class="form-control">
												<label for="ssd_hdd">SSD/HDD</label>
											</div>
											<div class="d-flex align-items-right justify-content-between mt-2 mb-0">
												<input type="submit" value="SIMPAN" class="btn btn-primary">
												<a href="index.php" class="btn btn-danger">Kembali</a>
											</div>
										</form>
									<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<footer class="py-4 bg-light mt-5">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Gadget-in</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="../js/scripts.js"></script>
</body>

</html>

</html>