<?php 
    $meta_title = $meta_title ?? 'Full-stack Developer | Graphic Designer | Karina Song';
    $meta_description = $meta_description ?? "Portfolio site showcasing the coding and design work of Karina Song, a designer and developer based in Vancouver, Canada";
    $meta_image = $meta_image ?? get_public_url('/images/seo-image.jpg');

    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $meta_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_public_url('/images/ksong-logo.svg'); ?>">
    <meta name="author" content="Karina Song">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="portfolio, vancouver, bc, canada, web development, UX design, UI design, graphic design, javascript, developer, front-end, back-end, full-stack"/>
    <!-- Facebook/LinkedIn OG Tags -->
    <meta property="og:url" content="<?php echo $meta_url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $meta_title; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:image" content="<?php echo $meta_image; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="<?php echo get_public_url('/styles/css/main.min.css'); ?>">
</head>

