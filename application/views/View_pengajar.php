
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	

<!-- DOM dataTable -->


			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Data Pengajar</h4>

						<br>
						<a href="<?= base_url('index.php/Pengajar_tos/add_form')?>">
						<img src="<?= base_url() ?>/assets/icon/add.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Tambah Data">
						</a>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>
									
										
									<tr>
										<td>ID</td>
										<td>Nama</td>
										<td>Email</td>
										<td>Password</td>
										<td>Tanggal Lahir</td>
										<td>Alamat</td>
										<td>Jenis Kelamin</td>
										<td>No Tlp</td>
										<td>Foto</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($List_pengajar as $data): ?>
									<tr>
										<td><?=str_pad($data->id_pengajar,6,"0", STR_PAD_RIGHT) ?></td>
										<td><?=$data->nama_pengajar ?></td>
										<td><?=$data->email ?></td>
										<td><?=$data->password?></td>
										<td><?=$data->tanggal_lahir ?></td>
										<td><?=$data->alamat ?></td>
										<td><?=$data->sex ?></td>
										<td><?=$data->no_tlp ?></td>
										<td><?=$data->foto_pengajar ?></td>
										<td>
											<a href="<?= base_url('index.php/Pengajar_tos/edit_form/'.$data->id_pengajar) ?>" > 
											<img src="<?= base_url() ?>/assets/icon/edit.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Edit Data">
											</a>
											<a href="<?= base_url('index.php/Pengajar_tos/delete/'.$data->id_pengajar) ?>" > 
												<img src="<?= base_url() ?>/assets/icon/delete.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Hapus Data">
											</a>
										</td>
									</tr>

									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->


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
