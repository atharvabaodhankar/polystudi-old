<?php
function navbar($data, $path)
{ ?>

    <div id="navbar">
        <div class="nav-logo magnet heroShow-divs">
            <a href="../">
                <img src="<?= $path ?>images/nav-logo.png" alt="" />
                <span>PolyStudi</span></a>
        </div>
        <nav id="nav">
            <ul class="nav-ul" style="gap: 1vw">
                <li><a href="<?= $path ?>" class="nav-btn">Home</a></li>
                <li><a href="<?= $data["Assignment"] ?>" class="nav-btn">Assignment</a></li>
                <li><a href="#syllabus" class="nav-btn">Syllabus</a></li>
                <li><a href="#manual" class="nav-btn">Manual</a></li>
                <li><a href="<?= $data["Paper"] ?>" class="nav-btn">Solved Papers</a></li>
                <li><a href="#notes" class="nav-btn">Notes</a></li>
                <li>
                    <a href="../index.html" class="nav-btn">Contact Us</a>
                </li>
            </ul>
            <div class="menu-btn heroShow-divs">
                <span></span>
            </div>
        </nav>
    </div>



<?php }
function getFooter()
{ ?>
    <section id="footer">
        <div class="footer-box">
            <div class="footer-main footer-animate">
                <h1>PolyStudi</h1>
                <p>
                    Whether you're stuck on a tricky calculus problem, need a morale
                    boost before your next exam, or just want to chat about the latest
                    Poly news, we're here for you. Don't hesitate to reach out - we love
                    connecting with fellow Poly peeps and helping them navigate the
                    academic jungle.
                </p>
                <a href="#" class="cu-btn">Contact Us</a>
            </div>

            <div class="footer-touch footer-animate">
                <h1>Get In Touch!</h1>
                <p>
                    Your feedback helps us grow! We welcome your ideas and reviews on
                    how we can improve your experience
                </p>
                <div class="footer-ico">
                    <ul>
                        <li>
                            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>Solapur
                        </li>
                        <li>
                            <i class="fa-solid fa-phone" aria-hidden="true"></i>+91
                            9373924727
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope" aria-hidden="true"></i>baodhankaratharva@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-rights">
            <p class="footer-animate">
                © 2024 ❤️<a style="text-decoration: underline !important" href="#">PolyStudi</a>
                , inc. All Rights Reserved
            </p>
        </div>
    </section>


    <?php
} ?>