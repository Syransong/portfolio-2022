<?php
    require('../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "Home - Full-stack Developer | Graphic Designer | Karina Song";
        $meta_description = "Explore the design and coding work of Karina Song, a designer and developer based in Vancouver, Canada.";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <div>
            <?php 
                require(get_project_path('public/partials/global/header.php')); 
            ?>
            <main class="page-content">
                <section class="bnr m-top p-top">
                    <div class="container grid align-items-center">
                        <div class="bnr-info col-12 col-12-sm col-12-md col-6-lg">
                            <p>Web Development | Graphic Design</p>
                            <h1>Karina Song</h1>
                            <p>A human-centred designer and developer that strives to create accessible and intuitive products. Good design is when you don't have to think about it.</p>
                            <a href="mailto:ksysong@gmail.com" title="Email me" class="btn">Contact Me</a>
                        </div>
                        <img src="<?php echo get_public_url('/images/banner-img.svg'); ?>" class="col-12 col-12-sm col-12-md col-6-lg" alt="A turquoise arch with a pink circle at the top right corner and a golden star on the bottom left">
                    </div>
                </section>
                <section class="skills">
                    <div class="container">
                        <ul class="grid">
                            <li class="col-12 col-6-md col-4-lg">
                                <img src="<?php echo get_public_url('/images/gold-star.svg'); ?>" alt="A golden yellow star shape">
                                <h3>Web Development</h3>
                                <p>Trained in full-stack development, I can code and bridge the gap between design and development.</p>
                            </li>
                            <li class="col-12 col-6-md col-4-lg">
                                <img src="<?php echo get_public_url('/images/turq-door.svg'); ?>" alt="A turquoise door shape">
                                <h3>Graphic Design</h3>
                                <p>I am versatile in my ability to communicate a message, from designing a website to creating a strong brand identity.</p>
                            </li>
                            <li class="col-12 col-6-md col-4-lg">
                                <img src="<?php echo get_public_url('/images/pink-circle.svg'); ?>" alt="A coral pink circle">
                                <h3>Accessible Design</h3>
                                <p>My priority is to always have an inclusive mindset as designing for accessibility leads to better designs that benefit everyone.</p>
                            </li>
                        </ul>

                    </div>
                </section>
                <section class="latest-work">
                    <div class="container">
                        <h2>Featured Work</h2>
                        <ul class="grid">
                            <li class="col-12 col-6-md col-4-lg">
                                <a href="<?php echo get_public_url('/projects/linmon.php');?>">
                                    <img src="<?php echo get_public_url('/images/linmon-square-tn.jpg'); ?>" alt="A mockup up of a glass bottle and a juicebox of Linmon Lemon tea">
                                    <h3>Linmon</h3>
                                    <p>Product Design, Brand Identity</p>
                                    <a href="<?php echo get_public_url('/projects/linmon.php');?>">View Project &rarr;</a>
                                </a>
                            </li>
                            <li class="col-12 col-6-md col-4-lg">
                                <a href="<?php echo get_public_url('/projects/ematcha.php');?>">
                                    <img src="<?php echo get_public_url('/images/ematcha-square-tn.jpg'); ?>" alt="Mockup of the Emerald Matcha stationery set">
                                    <h3>Emerald Matcha</h3>
                                    <p>Product Design, Brand Identity</p>
                                    <a href="<?php echo get_public_url('/projects/ematcha.php');?>">View Project &rarr;</a>
                                </a>
                            </li>
                            <li class="col-12 col-6-md col-4-lg">
                                <a href="<?php echo get_public_url('/projects/tliving.php');?>">
                                    <img src="<?php echo get_public_url('/images/tliving-square-tn.jpg'); ?>" alt="Preview of Tiny Living's landing page">
                                    <h3>Tiny Living</h3>
                                    <p>Print Design, Web Design</p>
                                    <a href="<?php echo get_public_url('/projects/tliving.php');?>">View Project &rarr;</a>
                                </a>
                            </li>
                    </div>
                    </ul>
                    <!-- <a href="<?php echo get_public_url('/pages/design.php');?>" class="btn">View More</a> -->
                </section>
                <?php require(get_project_path('public/partials/components/get-connected.php')); ?>
            </main>
            <?php require(get_project_path('public/partials/global/footer.php')); ?> 
        </div>
    </body>
</html>