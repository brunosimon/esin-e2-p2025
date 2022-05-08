<?php

    require_once './includes/config.php';
    require_once './includes/handleForm.php';

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
    <form action="#" method="post">

        <!-- Messages -->
        <?php if(!empty($errorMessages)): ?>
            <div class="errors">
                <?php foreach($errorMessages as $message): ?>
                    <p><?php echo $message ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php if(!empty($successMessages)): ?>
            <div class="success">
                <?php foreach($successMessages as $message): ?>
                    <p><?php echo $message ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <!-- Login -->
        <fieldset>
            <label for="login">Login</label>
            <br>
            <input type="text" id="login" name="login" value="<?= $login ?>">
        </fieldset>

        <!-- Password -->
        <fieldset>
            <label for="password">Password</label>
            <br>
            <input type="password" id="password" name="password" value="<?= $password ?>">
        </fieldset>

        <!-- Age -->
        <fieldset>
            <label for="age">Age</label>
            <br>
            <input type="number" id="age" name="age" value="<?= $age ?>">
        </fieldset>

        <!-- Gender -->
        <fieldset>
            <label>Gender</label>
            <br>

            <?php foreach($genders as $_key => $_gender): ?>
                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="<?= $_key ?>"
                        <?= $gender === $_key ? 'checked' : '' ?>
                    >
                    <?= $_gender ?>
                </label>
            <?php endforeach ?>

        </fieldset>

        <!-- Submit -->
        <fieldset>
            
            <input type="submit">

        </fieldset>

    </form>
</body>
</html>