
					

					<div class="col-md-6">
						<div class="widget">
								<header class="widget-header">
									<h4 class="widget-title">Form 4</h4>
								</header><!-- .widget-header -->
									<hr class="widget-separator">
							<div class="widget-body">

								<?php 
									$query = $this->db->get("v_" .  $_POST['tipe'])->result();
									$this->load->view("widget/T_" . $_POST['tipe'], array("file" => $query))
								?>

							<input type="submit" name="" value="Simpan">

							</div>
						</div>
					</div>

		