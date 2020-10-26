<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="Uzduotis11.css"> -->
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <?php
    // logout logic
    if (isset($_GET['action']) and $_GET['action'] == 'logout') {
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
        print('Logged out!');
    }
    ?>

    <!-- <h2 class="login">Log In</h2> -->
    <div>
        <?php
        session_start();
        $msg = '';
        if (
            isset($_POST['login'])
            && !empty($_POST['username'])
            && !empty($_POST['password'])
        ) {
            if (
                $_POST['username'] == 'admin' &&
                $_POST['password'] == 'admin'
            ) {
                $_SESSION['logged_in'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'admin';
                header('location: main.php');
            } else {
                $msg = 'Wrong username or password';
            }
        }
        ?>
    </div>
    <!-- <a href=""></a> -->
    <div class="login">
        <form id="login" action="./" method="post">
            <h4><?php echo $msg; ?></h4>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="ale">
                            <div class="logini">
                                Login
                            </div>
                            <div class="sign">
                                Not signed up?
                                <a href="">Sign up here.</a>
                            </div>
                            <div class="email">
                                <input type="text" name="username" placeholder="User Name (try: admin)" required autofocus>
                            </div>
                            <div class="pass">
                                <input type="password" name="password" placeholder="Password (try: admin)" required>
                            </div>
                            <div class="log_fog">
                                <button class="btn_log" type="submit" name="login" >Login</button>
                                | <a class="forgot" href="">Forgotten Password?</a>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- <input type="text" name="username" placeholder="admin" required autofocus></br>
            <input type="password" name="password" placeholder="admin" required>
            <br>
            <button type="submit" name="login">Login</button> -->

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>