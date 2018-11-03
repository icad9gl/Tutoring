
<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	

<!-- DOM dataTable -->


			<div class="col-md-12">
        <div class="widget">
          <header class="widget-header">
            <h4 class="widget-title">Data Materi</h4>
            <br>
            <a href="<?= base_url('index.php/Materi_tos/add_form')?>" ><img src="<?= base_url() ?>/assets/icon/add.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Tambah Data"></a>
            
          </header><!-- .widget-header -->
          <hr class="widget-separator">
          <div class="widget-body">
            <div class="table-responsive">
							<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
              <thead>
                  <tr>
                    <td>Id</td>
                    <td>Id Pengajar </td>
                    <td>Id Pokjar</td>
                    <td>Judul Materi</td>
                    <td>Data file</td>
                    <td>Deskripsi</td>
                    <td>Tipe</td>
                    <td>Tanggal buat</td>
                    <td>Tanggal berakhir</td>
                    <td>Aksi</td>
                  </tr>
              </thead>
						  
              <tbody>
                <?php foreach ($List_materi as $data): ?>
                  <tr>
                    <td><?=$data->id_materi ?></td>
                    <td><?=$data->id_pengajar ?></td>
                    <td><?=$data->id_pokjar ?></td>
                    <td><?=$data->judul_materi ?></td>
                    <td><?=$data->data_file ?></td>
                    <td><?=$data->deskripsi ?></td>
                    <td><?=$data->tipe ?></td>
                    <td><?=$data->tanggal_buat ?></td>
                    <td><?=$data->tanggal_berakhir ?></td>
                    <td>
                      <img src="<?= base_url() ?>/assets/icon/edit.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Edit Data">
                      <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>/assets/icon/delete.png" style="width: 23px; height: 23px;" data-toggle="tooltip" title="Hapus Data">
                      </a>
                    </td> 
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
