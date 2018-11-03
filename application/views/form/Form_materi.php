<main id="app-main" class="app-main">
<div class="wrap">
	<section class="app-content">
		<form method="POST" action="<?=base_url('Materi_tos/proses_next')?>">
		<div class="row">
			
			<div class="col-md-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Form 1</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
						
						
							
							<div class="form-group">
								<label for="id_pengajar">ID Pengajar</label>
								<select  class="form-control" id="id_pengajar" name="id_pengajar">
									<option value="">Pilihan</option>
									<?php
										$query=$this->db->get("pengajar")->result();

										foreach ($query as $row) {
											$selected = "";
											if(isset($_POST['id_pengajar'])){

												$selected = ($_POST['id_pengajar'] == $row->id_pengajar)? "selected='selected'" : "";

											}

											echo "<option $selected value='".$row->id_pengajar."'>".$row->id_pengajar." ".$row->nama_pengajar."</option>" ;
										}
									?>
								</select>
							</div>
							<div class="id_pokjar">
								<label for="id_pokjar">ID Pokjar</label>
								<select  class="form-control" id="id_pokjar" name="id_pokjar">
									<option value="">Pilihan</option>
									<?php
										$query=$this->db->get("pokjar")->result();

										foreach ($query as $row) {
											$selected = "";
											if(isset($_POST['id_pokjar'])){

												$selected = ($_POST['id_pokjar'] == $row->id_pokjar) ? "selected='selected'" : "";
											}
											
										
										echo "<option $selected value='".$row->id_pokjar."'>".$row->id_pokjar." ".$row->nama_pokjar."</option>" ;
										}									
									?>
								</select>
							</div>
							<br>
							<input type="submit" name="" value=" Next">
						
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->

			<?php
				if($_POST){

					if($pokjar!=""){
						$this->load->view("widget/Form2");
					}
					if($materi!=""){
						$this->load->view("widget/Form3");
					}
					if($tipe!=""){
						$this->load->view("widget/Form4");	
					}	
				}
				
				
				
				
			?>
		</div>
		</form>
	</section>
</div>
</main>