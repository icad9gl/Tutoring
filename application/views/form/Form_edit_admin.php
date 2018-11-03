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
						
						<form method="POST" action="<?=base_url('Admin_tos/edit')?>">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="hidden" name="id_admin" value="<?= $data_edit->id_admin ?>">
								<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_admin" value="<?= $data_edit->nama_admin ?>">
							</div>
							<div class="form-group">
								<label for="email">Email </label>
								<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?= $data_edit->email ?>">
							</div>
							
							<div class="form-group">
								<label for="no_tlp">No Tlp</label>
								<input type="text" class="form-control" id="no_tlp" placeholder="No Tlp" name="no_tlp" value="<?= $data_edit->no_tlp ?>">
							</div>
							<div class="form-group">
								<label for="file_input">Foto</label>
								<input type="file" id="file_input" class="form-control" value="<?= $data_edit->foto_admin ?>" >
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