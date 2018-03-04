$("#citySelect").change(function(){
	$("#citySubmit").val($("#citySelect option:selected").val());
});
