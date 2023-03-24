$(document).ready(function () {
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
      console.log("home");
      navbar(0);
    } else if (windowTop < coupleBottom && windowBottom > coupleTop) {
      console.log("couple");
      navbar(1);
    } else if (windowTop < eventBottom && windowBottom > eventTop) {
      console.log("event");
      navbar(2);
    } else if (windowTop < locationBottom && windowBottom > locationTop) {
      console.log("location");
      navbar(3);
    } else if (windowTop < wishesBottom && windowBottom > wishesTop) {
      console.log("wishes");
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
});
