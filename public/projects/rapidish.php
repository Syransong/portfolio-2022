<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_project_path('public/partials/global/head.php')); ?>
    <body>
        <div>
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="rapidish">
                <section class="project-bnr m-top grid">
                    <div class="proj-bnr-info">
                        <ul class="d-flex">
                            <li>Front-end Development</li>
                            <li>Responsive Design |</li>
                        </ul>
                        <h1>Rapidish</h1>
                        <p></p>
                        <p></p>
                    </div>
                </section>
                <section class="project-info">
                    <ul class="d-flex">
                        <li>
                            <h3>Date</h3>
                            <p>October 2022</p>
                        </li>
                        <li>
                            <h3>Role</h3>
                            <p>Front-end Developer</p>
                        </li>
                        <li>
                            <h3>Tech Stack</h3>
                            <h4>Languages</h4>
                            <p>HTML, CSS, Javascript</p>
                            <h4>Libraries</h4>
                            <p>jQuery</p>
                        </li>
                        <li>
                            <h3>Deliverables</h3>
                            <p>Landing Page Code</p>
                            <p>High-fidelity Mockup</p>
                        </li>
                    </ul>
                </section>
                <section class="project-summary">
                    <h2>Summary</h2>
                    <ul class="grid">
                        <li class="col col-4">
                            <p class="num1">01</p>
                            <h3>Brainstorm</h3>
                            <p></p>
                        </li>
                        <li class="col col-4">
                            <p class="num2">02</p>
                            <h3>Plan</h3>
                            <p></p>
                        </li>
                        <li class="col col-4">
                            <p class="num3">03</p>
                            <h3>Code</h3>
                            <p></p>
                        </li>
                    </ul>
                </section>
                <section class="grid">
                    <h2 class="col"></h2>
                    <p class="col col-10"></p>
                </section>
                <a href="<?php echo get_public_url("pages/design.php"); ?>" class="btn more-proj">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
    </body>
</html>