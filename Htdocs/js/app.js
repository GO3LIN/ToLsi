$(document).ready(function(){
	// Script pour ajouter des quotas à la volée aux utilisateurs
	var i = 1;
	$("#ajouterQuota").click(function(){
		var quota = '<div class="row"><div class="col-sm-3 userLabel"><label for="quota'+i+'">Quota (en Mo):</label></div><div class="col-sm-2"><input type="text" name="quota'+i+'" id="quota'+i+'" class="inputtext input_middle required"></div><div class="col-sm-3 userLabel"><label for="onTablespace'+i+'">Sur le tablespace:</label></div><div class="col-sm-4"><input type="text" name="onTablespace'+i+'" id="onTablespace'+i+'" class="inputtext input_middle required"></div></div>';
		$("#quotas .row").eq(-2).after(quota).hide().slideDown(1000);
		i++;
		return false;
	});

	$("#closeButton").click(function(e){
		e.preventDefault();
		$("#flashAlert").slideUp(1000);
	});


	$("#userListTable .userFillFields").click(function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: 80}, 2000);   
		var username = $(this).attr('value');
		$.post("user/fillFields/", {username: username},  function(data){
			$("#userTitle").html("Modifier un utilisateur");
			var form = $("#userForm");
			var expired = false;
			var locked = false;
			form.attr("action", "user/edit/");
			form.find("#sendButton").val("Modifier");
			form.find("#username").val(data.USERNAME);
			form.find("#password").removeClass("required");
			form.find("label[for='password']").html("Ancien mot de pass :");
			form.find("label[for='password2']").html("Nouveau mot de pass :");
			form.find("#password2").removeClass("required");
			form.find("#profile").val(data.PROFILE);
			form.find("#defaultTablespace").val(data.DEFAULT_TABLESPACE);
			form.find("#tempTablespace").val(data.TEMPORARY_TABLESPACE);

			switch(data.ACCOUNT_STATUS){
				case 'EXPIRED':
					expired = true;
					break;
				case 'LOCKED':
					locked = true;
					break;
				case 'EXPIRED & LOCKED':
					expired = true;
					locked = true;
					break;
			}


			form.find("#expiredPassword").attr('checked', expired);
			form.find("#blockedAccount").attr('checked', locked);

			if(expired)
				form.find("label[for='expiredPassword']").addClass('checked');
			else
				form.find("label[for='expiredPassword']").removeClass('checked');
			
			if(locked)
				form.find("label[for='blockedAccount']").addClass('checked');
			else
				form.find("label[for='blockedAccount']").removeClass('checked');


			console.log(expired);
			console.log(data.ACCOUNT_STATUS);


		}, "json");
	});

	$("#tabsMenu a[href='#deconnexion']").click(function(e){
		e.preventDefault();
		$.get("index/logout", function(){
			location.reload(true);
		});
	});
});