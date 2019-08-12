

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
$(".details").attr('ontouchstart', 'hover(this)');//hover效果
     $(".details").attr('ontouchend', 'mouseout(this)');//秒除hover
});
 function mouseout(obj) {
  var className = "active";
  var _ecname = obj.className;
  if (_ecname.length == 0) return;
  if (_ecname == className) {
   obj.className = "";return;
  }
  if (_ecname.match(new RegExp("(^|\\s)" + className + "(\\s|$)")))
   obj.className = _ecname.replace((new RegExp("(^|\\s)" + className + "(\\s|$)")), " ");
 }
 function hover(obj) {
  if (!obj) return;
  var className = "active"
  var _ecname = obj.className;
  if (_ecname.length == 0) {
   obj.className = className;return;
  }
  if (_ecname == className || _ecname.match(new RegExp("(^|\\s)" + className + "(\\s|$)")))
   return;
  obj.className = _ecname + " " + className;
 }
