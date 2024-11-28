var html =
  '<h2>Pesan Berhasil Terkirim</h2><h3>Anda akan diarahkan ke halaman utama, makasii yaa (masukan nama gebetanmu) cantikk</h3><h4 class="timer">10</h4><p>Dibuat Oleh :</p><a href="masukin URL profil instagram kamu" class="yt"><img src="Instagram-IG-Logo-Transparent-Image.png" height="30px" alt="" srcset="" />(masukan namamu)4</a>';

document.querySelector("body").innerHTML += html;

timer = document.querySelector(".timer");
var time = timer.innerHTML;

function timeku(linkku) {
  timer.innerHTML = time;
  console.log(time);
  if (time == 0) {
    window.location.replace(linkku);
    // console.log(linkku);
  } else {
    time--;
    setTimeout(function () {
      timeku(linkku);
    }, 1000);
  }
}