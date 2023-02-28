<header class="d-flex site-header">
    <a href="<?php echo get_public_url('/index.php'); ?>" title="Home">
        <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/ksong-logo.svg'); ?>" alt="Karina Song Logo" height="70" width="70">
    </a>
    <nav class="gn">
        <ul class="d-flex nav-menu">
            <li><a href="<?php echo get_public_url('/pages/design.php'); ?>" title="Design Work" class="nav-link">Design</a></li>
            <li><a href="<?php echo get_public_url('/pages/dev.php'); ?>" title="Development" class="nav-link">Development</a></li>
            <li><a href="<?php echo get_public_url('/pages/about.php'); ?>" title="About" class="nav-link">About</a></li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>