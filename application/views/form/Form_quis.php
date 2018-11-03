<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Input Quis</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">	
						<form method="POST" action="<?=base_url('Quis_tos/simpan')?>">
							
							
							<div class="form-group">
								<label for="email">Nama Quis</label>
								<input type="text" class="form-control" id="nama_quis" placeholder="Nama Quis" name="nama_quis">
							</div>
							<div class="form-group">
								<label for="id_pengajar">ID Mapel Pokjar</label>
								<select class="form-control" id="id_mapel_pokjar" name="id_mapel_pokjar" data-plugin="select2">
									<option>Pilihan</option>
									<?php
										$query=$this->db->get("v_pokjar_mapel")->result();

										foreach ($query as $row) {
											echo "<option value='".$row->id_detail."'>".$row->id_detail." ".$row->nama_pokjar." - ".$row->nama_matapelajaran."</option>" ;
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="repassword">Waktu Mulai</label>
								<input type="datetime-local" class="form-control" id="jam_mulai" placeholder="Jam mulai" name="jam_mulai">
							</div>
							<div class="form-group">
								<label for="no_tlp">Waktu Berakhir</label>
								<input type="datetime-local" class="form-control" id="jam_berakhir" placeholder="Jam Berakhir" name="jam_berakhir">
							</div>							
							<button type="submit" class="btn btn-primary pull-right btn-md">Lanjut Pilih Soal</button>
							<div class="clearfix"></div>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->

			<div class="col-md-12" id="list_quis"></div>

		</div>
	</section>
</div>
</main>
