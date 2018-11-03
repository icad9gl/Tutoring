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
											<b><?=$data->judul_dokument?></b><br>
										<embed src="<?= base_url().'/public/dokument/'.$data->file ?>"type="application/pdf" width="100%" height="85px"></embed>
										</td>
										<td>
											<input type="radio" value="<?=$data->id_dokument ?>" name="data_file">
										</td>
									</tr>

									<?php endforeach ?>
								</tbody>
							</table>