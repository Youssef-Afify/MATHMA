<!-- sign Up -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/mysignup.css">
    <link rel="stylesheet" href="../css/myfonts.css">
    <link rel="stylesheet" href="../css/colors.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script type="text/javascript" src="../js/darkmode.js" defer></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" id="nav1">
        <div class="container">
            <a class="navbar-brand" href="#startpage">
                <img src="../icons/reshot-icon-open-book-LFUDNZRY6S.svg" alt="" id="brand-icon">
                <i class="dm-serif-text-regular-italic desc">MATHMA</i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item p-lg-3">
                        <button class="nav-link" id="home"><a class="links2" href="index.php">Home</a></button>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item p-lg-3">
                        <button class="nav-link" id="signin"><a class="links2" href="signin.php">Sign In</a></button>
                    </li>
                    <li class="nav-item p-lg-4">
                        <button id="theme-switch">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#e8eaed">
                                <path
                                    d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-3">
        <div class="container">
            <h1 class="dm-serif-text-regular-italic desc"><br>Create a new account</h1>
        </div>
        <br><br>
        <?php
        include "../../My include PHP/html.php";
        include "../../My include PHP/css.php";
        include "../../My include PHP/js.php";
        if (isset($_POST["submitted"])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            for ($i = 0; $i < strlen($phonenumber); $i++) {
                if ($phonenumber[$i] > 10) {
                    echo "<div class='mx-auto w-50 alert  alert-danger alert2 dm-serif-text-regular-italic' role='alert'>Wrong Phone Number</div>";
                    style();
                    selector("#floatingPhone", ["border: 3px solid red;"]);
                    selector(".alert2", [bgcolorhex("bb4e4e"), tac, "font-size: x-large;"]);
                    _style();
                    goto p1;
                }
            }
            for ($i = 0; $i < strlen($password); $i++) {
                if ($password[$i] === ' ') {
                    echo "<div class='mx-auto w-50 alert  alert-danger alert2 dm-serif-text-regular-italic' role='alert'>Spaces are not allowed</div>";
                    style();
                    selector("#floatingPassword, #floatingPassword2", ["border: 3px solid red;"]);
                    selector(".alert2", [bgcolorhex("bb4e4e"), tac, "font-size: x-large;"]);
                    _style();
                    goto p1;
                }
            }
            if (strlen($password) < 8) {
                echo "<div class='mx-auto w-50 alert alert-danger alert2 dm-serif-text-regular-italic' role='alert'>Too short password</div>";
                style();
                selector("#floatingPassword", ["border: 3px solid red;"]);
                selector(".alert2", [bgcolorhex("bb4e4e"), tac, "font-size: x-large;"]);
                _style();
                goto p1;
            }

            $query = "SELECT * FROM users WHERE email = '$email'";
            $conn = new mysqli('localhost', 'root', '', 'finalproject');
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                if ($email === $row['email']) {
                    echo "<div class='mx-auto w-50 alert alert-danger alert1 dm-serif-text-regular-italic' role='alert'>" . "Email is already used" . "</div>";
                    style();
                    selector("#floatingInput", ["border: 3px solid red;"]);
                    selector(".alert1", [bgcolorhex("bb4e4e"), tac, "font-size: x-large;"]);
                    _style();
                    goto p1;
                }
            }

            $query = "SELECT * FROM admins WHERE admin_email = '$email'";
            $conn = new mysqli('localhost', 'root', '', 'finalproject');
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                if ($email === $row['admin_email']) {
                    echo "<div class='mx-auto w-50 alert alert-danger alert1 dm-serif-text-regular-italic' role='alert'>" . "Email is already uesd" . "</div>";
                    style();
                    selector("#floatingInput", ["border: 3px solid red;"]);
                    selector(".alert1", [bgcolorhex("bb4e4e"), tac, "font-size: x-large;"]);
                    _style();
                    goto p1;
                }
            }

            if ($password === $password2) {
                $hashedpass = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO users (username, email, password, phonenumber) VALUES ('$username', '$email', '$hashedpass', '$phonenumber')";

                $conn = new mysqli('localhost', 'root', '', 'finalproject');
                $conn->query($query);

                echo "<div class='mx-auto w-50 alert alert-success alert1 dm-serif-text-regular-italic' role='alert'>" . "Created Successfully!" . "</div>";
                style();
                selector(".alert1", [bgcolorhex("008642"), tac, "font-size: x-large;"]);
                _style();

            } else {
                echo "<div class='mx-auto w-50 alert alert-danger alert2 dm-serif-text-regular-italic' role='alert'>Not matching passwords</div>";
                style();
                selector("#floatingPassword, #floatingPassword2", ["border: 3px solid red;"]);
                selector(".alert2", [bgcolorhex("bb4e4e"), tac, "font-size: x-large;"]);
                _style();
            }
        }
        p1:
        ?>
        <form action="" method="post">
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="floatingName" name="username" required placeholder="">
                <label for="floatingName">Username</label>
            </div>
            <div class="form-floating my-4">
                <input type="email" class="form-control" id="floatingInput" name="email" required
                    placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating my-4">
                <input type="text" class="form-control" id="floatingPhone" name="phonenumber" required placeholder="">
                <label for="floatingPhone">Phone Number</label>
            </div>
            <div class="form-floating my-4">
                <input type="password" class="form-control" id="floatingPassword" name="password" required
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
                <h6 class="info dm-serif-text-regular desc">Password must be not less than 8 characters. Spaces are not
                    allowed.</h6>
            </div>
            <div class="form-floating my-4">
                <input type="password" class="form-control" id="floatingPassword2" name="password2" required
                    placeholder="Password">
                <label for="floatingPassword2">Confirm Password</label>
            </div>
            <div>
                <input class="my-4 w-100 dm-serif-text-regular-italic" id="mysub" type="submit" name="submitted"
                    value="Sign Up">
            </div>
        </form>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>

</html>