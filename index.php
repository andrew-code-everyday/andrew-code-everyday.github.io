<?php require('components/config.php') ?>
<!doctype html>
<html lang="en">
<?php include 'components/head.php';  ?>

<body>

    <!--====== PRELOADER PART START ======-->
    <?php include 'components/loader.php';  ?>
    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->
    <?php include 'components/header.php';  ?>
    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">About Me</h2>
                        <p>I help designers, small agencies and businesses bring their ideas to life.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50">
                        <h5 class="about-title">Hi There! I'm Andrew Tay</h5>
                        <p>An experienced software engineer who <br> constantly seeks out <br> innovative solutions to everyday problems. <br> In my three years in this industry, <br> I contributed to over a dozen projects.</p>
                        <ul class="clearfix">
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-calendar"></i>
                                    </div>
                                    <div class="info-text">
                                        <p class="text-color"><span>Date of birth:</span> 19 February 1995</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Email:</span> <a class="text-color" href="mailto:<?= $email ?>"><?= $email ?></a></p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Phone:</span> <a class="text-color" href="tel:<?= $contact ?>"><?= $contact ?></a></p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-map-marker"></i>
                                    </div>
                                    <div class="info-text">
                                        <p class="text-color"><span>Location:</span> Singapore</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="about-skills pt-25">
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">PHP [LARAVEL,OPEN CART]</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">80</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="80"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">MYSQL</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">75</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="75"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">CSS [SCSS]</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">70</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="70"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">JAVASCRIPT [jQuery,React JS]</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">70</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="70"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                    </div> <!-- about skills -->
                </div>
            </div>
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="service" class="services-area gray-bg pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-30">
                        <h2 class="title">What I Do?</h2>
                        <p>Efficient service and fast turnaround times</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-code-alt"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="#">Web Design</a></h4>
                            <p>Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-website"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="#">Web Development</a></h4>
                            <p>Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-mobile"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="#">App Design</a></h4>
                            <p>Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-support"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="#">Consultancy and Support</a></h4>
                            <p>Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.</p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-vector"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="#">Illustration Design</a></h4>
                            <p>Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.</p>
                        </div>
                    </div>
                </div>-->
                <!--<div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-color-pallet"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="#contact">Graphic Design</a></h4>
                            <p>Curabitur vitae magna felis. Nulla ac libero ornare, vestibulum lacus quis blandit enimdicta sunt.</p>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(assets/images/call-to-action.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="call-action-content text-center">
                        <h2 class="action-title">Have any project on mind?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua nostrud.</p>
                        <ul>
                            <li><a class="main-btn custom" href="assets/Resume.pdf" download>download cv</a></li>
                            <li><a class="main-btn custom-2" href="#contact">hire me</a></li>
                        </ul>
                    </div> <!-- call action content -->
                </div>
            </div>
        </div>
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->

    <!--====== WORK PART START ======-->

    <section id="work" class="work-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-25">
                        <h2 class="title">My Recent Works</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-1.png" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-1.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-2.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-2.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-3.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-3.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-4.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-4.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-5.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-5.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/w-6.jpg" alt="work">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Product Design</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/w-6.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="#"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-more text-center mt-50">
                        <a class="main-btn" href="#">more works</a>
                    </div> <!-- work more -->
                </div>
            </div>
        </div>
    </section>

    <!--====== WORK PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    <!--<section id="pricing" class="pricing-area gray-bg pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">My Pricing Plans</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div> 
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing text-center mt-30">
                        <div class="pricing-package">
                            <h4 class="package-title">Basic</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-text">
                                <p>Simple project management for teams and small businesses.</p>
                                <span class="price">$19.00</span>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li>Unlimited Tasks</li>
                                    <li>Unlimited Public</li>
                                    <li>Private Projects</li>
                                    <li>Unlimited Teams</li>
                                    <li>All Integrations</li>
                                    <li>Public API</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="main-btn" href="#contact">get quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing active text-center mt-30">
                        <div class="pricing-package">
                            <h4 class="package-title">Standard</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-text">
                                <p>Simple project management for teams and small businesses.</p>
                                <span class="price">$39.00</span>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li>Unlimited Tasks</li>
                                    <li>Unlimited Public</li>
                                    <li>Private Projects</li>
                                    <li>Unlimited Teams</li>
                                    <li>All Integrations</li>
                                    <li>Public API</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="main-btn" href="#contact">get quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-pricing text-center mt-30">
                        <div class="pricing-package">
                            <h4 class="package-title">Premium</h4>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-text">
                                <p>Simple project management for teams and small businesses.</p>
                                <span class="price">$29.00</span>
                            </div>
                            <div class="pricing-list">
                                <ul>
                                    <li>Unlimited Tasks</li>
                                    <li>Unlimited Public</li>
                                    <li>Private Projects</li>
                                    <li>Unlimited Teams</li>
                                    <li>All Integrations</li>
                                    <li>Public API</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="main-btn" href="#contact">get quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!--====== PRICING PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <!--<section id="blog" class="blog-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">From The Blog</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                            <span>July 26, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                            <span>July 26, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                            <span>July 26, 2022</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-more text-center mt-50">
                        <a class="main-btn" href="#">More posts</a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!--====== BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Get In Touch</h2>
                        <p>Let's talk, but you first.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-map-marker"></i>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title">Address</h6>
                            <p>Singapore</p>
                        </div>
                    </div> <!-- contact box -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title">Phone</h6>
                            <a class="text-color" href="tel:+6588925212"><?= $contact ?></a>
                        </div>
                    </div> <!-- contact box -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-envelope"></i>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title">Email</h6>
                            <a class="text-color" href="mailto:<?= $email ?>"><?= $email ?></a>
                        </div>
                    </div> <!-- contact box -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form pt-30">
                        <form id="contact-form" action="assets/contact.php">
                            <div class="single-form">
                                <input type="text" name="name" placeholder="Name">
                            </div> <!-- single form -->
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email">
                            </div> <!-- single form -->
                            <div class="single-form">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> <!-- single form -->
                            <p class="form-message"></p>
                            <div class="single-form">
                                <button class="main-btn" type="submit">Send Message</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-map mt-60">
                        <div class="gmap_canvas"> 
                            <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127640.61252050432!2d103.84425!3d1.3140001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da11238a8b9375%3A0x887869cf52abf5c4!2sSingapore!5e0!3m2!1sen!2ssg!4v1642215302504!5m2!1sen!2ssg" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" loading="lazy"></iframe>                           
                        </div>
                    </div> <!-- contact map -->
                </div>
            </div>
        </div>
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    <?php include 'components/footer.php';  ?>
    <!--====== FOOTER PART ENDS ======-->
</body>

</html>
