<?php 
    $rapidish = new Project([
        'name' => 'Rapidish',
        'square_img_url' => 'rapidish-square-tn.jpg',
        'large_img_url' => 'rapidish-large-tn.jpg',
        'alt' => 'A screenshot preview of the Rapidish landing page',
        'description' => 'Rapidish is a fictional meal delivery company. To demonstrate skills in mobile-first and responsive design, a landing page was created.',
        'tags' => ['Front-end'],
        'project_url' => 'rapidish.php'
    ]);

    $ac_api = new Project([
        'name' => 'Animal Crossing API Project',
        'square_img_url' => 'ac-api-square-tn.jpg',
        'large_img_url' => 'ac-api-large-tn.jpg',
        'alt' => 'A screenshot preview of the Animal Crossing API Call app',
        'description' => 'This page makes API calls to the Nookpedia API to show some information about villagers from the Animal Crossing game. Users can also filter for certain species.',
        'tags' => ['Front-end', 'Back-end'],
        'project_url' => 'ac-api.php'
    ]);

    $dev_projects = [
        $rapidish,
        $ac_api
    ];

?>