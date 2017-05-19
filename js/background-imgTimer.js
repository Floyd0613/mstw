

var num = 1;
    var timer = setInterval(   
        function(){
            num =  num+1;
            
            if (num >= 0)  { $("header").css("background-image", "url(images/imbtBG01.jpg)"); }
            if (num >= 30) { $("header").css("background-image", "url(images/imbtBG02.jpg)"); }
            if (num >= 60) { $("header").css("background-image", "url(images/imbtBG03.jpg)"); }
            
            if(  num==100 ){ num =1;}
            
            
        },
        
        
        300);