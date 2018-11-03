
							<table id="default-datatable"  class="table table-striped" cellspacing="0" width="100%">
								<thead>	
									<tr>
										
										<th>File</th>
										<th>Pilih</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($file as $data): ?>
									<tr>
										
										<td align="center">
											<b><?=$data->judul_audio?></b> <br>
											<audio width="250" height="150" controls="controls"> 	
										<source src="<?= base_url().'/public/audio/'.$data->file ?>" type="audio/mp3">
										</audio>
										</td>
										<td>
											<input type="radio" value="<?=$data->id_audio ?>" name="data_file">
										</td>
									</tr>

									<?php endforeach ?>
								</tbody>
							</table>	
						
