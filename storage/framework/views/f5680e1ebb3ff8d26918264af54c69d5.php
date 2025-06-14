<!--FOOTER-->
<div class="footer-bottom">
    <div class="container-fluid text-center">
        <p>$laravel = app();
            $version = $laravel::VERSION;
        </p>
        <p>
            Copyright &copy; 2021, Amikom. Developed by 
            <a><strong>Akmal, Bagus, Ghanim, Rafli</strong></a>
        </p>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        const x = 6 % 2;
        const y = x ? 'One' : 'Two';
        console.log(y);
        $(".bg-loader").fadeOut();
        //hide navbar mobile
        $("#navbar-mobile").hide();
        // $("#menu-button").hide();
        //Mobile friendly browsers
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
            $("section").first().removeClass("menu");
            $(".wrapper .container .menu").css("bottom:0");
            $(".navbar-dark").css("bottom:0");
            $(".collapse .menu").css("width:100%;height:100%");
            $("li").addClass("nav-item");
            $("body").css("font-size:2rem;text-decoration:none");
            $(".nav.ul.li").css("text-decoration:none");

        } else if (window.innerWidth > 768) {
            $(".bg-loader").fadeOut();
            $(".wrapper .kolom").css("margin-top:0");
            //show menu-bar
            // $(".navbar").second().hide();
            $(".navbar").last().hide();

        };
    });

    $(window).resize(function() {
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
            $("body").css("font-size:2rem;text-decoration:none");
            $(".nav .ul .li").css("text-decoration:none");
            //delete margin in kolom
        } else if (window.innerWidth > 768) {
            //reload page
            $(".bg-loader").fadeOut();
            $(".wrapper .kolom").css("margin-top:50px");
            //show menu-bar
            // $(".navbar").second().hide();
            $(".navbar").last().hide();
        };
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
            $(".menu-bottom").addClass("position-sticky");
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<?php /**PATH D:\Programming\php\Laravel\final project\news-portal\resources\views/components/footer.blade.php ENDPATH**/ ?>