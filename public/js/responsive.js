$(document).ready(function () {
    //hide loader
    $(".bg-loader").fadeOut();
    //hide navbar mobile
    $("#navbar-mobile").hide();
});

$(window).resize(function () {
    if (window.innerWidth <= 768) {
        $(".bg-loader").fadeOut();
        //hide menu-bar
        $(".navbar").first().hide();
        //hide menu bar
        $("#menu-bar").hide();
        //show navbar mobile
        $("#navbar-mobile").show();
        //hide footer bottom
        $(".footer-bottom").hide();
        //place last navbar to bottom
        $(".wrapper .container .menu").css("bottom:0");
        $(".navbar-dark").css("bottom:0");
        $(".collapse .menu").css("width:100%;height:100%");
        $("li").addClass("nav-item");
        $("body").css("font-size:2rem;text-deocration:none");
        $(".nav .ul .li").css("text-decoration:none");
    }
    else if(window.innerWidth >= 768){
        //hide loader
        $(".bg-loader").fadeIn();
        //hide navbar mobile
        $("#navbar-mobile").hide();
        //show menu-bar
        $(".navbar").first().show();
        //show menu bar
        $("#menu-bar").show();
        //show navbar mobile
        $("#navbar-mobile").show();
        //show footer bottom
        $(".footer-bottom").show();
        //hide last navbar to bottom
        $(".wrapper .container .menu").css("overflow:hidden");
        $(".navbar-dark").css("bottom:0");
        $(".collapse .menu").css("width:100%;height:100%;overflow:hidden");
        // $("li").addClass("nav-item");
        $("body").css("font-size:2rem;text-deocration:none;overflow:hidden");
        $(".nav .ul .li").css("text-decoration:none;overflow:hidden");
    }
    else{
        return 0;
    }
})
