
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	

<!-- DOM dataTable -->


			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Data Pengguna</h4>
						
						
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						<div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>	
									<tr>
										<td>ID</td>
										<td>ID Referensi</td>
										<td>Email</td>
										<td>Password</td>
										<td>Level</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>

									<?php foreach ($List_pengguna as $data): ?>
									<tr>
										<td><?=$data->id_user ?></td>
										<td><?=$data->id_referensi ?></td>
										<td><?=$data->email ?></td>
										<td><?=$data->password?></td>
										<td><?=$data->level ?></td>
										
										<td>
											<a href="<?= base_url('index.php/Pengguna_tos/edit_form/'.$data->id_user) ?>" > 
											<img src="<?= base_url() ?>/assets/icon/edit.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Edit Data">
											</a>
											<a href="<?= base_url('index.php/Pengguna_tos/delete/'.$data->id_user) ?>">
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
