<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "Animal Crossing API Project - Web Development Project by Karina Song";
        $meta_description = "This page makes API calls to the Nookpedia API to show some information about villagers from the Animal Crossing game. Users can also filter for certain species.";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <div class="project-page">
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="ac-api">
                <section class="project-bnr m-top p-top grid align-items-center">
                    <div class="proj-bnr-info col-12 col-6-lg">
                        <ul class="d-flex">
                            <li>Front-end</li>
                            <li>Back-End</li>
                        </ul>
                        <h1>Animal Crossing API Project</h1>
                        <p>This project demonstrates the ability to connect to a 3rd-party API and to request data to display on a webpage. A connection was made to the Nookpedia API and the page displays character data and filtering functionality. </p>
                    </div>
                    <img src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/ac-web-preview.png')?>" class="lazy ac-preview col-12 col-6-lg" alt="Web preview of the Animal Crossing API project">
                </section>
                <section class="project-info">
                    <h2>Breakdown</h2>
                    <ul class="grid">
                        <li class="col-6 col-3-lg">
                            <h3>Date</h3>
                            <p>January 2023</p>
                        </li>
                        <li class="col-6 col-3-lg">
                            <h3>Role</h3>
                            <p>Full-Stack Developer</p>
                        </li>
                        <li class="col-6 col-3-lg">
                            <h3>Tech Stack</h3>
                            <h4>Languages</h4>
                            <p>HTML, CSS, Javascript</p>
                            <h4>Libraries</h4>
                            <p>jQuery, Ajax</p>
                        </li>
                        <li class="col-6 col-3-lg">
                            <h3>Deliverables</h3>
                            <p>Landing Page Code</p>
                            <p>High-fidelity Mockup</p>
                        </li>
                    </ul>
                </section>
                <section class="project-summary">
                    <h2>Summary</h2>
                    <ul class="grid">
                        <li class="col-12 col-4-lg">
                            <p class="num1">01</p>
                            <h3>Research</h3>
                            <p>Research APIs and read documentation</p>
                        </li>
                        <li class="col-12 col-4-lg">
                            <p class="num2">02</p>
                            <h3>Plan</h3>
                            <p>Plan the page and data to display</p>
                        </li>
                        <li class="col-12 col-4-lg">
                            <p class="num3">03</p>
                            <h3>Code</h3>
                            <p>Create dynamic villager cards and filtering functionality</p>
                        </li>
                    </ul>
                </section>
                <section class="grid align-items-center">
                    <div class="col-12 col-10-lg">
                        <h2>Researching APIs</h2>
                        <p>I first looked for public APIs that I could potentially use for this project. I came across the Nookpedia Animal Crossing API. Animal Crossing is a life simulation video game where a player can interact with many animal villagers. I selected this API for this project as they provide multiple endpoints and options to filter, such as by a villager’s personality or species.</p>
                    </div>
                </section>
                <section class="grid">
                    <div class="col-12 col-6-lg">
                        <h2>Planning the Page</h2>
                        <p>Using Postman, I examined the data object retrieved from a GET request to their villagers endpoint. The object contained information about each villager, such as their species, personality, birthday and catchphrase. I decided to display this information in a card format for each villager. On the page, the user will be able to see 6 villager cards. There is a "Load More" button at the bottom of the page if the user wishes to see more villagers. Users would also have the option to filter the villagers by their species.</p>
                    </div>
                    <figure class="col-12 col-6-lg">
                        <a class="glightbox" href="<?php echo get_public_url('images/ac-json-obj.png')?>" data-glightbox="title:Screenshot of the JSON Data of the Animal Crossing villager, Kyle, using Postman">
                            <img class="lazy box-shadow" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/ac-json-obj.png')?>" alt="Screenshot of the JSON Data of the Animal Crossing villager, Kyle, using Postman">
                        </a>
                        <figcaption>JSON Data Object Retrieved Using Postman</figcaption>
                    </figure>
                </section>
                <section class="grid">
                    <div class="col-12 col-10-lg">
                        <h2>Coding</h2>
                        <p>Features of this page include:</p>
                        <ul class="bul-list">
                            <li>Dynamically created cards that display information about Animal Crossing villagers</li>
                            <li>Filter villagers by species</li>
                            <li>A spinner displays while the API request is processing </li>
                        </ul>
                        <p>Using fetch, the specific endpoint used to retrieve all the villager data is as follows:<br><code>https://api.nookipedia.com/villagers?api_key=[API_KEY] </code></p>
                        <p>This endpoint retrieves all 488 villagers data in an array and this API does not provide the option to limit the number of villagers retrieved. As a result, to only show 6 entries at a time, the villager array was sliced with the slice() method. If the “Load More” button is clicked, it would increase the end argument by 6 (ex. slice(0, 12)). </p>
                        <p>For the filter function, the endpoint is:<br><code>https://api.nookipedia.com/villagers?api_key=[API_KEY]&species=[SPECIES]</code></p>
                        <p>I added an event listener for the filter buttons. Upon click, it would retrieve and store the text content of that button in a variable. Then this variable would be used as an additional query parameter to the endpoint.</p>
                        <!-- <iframe class="ac-replit" src="https://ac-api-call.syransong.repl.co?embed=true" width="300" height="400"></iframe> -->
                    </div>
                </section>
                <section class="grid">
                    <div class="col-12 col-10-lg">
                        <h2>Conclusion & Next Steps</h2>
                        <p>After doing this project, I feel less intimidated by back-end development topics like making and handling API requests. When I first learned about making asynchronous API requests, I had a hard time wrapping my head around chaining promises and handling the JSON response object. This simple project served as a good refresher and I’m eager to revisit and learn more topics. For instance, I can rework this project to use Axios to make the HTTP request so I can better understand the differences between Axios and fetch.</p>
                        <p>You can take a closer look at the code on <a class="ex-link" href="https://github.com/Syransong/ac-api-call" title="Got to project on Github" target="_blank">Github</a> or <a class="ex-link" href="https://replit.com/@Syransong/ac-api-call?v=1" title="Go to Animal Crossing Project on Replit" target="_blank">Replit</a>. </p>
                    </div>
                </section>
                <a href="<?php echo get_public_url("pages/dev.php"); ?>" class="btn more-proj">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    </body>
</html>