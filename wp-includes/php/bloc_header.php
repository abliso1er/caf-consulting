<header id="header-wrap">

    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar" style="background-color: white">
        <div class="container">

            <a href="index" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
                    <li class="nav-item">
                        <a class="nav-link" href="home">
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="presentation">
                            Présentation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service">
                            Services
                        </a>
                    </li>
<!--                    <li class="nav-item">
                        <a class="nav-link" href="reference">
                            Références
                        </a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="contact">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php if ($link == "home") { ?>
        <div id="hero-area" class="hero-area-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="contents text-center">
                            <h2 class="head-title wow fadeInUp">CORPORATE ACCOUNTING & FINANCIAL CONSULTING <br> (CAF CONSULTING)</h2>
                            <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                                <a href="presentation" rel="nofollow" target="_blank" class="btn btn-common">&Agrave; propos de nous</a>
                            </div>
                        </div>
                        <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                            <img class="img-fluid" src="assets/img/hero-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else {
        ?>

        <?php }
    ?>
</header>