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
										<b><?=$data->judul_video?></b><br>
										<video width="250" height="150" controls="controls"> 
										<source src="<?= base_url().'/public/video/'.$data->file ?>" type="video/mp4">
										</video>
										</td>
										
										<td>
											<input type="radio" value="<?=$data->id_video ?>" name="data_file">
										</td>
									</tr>

									<?php endforeach ?>
								</tbody>
							</table>