<?php 
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php include(get_project_path('public/partials/global/head.php'))?>
    <body>
        <div>
            <?php include(get_project_path('public/partials/global/header.php')); ?> 
            <main class="page-content">
                <section class="design-filter m-top">
                        <h1>Development Work</h1>
                        <ul class="d-flex">
                            <li><a class="selected" href="#">All Projects</a></li>
                            <li><a href="#">Front-end</a></li>
                            <li><a href="#">Back-end</a></li>
                            <li><a href="#">Full-stack</a></li>
                        </ul>
                </section>
                <section class="project-list">
                    <?php foreach($dev_projects as $project): ?>
                        <?php include(get_project_path('public/partials/projects/large-card.php')); ?>
                    <?php endforeach; ?>
                    <a href="#" class="btn">View More</a>
                </section>
            </main>
            <?php require(get_project_path('public/partials/global/footer.php')); ?>
        </div>
    </body>
</html>