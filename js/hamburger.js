$(document).ready(function(){
    
      $(".dropdown-overlay").hide();
    
        $(".hamburger").click(function(){

            $(".dropdown-overlay").toggle(); $(".hamburger").toggleClass("hamburger-x");
            $("nav ul").slideToggle();
         });
    
    
        $(".menu .link").click(function(){
            var x = $(window).width();
            if(x<480){
            $(".dropdown-overlay").hide(); $(".hamburger").toggleClass("hamburger-x");
            $("nav ul").slideToggle();
                }
         });
    
    
        $(".dropdown-overlay").click(function () {
            $(".dropdown-overlay").hide();
            $(".hamburger").toggleClass("hamburger-x");
            $("nav ul").slideToggle();
        });
//    var w = $(window).width();
//        console.log(w);
        
        $(window).resize(function(){
            var w = $(window).width();
            console.log(w);
            if(w>480){
                $("nav ul").show();
            }else{
               $("nav ul").hide();
               $(".dropdown-overlay").hide(); $(".hamburger").removeClass("hamburger-x");
            }
        })
    });