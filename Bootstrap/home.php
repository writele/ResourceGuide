<?php get_header(); ?>

<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive profile" src="img/profile.jpg" alt="">
                    <div class="intro-text">
                        <span class="name">Eleanor Palmer</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer and Research Professional</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/northstarwebsite.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/googleclonewebsite.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/businesswebsite.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/hotorcoldgame.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/shoppinglistwebsite.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/JSQuiz.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 about">
                    <p>My goal is to solve problems and communicate ideas in the best way possible.</p>
<p>My background in psychology research makes me uniquely suited for work in web development and market research. I build websites and analyze problems through keen attention to detail, all the while never losing sight of the big picture.</p>
<p>I am currently seeking full-time employment in North Carolina. I am also available for freelance work. Send me an e-mail and let me put my skills to use for you!</p>
                </div>
                <div class="col-lg-4 about">
                    <h3>Skills</h3>
                    <ul>
                        <li>Javascript</li>
                        <li>jQuery</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Bootstrap</li>
                        <li>Wordpress</li>
                        <li>Research Methods</li>
                        <li>Data Analysis</li>
                    </ul>
                    <h3>Education</h3>
                    <h4>Wake Forest University</h4>
                    <h5>M.A. in Psychology</h5>
                    <h4>St. Edward's University</h4>
                    <h5>B.A. in Psychology</h5>
                </div>
                <!-- <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- !!!!!!Portfolio Modals!!!!!!!! -->
    
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>North Star LGBT Center Website</h2>
                            <hr class="star-primary">
                            <a href="http://www.northstarlgbtcc.com/"><img src="img/portfolio/northstarwebsite.png" class="img-responsive img-centered" alt="North Star LGBT Center"></a>
                            <p>Implemented a new website design for North Star LGBT Center by customizing a Wordpress child theme using CSS. Migrated old content to new web hosting.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://www.northstarlgbtcc.com/">North Star LGBT Center</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>August 2014
                                    </strong>
                                </li>
                                <li>Skills:
                                    <strong>Wordpress Customization, CSS
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Google Clone</h2>
                            <hr class="star-primary">
                            <a href="http://writele.github.io/Google-Clone/index.html"><img src="img/portfolio/googleclonewebsite.png" class="img-responsive img-centered" alt="Google Clone"></a>
                            <p>Clone of Google homepage built from scratch using HTML and CSS.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong>Project for Thinkful: Front-End Web Development Course
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>August 2014
                                    </strong>
                                </li>
                                <li>Skills:
                                    <strong>HTML, CSS
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <a href="http://writele.github.io/business-website/index.html"><img src="img/portfolio/businesswebsite.png" class="img-responsive img-centered" alt="Business website"></a>
                            <p>Business website built from scratch using HTML and CSS. (Contact form not currently functional.) </p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong>Project for Thinkful: Front-End Web Development Course
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>September 2014
                                    </strong>
                                </li>
                                <li>Skills:
                                    <strong>HTML, CSS
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Hot or Cold Game</h2>
                            <hr class="star-primary">
                            <a href="http://writele.github.io/hot-or-cold/"><img src="img/portfolio/hotorcoldgame.png" class="img-responsive img-centered" alt="Hot or Cold Game"></a>
                            <p>Game functionality added using Javascript and jQuery.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong>Project for Thinkful: Front-End Web Development Course
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>January 2015
                                    </strong>
                                </li>
                                <li>Skills:
                                    <strong>Javascript, jQuery
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Shopping List App</h2>
                            <hr class="star-primary">
                            <a href="http://writele.github.io/shopping-list/index.html"><img src="img/portfolio/shoppinglistwebsite.png" class="img-responsive img-centered" alt="Shopping List App"></a>
                            <p>Shopping list app built from scratch using CSS, HTML, and jQuery.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong>Project for Thinkful: Front-End Web Development Course
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>September 2014
                                    </strong>
                                </li>
                                <li>Skills:
                                    <strong>jQuery, Javascript, HTML, CSS
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Interactive Quiz</h2>
                            <hr class="star-primary">
                            <a href="http://writele.github.io/endangered-quiz/"><img src="img/portfolio/JSQuiz.png" class="img-responsive img-centered" alt="Endangered Species Quiz"></a>
                            <p>Interactive Javascript + jQuery Quiz on naming endangered animals.</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong>Project for Thinkful: Front-End Web Development Course
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong>January 2015
                                    </strong>
                                </li>
                                <li>Skills:
                                    <strong>Javascript, jQuery, HTML, CSS
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>