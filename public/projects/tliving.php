<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_project_path('public/partials/global/head.php')); ?>
    <body>
        <div>
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="tliving">
                <section class="project-bnr m-top grid">
                    <div class="proj-bnr-info">
                        <ul class="d-flex">
                            <li>Web |</li>
                            <li>Print |</li>
                            <li>Brand Identity</li>
                        </ul>
                        <h1>Tiny Living</h1>
                        <p>Tiny Living is a fictional tiny home builder based in Vancouver, BC. In addition to their design and building services, they print a monthly magazine.</p>
                        <p>The objective was to create a magazine cover, a landing page mockup and a banner ad. These assets would showcase the company’s products and  unique brand identity.</p>
                    </div>
                    <!-- <div class="proj-preview-img"></div> -->
                    <img src="<?php echo get_public_url("/images/tliving-mag-cover.png")?>" alt="" class="proj-preview-img">
                </section>
                <section class="project-info">
                    <ul class="d-flex">
                        <li>
                            <h3>Date</h3>
                            <p>October 2022</p>
                        </li>
                        <li>
                            <h3>Role</h3>
                            <p>Graphic Designer</p>
                            <p>Web Designer</p>
                        </li>
                        <li>
                            <h3>Software</h3>
                            <p>Adobe InDesign</p>
                            <p>Figma</p>
                        </li>
                        <li>
                            <h3>Deliverables</h3>
                            <p>Magazine Cover</p>
                            <p>Banner Ad</p>
                            <p>Landing Page Design</p>
                        </li>
                    </ul>
                </section>
                <section class="project-summary">
                    <h2>Summary</h2>
                    <ul class="grid">
                        <li class="col col-4">
                            <p class="num1">01</p>
                            <h3>Brainstorm</h3>
                            <p>Brainstorm a concept for a magazine with the theme, "Small is Beautiful"</p>
                        </li>
                        <li class="col col-4">
                            <p class="num2">02</p>
                            <h3>Ideate</h3>
                            <p>Produce a creative brief that would detail the brainstorming process for the brand</p>
                        </li>
                        <li class="col col-4">
                            <p class="num3">03</p>
                            <h3>Design</h3>
                            <p>Design a logo, print magazine cover, landing page and banner ad using Adobe InDesign </p>
                        </li>
                    </ul>
                </section>
                <section class="grid">
                    <h2 class="col">Brainstorming the Brand Concept</h2>
                    <p class="col col-10">With the prompt “Small is Beautiful”, I wanted to create a magazine that focuses on how to live “tiny”. Specifically, the tiny house movement and lifestyle. Overall, the main purpose would be to promote this movement by providing advice, tips and guides. It would also encourage people to reflect on their current lifestyle and environmental impact.</p>
                </section>
                <section class="grid">
                    <div class="col col-6">
                        <h2>Logo Design</h2>
                        <p>For the logo, I wanted to create a simple logo that represented a tiny house. To do this, I used lines to create a roof and base to imply the shape of a house. The base would include two wheels to represent how many tiny houses are built to be mobile. The window of the tiny house would include a leaf to represent how tiny living is eco-friendly.</p>
                    </div>
                    <figure class="col col-6">
                        <img src="<?php echo get_public_url("images/tliving-thumbnails.jpg")?>" alt="Thumbanil sketches of the Tiny Living logo">
                        <figcaption>Thumbnails of the Tiny Living Logo</figcaption>
                    </figure>
                </section>
                <section class="grid">
                    <h2 class="col">Colour Palette and Design Concept</h2>
                    <p class="col col-10">The look and feel of the magazine would be a mix of both traditional and modern elements. I did this to reflect how tiny houses are a relatively new concept but still serve as one’s home. The designs themselves would have a modern look as I chose to only use sans serif fonts. To contrast, an Analogous colour scheme of orange, green and yellow is used to give a warm and welcoming feeling as these are naturalistic colours. </p>
                </section>
                <section class="grid align-items-center">
                    <figure class="col col-6">
                        <img src="<?php echo get_public_url("images/tliving-mag-cover.png")?>" class="box-shadow" alt="Final Version of the Tiny Living Cover">
                        <figcaption>The Tiny Living Magazine Cover</figcaption>
                    </figure>
                    <div class="col col-6">
                        <h2>Magazine Cover Design</h2>
                        <p>To gather ideas for the magazine cover, I looked to home interior design and architecture magazine covers for inspiration, such as Architectural Digest and Dezeen. In my thumbnails, I incorporated how they highlighted the magazine title and featured articles. I did this by making the text larger so there was a clear hierarchy. The final design was then created in Adobe Indesign.</p>
                    </div>
                </section>
                <section class="grid align-items-center">
                    <div class="col col-6">
                        <h2>Banner Ad Design</h2>
                        <p>For the banner design, I decided to go with a square banner as this type of ad would be commonly seen on the aside section of websites. I wanted to grab people’s attention by making the “Tiny Living Magazine” large and in a bright orange that contrasts with the photo used. There is also a clear CTA to go to the website if consumers are interested in subscribing.</p>
                    </div>
                    <figure class="col col-6">
                        <img src="<?php echo get_public_url("images/tliving-ad.jpg")?>" class="box-shadow" alt="Banner ad for Tiny Living where a woman looks out the window of her tiny house towards a snowy forest">
                        <figcaption>Banner Ad for Tiny Living</figcaption>
                    </figure>
                </section>
                <section class="grid align-items-center">
                    <figure class="col col-6">
                        <img src="<?php echo get_public_url('images/tliving-og-landing.jpg')?>" class="box-shadow" alt="Original Landing Page design for Tiny Living">
                        <figcaption>The original landing page</figcaption>
                    </figure>
                    <div class="col col-6">
                        <h2>Landing Page Design</h2>
                        <p>For this project, we were required to only promote the magazine on the landing page mockup. I decided to redesign the page and that it would promote the magazine along with advertising tiny home building services. I created this mockup in Figma as I wanted to use Figma’s component creation capabilities. For this design, I reserved using the same bright orange for the CTAs as this would help grab users’ attention. </p>
                    </div>
                    <figure class="col">
                        <img src="<?php echo get_public_url('images/tliving-new-landing.jpg')?>" class="box-shadow" alt="Screenshots of the new Tiny Living Landing page">
                        <figcaption>The updated landing page design</figcaption>
                    </figure>
                </section>
                <a href="#" class="btn">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
    </body>
</html>