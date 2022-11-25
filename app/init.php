<?php 
    // Constants 
    define('WWW_ROOT', 'http://localhost');
    // define('WWW_ROOT', 'https://karinasong.com');
    
    // The PROJECT_ROOT constant variable's value contains the function, dirname() which retrieves the path of the parent directory of "__FILE__" which is the name of the current file, "init.php". 
    define('PROJECT_ROOT', dirname(__DIR__, 1));

    //Functions
    // require_once(PROJECT_ROOT . '/functions.php');
    require('functions.php');

    // Classes 
    // By bringing in the functions.php file above, we have access to the custom function "get_project_path()". As a result, we're able to get the file path of the Pokemon Class file. 
    // require_once(get_project_path('/Classes/Project.php'));
    require(get_project_path('/app/Classes/Project.php'));
    require(get_project_path('/app/data/design-projects.php'));
    require(get_project_path('/app/data/dev-projects.php'));
?>