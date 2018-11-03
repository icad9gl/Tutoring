<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Input Pokjar</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form method="POST" action="<?= base_url('Pokjar_tos/simpan')?>">
							

							<div class="form-group">
								<label for="nama_pokjar">Nama Pokjar</label>
								<input type="text" class="form-control" id="nama_pokjar" name="nama_pokjar" placeholder="Nama Pokjar" >
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