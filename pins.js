$(document).ready(function() {
	$('#pin').on("click",function() {
	    $.ajax({
	        type: "POST",
	        url: "pins.php",
	        dataType: 'json',
	        data: {'pin': '1'}
	    });
    });    
});