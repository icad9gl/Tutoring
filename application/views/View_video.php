
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  	<div class="wrap">
		<section class="app-content">
			<div class="row">
			<!-- DOM dataTable -->
				<div class="col-md-12">
					<div class="widget">
						<header class="widget-header">
							<h4 class="widget-title">Data Video</h4>
							<br>
								<a href="<?= base_url('index.php/Video_tos/add_form')?>">
								<img src="<?= base_url() ?>/assets/icon/add.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Tambah Data">
								</a>
						</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>	
									<tr>
										<th>ID</th>
										<th>File</th>
										<th>Judul Video</th>
										<th>Mapel</th>
										<th>Tanggal Upload</th>
										<th>Nama Pengajar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($List_video as $data): ?>
									<tr>
										<td><?=str_pad($data->id_video,6,"0", STR_PAD_RIGHT)?></td>
										<td>
										<video width="250" height="150" controls="controls"> 
										<source src="<?= base_url().'/public/video/'.$data->file ?>" type="video/mp4">
										</video>
										</td>
										<td><?=$data->judul_video?></td>
										<td><?=$data->nama_matapelajaran?></td>
										<td><?=$data->tanggal_upload ?></td>
										<td><?=$data->nama_pengajar ?></td>
										<td>
											<a href="<?= base_url('index.php/Video_tos/edit_form/'.$data->id_video) ?>" > 
											<img src="<?= base_url() ?>/assets/icon/edit.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Edit Data">
											</a>
											<a href="<?= base_url('index.php/Video_tos/delete/'.$data->id_video) ?>">
												<img src="<?= base_url() ?>/assets/icon/delete.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Hapus Data">
											</a>
										</td>
									</tr>

									<?php endforeach ?>
								</tbody>
							</table>	
						</div><!-- .widget-body -->
					</div><!-- .widget -->
				</div><!-- END column -->
			</div><!-- .row -->
		</section>
	</div><!-- .wrap -->

  <!-- APP FOOTER -->
  <div class="wrap p-t-0">
    <footer class="app-footer">
      <div class="clearfix">
        <ul class="footer-menu pull-right">
          <li><a href="javascript:void(0)">Careers</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
          <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
        </ul>
        <div class="copyright pull-left">Copyright Tutoring Onlien System 2018 &copy;</div>
      </div>
    </footer>
  </div>
  <!-- /#app-footer -->
</main>
<!--========== END app main -->
