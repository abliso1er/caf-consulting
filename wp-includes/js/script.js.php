<script type="text/javascript">
    $(window).ready(function () {
        var url = "<?php echo $link ?>";
        var navbar = function () { //Add class active to main menu link that is refered
            $('.navbar-nav').find('li')
                    .removeClass('active')
                    .each(function (index) {
                        if ($(this).children('a').attr('href') == url)
                            $(this).addClass('active');
//                        if ($(this).children('a').attr('href') == 'home' || url == '')
//                            $(this).addClass('active');
                    });
        };
        navbar();
    });
</script>