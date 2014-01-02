$(document).ready(function(){
	var i = 1;
	$("#ajouterQuota").click(function(){
		var quota = '<div class="row"><div class="col-sm-3 userLabel"><label for="quota'+i+'">Quota (en Mo):</label></div><div class="col-sm-2"><input type="text" name="quota'+i+'" id="quota'+i+'" class="inputtext input_middle required"></div><div class="col-sm-3 userLabel"><label for="onTablespace'+i+'">Sur le tablespace:</label></div><div class="col-sm-4"><input type="text" name="onTablespace'+i+'" id="onTablespace'+i+'" class="inputtext input_middle required"></div></div>';
		$("#quotas .row").eq(-2).after(quota).hide().slideDown(1000);
		//$("#quotas .row").eq(-2).prev().hide().slideDown(1000);
		i++;
		return false;
	});

	$("#closeButton").click(function(e){
		e.preventDefault();
		$("#flashAlert").slideUp(1000);
	})
});