$(document).ready(function(){


	$("#login_form #login_avancee_btn").click(function(e){
		e.preventDefault();
		$("#login_form .login_avancee").fadeToggle(1000);
	});


	// Script pour ajouter des quotas à la volée aux utilisateurs
	var i = 1;
	$("#ajouterQuota").click(function(){
		var quota = '<div class="row"><div class="col-sm-3 userLabel"><label for="quota'+i+'">Quota (en Mo):</label></div><div class="col-sm-2"><input type="text" name="quota'+i+'" id="quota'+i+'" class="inputtext input_middle required"></div><div class="col-sm-3 userLabel"><label for="onTablespace'+i+'">Sur le tablespace:</label></div><div class="col-sm-4"><input type="text" name="onTablespace'+i+'" id="onTablespace'+i+'" class="inputtext input_middle required"></div></div>';
		$("#quotas .row").eq(-2).after(quota).hide().slideDown(500);
		i++;
		return false;
	});

	var startCol = 4;
	$("#addCol").click(function(e){
		e.preventDefault();
		var col = '<div class="col"><div class="row"><div class="col-sm-3"><input style="outline: medium none;" hidefocus="true" name="nomCol'+startCol+'" placeholder="Nom de la colonne" type="text"></div><div class="col-sm-3"><div class="cusel select_styled" id="cuselFrame-cuSel-1" style="width:0px" tabindex="0"><div class="cuselFrameRight"></div><div class="cuselText">Type</div><div style="display: none; visibility: visible;" class="cusel-scroll-wrap"><div class="cusel-scroll-pane" id="cuselscroll-cuSel-1"><span class="cuselActive first" val="">Type</span><span val="VARCHAR2">VARCHAR2</span><span val="NUMBER">NUMBER</span><span val="DATE">DATE</span><span val="CLOB">CLOB</span><span class="last" val="BLOB">BLOB</span></div></div><input id="cuSel-1" name="typeCol'+startCol+'" value="" type="hidden"></div></div><div class="col-sm-2"><input style="outline: medium none;" hidefocus="true" name="typeCol'+startCol+'" placeholder="Taille" type="text"></div><div class="col-sm-2 input_styled" style="padding-top: 5px"><div class="custom-checkbox"><input style="outline: medium none;" hidefocus="true" name="notNull'+startCol+'" id="notNull'+startCol+'" value="notNull'+startCol+'" type="checkbox"><label for="notNull'+startCol+'">NOT NULL</label></div></div><div class="col-sm-2 input_styled" style="padding-top: 5px"><div class="custom-checkbox"><input style="outline: medium none;" hidefocus="true" name="primary'+startCol+'" id="primary'+startCol+'" value="primary'+startCol+'" type="checkbox"><label for="primary'+startCol+'">PRIMARY</label></div></div></div><div class="deleteCol"><a href="#" class="deleteColButton"><img src="images/icons/delete.png"></a></div></div>';
		$("#structureTable .col:last").after(col).hide().slideDown(500);
		startCol++;
	});

	$("#structureTable .col").each(function(){
		$(this).mouseenter(function(){
			$(this).find(".deleteCol").show(300);
		});
	});

	$("#structureTable .col").mouseleave(function(){
		$(this).find(".deleteCol").hide(300);
	});
	$("#structureTable .col .deleteColButton").click(function(){
		$(this).parent().parent(".col").slideUp(500, function(){ $(this).remove(); });
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
			$("#titleProfile").html("Modifier un profil");
			var form = $("#profileForm");
			form.attr("action", "profile/edit");
			form.find("#sendButton").val("Modifier");
			form.find("#nom").val(data.NOM);
			for (var key in data){
				switch(data[key].RESOURCE_NAME){
					case 'SESSIONS_PER_USER':
						form.find("#sessPerUser").val(data[key].LIMIT);
					break;
					case 'CPU_PER_SESSION':
						form.find("#cpuPerSession").val(data[key].LIMIT);
					break;
					case 'CPU_PER_CALL':
						form.find("#cpuPerCall").val(data[key].LIMIT);
					break;
					case 'CONNECT_TIME':
						form.find("#connectTime").val(data[key].LIMIT);
					break;
					case 'IDLE_TIME':
						form.find("#idleTime").val(data[key].LIMIT);
					break;
					case 'LOGICAL_READS_PER_SESSION':
						form.find("#lReadsPerSession").val(data[key].LIMIT);
					break;
					case 'LOGICAL_READS_PER_CALL':
						form.find("#lReadsPerCall").val(data[key].LIMIT);
					break;
					case 'FAILED_LOGIN_ATTEMPTS':
						form.find("#failedLogin").val(data[key].LIMIT);
					break;
					case 'PRIVATE_SGA':
						form.find("#privateSga").val(data[key].LIMIT);
					break;
					case 'PASSWORD_LOCK_TIME':
						form.find("#pLockTime").val(data[key].LIMIT);
					break;
					case 'PASSWORD_LIFE_TIME':
						form.find("#pLifeTime").val(data[key].LIMIT);
					break;
					case 'PASSWORD_REUSE_TIME':
						form.find("#pReuseTime").val(data[key].LIMIT);
					break;
					case 'PASSWORD_REUSE_MAX':
						form.find("#pReuseMax").val(data[key].LIMIT);
					break;
					case 'PASSWORD_GRACE_TIME':
						form.find("#pGraceTime").val(data[key].LIMIT);
					break;
					case 'PASSWORD_VERIFY_FUNCTION':
						form.find("#pVerifyFunc").val(data[key].LIMIT);
					break;
					case 'COMPOSITE_LIMIT':
						form.find("#compositeLimit").val(data[key].LIMIT);
					break;
				}
			}

			//console.log(data);
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
		    var numPerPage = 50;
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