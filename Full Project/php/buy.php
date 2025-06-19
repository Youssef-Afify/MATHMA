<!-- Buy from the cart -->
<?php

include "db.php";
if (isset($_SESSION['session']) === false) {
    session_unset();
    session_destroy();
    header('location: signin.php');
}
if (isset($_POST['readytobuy'])) {
    $_SESSION['totalprice'];
    $total = 0;
    $userid = $_GET['userid'];

    $sql = "SELECT * FROM `shoppingcart` WHERE `id` = '$userid'";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        if ($row['added'] == 1) {
            $bookid = $row['book_id'];
            $quantity = $_POST["quantity$bookid"];
            $total = $total + $quantity * $row['book_price'];
        }
    }
    $_SESSION['totalprice'] = $total;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Books</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/mydetails.css">
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
            <a class="navbar-brand" href="main.php">
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
                        <button class="nav-link" id="home"><a class="links2" href="main.php">Home</a></button>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a href="user_cart.php?userid=<?php echo $_SESSION['id']; ?>" id="carticon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#e8eaed">
                                <path
                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM208-800h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a href="profile.php?userid=<?php echo $_SESSION['id']; ?>" id="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#e8eaed">
                                <path
                                    d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item p-lg-4">
                        <button id="theme-switch">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
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
    <?php
    include("../../My include PHP/html.php");
    include("../../My include PHP/css.php");
    include("../../My include PHP/js.php");
    if (isset($_POST['submit'])) {
        echo "<div class='mx-auto w-50 alert alert-success alert1 dm-serif-text-regular-italic' role='alert'>" . "Created Successfully!" . "</div>";
        style();
        selector(".alert1", [bgcolorhex("008642"), tac, "font-size: x-large;"]);
        _style();
    }
    ?>
    <!-- Credit card form -->
    <section class="container-fluid my-4">
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Biling details</h5>
                    </div>
                    <div class="card-body">
                        <form action="main.php" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div data-mdb-input-init class="form-floating">
                                        <input type="text" id="form6Example1" class="form-control" required />
                                        <label class="form-label" for="form6Example1">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div data-mdb-input-init class="form-floating">
                                        <input type="text" id="form6Example2" class="form-control" required />
                                        <label class="form-label" for="form6Example2">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->
                            <div data-mdb-input-init class="form-floating mb-4">
                                <input type="text" id="form6Example3" class="form-control" required />
                                <label class="form-label" for="form6Example3">Company name</label>
                            </div>

                            <!-- Text input -->
                            <div data-mdb-input-init class="form-floating mb-4">
                                <input type="text" id="form6Example4" class="form-control" required />
                                <label class="form-label" for="form6Example4">Address</label>
                            </div>

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-floating mb-4">
                                <input type="email" id="form6Example5" class="form-control" required value="<?php echo $_SESSION['email']; ?>" />
                                <label class="form-label" for="form6Example5">Email</label>
                            </div>

                            <!-- Number input -->
                            <div data-mdb-input-init class="form-floating mb-4">
                                <input type="number" id="form6Example6" class="form-control" required value="<?php echo $_SESSION['phonenumber']; ?>" />
                                <label class="form-label" for="form6Example6">Phone</label>
                            </div>

                            <hr class="my-4" />

                            <h5 class="mb-4">Payment</h5>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="checkoutForm3"
                                    checked />
                                <label class="form-check-label" for="checkoutForm3">
                                    Credit card
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="checkoutForm4" />
                                <label class="form-check-label" for="checkoutForm4">
                                    Debit card
                                </label>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="checkoutForm5" />
                                <label class="form-check-label" for="checkoutForm5">
                                    Paypal
                                </label>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <div data-mdb-input-init class="form-floating">
                                        <input type="text" id="formNameOnCard" class="form-control" required />
                                        <label class="form-label" for="formNameOnCard">Name on card</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div data-mdb-input-init class="form-floating">
                                        <input type="text" id="formCardNumber" class="form-control" required />
                                        <label class="form-label" for="formCardNumber">Credit card number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-3">
                                    <div data-mdb-input-init class="form-floating">
                                        <input type="text" id="formExpiration" class="form-control" required />
                                        <label class="form-label" for="formExpiration">Expiration</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div data-mdb-input-init class="form-floating">
                                        <input type="text" id="formCVV" class="form-control" required />
                                        <label class="form-label" for="formCVV">CVV</label>
                                    </div>
                                </div>
                            </div>

                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block"
                                type="submit">
                                Continue to checkout
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Summary</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Books
                                <span><?php echo $_SESSION['totalprice']; ?> $</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                Shipping
                                <span>Gratis</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>Total amount</strong>
                                    <strong>
                                        <p class="mb-0">(including VAT)</p>
                                    </strong>
                                </div>
                                <span><strong><?php echo $_SESSION['totalprice']; ?> $</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Credit card form -->
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-8">
                <ul class="list-group dm-serif-text-regular-italic">
                    <li class='list-group-item d-flex justify-content-between align-items-center'
                        style='flex-direction: row'>
                        <div class='col-12 dm-serif-text-regular-italic' style="text-align: center;">
                            Books List
                        </div>
                    </li>
                    <!-- <form action=""> -->
                    <?php
                    $userid = $_GET['userid'];

                    $sql = "SELECT * FROM `shoppingcart` WHERE `id` = '$userid'";
                    $result = $con->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        if ($row['added']) {
                            $img = $row['book_image'];
                            $bookid = $row['book_id'];
                            echo "<li class='list-group-item d-flex justify-content-between align-items-center listed' style='flex-direction: row;'>
                                                " . $row['book_name'] . " (" . $row['book_price'] . " $)
                                                <div class='image-parent'>
                                                    <img src='../book_images/$img' class='img-fluid' alt=''>
                                                </div>
                                          </li>";
                        }
                    }
                    ?>
                    <!-- </form> -->
                </ul>
            </div>
            <div class="col-4">
                <form action="buy.php?userid=<?php echo $_SESSION['id']; ?>" method="post">
                    <div class="list-group dm-serif-text-regular-italic">
                        <div class='list-group-item d-flex justify-content-between align-items-center'
                            style='flex-direction: row'>
                            <div class='col-12 dm-serif-text-regular-italic' style="text-align: center;">
                                Quantity
                            </div>
                        </div>
                        <?php
                        $userid = $_GET['userid'];

                        $sql = "SELECT * FROM `shoppingcart` WHERE `id` = '$userid'";
                        $result = $con->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            if ($row['added']) {
                                $temp = $row['book_id'];
                                $quantity = $_POST["quantity$temp"];
                                $img = $row['book_image'];
                                $bookid = $row['book_id'];
                                echo "<input class='list-group-item d-flex justify-content-between align-items-center listed' type='number' 
                                    id='quantity$bookid' name='quantity$bookid' disabled='disabled' value=$quantity>
                                    <label for='quantity$bookid' style='display: none;'>Quantity</label>";
                            }
                        }
                        ?>

                    </div>
                </form>
            </div>
        </div>
        <style>
            .image-parent {
                max-width: 40px;
                max-height: 60px;
            }

            .listed {
                min-height: 80px;
            }
        </style>
    </div>
</body>

</html>