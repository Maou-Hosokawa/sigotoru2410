$(function () {
  // ボタンアニメーション
  $('.button-more').on('mouseover', function () {
    $(this).animate({
      opacity: 0.5,
      marginLeft: 20,
    }, 100);
  });
  $('.button-more').on('mouseout', function () {
    $(this).animate({
      opacity: 1.0,
      marginLeft: 0
    }, 100);
  });

  // カルーセル
  $('.slider').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 5000,
    arrows: false,
  });

  // モバイルナビ
  $('#nav-sp a[href*="#"]').on('click', function() {
    $('#nav-sp').css('display','none');
  })

});