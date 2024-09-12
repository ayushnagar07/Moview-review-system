<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Riders</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto Slab', serif;
            background: url('assets/img/main.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post" class="login-container">
        
        <div class="logo">
            <img src="assets/img/logo.png" alt="MovieRiders Logo" width="200px" height="200px">
            <h2>Movie Riders</h2>
        </div>

        <div class="login-box">

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <div class="textbox">
                    <input type="text" name="username" placeholder="Username" id="username">
                </div>

                <div class="textbox">
                    <input type="password" name="password" placeholder="Password" id="password">
                </div>

                <button type="submit" class="btn">Log In</button>
        </div>
        <a href="registration.php" class="crtacc">Create an account</a>
    </form>
</body>
</html>
