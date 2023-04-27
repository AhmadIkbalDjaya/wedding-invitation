$(document).ready(function () {
  // music
  var music = new Audio("/music.mpeg");
  music.loop = true;
  $("#musicPlayer").click(function(){
    if(music.paused){
      music.play();
      $("#musicPlayer i").css("color", "#FFF");
    }
    else if(music.play){
      music.pause();
      $("#musicPlayer i").css("color", "#424640");
    }
  });
  if(music.paused){
    $("#musicPlayer i").css("color", "#424640");
  }
  else if(music.play){
    $("#musicPlayer i").css("color", "#FFF");
  }

  // Hitung Mundur
  // Tentukan waktu target (hari, bulan, tahun, jam, menit, detik)
  var targetDate = new Date("2023-05-13T04:00:00Z"); // -6jam sepaya sesuai // 10-6

  // Fungsi untuk mengambil waktu lokal di Makassar
  function getLocalTime() {
    var options = { timeZone: 'Asia/Makassar' };
    var localDate = new Date().toLocaleString('en-US', options);
    return new Date(localDate);
  }

  // Perbarui hitungan mundur setiap satu detik
  setInterval(function() {
    // Hitung selisih antara waktu target dan waktu sekarang
    // var now = getLocalTime();
    var now = new Date();
    var diff = targetDate - now;

    // Konversi selisih waktu ke hari, jam, menit, dan detik
    var days = Math.floor(diff / (1000 * 60 * 60 * 24));
    var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((diff % (1000 * 60)) / 1000);

    // Tampilkan hasil hitungan mundur di dalam elemen dengan id "countdown"
    var countdown = days + " hari, " + hours + " jam, " + minutes + " menit, " + seconds + " detik";
    $("#countdown").text(countdown);
  }, 1000);


  // overlay welcome
  $("#open").click(function(){
    $("#welcome").addClass("welcomeClick");
    $("body").css("overflow", "auto");
    $("#navbar").css("display", "flex");
    $("#musicPlayer").css("display", "flex");
    music.play();
    $("#musicPlayer i").css("color", "#FFF");
  });

});
