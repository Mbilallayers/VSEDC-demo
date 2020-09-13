<?php
if (isset($_POST['submit']))
{

    require 'assets/PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'muhammadb083@gmail.com';
    $mail->Password = 'dxlqdynadsshjtlu';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SetFrom('cassie@gmail.com', 'Contact Form');
    $mail->addReplyTo('muhammadb083@gmail.com', 'Contact Form');
    $mail->addAddress('muhammadb083@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Contact Form';
    $mail->Body =
        '<b>Name:</b> ' . $_POST['name'] . '<br>' .
        '<b>Email:</b> ' . $_POST['email'] . '<br>' .
        '<b>Subject:</b> ' . $_POST['subject'] .'<br>' .
        '<b>Message:</b> ' . $_POST['message'] .'<br>' .
        '<br>This Email Send From https://misla.org/';


    if(!$mail->send()) {
        $result='<p style="color: #ff0000">Message could not be sent.</p>';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        header("Location: index.php");exit; //redirect to your home page
    } else {
        $result='<p style="color: #28a745">Message has been send.</p>';
        header("Location: thankyou.php");exit; //redirect to form submit page
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summer Camps</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/aos.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
</head>

<body>
<section id="home" class="home-page bg-flex">
    <header id="sticker" class="main-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="https://vsedc.org/" class="navbar-brand"><img class="logoTopMenu" src="assets/images/top-menu-logo_03.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfkDpjkqh--MRnFMJhxXiMgqgyDY4q1PxCazHGQ5lgDGY5Hkg/viewform">Youth</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://forms.gle/3TVE33u2DeFW6N8F7">Mentor</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#fundraising">Fundraising</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fcash.app%2F%24M1SLA%3Ffbclid%3DIwAR3jtW4AQJQ8-VTKbdlo8y6MZNeoBfF1bB6qxHYnaZVDs-8a349LJJE2ndc&h=AT3cFbNDmBsXdKyRQYNMmL2dFTKaSzufaughtlTu2SnOLrDL8Hl9CneEfKnWwGdgF-ALPt0Fwe-OI2_oqOJCds9KiaGaW34pBrFn5rngw7P_ngGG2z1FgGYmcLIEMaFkKzUkND_vThvI3yAwIT-_yvA">Donate</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="leftSide">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-1 offset-md-0 col-md-6 offset-md-3">
                            <div class="bigLogo">
                                <img src="assets/images/title-home.png" class="img-fluid" alt="Fall 2020">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    <div class="middleImageBox">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="imageBox">
                                    <div class="topIcon">
                                        <img src="assets/images/dev-bg_03.png" alt="icon">
                                        <h2>Dev Shop<br><span>Academy</span><span class="uniqueWord">D</span></h2>
                                    </div>
                                    <h3><span>Made In South La +</span><br>Students Receive Money to <br>Build Websites</h3>
                                    <a href="#" class="devShopLink">Read More <img
                                            src="assets/images/next-arrow-dev-shop_03_03.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="imageBox">
                                    <div class="topIcon designBox">
                                        <img src="assets/images/design-bg_03.png" alt="icon">
                                        <h2>Design<span class="uniqueWord">D</span></h2>
                                    </div>
                                    <h3><span>Hawke media :</span><br>Graphic Design, Marketing,<br>Branding & Social Media</h3>
                                    <a href="#" class="designLink">Read More <img src="assets/images/design-next-arrow_03.png"
                                                                                  alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="imageBox">
                                    <div class="topIcon contentCreationBox">
                                        <img src="assets/images/content-creation-bg_03.png" alt="icon">
                                        <h2>Content<br><span>Creation</span><span class="uniqueWord">C</span></h2>
                                    </div>
                                    <h3><span>Youtube Creators Club :</span><br>Film Production +<br>YouTube Content Creation</h3>
                                    <a href="#" class="contentCreationLink">Read More <img
                                            src="assets/images/content-creation-next-arrow_03.png" alt="icon"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="imageBox">
                                    <div class="topIcon financeBox">
                                        <img src="assets/images/finance-bg_03.png">
                                        <h2>Finance<span class="uniqueWord">F</span></h2>
                                    </div>
                                    <h3><span>Real Estate 100 :</span><br>Real Estate +<br>Financial Literacy</h3>
                                    <a href="#" class="financeLink">Read More <img
                                            src="assets/images/finance-next-arrow_03_03.png" alt=""></a>
                                </div>
                                <div class="centerLogoMarty">
                                    <img src="assets/images/marty-logo_03.png" alt="logo" data-aos="zoom-in-up" />
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="imageBox">
                                    <div class="topIcon resiliencyBox">
                                        <img src="assets/images/marty-mentor-bg_03.png" alt="icon">
                                        <h2>Resiliency<span class="uniqueWord">R</span></h2>
                                    </div>
                                    <h3><span>Marty Mentors :</span><br>Mental Health +<br>Soft Skills</h3>
                                    <a href="#" class="resiliencyLink">Read More <img
                                            src="assets/images/resiliency-next-arrow_03.png" alt="icon"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6">
                                <div class="imageBox">
                                    <div class="topIcon codingBox">
                                        <img src="assets/images/coding-bg_03.png" alt="icon">
                                        <h2>Coding<span class="uniqueWord">C</span></h2>
                                    </div>
                                    <h3><span>Hidden Genius :</span><br>Javascript, PHP, Back End</h3>
                                    <a href="#" class="codingLink">Read More <img src="assets/images/coding-next-arrow_03.png"
                                                                                  alt="logo"></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="rightSide">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="donateLink">
                                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fcash.app%2F%24M1SLA%3Ffbclid%3DIwAR3jtW4AQJQ8-VTKbdlo8y6MZNeoBfF1bB6qxHYnaZVDs-8a349LJJE2ndc&h=AT3cFbNDmBsXdKyRQYNMmL2dFTKaSzufaughtlTu2SnOLrDL8Hl9CneEfKnWwGdgF-ALPt0Fwe-OI2_oqOJCds9KiaGaW34pBrFn5rngw7P_ngGG2z1FgGYmcLIEMaFkKzUkND_vThvI3yAwIT-_yvA" target="_blank"><img src="assets/images/donate-button_03.png"
                                                                                                                                                                                                                                                                                                                                                                   alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-6">
                            <div class="heroHeading">
                                <h1>Sign Up<br>Today!</h1>
                            </div>
                        </div>
                    </div>
                    <div class="socialLinksIcons">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="youthImage">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfkDpjkqh--MRnFMJhxXiMgqgyDY4q1PxCazHGQ5lgDGY5Hkg/viewform"
                                       target="_blank"><img src="assets/images/youth-link_03.png" class="img-fluid" alt="img"></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mentorImage">
                                    <a href="https://forms.gle/3TVE33u2DeFW6N8F7"
                                       target="_blank"><img src="assets/images/mentor-link_03_03.png" class="img-fluid"alt="img"></a>
                                </div>
                            </div>
                        </div>
                        <ul class="socialList">
                            <li data-aos="fade-down" data-aos-delay="1500">
                                <a href="https://www.instagram.com/therealmisla/" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="1200">
                                <a href="https://www.facebook.com/MadeinSLA" target="_blank">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="900">
                                <a href="https://twitter.com/therealmisla" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li data-aos="fade-down" data-aos-delay="900">
                                <a href="https://www.youtube.com/channel/UC1tt-fn3rdTXJN2LkGgCtrw" target="_blank">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <div class="detailText">
                                <h3>
                                    For nearly four decades, VSEDC has facilitated community development in the South Los Angeles area by providing programs that revitalize the physical, economic, and social life of the community.
                                    <br> <br>
                                    To ensure the vitality of a community that has lived in the shadows for far too long, young people play a critical role and deserve innovative tools to thrive.
                                    <br> <br>
                                    In partnership with community partners who share our vision, VSEDC provides a safe space for local youth to explore technology and multi-media in a supportive environment. Located in a tech desert, our efforts close the access gap by exposing Black and Latinx teens to technology-based careers, with the ultimate goal of increasing diversity in tech.
                                    <br> <br>
                                    <span class="comment more">
                                            Known as "Marty Members" inspired by our fearless, tech savvy mascot, youth will experience comprehensive training in coding (web development), graphic design, audio engineering, video production, real estate investment, financial literacy, and more.
                                            <br> <br>
                                            Marty Members explore the inner workings of the tech and multi-media industries through hands-on programming and mentorship to motivate them to blaze paths to self-sufficiency.
                                             <br><br>
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footerBottomLogo d-sm-none">
                                <div class="mislaLogo">
                                    <a href="http://misla.org/"><img src="assets/images/misla-logo_03.png" alt="logo" class="img-fluid"></a>
                                </div>
                                <div class="martyLogo">
                                    <a href="#"><img src="assets/images/marty-logo_03_03.png" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="fundraising" class="fundrasing-page bg-flex">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <!-- title -->
                <div class="mt-4">
                    <div class="bigLogo">
                        <img src="assets/images/title.png" class="img-fluid" alt="Winter 2020">
                    </div>
                    <!-- dotted circle -->
                    <div class="dotted-circle">
                        <div class="dc dc1"></div>
                        <div class="dc dc2"></div>
                        <div class="dc dc3"></div>
                        <div class="dc dc4"></div>
                        <div class="dc dc5"></div>
                        <div class="dc dc6"></div>
                        <div class="dc dc7"></div>
                        <div class="dc dc8"></div>
                        <div class="dc dc9"></div>
                    </div>
                    <h1 class="heading">Help Us Raise Funds for Our Fall Cohort</h1>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="donateLink tx-center">
                    <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fcash.app%2F%24M1SLA%3Ffbclid%3DIwAR3jtW4AQJQ8-VTKbdlo8y6MZNeoBfF1bB6qxHYnaZVDs-8a349LJJE2ndc&h=AT3cFbNDmBsXdKyRQYNMmL2dFTKaSzufaughtlTu2SnOLrDL8Hl9CneEfKnWwGdgF-ALPt0Fwe-OI2_oqOJCds9KiaGaW34pBrFn5rngw7P_ngGG2z1FgGYmcLIEMaFkKzUkND_vThvI3yAwIT-_yvA" target="_blank"><img src="assets/images/donate-button_03.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-12">
                <div class="text-center ds-none">
                    <img src="assets/images/marty-logo_03.png" class="img-fluid" alt="Marty Logo" data-aos="zoom-in-up">
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="fundraising-circle">
                    <ul class="list-unstyled">
                        <li class="res">
                            <div class="fc-single-circle">
                                <div class="first-circle">
                                    <img src="assets/images/arrow-1.png" alt="img" class="img-fluid arrow-right">
                                    <div class="icon-box-right">
                                        <img src="assets/images/icon1.png" alt="icon">
                                    </div>
                                    <div class="inner-circle">
                                        <h5 class="r-text">RESILIENCY</h5>
                                        <p class="r-price price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="music">
                            <div class="fc-single-circle">
                                <div class="first-circle">
                                    <img src="assets/images/arrow-2.png" alt="img" class="img-fluid arrow-left">
                                    <img src="assets/images/arrow-1.png" alt="img" class="img-fluid arrow-right">
                                    <div class="icon-box-cd">
                                        <img src="assets/images/icon3.png" alt="icon">
                                    </div>
                                    <div class="inner-circle">
                                        <h5 class="r-text">MUSIC</h5>
                                        <p class="r-price price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="coding">
                            <div class="fc-single-circle">
                                <div class="first-circle">
                                    <img src="assets/images/arrow-2.png" alt="img" class="img-fluid arrow-left">
                                    <img src="assets/images/arrow-1.png" alt="img" class="img-fluid arrow-right">
                                    <div class="icon-box-left">
                                        <img src="assets/images/icon2.png" alt="icon">
                                    </div>
                                    <div class="inner-circle">
                                        <h5 class="r-text">CODING</h5>
                                        <p class="r-price price">$10,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="finance">
                            <div class="fc-single-circle">
                                <div class="first-circle">
                                    <img src="assets/images/arrow-2.png" alt="img" class="img-fluid arrow-left">
                                    <div class="icon-box-cd">
                                        <img src="assets/images/icon4.png" alt="icon">
                                    </div>
                                    <div class="inner-circle">
                                        <h5 class="r-text">FINANCE</h5>
                                        <p class="r-price price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="branding">
                            <div class="fc-single-circle">
                                <div class="first-circle">
                                    <div class="icon-box-ld">
                                        <img src="assets/images/icon5.png" alt="icon">
                                    </div>
                                    <div class="inner-circle">
                                        <h5 class="r-text">BRANDING</h5>
                                        <p class="r-price price">$18,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="fc-single-circle">
                                <div class="first-circle">
                                    <div class="icon-box-rd">
                                        <img src="assets/images/icon6.png" alt="icon">
                                    </div>
                                    <div class="inner-circle">
                                        <h5 class="r-text">MEDIA</h5>
                                        <p class="r-price price">$16,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="design">
                            <div class="fc-single-circle">
                                <div class="icon-box-rd">
                                    <img src="assets/images/icon7.png" alt="icon">
                                </div>
                                <div class="first-circle">
                                    <div class="inner-circle">
                                        <h5 class="r-text">DESIGN</h5>
                                        <p class="r-price price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-12">
                <div class="socialLinksIcons">
                    <ul class="socialList">
                        <li data-aos="fade-down" data-aos-delay="1500">
                            <a href="https://www.instagram.com/therealmisla/" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="1200">
                            <a href="https://www.facebook.com/MadeinSLA" target="_blank">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="900">
                            <a href="https://twitter.com/therealmisla" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li data-aos="fade-down" data-aos-delay="900">
                            <a href="https://www.youtube.com/channel/UC1tt-fn3rdTXJN2LkGgCtrw" target="_blank">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mislaLogo ds-none">
                    <a href="https://www.misla.org/"><img src="assets/images/misla-logo_03.png" alt="" class="img-fluid"></a>
                </div>
                <div class="martyLogo ds-none">
                    <img src="assets/images/marty-logo_03_03.png" alt="logo" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-8">

                <div class="row">

                    <div class="col-6">
                        <div class="youthImage">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfkDpjkqh--MRnFMJhxXiMgqgyDY4q1PxCazHGQ5lgDGY5Hkg/viewform"
                               target="_blank"><img src="assets/images/youth-link_03.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mentorImage">
                            <a href="https://forms.gle/3TVE33u2DeFW6N8F7"
                               target="_blank"><img src="assets/images/mentor-link_03_03.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-4">

                <div class="bottomMenu">
                    <div class="bottomLogoDonate">
                        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fcash.app%2F%24M1SLA%3Ffbclid%3DIwAR3jtW4AQJQ8-VTKbdlo8y6MZNeoBfF1bB6qxHYnaZVDs-8a349LJJE2ndc&h=AT3cFbNDmBsXdKyRQYNMmL2dFTKaSzufaughtlTu2SnOLrDL8Hl9CneEfKnWwGdgF-ALPt0Fwe-OI2_oqOJCds9KiaGaW34pBrFn5rngw7P_ngGG2z1FgGYmcLIEMaFkKzUkND_vThvI3yAwIT-_yvA" target="_blank"><img class="logoImage"
                                                                                                                                                                                                                                                                                                                                                           src="assets/images/footer-donate-button_03.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
    <!-- container-fluid -->
</section>
<section id="contact" class="contact-page fundrasing-page bg-flex">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <!-- title -->
                <div class="mt-4 mb-5">
                    <div class="bigLogo">
                        <img src="assets/images/contact.png" class="img-fluid" alt="Winter 2020">
                    </div>
                    <!-- dotted circle -->
                    <div class="dotted-circle">
                        <div class="dc dc1"></div>
                        <div class="dc dc2"></div>
                        <div class="dc dc3"></div>
                        <div class="dc dc4"></div>
                        <div class="dc dc5"></div>
                        <div class="dc dc6"></div>
                        <div class="dc dc7"></div>
                        <div class="dc dc8"></div>
                        <div class="dc dc9"></div>
                    </div>
                    <h1 class="heading">The answer to all your questions is just a click away</h1>
                </div>
            </div>
            <div class="col-lg-5">

            </div>
            <div class="col-lg-2">
                <div class="donateLink tx-center">
                    <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fcash.app%2F%24M1SLA%3Ffbclid%3DIwAR3jtW4AQJQ8-VTKbdlo8y6MZNeoBfF1bB6qxHYnaZVDs-8a349LJJE2ndc&amp;h=AT3cFbNDmBsXdKyRQYNMmL2dFTKaSzufaughtlTu2SnOLrDL8Hl9CneEfKnWwGdgF-ALPt0Fwe-OI2_oqOJCds9KiaGaW34pBrFn5rngw7P_ngGG2z1FgGYmcLIEMaFkKzUkND_vThvI3yAwIT-_yvA" target="_blank"><img src="assets/images/donate-button_03.png" alt="logo">
                    </a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">
                <?php echo (isset($result)) ? $result : ''; ?>
                <form class="custom-form text-center" action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">SEND</button>
                </form>

            </div>
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <div class="text-center ds-none">
                    <img src="assets/images/marty-logo_03.png" class="img-fluid" alt="Marty Logo" data-aos="zoom-in-up">
                </div>
                <div class="footerBottomLogo">
                    <div>
                        <img src="assets/images/misla-logo_03.png" alt="" class="img-fluid">
                    </div>
                    <div class="martyLogo">
                        <img src="assets/images/marty-logo_03_03.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-12"></div>
        </div>
        <div class="row">

            <div class="col-sm-5">
                <p class="white-color mt40 text-center">&copy;Copyrights 2020 Misla & Marty - All rights reserved. Made by <a href="https://www.misla.org/">MISLA</a> & <a href="#">MARTY</a></p>
            </div>
            <div class="col-sm-7">
                <div class="bottomMenu">
                    <ul class="nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfkDpjkqh--MRnFMJhxXiMgqgyDY4q1PxCazHGQ5lgDGY5Hkg/viewform">Youth</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://forms.gle/3TVE33u2DeFW6N8F7">Mentor</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php#fundraising">Fundraising</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fcash.app%2F%24M1SLA%3Ffbclid%3DIwAR3jtW4AQJQ8-VTKbdlo8y6MZNeoBfF1bB6qxHYnaZVDs-8a349LJJE2ndc&h=AT3cFbNDmBsXdKyRQYNMmL2dFTKaSzufaughtlTu2SnOLrDL8Hl9CneEfKnWwGdgF-ALPt0Fwe-OI2_oqOJCds9KiaGaW34pBrFn5rngw7P_ngGG2z1FgGYmcLIEMaFkKzUkND_vThvI3yAwIT-_yvA">Donate</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Contact</a>
                        </li>
                    </ul>
                    <div class="bottomLogoDonate ds-none">
                        <a href="https://cash.app/$M1SLA" target="_blank"><img class="logoImage" src="assets/images/footer-donate-button_03.png" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script type="text/javascript" src="assets/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/aos.js"></script>
<script type="text/javascript" src="assets/js/jquery.sticky.js"></script>
<script type="text/javascript" src="assets/js/jquery.nav.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>