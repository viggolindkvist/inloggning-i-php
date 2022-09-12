<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="form.php"><-Return</a>

    <?php
    $user_name = 'Viggo';
    $user_password = "1996";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user_name == $user_name && $password == $user_password) {
        echo "Success, you're now logged in to your account";
    } else {
        echo "Something went wrong.";
    }
    ?>
</body>

</html>