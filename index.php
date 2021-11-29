<?php

require_once 'Model/book.php';
require_once 'Model/database.php';
require_once 'Model/bookDB.php';
require_once 'Model/validRegister.php';

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
    
    case 'validRegister':
        $firstName = filter_input(INPUT_POST,'firstName');
        $lastName = filter_input(INPUT_POST,'lastName');
        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST,'password');
        
        $isValid = validRegister::confirm($firstName, $lastName, $email, $password);
        
        if($isValid){
            $passwords_hashed = password_hash($password, PASSWORD_BCRYPT);
            $_SESSION['email'] = $email;
            try {
                bookDB::addUser($firstName, $lastName, $email, $password_hash);
                header('Location: index.php?action=profile');
            } catch (Exception $ex) {
                $error_message = 'Troubles connecting to the database.';
            }
        }
        break;
    
    case 'login':
        include 'View/login.php';
        break; 

    case 'Logout':
        header('Location: index.php?action=main');
        break;
}
