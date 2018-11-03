<script type="text/javascript">
	function callBackPlugin(){

		$(".dataTables_filter").each(function(){
			var self = $(this);
			var col = self.closest(".col-sm-6");
			col.removeClass("col-sm-6");
			col.addClass("col-sm-12");
			col.find("label").css("width","100%");
			col.find(".dataTables_filter").css("text-align","left");
		});

	};
</script>