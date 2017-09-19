// **
//    Javascript-fil som styr animationen av samt visa/gömma historikdelen
//    på stämplingssidan
// **

$(document).ready(function(){
  var content = $(".content");
  var checkinHistory = $("#checkin_history");
  var html = $('html, body');
  $("#checkin_button2").click(function(){
    content.animate({height: '1000px'}, 300);
    checkinHistory.css("display", "inline");
    html.animate({scrollTop: $(".content").offset().top}, 500);
  });
  $("#checkin_history_hide").click(function(){
    html.animate({scrollTop: $("#header").offset().top}, 500);
    checkinHistory.css("display", "none");
    content.animate({height: '0px;'}, 300);
  });
});
