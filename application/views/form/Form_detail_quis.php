<main id="app-main" class="app-main">
	<div class="wrap">
		<div class="row">
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Bank Soal</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">	
						<div class="table-responsive">
							<table id="default-datatable" data-options="{lengthChange:false, ordering:false}" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>ID SOAL</th>
										<th>Soal</th>
										<th>-</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($list_quis as $data): ?>
										<tr>
											<td><?=$data->id_list_quis ?></td>
											<td>
												Pembuat : <?=$data->id_pengajar ?><br>
												Soal : <?=$data->pertanyaan ?><br>
											</td>
											<td>
												<a href="<?= base_url("Quis_tos/add_soal/" . $id_quis . "/" . $data->id_list_quis) ?>">
													<button class="btn btn-primary btn-sm btn-soal"><i class="fa fa-plus"></i></button>
												</a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Soal Quis</h4>
					</header>
					<div class="widget-body">	
						<table id="soal-quis" class="table table-striped" width="100%">
							<tbody>
								<?php foreach ($list_soal as $data): ?>
									<tr>
										<td>
											<?=$data->pertanyaan ?><br>
										</td>
										<td>
											<a href="<?= base_url("Quis_tos/hapus_soal/" . $id_quis . "/" . $data->id_list_quis) ?>">
												<button class="btn btn-danger btn-sm btn-soal"><i class="fa fa-minus"></i></button>
											</a>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

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
</main>