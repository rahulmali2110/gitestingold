$(document).ready(function(){
    var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
        
    $(".used").each(function(){
        //var a = $(this).find(".duffer").attr("data-src"),
        //b = $(this).find(".duffer").attr("src"),
        //c = $(this).find(".video").attr("data-video");
        //d = '<video id="gump" autoplay loop muted height="100%" width="100%"><source src="'+c+'" type="video/mp4"></source></video>';       
        //$(this).find(".duffer").attr("src", a).fadeIn(1000);    
        //$('.menu-item-11659 > a').attr('rel','nofollow');
        $('.menu-item-8445 > a').attr('rel','nofollow');
        //$('.menu-item-10389 > a').attr('rel','nofollow');
        //$('.menu-item-12271 > a').attr('rel','nofollow');
        //$('.menu-item-12708 > a').attr('rel','nofollow');
       /* if(isMobile.any())
            {   
                console.log(isMobile.any());
                $(this).on("touchstart", function(e){           
                    $(this).find("#preloaders").css("display","block").fadeOut(2000);                    
                    $(this).find(".dumpo").delay(2100).append(d).find(".duffer").hide();
                    e.preventDefault();
                });
                $(this).on("touchend", function(){
                    $(this).find(".duffer").show();
                    $(this).find("video").remove();
                    $(this).find(".duffer").attr("src", a);
                    $(this).find("#loader").hide().fadeOut(1000);       
                });
            } 
        else { */
            
       /*$(this).on({
            mouseenter: function(z) {   
            $(this).find("#preloaders").css("display","block").fadeOut(2000);
            $(this).find(".dumpo").delay(3000).append(d).find(".duffer").hide();
            z.preventDefault();
            },   
            mouseleave: function(f) {
            $(this).find("#preloaders").css("display","none");
            $(this).find("video").remove();
            $(this).find(".duffer").show();
            $(this).find(".duffer").attr("src", a);    
            f.preventDefault();
            }
        }); */
            
    }); 
    //setTimeout(function(){$(".loading").css("display","none");$("#hentaigod").css("display","block").fadeIn("slow");}, 1000);
    
    $("article").each(function(){
        $(this).on({
            mouseenter: function() {
                $(this).find("span.temper").show();
            },
            mouseleave: function() {
                $(this).find("span.temper").hide();
            }
        });
        
    });

    var a = '<div class="h-menu"><div class="icn-h-menu"><span class="ihm-1"></span><span class="ihm-2"></span><span class="ihm-3"></span></div></div>';
    $(".widget-container").each(function(){
        $(this).find(".widget-title").append(a).fadeIn("fast");            
    });
    $(".widget-container").each(function(){
        $(this).find("h2.widget-title").click(function(){
                $(this).next().toggle("slow");
            });
    });
    $(document).ready(function() {
  function close(){
        $(".h-menu").addClass('is-active');
    setTimeout(function(){
      init();
    },1000);
       
  }
  setTimeout(function(){
    close();
  },1000);
  function init(){
  $('.h-menu').on('click',
    function(){
      $(this).toggleClass('is-active');
  });
  
  $('.h-menu').hover(function(){
    $(this).addClass('is-hover');
  },function(){
    $(this).removeClass('is-hover');
  });
  
  $('.h-menu').on('mousedown',function(){
    $(this).addClass('is-mousedown');
  });
  
  $('.h-menu').on('mouseup',function(){
    $(this).removeClass('is-mousedown');
  });
  }
});
    $(document).ready(function(){

                $('.search1').keydown(function (event) {
                    if(event.which == '13') {
    var searchInput = $('.input1').val();
    var url = "http://localhost/?s=" + searchInput;
    window.open(url);
                    }
});
    $(function(){
  $('.search1').on('click',function(){
    $('.search1').addClass('open');
    $('.close1, .input1').fadeIn(500);
  });
  
  $('.close1').on('click',function(){
    $('.search1').removeClass('open');
    $('.close1, .input1').fadeOut(500);
  });
});
            });
});