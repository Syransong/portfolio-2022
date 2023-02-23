<header class="d-flex site-header">
    <a href="<?php echo get_public_url('/index.php'); ?>" title="Home">
        <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/ksong-logo.svg'); ?>" alt="Karina Song Logo" height="70" width="70">
    </a>
    <input type="checkbox" id="menu-btn">
    <label class="menu-icon" for="menu-btn"><span class="navi-icon"></span></label>
    <nav class="gn navigation" id="gn">
        <ul class="d-flex gn-items">
            <li><a href="<?php echo get_public_url('/pages/design.php'); ?>" title="Design Work">Design</a></li>
            <li><a href="<?php echo get_public_url('/pages/dev.php'); ?>" title="Development">Development</a></li>
            <li><a href="<?php echo get_public_url('/pages/about.php'); ?>" title="About">About</a></li>
        </ul>
    </nav>
</header>