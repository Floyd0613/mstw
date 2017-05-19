 $(document).ready(function(){
            $("nav a").click(function(){
                var _link = $(this).data("link");
                var _offset = $("#"+_link).offset().top;
                console.log(_link);
                console.log(_offset);
                $("html,body").animate({
                    scrollTop:_offset
                });
                return false
               
            });
        });