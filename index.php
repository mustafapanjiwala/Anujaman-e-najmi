<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Anjuman-e-najmi</title>
</head>

<body>

    <div class="logo">
        <img src="img/logo.png" alt="">
        <div class="flex">
            <h1>Anjuman-e-najmi</h1>
            <h5 class="heading">Hakimi Mohalla Ujjain</h5>
        </div>
    </div>
    <div class="hero">

        <img src="img/jali.png" alt="">
        <div class="loginbox">
            <h1>login for majlis relay</h1>
            <?php
            if (isset($_GET['error'])) { ?>
            <p class='error'><?php echo $_GET['error']; ?>
                <?php }
          ?>
            <form action="login.php" method="POST">


                <input type="text" placeholder="Enter ITS" name="its">

                <input type="password" placeholder="Enter Password" name="password">
                <br><br>
                <input type="submit" value="Login" name="submit">
                <br><br>
            </form>
        </div>
    </div>

    <div class="footer">
        <footer>
            <img src="img/Footer%20panel.png" alt="">
            <p>
                © 2021 Anjuman-E-Najmi - All rights reserved.
            </p>
        </footer>
    </div>







    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</body>

</html>