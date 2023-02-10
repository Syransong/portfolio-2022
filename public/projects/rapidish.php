<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "Rapidish - Web Development Project by Karina Song";
        $meta_description = "Rapidish is a fictional meal delivery company. To demonstrate skills in mobile-first and responsive design, a landing page was created.";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <div class="project-page">
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="rapidish">
                <section class="project-bnr m-top p-top grid align-items-center">
                    <div class="proj-bnr-info col-12 col-6-lg">
                        <ul class="d-flex">
                            <li>Front-end</li>
                            <li>Responsive Design</li>
                        </ul>
                        <h1>Rapidish</h1>
                        <p>Rapidish is a fictional meal kit delivery company.</p>
                        <p>The purpose of this project was to showcase a mobile-first and responsive web design approach. This was done by creating a landing page with multiple breakpoints and incorporating 3 jQuery plugins.</p>
                    </div>
                    <img src="<?php echo get_public_url('images/rapidish-phone-mockup.png')?>" class="rapidish-mobile col-12 col-6-lg" alt="Mobile view of the Rapidish landing page">
                </section>
                <section class="project-info">
                    <ul class="grid">
                        <li class="col-6 col-3-lg">
                            <h3>Date</h3>
                            <p>October 2022</p>
                        </li>
                        <li class="col-6 col-3-lg">
                            <h3>Role</h3>
                            <p>Front-end Developer</p>
                        </li>
                        <li class="col-6 col-3-lg">
                            <h3>Tech Stack</h3>
                            <h4>Languages</h4>
                            <p>HTML, CSS, Javascript</p>
                            <h4>Libraries</h4>
                            <p>jQuery</p>
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
                            <h3>Brainstorm</h3>
                            <p>Brainstorm the website and content</p>
                        </li>
                        <li class="col-12 col-4-lg">
                            <p class="num2">02</p>
                            <h3>Plan</h3>
                            <p>Plan the HTML skeleton and research potential jQuery plugins</p>
                        </li>
                        <li class="col-12 col-4-lg">
                            <p class="num3">03</p>
                            <h3>Code</h3>
                            <p>Code the landing page with a mobile-first approach</p>
                        </li>
                    </ul>
                </section>
                <section class="grid align-items-center">
                    <figure class="rapidish-fig-mock col-12 col-6-lg col-5-xl">
                        <img class="glightbox" src="<?php echo get_public_url('images/rapidish-figma-mockup.jpg')?>" class="box-shadow" alt="Figma mockup of the Rapidish landing page">
                        <figcaption>Landing Page Mockup using Figma</figcaption>
                    </figure>
                    <div class="col-12 col-6-lg col-5-xl">
                        <h2>Brainstorm</h2>
                        <p>For this project, I wanted to code a landing page design where I previously created a high-fidelity mockup using Figma. This would be for a fictional company called Rapidish that offers a meal kit delivery service. I wanted to include more informative copy so I researched similar businesses, like Blue Apron and Hello Fresh, for inspiration. From my research, I found that it would be beneficial for potential customers to understand how the service operates and what is inside the meal kits.</p>
                    </div>
                </section>
                <section class="grid">
                    <div class="col-12 col-10-lg">
                        <h2>Plan</h2>
                        <p>After determining what sections the landing page would have, I decided which jQuery plugins to use. We were given the option of choosing 3 of the following: Gridder, Flickity, Lightbox, Accordion, MixItUp or Masonry. After looking at the documentation for each and seeing which plugin would be appropriate, these were my choices:</p>
                        <ul class="bul-list">
                            <li>Lightbox to display the Newsletter Subscription window</li>
                            <li>Masonry to display a gallery of trending meal kits</li>
                            <li>Flickity to display a carousel of what is inside the meal kits</li>
                        </ul>
                    </div>
                </section>
                <section class="grid">
                    <div class="col-12 col-10-lg">
                        <h2>Code</h2>
                        <p>With my plan, I first coded my HTML skeleton and gave the needed class names for styling and to properly integrate the jQuery plugins. Afterwards, I started the styling process with a mobile-first approach. I started at a width of 320px and added breakpoints at the following widths: 576px, 768px, 992px, 1200px, 1440px.</p>
                        <p>This landing page also has some of the following responsive features:</p>
                        <ul class="bul-list">
                            <li>Below 768px, the navigation is a hamburger menu for mobile users</li>
                            <li>The "What's Inside our Meal Kils" section would be a carousel on mobile devices only (below 992px)</li>
                            <li>Hover effects for buttons kicks in at 1200px</li>
                        </ul>
                    </div>
                    <figure class="rapidish-all-mocks col-12">
                        <img class="glightbox" src="<?php echo get_public_url('images/rapidish-all-mockups.jpg')?>" class="box-shadow" alt="Mobile, tablet and desktop view of the Rapidish Landing page">
                        <figcaption>Mobile, tablet and desktop view</figcaption>
                    </figure>
                    <a href="http://rapidish.karinasong.com" class="col-12 btn live-link" target="_blank" title="View live Rapidish landing page">View Live Page</a>
                </section>
                <section class="grid">
                    <div class="col-12 col-10-lg">
                        <h2>Conclusion & Next Steps</h2>
                        <p>Overall, the Rapidish landing page showcases their business and brand, for both mobile and desktop users. Next steps for this project would be converting the site code into a React App. This way, I can convert the header, footer and other sections into reusable React components. In addition, this sets up an easy conversion into a single page application for further iteration.</p>
                    </div>
                </section>
                <a href="<?php echo get_public_url("pages/dev.php"); ?>" class="btn more-proj">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    </body>
</html>