<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Tambah Admin Gadget</title>
	<link href="../css/styles.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
	<body class="bg-primary">
		<div id="layoutAuthentication">
			<div id="layoutAuthentication_content">
				<main>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-5">
								<div class="card shadow-lg border-0 rounded-lg mt-5">
									<div class="card-header">
										<h3 class="text-center font-weight-light my-4">TAMBAH ADMIN</h3>
									</div>
									<div class="card-body">
										<form method="post" action="admin_aksi.php" enctype="multipart/form-data">
											<div class="form-floating mb-3 ">
												<input type="hidden" name="id">
												<input type="text" name="nama" placeholder="Nama" class="form-control" id="jenis">
												<label for="jenis">Nama</label>
											</div>
											<select  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="jenis_kelamin" >
												<option selected>Jenis Kelamin</option>
												<option value="Laki-Laki">Laki - Laki</option>
												<option value="Perempuan">Perempuan</option>
											</select>
											<div class="form-floating mb-3 col">
												<input type="text" name="username" id="username" placeholder="Username" class="form-control">
												<label for="username" style="margin-left:12px">Username</label>
											</div>
											<div class="form-floating mb-3 col">
												<input type="text" placeholder="Password" id="password" name="password" class="form-control">
												<label for="password" style="margin-left:12px">Password</label>
											</div>
											<div class="d-flex align-items-right justify-content-between mt-2 mb-0">
												<input type="submit" value="SIMPAN" class="btn btn-primary">
												<a href="tabel_admin.php" class="btn btn-danger">Kembali</a>
											</div>
										</form>
									</div>
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