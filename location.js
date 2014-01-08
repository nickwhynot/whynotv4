window.onload = function(){
    if(navigator.geolocation)
        navigator.geolocation.getCurrentPosition(handlesucces, onError);
}

function handlesucces(location) {
    document.getElementById("latitude").value = location.coords.latitude;
    document.getElementById("longitude").value = location.coords.longitude;
}

function onError() {
	document.getElementById("latitude").value = 51.5291;
    document.getElementById("longitude").value = -0.085;
}