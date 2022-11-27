<?php 
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_project_path('public/partials/global/head.php')); ?>
    <body>
        <div>
            <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="page-content">
                <section class="about-intro m-top grid">
                    <img src="<?php echo get_public_url('/images/ksong-pfp.svg')?>" class="col-12 col-6-lg" alt="Picture of Karina Song looking up">
                    <div class="about-info col-12 col-6-lg">
                        <h1>About Me</h1>
                        <p>Full-stack web developer and designer pivoting from Quality Assurance in the food industry. My love of the web development and design world started with a UX course and ran from there. I loved getting wrapped up in everything from working through a bug to moving a pixel by one space.</p>
                        <p>My goal is to pursue a career in Canada where I am able to bridge the gap between design and development. Later in my career, I would like to specialize in creating accessible designs. </p>
                    </div>
                </section>
                <section class="skillset grid">
                    <div class="about-skills col-12 col-6-lg">
                        <h2>Skills</h2>
                        <ul>
                            <li>
                                <h3>Languages</h3>
                                <p>Javascript, PHP, Ruby, SQL, HTML, CSS</p>
                            </li>
                            <li>
                                <h3>Frameworks/Libraries</h3>
                                <p>NodeJS, ReactJS, Express, Rails, jQuery, Ajax, EJS, SASS</p>
                            </li>
                            <li>
                                <h3>Systems, CMS & Databases</h3>
                                <p>PostgreSQL, Git, MongoDB, Wordpress</p>
                            </li>
                            <li>
                                <h3>Testing</h3>
                                <p>Cypress, Jest, Storybook</p>
                            </li>
                            <li>
                                <h3>Design</h3>
                                <p>Adobe Suit (Photoshop, Illustrator, InDesign, Dimension, After Effects, Audition, XD, Aero), Figma</p>
                            </li>
                        </ul>
                    </div>
                    <div class="education col-12 col-6-lg">
                        <h2>Education</h2>
                        <ul>
                            <li>
                                <div class="d-flex institute">
                                    <h3>BCIT</h3>
                                    <p>Currently Enrolled</p>
                                </div>
                                <p>New Media Design & Web Development Diploma</p>
                            </li>
                            <li>
                                <div class="d-flex institute">
                                    <h3>Lighthouse Labs</h3>
                                    <p>2021</p>
                                </div>
                                <p>Full Stack Web Development Diploma</p>
                            </li>
                            <li>
                                <div class="d-flex institute">
                                    <h3>Brainstation</h3>
                                    <p>2020</p>
                                </div>
                                <p>UX Design Certificate</p>
                            </li>
                            <li>
                                <div class="d-flex institute">
                                    <h3>University of British Columbia</h3>
                                    <p>2013 - 18</p>
                                </div>
                                <p>Bachelors with Honours in Food, Nutrition and Health<br>Major in Food Science </p>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="hobbies grid">
                    <img src="<?php echo get_public_url('/images/about-doll.svg')?>" class="col-12 col-4-md col-6-lg" alt="Graphic of a turquoise arch with a golden star at the top and a pink semi-circle on the bottom">
                    <div class="hobby-info col-12 col-8-md col-6-lg">
                        <h2>In my spare time, I would be...</h2>
                        <ul>
                            <li><p>listening to a new album</p></li>
                            <li><p>watching a new cooking or baking show</p></li>
                            <li><p>taking picture of nature</p></li>
                            <li><p>bullet journaling with my growing stationery collection</p></li>
                        </ul>
                    </div>
                </section>
                <?php require(get_project_path('public/partials/components/get-connected.php')); ?>
            </main>
            <?php require(get_project_path('public/partials/global/footer.php')); ?>
        </div>
    </body>
</html>