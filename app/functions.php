<?php 

// User-Defined Functions
// ----------

// linking pages and images 
function get_public_url($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . '/public' . $path;
}

// getting files ex components 
function get_project_path($path = "") {
    if($path[0] != '/') {
        $path = '/' . $path;
    }
    return PROJECT_ROOT . $path;
}


function redirect($path) {
    header('Location: ' . get_public_url($path) );
}

function h($str) {
    return htmlspecialchars($str);
}

function u($string) {
    return urlencode($string);
}


// Prints out human readable data wrapped in <pre> tags, for debugging
function wrap_pre($data) {
    return '<pre>' . print_r($data,true) . '</pre>';
}

// Prints out human readable data, and prevents the script from continuing
function dd($data) {
    echo wrap_pre($data);
    die();
}

// Add Database Connection function here
// ----------

// Returns the result of comparisons 
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

// Connects to the database
function db_connect() {

    $host = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    $db_name =  DB_NAME;

    $db = new mysqli($host, $username, $password, $db_name);

    if($db->connect_errno) {
        echo "Failed to connect to MySQL: " . $db -> connect_error;
        exit();
    }

    return $db;

}