<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Input Admin</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form method="POST" action="<?=base_url('Nilai_tos/simpan')?>">
							
							<div class="form-group">
								<label for="id_quis">ID Quis </label>
								<input type="text" class="form-control" id="id_quis" placeholder="ID Quis" name="id_quis">
							</div>
							<div class="form-group">
								<label for="id_pengajar">ID Pengajar</label>
								<input type="text" class="form-control" id="id_pengajar" placeholder="ID Pengajar" name="id_pengajar">
							</div>
							<div class="form-group">
								<label for="id_siswa">ID Siswa</label>
								<input type="text" class="form-control" id="id_siswa" placeholder="ID Siswa" name="id_siswa">
							</div>
							<div class="form-group">
								<label for="id_orang_tua">ID Orang Tua</label>
								<input type="text" class="form-control" id="id_orang_tua" placeholder="ID Orang Tua" name="id_orang_tua">
							</div>
							<div class="form-group">
								<label for="nama_quis">Nama Quis</label>
								<input type="text" class="form-control" id="nama_quis" placeholder="Nama Quis" name="nama_quis">
							</div>
							<div class="form-group">
								<label for="nilai">Nilai</label>
								<input type="text" id="nilai" class="form-control" name="nilai" placeholder="Nilai" >
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