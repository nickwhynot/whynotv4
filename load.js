$(document).ready(function() {
	$.getJSON('model.php',function(data) {
		$('#loading').text('');
		$('#name').text(data['name']);
		$('#image').attr('src',data['image']);
		$('#walk').text(data['dist'] + " min walk away");
		var tagbuttons = "";
		for (var i=0 ; i<data['tags'].length ; i++) {
			tagbuttons += "<button type='button' class='btn btn-primary'>" + data['tags'][i] + "</button><div class='divider'/>";
		}
		tagbuttons += "<button type='button' class='btn btn-primary'>" + data['cat'] + "</button><div class='divider'/>";
		$('#tags').html(tagbuttons);
		$('#map').attr('src',"https://maps.googleapis.com/maps/api/staticmap?center=" + data['postcode'].replace(/\s/g, '') + "&size=300x300&zoom=17&markers=label:A|" + data['postcode'].replace(/\s/g, '') + "&sensor=false&key=AIzaSyAaKsyipdH7qWdbo8n7ZkdbUzqwdZatus4");
	})
	$.getJSON('moreinfo.php',function(minfo) {
		$('#rating').text((minfo['rating']/5)*100 + "% from " + minfo['numrev'] + " reviews");
		$('#address').text(minfo['contact']);
		var contact = String(minfo['contact']);
		var contactedit = contact.replace(/,/g, '</br>');
		$('#add').html(contactedit);
		$('#review').text(minfo['review1']);
		$('#reviewer').text(minfo['reviewer1']);
		$('#rev2').on("click",function() {
			$('#review').text(minfo['review2']);
			$('#reviewer').text(minfo['reviewer2']);
		});
		$('#rev3').on("click",function() {
			$('#review').text(minfo['review3']);
			$('#reviewer').text(minfo['reviewer3']);
		})
		$('#rev1').on("click",function() {
			$('#review').text(minfo['review1']);
			$('#reviewer').text(minfo['reviewer1']);
		})
	})
	$('#like').on("click",function() {
		$.ajax({
			type: "POST",
			url: "addtodb.php",
			dataType: 'json',
			data: {'choice': '1'}
		});
		$.getJSON('model.php',function(data) {
			$('#name').text(data['name']);
			$('#image').attr('src',data['image']);
			$('#walk').text(data['dist'] + " min walk away");
			var tagbuttons = "";
			for (var i=0 ; i<data['tags'].length ; i++) {
				tagbuttons += "<button type='button' class='btn btn-primary'>" + data['tags'][i] + "</button><div class='divider'/>";
			}
			tagbuttons += "<button type='button' class='btn btn-primary'>" + data['cat'] + "</button><div class='divider'/>";
			$('#tags').html(tagbuttons);
			$('#map').attr('src',"https://maps.googleapis.com/maps/api/staticmap?center=" + data['postcode'] + "&size=500x400&zoom=16&sensor=false&key=AIzaSyAaKsyipdH7qWdbo8n7ZkdbUzqwdZatus4");
		})
		$.getJSON('moreinfo.php',function(minfo) {
			$('#rating').text((minfo['rating']/5)*100 + "% from " + minfo['numrev'] + " reviews");
			$('#address').text(minfo['contact']);
					var contact = String(minfo['contact']);
		var contactedit = contact.replace(/,/g, '</br>');
		$('#add').html(contactedit);
			$('#review').text(minfo['review1']);
			$('#reviewer').text(minfo['reviewer1']);
			$('#rev2').on("click",function() {
				$('#review').text(minfo['review2']);
				$('#reviewer').text(minfo['reviewer2']);
			});
			$('#rev3').on("click",function() {
				$('#review').text(minfo['review3']);
				$('#reviewer').text(minfo['reviewer3']);
			})
			$('#rev1').on("click",function() {
				$('#review').text(minfo['review1']);
				$('#reviewer').text(minfo['reviewer1']);
			})
		})
	});
	$('#dislike').on("click",function() {
		$.ajax({
			type: "POST",
			url: "addtodb.php",
			dataType: 'json',
			data: {'choice': '-1'}
		});
		$.getJSON('model.php',function(data) {
			$('#name').text(data['name']);
			$('#image').attr('src',data['image']);
			$('#walk').text(data['dist'] + " min walk away");
			var tagbuttons = "";
			for (var i=0 ; i<data['tags'].length ; i++) {
				tagbuttons += "<button type='button' class='btn btn-primary'>" + data['tags'][i] + "</button><div class='divider'/>";
			}
			tagbuttons += "<button type='button' class='btn btn-primary'>" + data['cat'] + "</button><div class='divider'/>";
			$('#tags').html(tagbuttons);
			$('#map').attr('src',"https://maps.googleapis.com/maps/api/staticmap?center=" + data['postcode'] + "&size=500x400&zoom=16&sensor=false&key=AIzaSyAaKsyipdH7qWdbo8n7ZkdbUzqwdZatus4")

		})
		$.getJSON('moreinfo.php',function(minfo) {
			$('#rating').text((minfo['rating']/5)*100 + "% from " + minfo['numrev'] + " reviews");
			$('#address').text(minfo['contact']);
					var contact = String(minfo['contact']);
		var contactedit = contact.replace(/,/g, '</br>');
		$('#add').html(contactedit);
			$('#review').text(minfo['review1']);
			$('#reviewer').text(minfo['reviewer1']);
			$('#rev2').on("click",function() {
				$('#review').text(minfo['review2']);
				$('#reviewer').text(minfo['reviewer2']);
			});
			$('#rev3').on("click",function() {
				$('#review').text(minfo['review3']);
				$('#reviewer').text(minfo['reviewer3']);
			})
			$('#rev1').on("click",function() {
				$('#review').text(minfo['review1']);
				$('#reviewer').text(minfo['reviewer1']);
			})
		})
	});
});