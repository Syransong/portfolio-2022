<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "Design Work - Developer | Graphic Designer | Karina Song";
        $meta_description = "Explore the design work of Karina Song, which includes user experience, user interface, logo, web, packaging and print design.";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <div>
            <?php include(get_project_path('public/partials/global/header.php')); ?> 
            <main class="page-content">
                <section class="filter m-top p-top">
                        <h1>Design Work</h1>
                        <ul class="d-flex">
                            <li><a class="selected" href="#">All Projects</a></li>
                            <li><a href="#">Logo</a></li>
                            <li><a href="#">Brand Identity</a></li>
                            <li><a href="#">Packaging</a></li>
                            <li><a href="#">Web</a></li>
                            <li><a href="#">Print</a></li>
                        </ul>
                </section>
                <section class="project-list d-flex">
                    <?php foreach($design_projects as $project): ?>
                        <?php include(get_project_path('public/partials/projects/large-card.php')); ?>
                    <?php endforeach; ?>
                    <a href="#" class="btn">View More</a>
                </section>
            </main>
            <?php require(get_project_path('public/partials/global/footer.php')); ?>
        </div>
    </body>
</html>