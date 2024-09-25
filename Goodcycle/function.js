// ハンバーガー
document.querySelector('.hamburger').addEventListener('click', function(){
  this.classList.toggle('active');
  document.querySelector('.slide-menu').classList.toggle('active');
})



$(".slider").slick({
autoplay: true, // 自動再生
fade: true, // スライドをフェードイン・フェードアウト
cssEase: 'linear',// アニメーション
speed: 500, // フェードアニメーションの速度設定
arrows: false, // 矢印
dots: true, // インジケーター
});

$(window).on('scroll', function () {
  var doch = $(document).innerHeight(); //ページ全体の高さ
  var winh = $(window).innerHeight(); //ウィンドウの高さ
  var bottom = doch - winh; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置
  if (bottom <= $(window).scrollTop()) {
  //一番下までスクロールした時に実行
  $("#hambottom").addClass('bottom');
  }
  else{
    $("#hambottom").removeClass('bottom');
  }
  });
