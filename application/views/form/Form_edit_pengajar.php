<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Input Pengajar</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form method="POST" action="<?= base_url('Pengajar_tos/edit')?>">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="hidden" name="id_pengajar" value="<?= $data_edit->id_pengajar ?>">
								<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_pengajar" value="<?= $data_edit->nama_pengajar ?>">
							</div>
							<div class="form-group">
								<label for="email">Email </label>
								<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?= $data_edit->email ?>">
							</div>

							<div class="form-group">
								<label for="Tgl_lahir">Tanggal Lahir</label>
								<input type="text" class="form-control datepicker" id="Tgl_lahir" name="tanggal_lahir" value="<?= $data_edit->tanggal_lahir ?>">
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<textarea class="form-control" name="alamat"><?= $data_edit->alamat ?></textarea>
							</div>

							<div class="form-group">
								<label for="sex">Jenis Kelamin</label>
								<input type="text" class="form-control" id="sex" placeholder="Jenis Kelamin" name="sex" value="<?= $data_edit->sex ?>">
							</div>

							<div class="form-group">
								<label for="no_tlp">No Tlp</label>
								<input type="text" class="form-control" id="no_tlp" placeholder="No Tlp" name="no_tlp" value="<?= $data_edit->no_tlp ?>">
							</div>
							<div class="form-group">
								<label for="file_input">Foto</label>
								<input type="file" id="file_input" class="form-control" value="<?= $data_edit->foto_pengajar ?>">
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