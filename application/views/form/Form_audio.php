<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Input Audio</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form method="POST" action="<?=base_url('Audio_tos/simpan')?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="id_pengajar">ID Pengajar</label>
								<select class="form-control" id="id_pengajar" name="id_pengajar">
									<option>Pilihan</option>
									<?php
										$query=$this->db->get("pengajar")->result();

										foreach ($query as $row) {
											echo "<option value='".$row->id_pengajar."'>".$row->id_pengajar." ".$row->nama_pengajar."</option>" ;
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="id_pengajar">ID Matapelajaran</label>
								<select class="form-control" id="id_matapelajaran" name="id_matapelajaran">
									<option>Pilihan</option>
									<?php
										$query=$this->db->get("matapelajaran")->result();

										foreach ($query as $row) {
											echo "<option value='".$row->id_matapelajaran."'>".$row->id_matapelajaran ." ".$row->nama_matapelajaran."</option>" ;
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="file">File</label>
								<input type="file" class="form-control" id="file" placeholder="File" name="userfile" accept="audio/mp3">
							</div>
							<div class="form-group">
								<label for="judul_video">Judul Audio</label>
								<input type="judul_video" class="form-control" id="judul_audio" placeholder="Judul Audio" name="judul_audio">
							</div>
							<div class="form-group">
								<label for="tanggal_upload">Tanggal Upload</label>
								<input type="datetime-local" class="form-control" id="tanggal_upload" placeholder="Tanggal Upload" name="tanggal_upload">
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