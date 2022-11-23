<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_project_path('public/partials/global/head.php')); ?>
    <body>
        <div>
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="ematcha">
                <section class="project-bnr m-top grid align-items-center">
                    <div class="proj-bnr-info">
                        <ul class="d-flex">
                            <li>Print</li>
                            <li>Packaging</li>
                            <li>Logo</li>
                            <li>Brand Identity</li>
                        </ul>
                        <h1>Emerald Matcha</h1>
                        <p>Emerald Matcha is a fictional matcha company that produces high-end matcha products.</p>
                        <p>The goal of this project was to present a consistent brand identity through the creation of a logo, product packaging and a stationery set.</p>
                    </div>
                    <img src="<?php echo get_public_url("/images/ematcha_logo.jpg") ?>" alt="Emerald Matcha Logo" class="ematcha-logo">
                </section>
                <section class="project-info">
                    <ul class="d-flex">
                        <li>
                            <h3>Date</h3>
                            <p>May 2022</p>
                        </li>
                        <li>
                            <h3>Role</h3>
                            <p>Graphic Designer</p>
                        </li>
                        <li>
                            <h3>Software</h3>
                            <p>Adobe Photoshop</p>
                            <p>Adobe InDesign</p>
                            <p>Adobe After Effects</p>
                            <p>Adobe Dimension</p>
                        </li>
                        <li>
                            <h3>Deliverables</h3>
                            <p>Moodboard</p>
                            <p>Thumbnails</p>
                            <p>Roughs</p>
                            <p>Ad Poster with 3D Render</p>
                            <p>Stationery Mockup</p>
                        </li>
                    </ul>
                </section>
                <section class="project-summary">
                    <h2>Summary</h2>
                    <ul class="grid">
                        <li class="col col-4">
                            <p class="num1">01</p>
                            <h3>Client Brief</h3>
                            <p>Exchange a brand and product idea with a fellow student</p>
                        </li>
                        <li class="col col-4">
                            <p class="num2">02</p>
                            <h3>Brainstorm</h3>
                            <p>Brainstorm & create the company logo and colour palette</p>
                        </li>
                        <li class="col col-4">
                            <p class="num3">03</p>
                            <h3>Design</h3>
                            <p>Create product packaging, 3D render, poster and stationery set</p>
                        </li>
                    </ul>
                </section>
                <section class="grid">
                    <div class="col col-10">
                        <h2 class="">Client Brief </h2>
                        <p class="">To simulate a real-life client scenario, we randomly received a fellow student's idea for a company. They would serve as our on-going client where we could receive feedback and suggestions. I received the following guidelines:</p>
                        <ul class="bul-list">
                            <li>Company Name: Emerald Matcha</li>
                            <li>Product: Matcha Powder</li>
                            <li>Main Colour: #00A651</li>
                            <li>Customer Demographic: 25-45 year olds</li>
                            <li>Competitors: Jade Leaf Matcha, Grace & Green Matcha</li>
                        </ul>
                    </div>
                </section>
                <section class="grid align-items-center">
                    <figure class="col col-4">
                        <img src="<?php echo get_public_url("images/ematcha-logo-sketches.jpg") ?>" alt="Thumbnails of the Emerald Matcha logo">
                        <figcaption>Thumbanils of the Emerald Matcha logo</figcaption>
                    </figure>
                    <div class="col col-6">
                        <h2>Logo Design</h2>
                        <p >For the logo design, I wanted to draw inspiration from the company name by incorporating a matcha leaf and the shape of a gemstone. I also wanted to create a simple and clean logo to appeal to the younger customer demographic. After consulting with my client, I decided the final logo would be a matcha leaf in-laid in a tear-drop shaped gem.</p>
                    </div>
                </section>
                <section class="grid align-items-center">
                    <div class="col col-6">
                        <h2>Colour Palette</h2>
                        <p>To go with the deep green colour given by the client, I decided to go with a Split Complementary colour scheme of green, pink and yellow. This colour scheme gives a retro trendy vibe, which encapsulates the idea of targeting a younger audience with a traditional matcha product. Pink and yellow would serve as visually-striking colours in comparison with the primary green colour.</p>
                    </div>
                    <div class="colour-palette d-flex">
                        <span class="dot emerald"></span>
                        <span class="dot green"></span>
                        <span class="dot pink"></span>
                        <span class="dot yellow"></span>
                    </div>
                </section>
                <section class="grid align-items-center">
                    <div class="col col-5">
                        <h2>Product Dimensions and Design</h2>
                        <p>In order to determine the dimensions of the product, I researched how different high-end matcha brands packaged their product. One recurring format was packaging their matcha powder in tins of 3. After getting input from my client, I decided to go with a box with the following measurements: 10 inches by 4 inches by 4 inches.</p>
                        <p>With the dimensions determined, I created the desings in Adobe Photoshop. I used the deep green, yellow and pink colours to make certain elements pop out in comparison with the rest of the box. For instance, these colours were used to highlight the 3 different blends of matcha in the box.</p>
                    </div>
                    <figure class="col col-7">
                        <img src="<?php echo get_public_url("images/ematcha-pkging.png") ?>" alt="Top, bottom and side packaging design">
                        <figcaption>Packaging design for the top, front and side of the box</figcaption>
                    </figure>
                </section>
                <section class="grid">
                    <div class="col col-10">
                        <h2>3D Render</h2>
                        <p>The assets were then brought into Adobe After Effects to create a realistic 3D render of the product. Two light sources were added to create depth and realism to the render. The image was then brought into Adobe Photoshop to add a complementary tagline.</p>
                    </div>
                    <figure class="col">
                        <img src="<?php echo get_public_url("images/ematcha-3d-render.jpg") ?>" alt="3D render of the Emerald Matcha 3 tin set with the tagline, rich smooth matcha" class="box-shadow">
                        <figcaption>3D render of the Emerald Matcha product</figcaption>
                    </figure>
                </section>
                <section class="grid">
                    <div class="col col-10">
                        <h2>Stationery Brainstorming</h2>
                        <p>For the stationery set, a business card, letterhead and envelope would be created. I wanted to take elements from the packaging and incorporate some elements in the stationery. To generate ideas, a moodboard and 6 thumbnails were made for each stationery item. The thumbnail that most closely matched the theme of the packaging was chosen to create more detailed roughs. </p>
                    </div>
                    <figure class="col">
                        <img src="<?php echo get_public_url("images/ematcha-thumbs.png") ?>" alt="Thumbnail sketches of the Emerald Matcha business card, envelope and letterhead">
                        <figcaption>Thumbanils of the business card, envelop and letterhead</figcaption>
                    </figure>
                </section>
                <section class="grid">
                    <div class="col col-10">
                        <h2>Final Stationery Design</h2>
                        <p>After selecting a design from the roughs generated, the final designs were created using Adobe InDesign. Elements from the product packaging design, such as the repeating pattern of the logo, were used to maintain a consistent theme. The designs were then taken into Adobe Dimension to create a 3D mockup. As a result, this created a strong brand identity for Emerlad Matcha.</p>
                    </div>
                    <figure class="col">
                        <img src="<?php echo get_public_url("images/ematcha-mockup.png") ?>" alt="Mockup of Emerald Matcha Stationery set">
                        <figcaption>Mockup of the Emerald Matcha stationery set</figcaption>
                    </figure>
                </section>
                <a href="<?php echo get_public_url("pages/design.php"); ?>" class="btn more-proj">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
    </body>
</html>