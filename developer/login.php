<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../global/css/global.css">
    <link rel="stylesheet" href="../global/css/login.css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body class="login_body">
    <?php
    require_once("../global/api/conn.php");
    if (isset($_REQUEST["submit"])) {
        $name = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        $sanitized_name = mysqli_real_escape_string($conn, $name);
        $sanitized_password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT * FROM admin WHERE name='$sanitized_name' AND password='$sanitized_password'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $num = mysqli_fetch_array($result);
        if ($num > 0) {
            header("location: pages/dashboard.php");
        } else {
            ?>
            <!-- alert -->
            <div class="mb-4 alert alert-danger d-flex align-items-center gap-2 alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-circle-exclamation"></i>
                <div>Username and Password do not match</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
    }
    ?>

    <form action="" method="post" class="login_form">
        <div class="login_title">
            <h2>STEAMX</h2>
        </div>

        <div class="form_group">
            <label for="username">Username</label>
            <input class="form_input" type="text" name="username" id="username" autocomplete="username" autofocus>
            <span class="underline-animation"></span>
        </div>
        <div class="form_group">
            <label for="password">Password</label>
            <input class="form_input" type="password" name="password" id="password" autocomplete="current-password">
            <span class="underline-animation"></span>
        </div>
        <div class="form_group">
            <button class="login_btn btn" name="submit" type="submit">SIGN IN <i
                    class="fa-solid fa-arrow-right"></i></button>
        </div>
        <div class="form_group account">
            <span>Don't have an account? <a href="register.html">Sign up</a></span>
        </div>
    </form>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>