<?php
?>
<footer class="site-footer">
    <div class="footer-glow"></div>

    <div class="footer-container">

        <div class="footer-col footer-brand">
            <div class="footer-logo">
                <span class="logo-icon">🎓</span>
                <span class="logo-text">Serenova Academy</span>
            </div>
            <p class="brand-tagline">Empowering minds. Shaping futures. Building excellence one student at a time.</p>
            <div class="social-links">
                <a href="#" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
                <a href="#" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
                <a href="#" aria-label="Twitter"><i class="ri-twitter-x-line"></i></a>
                <a href="#" aria-label="YouTube"><i class="ri-youtube-line"></i></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
            <h4 class="footer-heading">Quick Links</h4>
            <ul class="footer-links">
                <li><a href="index.php"><i class="ri-arrow-right-s-line"></i> Home</a></li>
                <li><a href="about.php"><i class="ri-arrow-right-s-line"></i> About Us</a></li>
                <li><a href="courses.php"><i class="ri-arrow-right-s-line"></i> Courses</a></li>
                <li><a href="admissions.php"><i class="ri-arrow-right-s-line"></i> Admissions</a></li>
                <li><a href="notices.php"><i class="ri-arrow-right-s-line"></i> Notices</a></li>
                <li><a href="contact.php"><i class="ri-arrow-right-s-line"></i> Contact</a></li>
            </ul>
        </div>

        <!-- Courses -->
        <div class="footer-col">
            <h4 class="footer-heading">Our Programs</h4>
            <ul class="footer-links">
                <li><a href="#"><i class="ri-arrow-right-s-line"></i> Primary Education</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i> Secondary Education</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i> O-Level Preparation</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i> A-Level Preparation</a></li>
                <li><a href="#"><i class="ri-arrow-right-s-line"></i> Entry Test Prep</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="footer-col">
            <h4 class="footer-heading">Contact Us</h4>
            <ul class="footer-contact">
                <li class="list">
                    <i class="ri-map-pin-2-fill"></i>
                    <span >123 Academy Road, Karachi, Pakistan</span>
                </li>
                <li >
                    <i class="ri-phone-fill"></i>
                    <span >+92 21 3456 7890</span>
                </li>
                <li >
                    <i class="ri-mail-fill"></i>
                    <span >info@serenovaacademy.com</span>
                </li>
                <li >
                    <i class="ri-time-fill"></i>
                    <span >Mon – fri: 8:00 AM – 5:00 PM</span>
                </li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-inner">
            <p>&copy; <?php echo date('Y'); ?> Serenova Academy. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <span class="divider">|</span>
                <a href="#">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

<style>
/* ============ FOOTER STYLES ============ */
.site-footer {
    position: relative;
    width: 100%;
    background: rgba(0, 0, 0, 0.88);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-top: 1px solid rgba(245, 222, 179, 0.15);
    font-family: 'Lucida Sans', Geneva, Verdana, sans-serif;
    overflow: hidden;
}

/* Subtle glow accent at top */
.footer-glow {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60%;
    height: 1px;
    background: linear-gradient(90deg, transparent, wheat, transparent);
    opacity: 0.6;
}

/* ---- Main Grid ---- */
.footer-container {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    justify-content: space-between;
    padding: 55px 60px 35px;
}

/* ---- Brand Column ---- */
.footer-brand {
    max-width: 260px;
}

.footer-logo {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 14px;
}

.logo-icon {
    font-size: 1.6rem;
}

.logo-text {
    font-size: 1.05rem;
    font-variant: small-caps;
    color: wheat;
    font-weight: bold;
    letter-spacing: 0.5px;
}

.brand-tagline {
    color: rgba(255, 255, 255, 0.55);
    font-size: 0.82rem;
    line-height: 1.75;
    margin-bottom: 20px;
    text-transform: none;
}

/* ---- Social Icons ---- */
.social-links {
    display: flex;
    gap: 12px;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: 1px solid rgba(245, 222, 179, 0.25);
    color: rgba(255, 255, 255, 0.6);
    font-size: 1rem;
    text-decoration: none;
    transition: all 0.3s ease;
    background: rgba(255,255,255,0.04);
}

.social-links a:hover {
    background: wheat;
    color: #1a1a1a;
    border-color: wheat;
    transform: translateY(-3px);
}

/* ---- Columns ---- */
.footer-col {
    flex: 1;
    min-width: 160px;
}

.footer-heading {
    color: wheat;
    font-size: 0.9rem;
    font-variant: small-caps;
    letter-spacing: 1px;
    margin-bottom: 18px;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(245, 222, 179, 0.15);
    text-transform: capitalize;
}

/* ---- Nav Links ---- */
.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links .list {
    margin-bottom: 9px;

}

.footer-links a {
    color: rgba(255, 255, 255, 0.55);
    text-decoration: none;
    font-size: 0.83rem;
    display: flex;
    align-items: center;
    gap: 4px;
    transition: color 0.3s, gap 0.3s;
    text-transform: capitalize;
}

.footer-links a i {
    font-size: 0.9rem;
    color: wheat;
    opacity: 0.6;
    transition: opacity 0.3s;
}

.footer-links a:hover {
    color: wheat;
    gap: 8px;
}

.footer-links a:hover i {
    opacity: 1;
}

/* ---- Contact List ---- */
.footer-contact {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-contact li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 13px;
    color: rgba(255, 255, 255, 0.55);
    font-size: 0.83rem;
    line-height: 1.55;
    text-transform: none;
}

.footer-contact li i {
    color: wheat;
    font-size: 1rem;
    margin-top: 1px;
    flex-shrink: 0;
}

/* ---- Bottom Bar ---- */
.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.07);
    padding: 16px 60px;
}

.footer-bottom-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}

.footer-bottom p {
    color: rgba(255, 255, 255, 0.3);
    font-size: 0.78rem;
    text-transform: none;
}

.footer-bottom-links {
    display: flex;
    align-items: center;
    gap: 10px;
}

.footer-bottom-links a {
    color: rgba(255, 255, 255, 0.3);
    text-decoration: none;
    font-size: 0.78rem;
    transition: color 0.3s;
    text-transform: none;
}

.footer-bottom-links a:hover {
    color: wheat;
}

.footer-bottom-links .divider {
    color: rgba(255, 255, 255, 0.15);
    font-size: 0.78rem;
}

/* ---- Responsive ---- */
@media (max-width: 768px) {
    .footer-container {
        padding: 40px 25px 25px;
        gap: 30px;
    }

    .footer-brand {
        max-width: 100%;
    }

    .footer-col {
        min-width: calc(50% - 15px);
    }

    .footer-bottom {
        padding: 16px 25px;
    }

    .footer-bottom-inner {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .footer-col {
        min-width: 100%;
    }
}
</style>