<?php 
    $linmon = new Project([
        'name' => 'Linmon',
        'square_img_url' => 'linmon-square-tn.jpg',
        'large_img_url' => 'linmon-large-tn.jpg',
        'alt' => 'A mockup up of a glass bottle and a juicebox of Linmon Lemon tea',
        'description' => 'Linmon is a fictional beverage company that produces lemon-based tea drinks. To illustrate a strong brand identity, a logo, product packaging and posters were created.',
        'tags' => ['Packaging', 'Logo', 'Brand Identity'],
        'project_url' => 'linmon.php'
    ]);

    $ematcha = new Project([
        'name' => 'Emerald Matcha',
        'square_img_url' => 'ematcha-square-tn.jpg',
        'large_img_url' => 'ematcha-large-tn.jpg',
        'alt' => 'Mockup of the Emerald Matcha stationery set',
        'description' => 'Emerald Matcha is a fictional matcha powder company. A consistent brand identity was presented by producing a logo, product packaging, and stationery set.',
        'tags' => ['Print', 'Packaging', 'Logo', 'Brand Identity'],
        'project_url' => 'ematcha.php'
    ]);

    $tliving = new Project([
        'name' => 'Tiny Living',
        'square_img_url' => 'tliving-square-tn.jpg',
        'large_img_url' => 'tliving-large-tn.jpg',
        'alt' => 'Preview of Tiny Living\'s landing page',
        'description' => 'A fictional tiny house building company that also has a print magazine. A logo, magazine cover, landing page and banner ad were created.',
        'tags' => ['Print', 'Web', 'Logo', 'Brand Identity'],
        'project_url' => 'tliving.php'
    ]);

    $design_projects = [
        $linmon,
        $ematcha,
        $tliving
    ]
?>