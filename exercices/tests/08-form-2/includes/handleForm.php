<?php

// Base values
$login = '';
$password = '';
$age = '';
$gender = '';

$errorMessages = [];
$successMessages = [];

if(!empty($_POST))
{
    // Debug
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // Sanatize data
    $login = trim(htmlentities($_POST['login']));
    $password = $_POST['password'];
    $age = (int)$_POST['age'];
    $gender = $_POST['gender'] ?? '';

    // Errors
    if(empty($login))
    {
        $errorMessages[] = 'Missing login';
    }
    else if(!preg_match('/^[a-z0-9]+$/', $login))
    {
        $errorMessages[] = 'Login should only contain lowercase and numbers';
    }

    if(empty($password))
    {
        $errorMessages[] = 'Missing password';
    }
    else if(strlen($password) < 8)
    {
        $errorMessages[] = 'Password too small';
    }
    else if(!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[^a-zA-Z0-9]/', $password))
    {
        $errorMessages[] = 'Password must contain a lowercase, an uppercarse, a number and a special character';
    }

    if($age < 1 || $age > 150)
    {
        $errorMessages[] = 'Wrong age';
    }

    if(empty($gender))
    {
        $errorMessages[] = 'Missing gender';
    }
    else if(!array_key_exists($gender, $genders))
    {
        $errorMessages[] = 'Wrong gender';
    }

    // Success
    if(empty($errorMessages))
    {
        $successMessages[] = 'You are now registered';

        // Reset values
        $login = '';
        $password = '';
        $age = '';
        $gender = '';
    }
}