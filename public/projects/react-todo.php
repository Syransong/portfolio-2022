<?php
    require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $meta_title = "React To-do App - Web Development Project by Karina Song";
        $meta_description = "This project is a simple to-do app made with React. Users can create, edit and delete tasks, as well customize the app’s appearance. The purpose of creating this project was to review the React library and its core principles.";
        
        require(get_project_path('public/partials/global/head.php')); 
    ?>
    <body>
        <div class="project-page">
        <?php require(get_project_path('public/partials/global/header.php')); ?>
            <main class="react-todo">
                <section class="project-bnr m-top p-top">
                    <div class="container grid align-items-center">
                        <div class="proj-bnr-info col-12 col-6-lg">
                            <ul class="d-flex">
                                <li>Back-End</li>
                            </ul>
                            <h1>React To-do App</h1>
                            <p>This project is a simple to-do app made with React. Users can create, edit and delete tasks, as well customize the app’s appearance. The purpose of creating this project was to review the React library and its core principles.</p>
                        </div>
                        <img src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/todo-light-mode.png')?>" class="lazy todo-preview col-12 col-6-lg" alt="Web preview of light mode of the To-do app">
                    </div>
                </section>
                <section class="project-info">
                    <div class="container">
                        <h2>Breakdown</h2>
                        <ul class="grid">
                            <li class="col-6 col-3-lg">
                                <h3>Date</h3>
                                <p>February 2023</p>
                            </li>
                            <li class="col-6 col-3-lg">
                                <h3>Role</h3>
                                <p>Back-end Developer</p>
                            </li>
                            <li class="col-6 col-3-lg">
                                <h3>Tech Stack</h3>
                                <h4>Languages</h4>
                                <p>HTML, CSS, JSX</p>
                                <h4>Libraries</h4>
                                <p>React, Vite, Pnpm</p>
                            </li>
                            <li class="col-6 col-3-lg">
                                <h3>Deliverables</h3>
                                <p>Landing Page Code</p>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="project-summary">
                    <div class="container">
                        <h2>Summary</h2>
                        <ul class="grid">
                            <li class="col-12 col-4-lg">
                                <p class="num1">01</p>
                                <h3>Review</h3>
                                <p>Review React and research tutorials</p>
                            </li>
                            <li class="col-12 col-4-lg">
                                <p class="num2">02</p>
                                <h3>Code</h3>
                                <p>Code along with the tutorial</p>
                            </li>
                            <li class="col-12 col-4-lg">
                                <p class="num3">03</p>
                                <h3>Customize</h3>
                                <p>Make some adjustments to styling and add additional features</p>
                            </li>
                        </ul>
                    </div>
                </section>
                <section>
                    <div class="grid container">
                        <div class="col-12 col-10-lg">
                            <h2>Background and Introduction</h2>
                            <p>React is a useful front-end Javascript library. In fact, as per the <a class="ex-link" href="https://survey.stackoverflow.co/2022/#section-most-popular-technologies-web-frameworks-and-technologies" target="_blank" title="View 2022 Developer Survey">2022 Developer Survey</a>, it is the 2nd most popular among developers. What I like about React is the ability to create reusable components, which can be used to quickly create multiple projects. For these reasons, I used this to-do list app as an opportunity to review React’s core concepts, such as creating components, tracking state, using React hooks and passing props. I found an excellent <a class="ex-link" href="https://www.youtube.com/watch?v=7u2Rv4HfCYQ&t=1s" target="_blank" title="View tutorial video 'Modern React CRUD App Project'">tutorial</a> created by <a href="https://www.youtube.com/@CodinginPublic" target="_blank" class="ex-link" title="View Coding in Public's Youtube Channel">Coding in Public</a> that covered all these topics and more. </p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container grid">
                        <h2>Coding</h2>
                        <figure class="col-12">
                            <a class="glightbox" href="<?php echo get_public_url('images/todo-preview.jpg')?>" data-glightbox="title:Desktop mockups of light mode and dark mode of the To-App">
                                <img class="lazy box-shadow" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/todo-preview.jpg')?>" alt="Desktop mockups of light mode and dark mode of the To-App">
                            </a>
                            <figcaption>To-do App: Light Mode and Dark Mode Preview</figcaption>
                        </figure>
                        <div class="col-12 col-10-lg">
                            <p>Features of this page include:</p>
                            <ul class="bul-list">
                                <li>Create, edit and delete tasks</li>
                                <li>A colour picker to customize the app's buttons and other UI elements</li>
                                <li>A dark and light mode toggle</li>
                                <li>Saves settings and tasks to local storage</li>
                                <li>A real-time clock</li>
                            </ul>
                            <p>I coded along with the video tutorial and stopped whenever I wanted to review a topic. For instance, I struggled in the past understanding the purpose of the useEffect hook. This concept was clarified once the tutorial covered the use of this hook when building the Theme Switcher component. This component controls the appearance of the app, based on the user’s choice of light or dark mode, or the colour of theme. The code below shows the useEffect hook controlling the light or dark mode. </p>
                            <img class="lazy todo-code-snippet" src="<?php echo get_public_url('/images/placeholder.svg'); ?>" data-src="<?php echo get_public_url('images/todo-code-snippet.png')?>" alt="Screenshot of the useEffect hook code">
                            <p>This useEffect hook was needed as we need to perform a “side-effect” which is outside of the React project itself. In this case, the DOM has to be directly updated to change the app’s appearance based on the user’s choice of light or dark mode. The “theme” state is passed in as a dependency and will trigger a re-render when the state changes. </p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="grid container">
                        <div class="col-12 col-10-lg">
                            <h2>Conclusion & Next Steps</h2>
                            <p>Overall, I’m glad that I followed this tutorial and reviewed topics that I didn’t fully understand when I was first introduced to them. For instance, I would lose track of passing props through multiple components down to the child component where it's needed. This tutorial helped clarify this concept to me as it clearly explained the relationship between passing down the task prop from the App, to the Task List and finally to the Task Item. As I now understand prop drilling better, the next steps on my React journey would be to review the useContext hook so I can easily share the props across all components.</p>
                            <p>In terms of this project, other features that I could add in the future include:</p>
                            <ul class="bul-list">
                                <li>A tagging feature to categorise tasks</li>
                                <li>A Pomodoro timer with audio notifications</li>
                            </ul>
                            <p>You can take a closer look at the code on <a class="ex-link" href="https://github.com/Syransong/react-todo" title="Got to project on Github" target="_blank">Github</a> or view the <a class="ex-link" href="https://syransong.github.io/react-todo/" title="Go to live project on Github" target="_blank">live project</a>. Also, please checkout Coding in Public's <a class="ex-link" href="https://www.youtube.com/watch?v=7u2Rv4HfCYQ&t=1s" target="_blank" title="View tutorial video 'Modern React CRUD App Project'">tutorial</a> if you're also interested in learning React!</p>
                        </div>
                    </div>
                </section>
                <a href="<?php echo get_public_url("pages/dev.php"); ?>" class="btn more-proj">More Projects</a>
            </main>
            <?php require('../partials/global/footer.php'); ?> 
        </div>
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    </body>
</html>