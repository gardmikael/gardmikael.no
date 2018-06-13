$(document).ready(function(){
  var heroxpos = parseInt($('#hero').css('background-positionX'), 10);
  $(document).scroll(function () {
    // parallaxing
    var $movebg = $(window).scrollTop() * -0.5;
    var newheroxpos = heroxpos - ($movebg/8);
    var newheroxskew = heroxpos - ($movebg/150);

    $('#hero').css('background-positionY', ($movebg) + 'px');
    $('#hero').css('background-positionX', newheroxpos + 'px');
    $('#hero').css('transform', 'skewY(-' + newheroxskew + 'deg)');
    $('#about').css('transform', 'skewY(-' + newheroxskew + 'deg)');
    $('#code').css('transform', 'skewY(-' + newheroxskew + 'deg)');

    $('#code').css('background-positionY', ($movebg + 500) + 'px');
    $('#code').css('background-positionX', ($movebg/3) + 'px');
    $('.three').css('background-positionY', ($movebg) + 'px');

    // add class active to nav a on scroll
    var scrollPos = $(document).scrollTop() + 100;
    // changing padding of nav a on scroll
      if (scrollPos > 250) {
        $('nav a').addClass('small');
        $('nav img').addClass('move');
        $('nav span').removeClass('movetext');
      } else {
        $('nav a').removeClass('small');
        $('nav img').removeClass('move');
        $('nav span').addClass('movetext');
      }
  });
});

$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $("#hero-text").css({
    "-webkit-filter": "blur(" + (scroll/150) + "px)",
    filter: "blur(" + (scroll/150) + "px)",
    left: -(scroll/5)
  });
});
