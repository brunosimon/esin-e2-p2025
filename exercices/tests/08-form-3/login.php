<?php

    require_once './includes/config.php';
    
    if(!empty($_POST))
    {
        $prepare = $pdo->prepare('SELECT * FROM users WHERE login = :login');
        $prepare->execute([
            'login' => $_POST['login'],
        ]);
        $user = $prepare->fetch();

        if(!$user)
        {
            $errorMessages[] = 'User not found';
        }
        else
        {
            $verified = password_verify($_POST['password'], $user->password);

            echo '<pre>';
            var_dump($verified);
            echo '</pre>';

            if(!$verified)
            {
                $errorMessages[] = 'Wrong password';
            }
            else
            {
                $errorMessages[] = 'Good password';

                $_SESSION['user'] = $user;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08 - Form</title>
</head>
<body>

    <h1>Login</h1>

    <form action="#" method="post">

        <!-- Messages -->
        <?php if(!empty($errorMessages)): ?>
            <div class="errors">
                <?php foreach($errorMessages as $message): ?>
                    <p><?= $message ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <!-- Login -->
        <fieldset>
            <label for="login">Login</label>
            <br>
            <input type="text" id="login" name="login">
        </fieldset>

        <!-- Password -->
        <fieldset>
            <label for="password">Password</label>
            <br>
            <input type="password" id="password" name="password">
        </fieldset>

        <!-- Submit -->
        <fieldset>
            
            <input type="submit">

        </fieldset>

    </form>

</body>
</html>