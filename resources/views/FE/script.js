$(document).ready(function () {
  // Wishes Section
  var rowWishes1Height = $("#wishes .container .row:first-child").height();
  var rowWishes2Height = $("#wishes .container .row:nth-child(2)").height();
  var wishesSection = $("#wishes").height();
  var messageContainerHeight = wishesSection - (rowWishes1Height + rowWishes2Height) - 15;
  $("#wishes .message-container").height(messageContainerHeight);
});
