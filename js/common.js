

$(window).scroll(function(){
if(($(document).height()-$(document).scrollTop()-$(window).height()-$('footer').outerHeight(true)-$('.conversion').outerHeight(true))<0){
     setTimeout(function(){$('.conversion').css("position","relative");},600);
}else{
	setTimeout(function(){$('.conversion').css("position","fixed");},600);}
});

$(document).ready(function() {
    $(window).scroll(function() {
        if (($(document).height() - $(document).scrollTop() - $(window).height() - $('footer').outerHeight(true) - $(
                '.conversion').outerHeight(true)) < 0) {
            setTimeout(function() {
                $('.conversion').css("position", "relative");
            }, 600);
        } else {
            setTimeout(function() {
                $('.conversion').css("position", "fixed");
            }, 600);
        }
    });
//视频列表页
$('.video-list .item:odd').addClass('f-right');
 $('.video-list .item:even').addClass('f-left');

//导航按钮
    $('a.close').on("click", function() {
        $('.main-menu').toggleClass('show');
        if ($('.main-menu').hasClass('show')) {
            $('html,body').css("overflow", "hidden");
            $('html,body').bind('touchmove', function(e) {
                e.prevenDefault();
                e.stopPropagation();
            });
        } else {
            $('html,body').css("overflow", "auto");
        };
    });
    $('#close').on("click", function() {
        $('html,body').css("overflow", "auto");
    });
     $('.productchar .title h3').each(function(i){
    $(this).click(function(){
    $('.productchar .title h3').removeClass('active');
    $(this).addClass('active');
    $('.productchar .item').addClass('hidden');
    $('.productchar .item').eq(i).removeClass('hidden');
    });
  });

});