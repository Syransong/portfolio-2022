<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "Tiny Living - Graphic Design Project by Karina Song";
        $meta_description = "A fictional tiny house building company that also has a print magazine. A logo, magazine cover, landing page and banner ad were created.";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <div class="project-page">
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="tliving">
                <section class="project-bnr m-top p-top">
                    <div class="grid container align-items-center">
                        <div class="proj-bnr-info col-12 col-6-lg">
                            <ul class="d-flex">
                                <li>Print</li>
                                <li>Web</li>
                                <li>Logo</li>
                                <li>Brand Identity</li>
                            </ul>
                            <h1>Tiny Living</h1>
                            <p>Tiny Living is a fictional tiny home builder based in Vancouver, BC. In addition to their design and building services, they print a monthly magazine.</p>
                            <p>The objective was to create a magazine cover, a landing page mockup and a banner ad. These assets would showcase the company&apos;s products and  unique brand identity.</p>
                        </div>
                        <img class="tliving-web-preview lazy col-12 col-6-lg" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url("/images/tliving-web-preview.png")?>" alt="Preview of the Tiny Living webpage" >
                    </div>
                </section>
                <section class="project-info">
                    <div class="container">
                        <h2>Breakdown</h2>
                        <ul class="grid">
                            <li class="col-6 col-3-lg">
                                <h3>Date</h3>
                                <p>October 2022</p>
                            </li>
                            <li class="col-6 col-3-lg">
                                <h3>Role</h3>
                                <p>Graphic Designer</p>
                                <p>Web Designer</p>
                            </li>
                            <li class="col-6 col-3-lg">
                                <h3>Software</h3>
                                <p>Adobe InDesign</p>
                                <p>Figma</p>
                            </li>
                            <li class="col-6 col-3-lg">
                                <h3>Deliverables</h3>
                                <p>Magazine Cover</p>
                                <p>Banner Ad</p>
                                <p>Landing Page Design</p>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="project-summary">
                    <div class="container">
                        <h2>Summary</h2>
                        <ul class="grid">
                            <li class="col-12 col-4-lg">
                                <p class="num1">01</p>
                                <h3>Brainstorm</h3>
                                <p>Brainstorm a concept for a magazine with the theme, "Small is Beautiful"</p>
                            </li>
                            <li class="col-12 col-4-lg">
                                <p class="num2">02</p>
                                <h3>Ideate</h3>
                                <p>Produce a creative brief that would detail the brainstorming process for the brand</p>
                            </li>
                            <li class="col-12 col-4-lg">
                                <p class="num3">03</p>
                                <h3>Design</h3>
                                <p>Design a logo, print magazine cover, landing page and banner ad using Adobe InDesign </p>
                            </li>
                        </ul>
                    </div>
                </section>
                <section>
                    <div class="grid container">
                        <div class="col-12 col-10-lg">
                            <h2 class="">Brainstorming the Brand Concept</h2>
                            <p class="">With the prompt “Small is Beautiful”, I wanted to create a magazine that focuses on how to live “tiny”. Specifically, the tiny house movement and lifestyle. Overall, the main purpose would be to promote this movement by providing advice, tips and guides. It would also encourage people to reflect on their current lifestyle and environmental impact.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="grid container align-items-center">
                        <div class="col-12 col-6-lg">
                            <h2>Logo Design</h2>
                            <p>For the logo, I wanted to create a simple logo that represented a tiny house. To do this, I used lines to create a roof and base to imply the shape of a house. The base would include two wheels to represent how many tiny houses are built to be mobile. The window of the tiny house would include a leaf to represent how tiny living is eco-friendly.</p>
                        </div>
                        <figure class="col-12 col-6-lg">
                            <a class="glightbox" href="<?php echo get_public_url("images/tliving-thumbnails.jpg")?>" data-glightbox="title:Thumbnail sketches of the Tiny Living logo">
                                <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url("images/tliving-thumbnails.jpg")?>" alt="Thumbnail sketches of the Tiny Living logo">
                            </a>
                            <figcaption>Thumbnails of the Tiny Living Logo</figcaption>
                        </figure>
                    </div>
                </section>
                <section>
                    <div class="grid container">
                        <div class="col-12 col-10-lg">
                            <h2 class="">Colour Palette and Design Concept</h2>
                            <p class="">The look and feel of the magazine would be a mix of both traditional and modern elements. I did this to reflect how tiny houses are a relatively new concept but still serve as one&apos;s home. The designs themselves would have a modern look as I chose to only use sans serif fonts. To contrast, an Analogous colour scheme of orange, green and yellow is used to give a warm and welcoming feeling as these are naturalistic colours. </p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="grid container align-items-center">
                        <figure class="tliving-final-poster col-12 col-6-lg">
                            <a class="glightbox" href="<?php echo get_public_url("images/tliving-mag-cover.png")?>" data-glightbox="title:Final Version of the Tiny Living Cover made with InDesign">
                                <img class="lazy box-shadow" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url("images/tliving-mag-cover.png")?>" alt="Final Version of the Tiny Living Cover">
                            </a>
                            <figcaption>The Tiny Living magazine cover</figcaption>
                        </figure>
                        <div class="col-12 col-6-lg">
                            <h2>Magazine Cover Design</h2>
                            <p>To gather ideas for the magazine cover, I looked to home interior design and architecture magazine covers for inspiration, such as Architectural Digest and Dezeen. In my thumbnails, I incorporated how they highlighted the magazine title and featured articles. I did this by making the text larger so there was a clear hierarchy. The final design was then created in Adobe Indesign.</p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container grid align-items-center">
                        <div class="col-12 col-6-lg">
                            <h2>Banner Ad Design</h2>
                            <p>For the banner design, I decided to go with a square banner as this type of ad would be commonly seen on the aside section of websites. I wanted to grab people’s attention by making the “Tiny Living Magazine” large and in a bright orange that contrasts with the photo used. There is also a clear CTA to go to the website if consumers are interested in subscribing.</p>
                        </div>
                        <figure class="col-12 col-6-lg">
                            <a class="glightbox" href="<?php echo get_public_url('images/tliving-banner.jpg')?>" data-glightbox="title:Banner ad for the Tiny Living Magazine">
                                <img class="lazy box-shadow" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/tliving-banner.jpg')?>" alt="Banner ad for Tiny Living where a woman looks out the window of her tiny house towards a snowy forest">
                            </a>
                            <figcaption>Banner ad for Tiny Living</figcaption>
                        </figure>
                    </div>
                </section>
                <section>
                    <div class="grid container align-items-center">
                        <figure class="tliving-og-landing col-12 col-6-lg">
                            <a class="glightbox" href="<?php echo get_public_url('images/tliving-og-landing.jpg')?>" data-glightbox="title:The Original Landing Page Design made with InDesign">
                                <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/tliving-og-landing.jpg')?>" class="box-shadow" alt="Original Landing Page design for Tiny Living">
                            </a>
                            <figcaption>The original landing page made using InDesign</figcaption>
                        </figure>
                        <div class="col-12 col-6-lg">
                            <h2>Landing Page Design</h2>
                            <p>For this project, we were required to only promote the magazine on the landing page mockup. I decided to redesign the page and that it would promote the magazine along with advertising tiny home building services. I created this mockup in Figma as I wanted to use Figma’s component creation capabilities. For this design, I reserved using the same bright orange for the CTAs as this would help grab users’ attention. </p>
                        </div>
                        <figure class="tliving-new-landing col-12">
                            <a class="glightbox" href="<?php echo get_public_url('images/tliving-new-landing.jpg')?>" data-glightbox="title:High-Fidelity Mockups of the new Tiny Living Landing Page">
                                <img class="lazy box-shadow" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/tliving-new-landing.jpg')?>" alt="Screenshots of the new Tiny Living Landing page">
                            </a>
                            <figcaption>The updated landing page design using Figma</figcaption>
                        </figure>
                    </div>
                </section>
                <a href="<?php echo get_public_url("pages/design.php"); ?>" class="btn more-proj">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
    </body>
</html>