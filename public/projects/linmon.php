<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_project_path('public/partials/global/head.php')); ?>
    <body>
        <div>
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="linmon">
                <section class="project-bnr m-top grid">
                    <div class="proj-bnr-info">
                        <ul class="d-flex">
                            <li>Packaging |</li>
                            <li>Logo |</li>
                            <li>Brand Identity</li>
                        </ul>
                        <h1>Linmon</h1>
                        <p>Linmon is a fictional beverage company that sells lemon-based tea drinks.</p>
                        <p>The objective of this project was to design a logo and product packaging that have consistent branding. These assets would then would be used to create posters to advertise the company and drink.</p>
                    </div>
                    <img src="<?php echo get_public_url("/images/linmon_juicebox.png")?>" alt="3D render of lemon tea juice box" class="juicebox">
                </section>
                <section class="project-info">
                    <ul class="d-flex">
                        <li>
                            <h3>Date</h3>
                            <p>September 2022</p>
                        </li>
                        <li>
                            <h3>Role</h3>
                            <p>Graphic Designer</p>
                        </li>
                        <li>
                            <h3>Software</h3>
                            <p>Adobe Illustrator</p>
                            <p>Adobe Dimension</p>
                        </li>
                        <li>
                            <h3>Deliverables</h3>
                            <p>Ad Poster (using Illustrator)</p>
                            <p>Ad Poster (using Dimension)</p>
                        </li>
                    </ul>
                </section>
                <section class="project-summary">
                    <h2>Summary</h2>
                    <ul class="grid">
                        <li class="col col-4">
                            <p class="num1">01</p>
                            <h3>Brainstorm</h3>
                            <p>Brainstorm a beverage company and design  a logo</p>
                        </li>
                        <li class="col col-4">
                            <p class="num2">02</p>
                            <h3>Asset Creation</h3>
                            <p>Create product packaging and a 3D render of two different beverage containers</p>
                        </li>
                        <li class="col col-4">
                            <p class="num3">03</p>
                            <h3>Design</h3>
                            <p>Create posters that advertise the drink using Illustrator and Dimension</p>
                        </li>
                    </ul>
                </section>
                <section class="grid">
                    <h2 class="col">Brainstorming the Brand</h2>
                    <p class="col col-10">When we were first introduced to this project, I immediately knew that I wanted to do a lemon-based drink. I research well-known brands that produce lemon-based drinks, such as Nestea, Vitasoy and C.C. Lemon. The brand name would be called "Linmon", which is the combination of the Chinese word 林, which means forest, and the word, "lemon". </p>
                    <p>I decided that my fictional brand would promote the health benefits of lemons and emphasize their user of simple, high-quality and unique ingredients. As a result, the target audience would be young people aged 20-35 years old who are health-conscious and enjoy tea.</p>
                </section>
                <section class="grid">
                    <h2>Colour Palette and Logo Concept</h2>
                    <p>With the brand identity solidified, I had a clear idea of what I wanted to convey through the logo and colour palette. The main colours are yellow and green, which convey a healthy, fresh and bright feeling. </p>
                    <p>For the logo, I sketches an array of thumbnails to brainstorm Ideas. I chose to go with a tree where the leaves of the tree create the shape of a lemon. I also incorporated the Chinese word 木, which means wood, as the shap of the trunk and branches.</p>
                </section>
                <section>
                    <h2>Packaging Design and 3D Render</h2>
                    <p>I decided to go with a juicebox container and a glass container for Linmon's beverages. I was able to make these 3D shapes using Adobe Illustrator's 3D tools such as extrude and revolve. After creating the bottle shapes, I created the packaging designs also in Illustrator.</p>
                </section>
                <section>
                    <h2>Final Poster using Illustrator</h2>
                    <p>For the poster, the specifications were to depict a scene in which the drink would be sold or experienced and include a perspective grid. I decided to show that by drinking Linmon lemon tea, you would be escaping the city and returning to nature. I did this by creating a faraway cityscape in the background. The drinks were placed in the center of the poster on a welcoming gingham tablecloth and surrounded by trees.</p>
                    <img src="" alt="">
                </section>
                <section>
                    <h2>Poster using Adobe Dimension</h2>
                    <p>The same packaging assets were used to create a more realistic marketing poster using Adobe Dimension. This poster would advertise that the drinks could be enjoyed both hot or cold.</p>
                </section>
                <a href="<?php echo get_public_url("pages/design.php"); ?>" class="btn more-proj">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
    </body>
</html>