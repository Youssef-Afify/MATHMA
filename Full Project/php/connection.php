<!-- Check the form before sign in -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
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
    <?php
    require "../../My include PHP/html.php";
    require "../../My include PHP/css.php";
    require "../../My include PHP/js.php";

    if (isset($_POST['logged'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashedpass = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $hashedpass;

        $query = "SELECT * FROM users WHERE email = '$email'";
        $conn = new mysqli('localhost', 'root', '', 'finalproject');
        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $hashedpass;
                $_SESSION['phonenumber'] = $row['phonenumber'];
                $_SESSION['session'] = true;
                header('location: main.php');
            } else {
                goto p1;
            }
        }
        p1:
        $query = "SELECT * FROM admins WHERE admin_email = '$email'";
        $conn = new mysqli('localhost', 'root', '', 'finalproject');
        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['admin_password'])) {
                session_start();
                $_SESSION['admin_name'] = $row['admin_name'];
                $_SESSION['admin_id'] = $row['admin_id'];
                $_SESSION['admin_email'] = $email;
                $_SESSION['admin_password'] = $hashedpass;
                $_SESSION['admin_session'] = true;
                header('location: admin.php');
            } else {
                goto p2;
            }
        }
    }
    p2:
    ?>
    <a href="signin.php">
        <div class='mx-auto my-4 w-50 alert alert-danger alert2 dm-serif-text-regular-italic' role='alert'>
            Invalid email or password, Try again
        </div>
    </a>
    <style>
        .alert2 {
            background-color: #bb4e4e;
            text-align: center;
            font-size: x-large;
            justify-content: center;
        }
        a {
            text-decoration: none;
        }
    </style>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>

</html>