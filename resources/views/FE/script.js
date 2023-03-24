$(document).ready(function () {
  // music
  var music = new Audio("music.mp3");
  // music.play();
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


  // Wishes Section
  var rowWishes1Height = $("#wishes .container .row:first-child").height();
  var rowWishes2Height = $("#wishes .container .row:nth-child(2)").height();
  var wishesSection = $("#wishes").height();
  var messageContainerHeight =
    wishesSection - (rowWishes1Height + rowWishes2Height) - 15;
  $("#wishes .message-container").height(messageContainerHeight);

  // bottom navbar
  $(window).scroll(function () {
    var windowTop = $(window).scrollTop();
    var windowBottom = windowTop + $(window).height();

    var homeTop = $("#home").offset().top;
    var homeBottom = homeTop + $("#home").outerHeight();
    var coupleTop = $("#couple").offset().top;
    var coupleBottom = coupleTop + $("#couple").outerHeight();
    var eventTop = $("#event").offset().top;
    var eventBottom = eventTop + $("#event").outerHeight();
    var locationTop = $("#location").offset().top;
    var locationBottom = locationTop + $("#location").outerHeight();
    var wishesTop = $("#wishes").offset().top;
    var wishesBottom = wishesTop + $("#wishes").outerHeight();

    if (windowTop < homeBottom && windowBottom > homeTop) {
      navbar(0);
    } else if (windowTop < coupleBottom && windowBottom > coupleTop) {
      navbar(1);
    } else if (windowTop < eventBottom && windowBottom > eventTop) {
      navbar(2);
    } else if (windowTop < locationBottom && windowBottom > locationTop) {
      navbar(3);
    } else if (windowTop < wishesBottom && windowBottom > wishesTop) {
      navbar(4);
    }

    function navbar(section){
      $("#navbar a").each(function(index){
        $(this).removeClass("active");
      });
      if(section != 0){
        $(`#navbar a:nth-child(${section})`).addClass("active");
      }
    }
  });

  // overlay welcome
  $("#open").click(function(){
    $("#welcome").addClass("welcomeClick");
    $("body").css("overflow", "auto");
    $("#navbar").css("display", "flex");
    $("#musicPlayer").css("display", "flex");
    music.play();
    $("#musicPlayer i").css("color", "#FFF");
  })
});
