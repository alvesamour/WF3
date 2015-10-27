$(function() {
	$(document).mousemove(function(ev) {
		//	$('#bouboule').stop()
		$("#divi").stop()
			.animate({
				left: ev.pageX,
				top: ev.pageY,
			})
	})

})


$( "#clickme" ).click(function() {
  $( "#book" ).animate({
    opacity: 0.25,
    left: "+=50",
    height: "toggle"
  }, 5000, function() {
    // Animation complete.
  });
});

