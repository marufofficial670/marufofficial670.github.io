<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
    style="background-image: url(../assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Send Message Us
                                    </h5>
                                </div>
                                <div>
                                    <?php
                                         require ("forms/contact-form.php");
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        Get in Touch
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <p class="lead">
                                        👋 Hey there, curious mind! Thanks for dropping by. If you've got
                                        burning questions, exciting projects, or just want to geek out about web
                                        development, I'm all ears. Let's turn ideas into reality!
                                    </p>
                                    <ul class="list-ico">
                                        <li><span class="bi bi-geo-alt"></span><?php echo $userdata['location']?>
                                        </li>
                                        <li><span class="bi bi-phone"></span> <a
                                                href="tel:<?php echo $userdata['phone']?>"><?php echo $userdata['phone']?></a>
                                        </li>
                                        <li><span class="bi bi-envelope"></span><a
                                                href="mailto:<?php echo $userdata['email']?>"><?php echo $userdata['email']?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="<?php echo $userdata['facebook']?>" target="_blank"><span
                                                    class="ico-circle"><i class="bi bi-facebook"></i></span></a>
                                        </li>
                                        <li><a href="<?php echo $userdata['instagram']?>" target="_blank"><span
                                                    class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                                        <li><a href="<?php echo $userdata['twitter']?>" target="_blank"><span
                                                    class="ico-circle"><i class="bi bi-twitter"></i></span></a>
                                        </li>
                                        <li><a href="<?php echo $userdata['linkedin']?>" target="_blank"><span
                                                    class="ico-circle"><i class="bi bi-linkedin"></i></span></a>
                                        </li>
                                        <li><a href="<?php echo $userdata['github']?>" target="_blank"><span
                                                    class="ico-circle"><i class="bi bi-github"></i></span></a>
                                        </li>
                                        <li><a href="<?php echo $userdata['youtube']?>" target="_blank"><span
                                                    class="ico-circle"><i class="bi bi-youtube"></i></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>