<?php 
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "About - Full-stack Developer | Graphic Designer | Karina Song";
        $meta_description = "Read about the history, skills and education background of Karina Song, a design and developer based in Vancouver Canada.";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <div>
            <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="page-content">
                <section class="m-top p-top">
                    <div class="about-intro container grid">
                        <img class="lazy col-12 col-6-lg" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/ksong-pfp.jpg')?>" alt="Picture of Karina Song looking up">
                        <div class="about-info col-12 col-6-lg">
                            <h1>About Me</h1>
                            <p>Full-stack web developer and designer pivoting from Quality Assurance in the food industry. My love of the web development and design world started with a UX course and ran from there. I love getting wrapped up in everything from working through a bug to moving a pixel by one space.</p>
                            <p>My goal is to pursue a career in Canada where I am able to bridge the gap between design and development. I hope to start this journey with an internship in Summer 2023. Later in my career, I would like to specialize in creating accessible designs. </p>
                        </div>
                    </div>
                </section>
                <section class="skillset">
                    <div class="container grid">
                        <div class="about-skills col-12 col-6-lg">
                            <h2>Skills</h2>
                            <ul>
                                <li>
                                    <h3>Languages</h3>
                                    <p>JavaScript, PHP, Ruby, SQL, HTML, CSS</p>
                                </li>
                                <li>
                                    <h3>Frameworks/Libraries</h3>
                                    <p>NodeJS, ReactJS, Express, Rails, jQuery, Ajax, EJS, SASS</p>
                                </li>
                                <li>
                                    <h3>Systems, CMS & Databases</h3>
                                    <p>PostgreSQL, MySQL, Git, MongoDB, Wordpress</p>
                                </li>
                                <li>
                                    <h3>Testing</h3>
                                    <p>Cypress, Jest, Storybook</p>
                                </li>
                                <li>
                                    <h3>Design</h3>
                                    <p>Adobe Suite (Photoshop, Illustrator, InDesign, Dimension, After Effects, Audition, XD, Aero), Figma</p>
                                </li>
                            </ul>
                        </div>
                        <div class="education col-12 col-6-lg">
                            <h2>Education</h2>
                            <ul>
                                <li>
                                    <div class="d-flex institute">
                                        <h3>BCIT</h3>
                                        <p>Expected July 2023</p>
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
                    </div>
                </section>
                <section>
                    <div class="hobbies container grid">
                        <img class="lazy col-12 col-4-md col-6-lg" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/about-doll.svg')?>"  alt="Graphic of a turquoise arch with a golden star at the top and a pink semi-circle on the bottom">
                        <div class="hobby-info align-items-center col-12 col-8-md col-6-lg">
                            <h2>In my spare time, I would be...</h2>
                            <ul>
                                <li><p>listening to a new album</p></li>
                                <li><p>watching a new cooking or baking show</p></li>
                                <li><p>taking pictures of nature</p></li>
                                <li><p>bullet journaling with my growing stationery collection</p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <?php require(get_project_path('public/partials/components/get-connected.php')); ?>
            </main>
            <?php require(get_project_path('public/partials/global/footer.php')); ?>
        </div>
    </body>
</html>