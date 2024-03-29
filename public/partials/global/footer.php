<footer id="footer">
    <div class="footer d-flex container">
        <button id="scroll-top" title="Back to Top"></button>
        <p>&copy; Karina Song 2023</p>
        <ul class="d-flex soc-med">
            <li>
                <a href="mailto:ksysong@gmail.com" title="Email me">
                    <img src="<?php echo get_public_url('/images/email-icon.svg'); ?>" alt="Email Icon">
                </a>
            </li>
            <li>
                <a href="https://github.com/Syransong" title="Go to my Github" target="_blank">
                    <img src="<?php echo get_public_url('/images/github-logo.sv'); ?>g" alt="Github Logo">
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/karina-sy-song/" title="Go to my LinkedIn" target="_blank">
                    <img src="<?php echo get_public_url('/images/linkedin-logo.'); ?>svg" alt="LinkedIn Logo">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/si1yuan2/" title="Go to my Instagram" target="_blank">
                    <img src="<?php echo get_public_url('/images/instagram-logo'); ?>.svg" alt="Instagram Logo">
                </a>
            </li>
            <li>
                <a href="https://ksysong.medium.com/" title="Go to my Medium" target="_blank">
                    <img src="<?php echo get_public_url('/images/medium-logo.svg'); ?>" alt="Medium Logo">
                </a>
            </li>
        </ul>
    </div>
</footer>
<script src="<?php echo get_public_url('js/scroll-top.js')?>"></script>
<script src="<?php echo get_public_url('js/activePage.js')?>"></script>
<script src="<?php echo get_public_url('js/hamburger-menu.js')?>"></script>
<?php 
    if (strpos($_SERVER['REQUEST_URI'], "projects")) {
        echo '
            <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
            <script type="text/javascript">
                const lightbox = GLightbox({ 
                    zoomable: true,
                });
            </script>
        ';
    }
?>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>
<script type="text/javascript">
    const lazyLoadInstance = new LazyLoad({}); 
</script>