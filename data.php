<?php

$fullName = $_POST['full-name'];
$address = $_POST['address'];
$birthDate = $_POST['birth-date'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$summary = $_POST['summary'];
$titles = $_POST['job-title'];
$descriptions = $_POST['job-description'];
$endDate = $_POST['end-date'];
$startDate = $_POST['start-date'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
    <script src="portfolio.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Erin Manahan</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li id="nav-about"><a href="#about">About</a></li>
                    <li id="nav-portfolio"><a href="#portfolio">Portfolio</a></li>
                    <li id="nav-contact"><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container-fluid">

        <div class="row cover top">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 headline">
                        <h1 class="text-center">Hi, I'm Erin</h1>
                        <p class="lead text-center">A Web Developer in training.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 center-block text-center">
                        <a href="#about"><span id="scrollIcon" class="front-glyph glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
        </div>


        <div id="about" class="row cover">
            <h2 class="text-center">About Me</h2>
            <div class="row">
                <div class="col-md-6 text-center about-info">
                    <img class="img-circle text-center profile-img" src="https://sonorangirl.github.io/img/Square-Ireland.png">
                    <p class="text-center">I'm a self taught web developer from Scottsdale, AZ. I'm currently learning Javascript development with FreeCodeCamp and Treehouse. I also have degrees in Biology and Sustainability so I can't wait till I get to the point where I can jump into the more interactive data visualizations and put what I'm learning to good use. But for now I'm having fun learning the basics! </p>
                </div>
                <div class="col-md-6 about-tools">
                    <p class="text-center">Here's a few of the tools I use</p>
                    <div class="col-xs-6">
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Javascript</li>
                            <li>Bootstrap</li>
                            <li>Foundation</li>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <ul>
                            <li>JQuery</li>
                            <li>Sass</li>
                            <li>Git</li>
                            <li>WordPress</li>
                            <li>PHP</li>
                        </ul>
                    </div>

                </div>
                <div class="row break">
                    <div class="col-md-6 about-last">
                        <p class="text-center">Check out my latest projects <span class="glyphicon glyphicon-arrow-down"></span></p>
                    </div>
                </div>
            </div>
        </div><!-- End #About -->

        <div id="portfolio" class="row cover">
            <h2 class="text-center">Portfolio</h2>
            <div class="container">
                <div class="row portfolio-projects">
                    <!-- Two project row-->
                    <div class="col-lg-6">
                        <!--1st side project -->
                        <div class="row">
                            <div class="col-sm-5 text-center">
                                <h4 class="portfolio-projects--title">Earth Quotes</h4>
                                <p class="portfolio-projects--desc">Random quotes shown over google earth images</p>
                                <p class="portfolio-projects--desc">Uses: Javascript, JQuery, Bootstrap</p>
                                <a class="btn btn-rounded portfolio-projects--btn" href="https://sonorangirl.github.io/Earth-Quotes/#" role="button">View Project</a>
                            </div>
                            <div class="col-sm-7 text-center">
                                <img class="portfolio-projects--image" src="https://sonorangirl.github.io/img/slice-quotes.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--2nd side project -->
                        <div class="row">
                            <div class="col-sm-5 text-center pull-right-sm">
                                <!--flipped on small, unflipped on large-->
                                <h4 class="portfolio-projects--title">Task Timer</h4>
                                <p class="portfolio-projects--desc">A Pomodoro clock timer with a task list integration</p>
                                <p class="portfolio-projects--desc">Uses: Javascript, JQuery, Bootstrap</p>
                                <a class="btn btn-rounded portfolio-projects--btn" href="https://sonorangirl.github.io/Task-Timer/" role="button">View Project</a>
                            </div>
                            <div class="col-sm-7 text-center pull-right-sm">
                                <!--flipped on small, unflipped on large-->
                                <img class="img-rounded portfolio-projects--image" src="https://sonorangirl.github.io/img/slice-task-timer.png">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Two project row-->

                <div class="row portfolio-projects">
                    <!-- Opposite Two project row-->
                    <div class="col-lg-6">
                        <!--1st side project -->
                        <div class="row">
                            <div class="col-sm-5 text-center">
                                <h4 class="portfolio-projects--title">Whats the Weather</h4>
                                <p class="portfolio-projects--desc">A weather app to check current weather conditions.</p>
                                <p class="portfolio-projects--desc">Uses: Javascript, Jquery, APIs</p>
                                <a class="btn btn-rounded portfolio-projects--btn" href="https://sonorangirl.github.io/Weather/" role="button">View Project</a>
                            </div>
                            <div class="col-sm-7 text-center">
                                <img class="img-rounded portfolio-projects--image" src="https://sonorangirl.github.io/img/weather-slice.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--2nd side project -->
                        <div class="row">
                            <div class="col-sm-5 text-center pull-right-sm">
                                <!--flipped on small, unflipped on large-->
                                <h4 class="portfolio-projects--title">Simon Game</h4>
                                <p class="portfolio-projects--desc">A simple recreation of the 80s game Simon.</p>
                                <p class="portfolio-projects--desc">Uses: Javascript, Sass, JQuery</p>
                                <a class="btn btn-rounded portfolio-projects--btn" href="https://sonorangirl.github.io/Simon-Game/" role="button">View Project</a>
                            </div>
                            <div class="col-sm-7 text-center pull-right-sm">
                                <!--flipped on small, unflipped on large-->
                                <img class="img-rounded portfolio-projects--image" src="https://sonorangirl.github.io/img/slice-simon.png">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Opposite Two project row-->

            </div>
        </div>
    </div><!-- End #Portfolio -->

    <div id="contact" class="row cover bottom">
        <h2 class="text-center contact-header">Contact Me</h2>
        <p class="text-center contact-email">Get in touch with me <span class="glyphicon glyphicon-arrow-right"></span> manahan.erin@gmail.com</p>
        <div class="text-center contact-social-icons">
            <p>Or find me on:</p>
            <ul class="centered">
                <a href="https://codepen.io/sonorangirl/">
                    <li><i class="fa fa-codepen"></i> CodePen</li>
                </a>
                <a href="https://www.linkedin.com/in/emanahan">
                    <li><i class="fa fa-linkedin-square"></i> LinkedIn</li>
                </a>
                <a href="https://github.com/sonorangirl">
                    <li><i class="fa fa-github"></i> Github</li>
                </a>
                <a href="https://freecodecamp.com/sonorangirl">
                    <li>(<i class="fa fa-fire"></i>) FreeCodeCamp</li>
                </a>
                <a href="http://teamtreehouse.com/erinmanahan">
                    <li> Treehouse</li>
                </a>
                <a href="https://twitter.com/sonoran_girl">
                    <li><i class="fa fa-twitter"></i> Twitter</li>
                </a>
            </ul>
            </p>

        </div><!-- End #Contact -->

    </div>

    <footer class="footer">
        <div class="container">
        </div>
    </footer>

</body>