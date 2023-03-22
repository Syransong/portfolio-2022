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
                            <p class="areas">Web Development | Graphic Design</p>
                            <h1>Karina Song</h1>
                            <p>A human-centred designer and developer that strives to create accessible and intuitive products. Good design is when you don't have to think about it.</p>
                            <a href="mailto:ksysong@gmail.com" title="Email me" class="btn">Contact Me</a>
                        </div>
                        <img src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/banner-img.svg'); ?>" class="lazy col-12 col-12-sm col-12-md col-6-lg" alt="A turquoise arch with a pink circle at the top right corner and a golden star on the bottom left">
                    </div>
                </section>
                <section class="skills">
                    <div class="container">
                        <ul class="grid">
                            <li class="col-12 col-6-md col-4-lg">
                                <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/gold-star.svg'); ?>" alt="A golden yellow star shape">
                                <h3>Web Development</h3>
                                <p>Trained in full-stack development, I can code and bridge the gap between design and development.</p>
                            </li>
                            <li class="col-12 col-6-md col-4-lg">
                                <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/turq-door.svg'); ?>" alt="A turquoise door shape">
                                <h3>Graphic Design</h3>
                                <p>I am versatile in my ability to communicate a message, from designing a website to creating a strong brand identity.</p>
                            </li>
                            <li class="col-12 col-6-md col-4-lg">
                                <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/pink-circle.svg'); ?>" alt="A coral pink circle">
                                <h3>Accessible Design</h3>
                                <p>My priority is to always have an inclusive mindset as designing for accessibility leads to better designs that benefit everyone.</p>
                            </li>
                        </ul>

                    </div>
                </section>
                <section class="featured-work">
                    <div class="container">
                        <h2>Featured Work</h2>
                        <ul class="grid">
                            <li class="col-12 col-6-md col-4-lg small-card">
                                <a href="<?php echo get_public_url('/projects/rapidish.php');?>" title="Go to Rapidish project">
                                    <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/rapidish-square-tn.jpg'); ?>" alt="Tablet and mobile mockup previews of the Rapidish site">
                                    <h3>Rapidish</h3>
                                    <p>Front-end</p>
                                    <span class="proj-link">View Project &rarr;</span>
                                </a>
                            </li>
                            <li class="col-12 col-6-md col-4-lg small-card">
                                <a href="<?php echo get_public_url('/projects/react-todo.php');?>" title="Go to React To-do App project">
                                    <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/todo-square-tn.jpg'); ?>" alt="Preview of Dark and Light mode of the React To-do App">
                                    <h3>React To-Do App</h3>
                                    <p>Back-end</p>
                                    <span class="proj-link">View Project &rarr;</span>
                                </a>
                            </li>
                            <li class="col-12 col-6-md col-4-lg small-card">
                                <a href="<?php echo get_public_url('/projects/tliving.php');?>" title="Go to Tiny Living project">
                                    <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/tliving-square-tn.jpg'); ?>" alt="Preview of Tiny Living's landing page">
                                    <h3>Tiny Living</h3>
                                    <p>Print Design, Web Design</p>
                                    <span class="proj-link">View Project &rarr;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
                <?php require(get_project_path('public/partials/components/get-connected.php')); ?>
            </main>
            <?php require(get_project_path('public/partials/global/footer.php')); ?> 
        </div>
    </body>
</html>