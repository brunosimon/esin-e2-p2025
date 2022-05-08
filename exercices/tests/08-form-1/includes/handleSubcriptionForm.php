<?php

// Base values
$login = '';
$password = '';
$age = '';
$gender = '';

// Messages
$errorMessages = [];
$successMessages = [];

if(!empty($_POST))
{
    // Debug
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // Sanatize data
    $login = trim(strip_tags($_POST['login']));
    $password = $_POST['password'];
    $age = (int)$_POST['age'];
    $gender = empty($_POST['gender']) ? '' : $_POST['gender'];

    // Errors
    if(empty($login))
    {
        $errorMessages[] = 'Missing login';
    }
    else if(!preg_match('/^[a-z0-9]+$/', $login))
    {
        $errorMessages[] = 'Login must be lowercase and numbers';
    }

    if(empty($password))
    {
        $errorMessages[] = 'Missing password';
    }
    else if(strlen($password) < 8)
    {
        $errorMessages[] = 'Password too short';
    }
    else if(!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[^a-zA-Z0-9]/', $password))
    {
        $errorMessages[] = 'Password must contain lowercase, uppercase, number and special characters';
    }

    if($age < 1 || $age > 150)
    {
        $errorMessages[] = 'Wrong age';
    }

    if(!array_key_exists($gender, $genders))
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