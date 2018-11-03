<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Input Siswa</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form method="POST" enctype="multipart/form-data" action="<?= base_url('Siswa_tos/simpan')?>">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_siswa">
							</div>
							<div class="form-group">
								<label for="email">Email </label>
								<input type="email" class="form-control" id="email" placeholder="Email" name="email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password" name="password">
							</div>
							<div class="form-group">
								<label for="repassword">RePassword</label>
								<input type="password" class="form-control" id="repassword" placeholder="RePassword" >
							</div>

							<div class="form-group">
								<label for="Tgl_lahir">Tanggal Lahir</label>
								<input type="date" class="form-control" id="Tgl_lahir" name="tanggal_lahir">
							</div>

							<div class="form-group">
								<label for="Kelas">Kelas</label>
								<select class="form-control" id="Kelas" name="Kelas">
									<option>-- Pilihan --</option>
									<option value="Kelas 1">Kelas 1</option>
									<option value="Kelas 2">Kelas 2</option>
									<option value="Kelas 3">Kelas 3</option>
									
								</select>
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<textarea class="form-control" name="alamat"></textarea>
							</div>
							<div class="form-group">
								<label for="sex">Jenis Kelamin</label>
								<select class="form-control" id="sex" name="sex">
									<option>-- Pilihan --</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
									
								</select>
							</div>

							<div class="form-group">
								<label for="file_input">Foto</label>
								<input type="file" name="userfile" id="file_input" class="form-control">
							</div>
							
							<button type="submit" class="btn btn-primary btn-md">Submit</button>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
		</div>
	</section>
</div>
</main>