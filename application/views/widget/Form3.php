<div class="clearfix"></div>
			<div class="col-md-6">
						<div class="widget">
								<header class="widget-header">
									<h4 class="widget-title">Form 3</h4>
								</header><!-- .widget-header -->
									<hr class="widget-separator">
							<div class="widget-body">

								<div class="form-group">
								<label for="judul_materi">Judul materi</label>
								<input type="text" value="<?= (isset($_POST['judul_materi'])) ? $_POST['judul_materi'] : "" ?>" class="form-control" id="judul_materi" placeholder="Judul Materi" name="judul_materi">
							</div>
							<div class="form-group">
								<label for="tipe">Tipe Data</label>
								<select  name="tipe" id="tipe" class="form-control">
									<option value="">Silahkan Pilih Tipe Data</option>
									<?php $valtipe = (isset($_POST['tipe'])) ? $_POST['tipe'] : ""; ?>
									<option <?= selected($valtipe, "Video") ?> value="Video">Video</option>
									<option <?= selected($valtipe, "Audio") ?> value="Audio">Audio</option>
									<option <?= selected($valtipe, "Dokument") ?> value="Dokument">Dokumen</option>
								</select>
							</div>
							
							
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<input  type="text" value="<?= (isset($_POST['deskripsi'])) ? $_POST['deskripsi'] : "" ?>" id="deskripsi" class="form-control" name="deskripsi">
							</div>
							
							<div class="form-group">
								<label for="tanggal_buat">Tanggal Buat</label>
								<input  type="datetime-local" value="<?= (isset($_POST['tanggal_buat'])) ? $_POST['tanggal_buat'] : "" ?>" id="tanggal_buat" class="form-control" name="tanggal_buat" placeholder="Tanggal Buat" >
							</div>
							<div class="form-group">
								<label for="tanggal_berakhir">Tanggal Berakhir</label>
								<input type="datetime-local" value="<?= (isset($_POST['tanggal_berakhir'])) ? $_POST['tanggal_berakhir'] : "" ?>" id="tanggal_berakhir" class="form-control" name="tanggal_berakhir" placeholder="Tanggal Berkahir" >
							</div>

							<input type="submit" name="" value="Next">

							</div>
						</div>
					</div>

					

					
		