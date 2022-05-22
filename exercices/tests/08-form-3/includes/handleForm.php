<?php

$login = '';
$password = '';
$age = 0;
$gender = '';

$errorMessages = [];

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

    /**
     * Errors
     */
    // Login
    if(empty($login))
    {
        $errorMessages[] = 'Missing login';
    }
    else if(!preg_match('/^[a-z0-9]+$/', $login))
    {
        $errorMessages[] = 'Login should contain lowercase and numbers';
    }
    else if(strlen($login) > 20)
    {
        $errorMessages[] = 'Login should be 20 chars long max';
    }

    // Password
    if(empty($password))
    {
        $errorMessages[] = 'Missing password';
    }
    else if(strlen($password) < 8)
    {
        $errorMessages[] = 'Password should be at least 8 chars long';
    }
    else if(
        !preg_match('/[a-z]/', $password) ||
        !preg_match('/[A-Z]/', $password) ||
        !preg_match('/[0-9]/', $password) ||
        !preg_match('/[^a-zA-Z0-9]/', $password)
    )
    {
        $errorMessages[] = 'Password should contain lowercase, uppercase, numbers and symbols';
    }

    // Age
    if($age < 0 || $age > 150)
    {
        $errorMessages[] = 'Age should be between 0 and 150';
    }

    // Gender
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
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Insert into DB
        $prepare = $pdo->prepare('
            INSERT INTO
                users (login, password, age, gender)
            VALUES
                (:login, :password, :age, :gender)
        ');
        $prepare->execute([
            'login' => $login,
            'password' => $password,
            'age' => $age,
            'gender' => $gender,
        ]);

        // Reset values
        $login = '';
        $password = '';
        $age = 0;
        $gender = '';
    }
}
