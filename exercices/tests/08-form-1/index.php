<?php

    include './includes/config.php';
    include './includes/handleSubcriptionForm.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08 - Form</title>
    <style>
        .errors p
        {
            padding: 10px 15px;
            margin-bottom: 10px;
            background: pink;
        }
        .success p
        {
            padding: 10px 15px;
            margin-bottom: 10px;
            background: greenyellow;
        }
    </style>
</head>
<body>

    <form action="#" method="post">

        <!-- Messages -->
        <?php if(!empty($errorMessages)): ?>
            <div class="errors">
                <?php foreach($errorMessages as $_message): ?>
                    <p><?= $_message ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php if(!empty($successMessages)): ?>
            <div class="success">
                <?php foreach($successMessages as $_message): ?>
                    <p><?= $_message ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        
        <!-- Login -->
        <fieldset>
            <label for="login">Login</label>
            <br>
            <input type="text" name="login" id="login" value="<?= $login ?>">
        </fieldset>
        
        <!-- Password -->
        <fieldset>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" value="<?= $password ?>">
        </fieldset>

        <!-- Age -->
        <fieldset>
            <label for="age">Age</label>
            <br>
            <input type="number" name="age" id="age" value="<?= $age ?>">
        </fieldset>

        <!-- Gender -->
        <fieldset>
            <?php foreach($genders as $genderKey => $genderValue): ?>
                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="<?= $genderKey ?>"
                        <?= $gender === $genderKey ? 'checked' : '' ?>
                    >
                    <?= $genderValue ?>
                </label>
            <?php endforeach; ?>
        </fieldset>

        <!-- Submit -->
        <fieldset>
            <input type="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>