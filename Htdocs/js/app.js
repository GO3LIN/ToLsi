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

	$("#profileListTable .fillFields").click(function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: 120}, 2000); 
		var profile = $(this).attr("value");
		$.post("profile/fillFields", {profile: profile}, function(data){
			console.log(data);
		}, "json");

	});

	$("#userListTable .userFillFields").click(function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: 120}, 2000);   
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


	var selectedRole;
	var identifiedRoleLabel = $("#roleForm label[for='identifiedRole']");
	var usingRoleLabel = $("#roleForm label[for='usingRole']");
	var externallyRoleLabel = $("#roleForm label[for='externallyRole']");
	var globallyRoleLabel = $("#roleForm label[for='globallyRole']");
	var identifiedBlock = $("#identifiedPass");
	var usingBlock = $("#usingInfos");

	identifiedRoleLabel.click(function(e){
		var identifiedChecked = !identifiedRoleLabel.hasClass("checked");
		selectedRole = (identifiedChecked) ? 'identifiedRole' : '';
		identifiedBlock.slideToggle(1000);
		if(identifiedChecked){
			$("#identifiedRole").attr('checked', false);
			usingBlock.hide(1000);
			usingRoleLabel.removeClass("checked");
			externallyRoleLabel.removeClass("checked");
			globallyRoleLabel.removeClass("checked");
		}
		
	});
	usingRoleLabel.click(function(e){
		var usingChecked = !usingRoleLabel.hasClass("checked");
		selectedRole = (usingChecked) ? 'usingRole' : '';
		usingBlock.slideToggle(1000);
		if(usingChecked){
			$("#usingRole").attr('checked', false);
			identifiedBlock.hide(1000);
			identifiedRoleLabel.removeClass("checked");
			externallyRoleLabel.removeClass("checked");
			globallyRoleLabel.removeClass("checked");
		}
		
	});
	externallyRoleLabel.click(function(){
		var externallyChecked = !externallyRoleLabel.hasClass("checked");
		selectedRole = (externallyChecked) ? 'externallyRole' : '';
		if(externallyChecked) {
			$("#externallyRole").attr("checked", false);
			identifiedBlock.hide(1000);
			identifiedRoleLabel.removeClass("checked");
			usingBlock.hide(1000);
			usingRoleLabel.removeClass("checked");
			globallyRoleLabel.removeClass("checked");
		}
	});
	globallyRoleLabel.click(function(){
		var globallyChecked = !globallyRoleLabel.hasClass("checked");
		selectedRole = (globallyChecked) ? 'globallyRole' : '';
		if(globallyChecked) {
			$("#globallyRole").attr("checked", false);
			identifiedBlock.hide(1000);
			identifiedRoleLabel.removeClass("checked");
			usingBlock.hide(1000);
			usingRoleLabel.removeClass("checked");
			externallyRoleLabel.removeClass("checked");
		}
	});



	function paginateTable(table){
		table.each(function() {
		    var currentPage = 0;
		    var numPerPage = 10;
		    var $table = $(this);
		    $table.bind('repaginate', function() {
		        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
		    });
		    $table.trigger('repaginate');
		    var numRows = $table.find('tbody tr').length;
		    var numPages = Math.ceil(numRows / numPerPage);
		    var $pager = $('<div class="pager"></div>');
		    for (var page = 0; page < numPages; page++) {
		        $('<a class="btn page-number"><span></span></a>').text(page + 1).bind('click', {
		            newPage: page
		        }, function(event) {
		            currentPage = event.data['newPage'];
		            $table.trigger('repaginate');
		            $(this).addClass('active').siblings().removeClass('active');
		        }).appendTo($pager).addClass('clickable');
		    }
		    $pager.insertAfter($table).find('a.page-number:first').addClass('active');
		});
	}
	var userTable = $("#userPaginate");
	paginateTable(userTable);

	userTable.tablesorter();
});