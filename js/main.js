$(document).ready(function(){
	$(".showcontact, .closecontact").on("click",function(event){
		event.preventDefault();
		$(".contact").slideToggle("fast");
	});

});