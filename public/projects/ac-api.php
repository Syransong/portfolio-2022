<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "Animal Crossing API Project - Web Development Project by Karina Song";
        $meta_description = "This page makes API calls to the Nookpedia API to show some information about villagers from the Animal Crossing game. Users can also filter for certain species.";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <div class="project-page">
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="ac-api">
                <section class="project-bnr m-top p-top grid align-items-center">
                    <div class="proj-bnr-info col-12 col-6-lg">
                        <ul class="d-flex">
                            <li>Front-end</li>
                            <li>Back-End</li>
                        </ul>
                        <h1>Animal Crossing API Project</h1>
                        <p></p>
                    </div>
                </section>
                <section class="project-info">
                    <ul class="grid">
                        <li class="col-6 col-3-lg">
                            <h3>Date</h3>
                            <p>January 2023</p>
                        </li>
                        <li class="col-6 col-3-lg">
                            <h3>Role</h3>
                            <p>Full-Stack Developer</p>
                        </li>
                        <li class="col-6 col-3-lg">
                            <h3>Tech Stack</h3>
                            <h4>Languages</h4>
                            <p>HTML, CSS, Javascript</p>
                            <h4>Libraries</h4>
                            <p>jQuery</p>
                            <p>Ajax</p>
                        </li>
                        <li class="col-6 col-3-lg">
                            <h3>Deliverables</h3>
                            <p>Landing Page Code</p>
                            <p>High-fidelity Mockup</p>
                        </li>
                    </ul>
                </section>
                <section class="project-summary">
                    <h2>Summary</h2>
                    <ul class="grid">
                        <li class="col-12 col-4-lg">
                            <p class="num1">01</p>
                            <h3>Research</h3>
                            <p>Rearch APIs and read documentation</p>
                        </li>
                        <li class="col-12 col-4-lg">
                            <p class="num2">02</p>
                            <h3>Plan</h3>
                            <p>Plan the page and data to display</p>
                        </li>
                        <li class="col-12 col-4-lg">
                            <p class="num3">03</p>
                            <h3>Code</h3>
                            <p>Dynamically create villager cards and filtering functionality</p>
                        </li>
                    </ul>
                </section>
                <section class="grid align-items-center">
                    <div class="col-12 col-6-lg col-5-xl">
                        <h2>Researching APIs and Documentation</h2>
                    </div>
                </section>
                <section class="grid">
                    <div class="col-12 col-10-lg">
                        <h2>Planning the Page</h2>
                    </div>
                </section>
                <section class="grid">
                    <div class="col-12 col-10-lg">
                        <h2>Coding</h2>
                </section>
                <section class="grid">
                    <div class="col-12 col-10-lg">
                        <h2>Conclusion & Next Steps</h2>
                    </div>
                </section>
                <a href="<?php echo get_public_url("pages/dev.php"); ?>" class="btn more-proj">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    </body>
</html>