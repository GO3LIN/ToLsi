$(document).ready(function(){

	$("#sendButton").click(function(){
		error = false;
		$(".required").each(function(i){
			console.log($(this).val().length);
			if($(this).val().length == 0){
				//$(this).next(".errorField").html("Hello");
				error = true;
				html = capitaliseFirstLetter($(this).attr("name"))+" est vide !";
				$(this).parent("div").next(".errorField").html(html).hide().fadeIn(1000);
			}
		});
		if(error)
			return false;
	});

	function capitaliseFirstLetter(string){
	    return string.charAt(0).toUpperCase() + string.slice(1);
	}

});