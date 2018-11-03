<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Input Anggota</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form method="POST" action="<?= base_url('Pokjar_tos/simpan_anggota/'.$id_pokjar)?>">
							
							<input type="hidden" name="id_pokjar" value="<?= $id_pokjar ?>">
							<div class="form-group">
								<label for="id_siswa">Nama Siswa</label>
								<select class="form-control" id="id_siswa" name="id_siswa">
									<option>Pilihan</option>
									<?php
										$query=$this->Data_siswa->List_siswa_not_in_pokjar();

										foreach ($query as $row) {
											echo "<option value='".$row->id_siswa."'>".$row->id_siswa." ".$row->nama_siswa."</option>" ;
										}
									?>
								</select>
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