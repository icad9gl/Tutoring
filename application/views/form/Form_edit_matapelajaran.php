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
						
						<form method="POST" action="<?=base_url('Matpel_tos/edit')?>">
							<div class="form-group">
								<label for="nama">Nama Matapelajaran</label>
								<input type="hidden" name="nama_matapelajaran" value="<?= $data_edit->nama_matapelajaran ?>">
								<input type="text" class="form-control" id="nama" placeholder="Nama Matapelajaran" name="nama_matapelajaran" value="<?= $data_edit->nama_matapelajaran ?>">
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