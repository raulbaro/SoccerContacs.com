let contenido = document.getElementById("main");
let hr = document.getElementById("lineafooter");

$(document).ready(function () {
    let loading = document.getElementById("main-fader");
    setTimeout(function () {
        loading.style.display = "none";
        contenido.style.display = "block";
        hr.style.display = "block";
    }, 3000);


});
