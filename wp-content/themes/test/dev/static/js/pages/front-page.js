$(function () {

  // video

  $('.instagram__play-icon').on('click', function () {
    $('.instagram__video').find('video').trigger('play');
  });

  $('.instagram__video').on('click', function (e) {
    if(e.target == $(this).find('video')[0]) {
      $(this).find('video').trigger('pause');
    }
  });

  $('.instagram__video').find('video').bind('pause', function (e) {
    $('.instagram__play-icon').show();
  });

  $('.instagram__video').find('video').bind('play', function (e) {
    $('.instagram__play-icon').hide();
  });


  // marquee

  $('.marquee').marquee({
    duration: 7000,
    startVisible: true,
    duplicated: true,
    direction: 'right',
    delayBeforeStart: 0
  });
})