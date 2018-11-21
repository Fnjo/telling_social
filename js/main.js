$(document).ready(function(){
    $('#JumboCarousel').carousel({
        interval: 5000

    });


    $(".tab").mouseenter(function(){
        $(".tab").removeClass("active");
        $(this).addClass("active");

        if($(this).hasClass("tab1")){
            $(".tabimg2, .tabimg3").removeClass("active");
            $(".tabimg1").addClass("active");
        }else if($(this).hasClass("tab2")){
            $(".tabimg1, .tabimg3").removeClass("active");
            $(".tabimg2").addClass("active");
        }else{
            $(".tabimg1, .tabimg2").removeClass("active");
            $(".tabimg3").addClass("active");
        }
    });
});