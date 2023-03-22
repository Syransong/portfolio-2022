<a class="large-card-wrapper" href="<?php echo get_public_url('projects/') . $project->project_url; ?>">    
    <div class="large-card d-flex">
        <img class="lazy" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/') . $project->large_img_url; ?>" alt="<?php echo $project->alt ?>">
        <div class="large-card-info">
            <ul class="d-flex">
                <?php 
                    foreach ($project->tags as $tag) {
                        echo '<li>' . $tag . '</li>';
                    }
                ?> 
            </ul>
            <h1><?php echo h($project->name); ?></h1>
            <p><?php echo h($project->description); ?></p>
            <span class="proj-link">View Project &rarr;</span>
        </div>
    </div>
</a>