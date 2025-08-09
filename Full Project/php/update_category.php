<!-- Update category's info -->
<?php

include "db.php";
if (isset($_SESSION['admin_session']) == false) {
    session_unset();
    session_destroy();
    header('location: signin.php');
}
$categoryid = $_GET['bid'];
$sql = "SELECT * FROM `categories` WHERE `category_id` = $categoryid";
$result = $con->query($sql);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category</title>
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
    <div id="startpage1"></div>
    <nav class="navbar navbar-expand-lg sticky-top" id="nav1">
        <div class="container">
            <a class="navbar-brand" href="admin.php">
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
                        <button class="nav-link" id="home"><a class="links2" href="admin.php">Home</a></button>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item p-lg-3">
                        <a href="profile.php" id="profile">
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
    include "../../My include PHP/html.php";
    include "../../My include PHP/css.php";
    include "../../My include PHP/js.php";

    if (isset($_POST['updated'])) {
        $bookcategory = $_POST['bookcategory'];
        $updatequery = "UPDATE `categories` SET `book_category` = '$bookcategory' WHERE `category_id` = $categoryid";
        $iquery = mysqli_query($con, $updatequery);
        echo "<div class='mx-auto w-50 alert alert-success alert1 dm-serif-text-regular-italic my-4' role='alert'>" . "Updated Successfully!" . "</div>";
        style();
        selector(".alert1", [bgcolorhex("008642"), tac, "font-size: x-large;"]);
        _style();
    }
    ?>

    <div class="container my-3">

        <h1 class="dm-serif-text-regular-italic desc"><br>Update Category</h1>
        <br><br>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="floatingName" name="bookcategory" required placeholder=""
                    value="<?php echo $row['book_category']; ?>">
                <label for="floatingName">Category Name</label>
            </div>
            <div>
                <input class="my-4 w-100 dm-serif-text-regular-italic" id="added" type="submit" name="updated"
                    value="Update">
            </div>
        </form>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>

</html>