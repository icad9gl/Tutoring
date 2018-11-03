<div class="col-md-6">
	<div class="widget">
		<header class="widget-header">
			<h4 class="widget-title">Bank Soal</h4>
		</header><!-- .widget-header -->
		<hr class="widget-separator">
		<div class="widget-body">	
				<table id="bank-soal" class="table table-striped" width="100%">
					<thead>
						<tr>
							<th>ID SOAL</th>
							<th>Soal</th>
							<th>-</th>
					</tr>
					</thead>
					<tbody>
						<?php foreach ($list_quis as $data): ?>
							<tr id="<?=$data->id_list_quis ?>">
								<td><?=$data->id_list_quis ?></td>
								<td>
									Pembuat : <?=$data->id_pengajar ?><br>
									Soal : <?=$data->pertanyaan ?><br>
								</td>
								<td>
									<button class="btn btn-primary btn-sm btn-soal" data-idquis="<?=$data->id_list_quis ?>" data-soal="<?=$data->pertanyaan ?>">Pilih</button>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="widget">
		<header class="widget-header">
			<h4 class="widget-title">Soal Quis</h4>
		</header><!-- .widget-header -->
		<hr class="widget-separator">
		<div class="widget-body">	
			<table id="soal-quis" class="table table-striped" width="100%">
				<thead>
					<tr>
						<th>ID SOAL</th>
						<th>Soal</th>
						<th>-</th>
					</tr>
				</thead>
				<tbody id="list_soal"></tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?= base_url("libs/misc/datatables/datatables.min.js") ?>"></script>
<script type="text/javascript">
	
	var data_soal;

	$(function(){

		var ids = 1000;
		data_soal = $("#soal-quis").DataTable({
			dom:"<'row'<'col-sm-12'f>>t<'row'<'col-sm-5'i><'col-sm-7'p>>",
			paging:false,
			width:"100%"
		});

		$("#bank-soal").DataTable({
			dom:"<'row'<'col-sm-12'f>>t<'row'<'col-sm-5'i><'col-sm-7'p>>",
			paging:false,
			width:"100%"
		});

		$(".btn-soal").on("click", function(){
			data_soal.destroy();

			$(this).parent().parent().hide();
			$("#soal-quis .odd").remove();

			var id = $(this).attr("data-idquis");
			var soal = $(this).attr("data-soal");

			var row = "<tr>";
			row += "<td>" + id + "</td>";
			row += "<td>" + soal + "</td>";
			row += "<td><button id='" + ids + "' class='btn btn-danger btn-sm btn-hapus' data-id='" + id + "'>Hapus</button></td>";
			row += "</tr>";

			$("#list_soal").append(row);
			removeSoal($("#" + ids));
			ids++;

			data_soal = $("#soal-quis").DataTable({
				dom:"<'row'<'col-sm-12'f>>t<'row'<'col-sm-5'i><'col-sm-7'p>>",
				paging:false,
				width:"100%"
			});
		});

	});

	function removeSoal(obj){
		data_soal.destroy();
		obj.on("click", function(){
			var id = $(this).attr("data-id");
			$("#" + id).show();
			$(this).parent().parent().remove();
		});
		data_soal = $("#soal-quis").DataTable({
			dom:"<'row'<'col-sm-12'f>>t<'row'<'col-sm-5'i><'col-sm-7'p>>",
			paging:false,
			width:"100%"
		});
	}

</script>