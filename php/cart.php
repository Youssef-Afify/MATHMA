<!-- Adding/Removing a book to cart -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/mymain.css">
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

    include "db.php";
    include "../../My include PHP/html.php";
    include "../../My include PHP/css.php";
    include "../../My include PHP/js.php";

    if (isset($_SESSION['session']) === false) {
        session_unset();
        session_destroy();
        header('location: signin.php');
    }

    $_SESSION['shoppingcart'] = array();
    $usercarts = array();
    $bookscarts = array();

    $bookid = $_GET['bid'];
    $sqlbook = "SELECT * FROM `books` WHERE `book_id` = $bookid";
    $resultbook = $con->query($sqlbook);
    $rowbook = $resultbook->fetch_assoc();

    $userid = $_SESSION['id'];

    $cart = "SELECT * FROM `shoppingcart` WHERE `id` = '$userid' AND `book_id` = '$bookid'";
    $result = $con->query($cart);
    while ($row = $result->fetch_assoc()) {
        if ($row['added'] == 1) {
            $temp = 0;
            $updatequery = "UPDATE `shoppingcart` SET `added` = '$temp', `command` = 'Add to cart 🛒' WHERE `id` = '$userid' AND `book_id` = '$bookid'";
            $iquery = mysqli_query($con, $updatequery);
            // echo "<div class='mx-auto w-50 alert alert-success alert2 dm-serif-text-regular-italic' role='alert'>Removed from cart</div>";
            // style();
            // selector(".alert2", [bgcolorhex("008642"), tac, "font-size: x-large;"]);
            // _style();
            goto p1;
        } elseif ($row['added'] == 0) {
            $temp = 1;
            $updatequery = "UPDATE `shoppingcart` SET `added` = '$temp', `command` = 'Remove from cart 🛒' WHERE `id` = '$userid' AND `book_id` = '$bookid'";
            $iquery = mysqli_query($con, $updatequery);
            // echo "<div class='mx-auto w-50 alert alert-success alert2 dm-serif-text-regular-italic' role='alert'>Added to cart</div>";
            // style();
            // selector(".alert2", [bgcolorhex("008642"), tac, "font-size: x-large;"]);
            // _style();
            goto p1;
        }
    }
    $bookname = $rowbook['book_name'];
    $bool = true;
    $img = $rowbook['book_image'];
    $price = $rowbook['book_price'];
    $insertquery = "INSERT INTO `shoppingcart` (`book_name`, `id`, `book_id`, `added`, `command`, `book_image`, `book_price`) VALUES ('$bookname', '$userid', '$bookid', '$bool', 'Remove from cart 🛒', '$img', '$price')";
    $iquery = mysqli_query($con, $insertquery);
    // echo "<div class='mx-auto w-50 alert alert-success alert2 dm-serif-text-regular-italic' role='alert'>Inserted into cart</div>";
    // style();
    // selector(".alert2", [bgcolorhex("008642"), tac, "font-size: x-large;"]);
    // _style();
    p1:
    header("location: details.php?bid=$bookid");
    ?>

</body>

</html>