<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alessandro Lambertini - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="./resources/images/al.png" />
    <link rel="stylesheet" href="./resources/css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
        integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Dancing+Script|Roboto'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css'>



</head>

<body>
    <!--------------------------------------HEADER-------------------------------------->
    <header id="main-header">
        <div class="header-wrapper">
            <a class="logo" href="#">Alessandro Lambertini</a>

            <div class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav>
                <ul>
                    <li><a id="about-link" href="#about">About</a></li>
                    <li><a id="services-link" href="#services">Services</a></li>
                    <li><a id="project-link" href="#project">Projects</a></li>
                    <li><a id="contact-link" href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="canvas-div"></div>

    <!--------------------------------------ABOUT IMAGE-------------------------------------->
    <section id="about">
        <div id="particles-js">
            <div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <div class="hero-content">
                        <img src="./resources/images/me.png">
                        <div class="about-text">
                            <h2>Hi, I'm <span class="accent-text">Alessandro</span></h2>
                            <p>I'm a student at Sapienza University in Rome following the course in Artificial
                                Intelligence and Robotics.<br>
                                👷 WIP 👷
                            </p>
                        </div>
                    </div>


                    <div class="about-resume">
                        <div class="education">
                            <h2>My Education</h2>
                            <div class="eduction-block">
                                <h4>University of Modena and Reggio Emilia UNIMORE</h4>
                                <p>Bachelor of Computer Engineering</p>
                            </div>
                            <div class="eduction-block">
                                <h4>University of Rome Sapienza</h4>
                                <p>master Bachelor of Computer Engineering in Artificial Intelligence and Robotics</p>
                            </div>
                        </div>

                        <div class="skills">
                            <h2>My Skills</h2>
                            <p>👷 WIP 👷
                            </p>
                        </div>

                        <button class="download"><a download href="downloads/example.txt">Download CV</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------------SERVICES SECTION-------------------------------------->
    <section id="services">
        <div class="container">
            <div class="section-title services-title">
                <h1>My <span class="accent-text">Services</span></h1>
            </div>

            <div class="row center-xs center-sm center-md center-lg trigger">
                <!--Row 1-->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                    <div class="service-block">
                        <i class="icon fas fa-code"></i>
                        <h3>Web Development</h3>
                        <p>👷 WIP 👷</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                    <div class="service-block">
                        <i class="icon fas fa-laptop"></i>
                        <h3>Web Design</h3>
                        <p>👷 WIP 👷</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                    <div class="service-block">
                        <i class="icon fas fa-mobile-alt"></i>
                        <h3>Fully Responsive</h3>
                        <p>👷 WIP 👷</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                    <div class="service-block">
                        <i class="icon far fa-file-alt"></i>
                        <h3>Well Documented</h3>
                        <p>👷 WIP 👷</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                    <div class="service-block">
                        <i class="icon far fa-copy"></i>
                        <h3>Clean Code</h3>
                        <p>👷 WIP 👷</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 hb vb">
                    <div class="service-block">
                        <i class="icon fas fa-cogs"></i>
                        <h3>Custom Support</h3>
                        <p>👷 WIP 👷</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--------------------------------------PROJECTS SECTION-------------------------------------->
    <section id="project">
        <div class="container">
            <div class="section-title project-title">
                <h1>My <span class="accent-text">Projects</span></h1>
            </div>

            <div id="filter-btn" class="button-group">
                <ul>
                    <li><button class="button is-checked" data-filter="*">All</button></li>
                    <li><button class="button" data-filter=".RL">Reinforcement Learning</button></li>
                    <li><button class="button" data-filter=".VP">Vision and Preception</button></li>
                    <li><button class="button" data-filter=".IG">Interactive Ghraphic</button></li>
                    <li><button class="button" data-filter=".FCG">Foundamental of Computer Graphics</button></li>
                    <li><button class="button" data-filter=".NN">Neural Networks</button></li>
                </ul>
            </div>

            <div class="img-grid">
                <?php
                    $url = 'https://api.github.com/users/lambertinialessandro/repos';
                    $cInit = curl_init();
                    curl_setopt($cInit, CURLOPT_URL, $url);
                    curl_setopt($cInit, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($cInit, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
                    curl_setopt($cInit, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

                    $output = curl_exec($cInit);

                    $info = curl_getinfo($cInit, CURLINFO_HTTP_CODE);
                    $result = json_decode($output);

                    curl_close($cInit);

                    for ($i = 0; $i < count($result); $i++) {
                        $appName = strval($result[$i]->name);
                        $appNameSplitted = explode("-", $appName);
                        if(count($appNameSplitted) > 1) {
                            $appTag = $appNameSplitted[0];
                            $appUrl = strval($result[$i]->html_url);

                            echo "<div class=\"img-container ".$appTag."\" data-category=\"".$appTag."\">
                                    <img src=\"https://github-readme-stats.vercel.app/api/pin/?username=lambertinialessandro&repo=".$appName."\">
                                    <a class=\"img-overlay popup-gallery\" href=\"".$appUrl."\" target=\"_blank\">
                                        <div class=\"img-overlay-text\">
                                            <p>".$appName."</p>
                                            <h3>Go to the Repository ➜</h3>
                                        </div>
                                    </a>
                                </div>
                                ";
                        }
                    }
                ?>

            </div>
        </div>
    </section>

    <!--------------------------------------CONTACT SECTION-------------------------------------->
    <section id="contact">
        <div class="container">
            <div class="section-title contact-title">
                <h1>Contact <span class="accent-text">Me</span></h1>

                <ul class="about-social">
                    <!-- https://fontawesome.com/icons?d=gallery -->
                    <li><a href="https://github.com/lambertinialessandro"><i class="fab fa-github"></i></a></li>
                    <li><a href="https://www.instagram.com/lambertinialessandro/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="mailto:lambertinialessandro16@gmail.com"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--------------------------------------FOOTER SECTION-------------------------------------->
    <footer>
        <p></p>
    </footer>

    <!--------------------------------------Scripts import-------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js'></script>
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.2/ScrollMagic.min.js'></script>
    <script src="./resources/js/script.js"></script>

</body>

</html>