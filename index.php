<?php
session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'main';
    }
}

if (!isset($_SESSION['email'])) {
    $_SESSION['email'] = '';
}


switch ($action) {

    case 'main':
        include 'View/main.php';
        break;
    
    case 'profile':
        include 'View/profile.php';
        break; 
    case 'register':
        include 'View/register.php';
        break; 
    
    case 'login':
        include 'View/login.php';
        break; 

    
}
?>