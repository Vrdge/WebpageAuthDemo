<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="cssphp/php.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4">
        <?php
        if ($_COOKIE['user'] == ''):
            ?>
            <h1>form reg</h1>
            <div class="row">
                <div class="col">
                    <form action="validation.form/check.php" method="post"><br>
                        <input type="text" class="form-control" name="login" id="login" placeholder="login"><br>
                        <input type="text" class="form-control" name="name" id="name" placeholder=" name"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="password"><br>
                        <button class="btn btn-success" type="submit">login</button>
                    </form>
                </div>
                <div class="col">
                    <h1>saudj</h1>
                    <form action="validation.form/auth.php" method="post"><br>
                        <input type="text" class="form-control" name="login" id="login" placeholder="login"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="password"><br>
                        <button class="btn btn-success" type="submit">sign in</button>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <? header("Location: /");?>
        <?php endif ?>

    </div>
</body>

</html>