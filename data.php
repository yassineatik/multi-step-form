<?php
extract($_POST);
$fullname = $_POST['full-name'];

?>



<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>

<body id="top">
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Creative CV</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div>
            <div class="profile-page">
                <div class="wrapper">
                    <div class="page-header page-header-small" filter-color="green">
                        <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')">
                        </div>
                        <div class="container">
                            <div class="content-center">
                                <div class="cc-profile-image"><a href="#"><img src="" alt="Image" /></a></div>
                                <div class="h2 title"><?= $fullname ?></div>
                                <p class="category text-white">Web Developer, Graphic Designer, Photographer</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="" rel="tooltip" title="Follow me on LinkedIn" onclick="window.open('<?= $linkedin ?>')"><i class="fa fa-linkedin"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter" onclick="window.open('<?= $twitter ?>')"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook" onclick="window.open('<?= $facebook ?>')"><i class="fa fa-facebook"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="about">
                <div class="container">
                    <div class="card" data-aos="fade-up" data-aos-offset="10">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">About</div>
                                    <p><?= $summary ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">Basic Information</div>
                                    <div class="row">
                                        <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                                        <div class="col-sm-8">1</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                        <div class="col-sm-8"><?= $email ?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                                        <div class="col-sm-8"><?= $phone ?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                                        <div class="col-sm-8"><?= $address ?></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
                                        <div class="col-sm-8">English, German, French</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="skill">
                <div class="container">
                    <div class="h4 text-center mb-4 title">Professional Skills</div>
                    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="progress-container progress-primary"><span class="progress-badge">HTML</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress-container progress-primary"><span class="progress-badge">CSS</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="progress-container progress-primary"><span class="progress-badge">JavaScript</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress-container progress-primary"><span class="progress-badge">SASS</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="progress-container progress-primary"><span class="progress-badge">Bootstrap</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="progress-container progress-primary"><span class="progress-badge">Photoshop</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="experience">
                <div class="container cc-experience">
                    <div class="h4 text-center mb-4 title">Work Experience</div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body cc-experience-header">
                                    <p>March 2016 - Present</p>
                                    <div class="h5">CreativeM</div>
                                </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body">
                                    <div class="h5">Front End Developer</div>
                                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis,
                                        tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend
                                        primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros
                                        pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium
                                        molestie ultricies sollicitudin dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body cc-experience-header">
                                    <p>April 2014 - March 2016</p>
                                    <div class="h5">WebNote</div>
                                </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body">
                                    <div class="h5">Web Developer</div>
                                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis,
                                        tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend
                                        primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros
                                        pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium
                                        molestie ultricies sollicitudin dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body cc-experience-header">
                                    <p>April 2013 - February 2014</p>
                                    <div class="h5">WEBM</div>
                                </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body">
                                    <div class="h5">Intern</div>
                                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis,
                                        tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend
                                        primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros
                                        pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium
                                        molestie ultricies sollicitudin dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container cc-education">
                    <div class="h4 text-center mb-4 title">Education</div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body cc-education-header">
                                    <p>2013 - 2015</p>
                                    <div class="h5">Master's Degree</div>
                                </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body">
                                    <div class="h5">Master of Information Technology</div>
                                    <p class="category">University of Computer Science</p>
                                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis,
                                        tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend
                                        primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros
                                        pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium
                                        molestie ultricies sollicitudin dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body cc-education-header">
                                    <p>2009 - 2013</p>
                                    <div class="h5">Bachelor's Degree</div>
                                </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body">
                                    <div class="h5">Bachelor of Computer Science</div>
                                    <p class="category">University of Computer Science</p>
                                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis,
                                        tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend
                                        primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros
                                        pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium
                                        molestie ultricies sollicitudin dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row">
                            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body cc-education-header">
                                    <p>2007 - 2009</p>
                                    <div class="h5">High School</div>
                                </div>
                            </div>
                            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                                <div class="card-body">
                                    <div class="h5">Science and Mathematics</div>
                                    <p class="category">School of Secondary board</p>
                                    <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis,
                                        tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend
                                        primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros
                                        pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium
                                        molestie ultricies sollicitudin dui.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer">
        <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
        <div class="h4 title text-center">Yassine</div>
        <div class="text-center text-muted">
            <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
        </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
</body>

</html>