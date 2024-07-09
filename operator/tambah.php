<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Tambah Gadget</title>
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
									<h3 class="text-center font-weight-light my-4">TAMBAH GADGET</h3>
								</div>
								<div class="card-body">
									<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
									<div class="form-floating mb-3 ">
												<input type="hidden" name="id">
												<input type="text" name="jenis" placeholder="Jenis" class="form-control" id="jenis">
												<label for="jenis">Jenis</label>
											</div>
											<div class="row">
												<div class="form-floating mb-3 col">
													<input type="text" name="merk" placeholder="Merk" class="form-control">
													<label for="merk" style="margin-left:12px">Merk</label>
												</div>
												<div class="form-floating mb-3 col">
													<input type="text" name="seri" id="seri" placeholder="Seri" class="form-control">
													<label for="seri" style="margin-left:12px">Seri</label>
												</div>
											</div>
											<div class="row">
												<div class="form-floating mb-3 col">
													<input type="date" name="tahun_produksi" id="tahun_produksi" placeholder="Tahun Produksi" class="form-control">
													<label for="tahun_produksi" style="margin-left:12px">Tahun Produksi</label>
												</div>
												<div class="form-floating mb-3 col">
													<input type="text" placeholder="RAM" id="ram" name="ram"  class="form-control">
													<label for="ram" style="margin-left:12px">RAM</label>
												</div>
											</div>
											<div class="form-floating mb-3 col">
												<input type="text" id="processor" name="processor" placeholder="Processor"  class="form-control">
												<label for="processor">Processor</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="text" id="os" name="os" placeholder="OS" class="form-control">
												<label for="os">OS</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="text" id="ssd_hdd" name="ssd_hdd" placeholder="SSD/HDD" class="form-control">
												<label for="ssd_hdd">SSD/HDD</label>
											</div>
											<div class="d-flex align-items-right justify-content-between mt-2 mb-0">
												<input type="submit" value="SIMPAN" class="btn btn-primary">
												<a href="tabel_gadget.php" class="btn btn-danger">Kembali</a>
											</div>
										</table>
									</form>
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
</body>
</html>		