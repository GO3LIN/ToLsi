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
	});


	$("#userListTable .userFillFields").click(function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: 0}, 3000);   
		var username = $(this).attr('value');
		$.post("user/fillFields/", {username: username},  function(data){
			$("#userTitle").html("Modifier un utilisateur");
			var form = $("#userForm");
			form.find("#sendButton").val("Modifier");
			form.find("#username").val(data.USERNAME);
			form.find("#profile").val(data.PROFILE);
			form.find("#defaultTablespace").val(data.DEFAULT_TABLESPACE);
			form.find("#tempTablespace").val(data.TEMPORARY_TABLESPACE);
		}, "json");
	});
});