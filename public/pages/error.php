<?php 
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "Page not Found - Developer | Graphic Designer | Karina Song";
        $meta_description = "Page not Found";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <?php include(get_project_path('public/partials/global/header.php')); ?> 
        <main class="page-content">
            <section class="m-top p-top d-flex error-page">
                <img src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('/images/error-graphic.svg'); ?>" alt="3 symbols" class="lazy error-image">
                <h1>Oops!</h1>
                <p>The page you were looking for isn't here.</p>
                <a class="btn" href="<?php echo get_public_url('/index.php'); ?>" title="Go Back Home">Go Back Home</a>
            </section>
        </main>
        <?php require(get_project_path('public/partials/global/footer.php')); ?>
    </body>
</html>