$(document).ready(function() {
	$(document).ready(function() {
    $.getJSON('likes.php',function(data) {
    	var like = '';
    	var likecount = 0;
    	for (var i=0 ; i<data.length ; i++) {
    		if (likecount%3==0) {
    			like += "</div><div class='row'>";
    		}
    		like += "<div class='row'><div class='col-md-4'><h3><center><a href='" + data[i]['URL'] + "'>" + data[i]['Event'] + "</a></center></h3><center><img src='" + data[i]['Image'] + "' class='img-responsive img-thumbnail'></center></div>";
    		likecount += 1;
    	}
    	$('#likes').append(like);
    });
});
})