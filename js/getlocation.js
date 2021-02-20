function getLocationConstant() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(onGeoSuccess, onGeoError);
    } else {
        alert("Browser has not supported HTML5");
    }
}

// ดึงตำแหน่ง
function onGeoSuccess(event) {
    document.getElementById("Latitude").value = event.coords.latitude;
    document.getElementById("Longitude").value = event.coords.longitude;

}

// ถ้าดึงแล้วไม่ได้
function onGeoError(event) {
    alert("Error code " + event.code + ". " + event.message);
}