<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Input list quis</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						<form method="POST" action="<?=base_url('List_quis_tos/simpan')?>">
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
							<div class="form-group">
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
								<label for="nama">Pertanyaan</label>
								<textarea class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Pertanyaan" rows="7"></textarea>
							</div>
							<div class="form-group">
								<label for="pilihan1">Pilihan 1</label>
								<input type="text" class="form-control" id="pilihan1" placeholder="pilihan 1" name="pilihan1">
							</div>

							<div class="form-group">
								<label for="pilihan2">Pilihan 2</label>
								<input type="text" class="form-control" id="pilihan2" placeholder="pilihan 2" name="pilihan2">
							</div>

							<div class="form-group">
								<label for="pilihan3">Pilihan 3</label>
								<input type="text" class="form-control" id="pilihan3" placeholder="pilihan 3" name="pilihan3">
							</div>

							<div class="form-group">
								<label for="pilihan4">Pilihan 4</label>
								<input type="text" class="form-control" id="pilihan4" placeholder="pilihan 4" name="pilihan4">
							</div>

							<div class="form-group">
								<label for="jawaban">Jawaban</label>
								<input type="radio"  id="jawaban" placeholder="Jawaban" name="jawaban" value="A"> A
								<input type="radio"  id="jawaban" placeholder="Jawaban" name="jawaban" value="B"> B
								<input type="radio"  id="jawaban" placeholder="Jawaban" name="jawaban" value="C"> C
								<input type="radio"  id="jawaban" placeholder="Jawaban" name="jawaban" value="D"> D
							</div>

							<div class="form-group">
								<label for="keterangan">Keterangan</label>
								<textarea class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" rows="7"></textarea>
							</div>
							
							
							<button type="submit" class="btn btn-primary btn-md">Submit</button>
							<button type="reset" class="btn btn-primary btn-md">Reset</button>
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->
		</div>
	</section>
</div>
</main>