<!DOCTYPE html>
<html lang="en">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'); ?>

    <title>Jerry's View</title>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/headernav.php'); ?>
    <section class="welcome-section">

        <div class="head-soc">
            <div>
                <li><img class="header-social-ico" src="/img/behance-logo.svg" alt="behance ico"></li>
                <li><img class="header-social-ico" src="/img/ig-logo.svg" alt="instagram ico"></li>
                <li><img class="header-social-ico" src="/img/fb-logo.svg" alt="facebook ico"></li>
            </div>
        </div>
        <div class="header-text">
            <h1 class="welcome-txt">Welcome to</h1>
            <h1 class="jv-header-txt">Jerry's View</h1>
            <div class="blue-btn">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <button> Take A View </button>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="frontpage-titles">
            <div class="frontpage-title-edges">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <h2>Services</h2>
            </div>
        </div>
        
        <div class="services-p">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>

        <div class="row services-details">
            <div class="col-lg-4 ser-txt-pad">
                <div class="services-d-text">
                    <img src="/img/consultation-ico.svg" alt="consultation icon">
                    <h3>CONSULTATION</h3>
                    <p>Why do you need content? What story must it tell? How does it need to work? Wonderhatch takes the time to fully understand your brand, your unique challenges and audience. This ensures the content we create for you not only delivers the right messaging, but really helps to drive your business forwards</p>
                </div>
            </div>
            <div class="col-lg-4 ser-txt-pad">

                <div class="services-d-text">
                    <img src="/img/photography-ico.svg" alt="consultation icon">
                    <h3>PHOTOGRAPHY</h3>
                    <p>Why do you need content? What story must it tell? How does it need to work? Wonderhatch takes the time to fully understand your brand, your unique challenges and audience. This ensures the content we create for you not only delivers the right messaging, but really helps to drive your business forwards</p>
                </div>
            </div>
            <div class="col-lg-4 ser-txt-pad">
                <div class="services-d-text">
                    <img src="/img/film-ico.svg" alt="consultation icon">
                    <h3>FILM</h3>
                    <p>Why do you need content? What story must it tell? How does it need to work? Wonderhatch takes the time to fully understand your brand, your unique challenges and audience. This ensures the content we create for you not only delivers the right messaging, but really helps to drive your business forwards</p>
                </div>
            </div>
        </div>
    </section>

    <section class="f-projects">
        <div class="frontpage-titles">
            <div class="frontpage-title-edges">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <h2>Featured Projects</h2>
            </div>
        </div>

        <div class="container">
            <div class="row fp-row1">
                <div class="col-lg-4 col-sm-12">
                    <div class="f-project-box">
                        <img src="/img/cam in hand.png" alt="cam in hand">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="f-project-box">
                        <img src="/img/cam in hand sun.png" alt="sun cam">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="f-project-box">
                        <img src="/img/trees.jpg" alt="trees">
                    </div>
                </div>
            </div>

            <div class="row fp-row2">
                <div class="col-lg-4 col-sm-12">
                    <div class="f-project-box">
                        <img src="/img/cam in hand.png" alt="cam in hand">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="f-project-box">
                        <img src="/img/cam in hand sun.png" alt="sun cam">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="f-project-box">
                        <img src="/img/trees.jpg" alt="trees">
                    </div>
                </div>
            </div>
        </div>
        <div class="tmm-foot">
            <h3>THERE'S MANY MORE!</h3>
            <div class="btn-tmm">
                <div class="blue-btn">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <button> See more </button>
                </div>
            </div>
        </div>
    </section>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
</body>

</html>