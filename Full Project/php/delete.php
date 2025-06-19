<!-- Delete a book -->
<?php

include "db.php";
if (isset($_SESSION['admin_session']) === false) {
    session_unset();
    session_destroy();
    header('location: signin.php');
} elseif (isset($_SESSION['admin_session']) === true) {
    $bookid = $_GET['bid'];
    $sql = "SELECT * FROM `books` WHERE `book_id` = $bookid";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    $deletequery = "DELETE FROM `books` WHERE `book_id` = $bookid";
    $iquery = mysqli_query($con, $deletequery);
    header("location: admin.php");
}

?>