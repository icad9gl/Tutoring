
			
			
			<div class="col-md-6">
						<div class="widget">
								<header class="widget-header">
									<h4 class="widget-title">Form 2</h4>
								</header><!-- .widget-header -->
									<hr class="widget-separator">
							<div class="widget-body">

								<div class="id_detail">
								<label for="id_detail">ID Mapel Pokjar</label>
								<select  class="form-control" id="id_detail" name="id_detail">
									<option value="" >Pilihan</option>
									

									<?php
										$query=$this->db->get("v_pokjar_mapel")->result();

										foreach ($query as $row) {
											$selected = "";
											if(isset($_POST['id_detail'])){

												$selected = ($_POST['id_detail'] == $row->id_detail)? "selected='selected'" : "";

											}

											echo "<option $selected value='".$row->id_detail."'>".$row->id_detail." ".$row->nama_matapelajaran."</option>" ;
										}
									?>

								</select>
							</div>
							<br>
							<input type="submit" name="" value="Next">
							

							</div>
						</div>
					</div>

			
