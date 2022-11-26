<?php
    require('../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
         $meta_title = "Home - Full-stack Developer | Graphic Designer | Karina Song";
         
         require(get_project_path('public/partials/global/head.php')); ?>
    <body>
        <div>
            <?php 
                require(get_project_path('public/partials/global/header.php')); 
            ?>
            <main class="page-content">
                <section class="bnr grid m-top">
                    <div class="bnr-info col-12 col-12-sm">
                        <p>Web Development | Graphic Design</p>
                        <h1>Karina Song</h1>
                        <p>A human-centred designer and developer that strives to create accessible and intuitive products. Good design is when you don't have to think about it</p>
                        <a href="mailto:ksysong@gmail.com" title="Email me" class="btn">Contact Me</a>
                    </div>
                    <img src="<?php echo get_public_url('/images/banner-img.svg'); ?>" class="col-12 col-12-sm" alt="A turquoise arch with a pink circle at the top right corner and a golden star on the bottom left">
                </section>
                <section class="skills">
                    <div class="container">
                        <ul class="grid">
                            <li class="col-12">
                                <img src="<?php echo get_public_url('/images/turq-door.svg'); ?>" alt="A turquoise door shape">
                                <h2>Web Development</h2>
                                <p>Trained in full-stack development, I can code and bridge the gap between design and development</p>
                            </li>
                            <li class="col-12">
                                <img src="<?php echo get_public_url('/images/gold-star.svg'); ?>" alt="A golden yellow star shape">
                                <h2>Graphic Design</h2>
                                <p>I am versatile in my ability to communicate a message, from designing a website to creating a strong brand identity</p>
                            </li>
                            <li class="col-12">
                                <img src="<?php echo get_public_url('/images/pink-circle.svg'); ?>" alt="A coral pink circle">
                                <h2>Accessible Design</h2>
                                <p>My priority is to always have an inclusive mindset as designing for accessibility leads to better designs that benefit everyone</p>
                            </li>
                        </ul>

                    </div>
                </section>
                <section class="latest-work">
                    <h2>Latest Work</h2>
                    <ul class="grid">
                        <li class="col-12">
                            <a href="<?php echo get_public_url('/projects/linmon.php');?>">
                                <img src="<?php echo get_public_url('/images/linmon-square-tn.jpg'); ?>" alt="A mockup up of a glass bottle and a juicebox of Linmon Lemon tea">
                                <h3>Linmon</h3>
                                <p>Product Design, Brand Identity</p>
                            </a>
                        </li>
                        <li class="col-12">
                            <a href="<?php echo get_public_url('/projects/ematcha.php');?>">
                                <img src="<?php echo get_public_url('/images/ematcha-square-tn.jpg'); ?>" alt="Mockup of the Emerald Matcha stationery set">
                                <h3>Emerald Matcha</h3>
                                <p>Product Design, Brand Identity</p>
                            </a>
                        </li>
                        <li class="col-12">
                            <a href="<?php echo get_public_url('/projects/tliving.php');?>">
                                <img src="<?php echo get_public_url('/images/tliving-square-tn.jpg'); ?>" alt="Preview of Tiny Living's landing page">
                                <h3>Tiny Living</h3>
                                <p>Print Design, Web Design</p>
                            </a>
                        </li>
                    </ul>
                    <a href="<?php echo get_public_url('/pages/design.php');?>" class="btn">View More</a>
                </section>
                <?php require(get_project_path('public/partials/components/get-connected.php')); ?>
            </main>
            <?php require(get_project_path('public/partials/global/footer.php')); ?> 
        </div>
    </body>
</html>