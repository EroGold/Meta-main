// fix nav
$(document).ready(function(){
    $(window).bind('scroll', function() {
    var navHeight = $( window ).height() - 650;
          if ($(window).scrollTop() > navHeight) {
            $(".box-header").css({
                "z-index": "1000",
                "top": "-10px",
                "background": "#da251c",
                "left": "0px",
                "margin-top": "0",
                "height": "65px",
                
            })

            $('.search-box').css({
                "top": "20px",
                "left":"330px"
            })
            
            $('.box-header').addClass('fixed');
          }
          else {
            $(".box-header").css({
                "z-index": "1000", 
                "background": "#da251c",
                "width": "110%",
                "margin-top": "60px",
                "margin-right": "-70px",
                "margin-left": "-70px",
                "top": "0",
                "left": "0px",
                "height": "80px"
            })

            $('.search-box').css({
                "top": "80px",
                "left":"268px"
            })

            $('.box-header').removeClass('fixed');  
          }
     });
 });