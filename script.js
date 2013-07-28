$(document).ready(function(){
	setInterval(function(){
		$.ajax({ url: "now-playing", success: function (data){
			 $('#now-playing').attr( 'value',
		}, dataType: "json"});
	}, 1000);
});