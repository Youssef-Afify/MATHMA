<!-- Download the sample -->
<?php

include "db.php";
if (isset($_SESSION['session']) === false) {
    session_unset();
    session_destroy();
    header('location: signin.php');
}
$bookid = $_GET['bid'];
$sql = "SELECT * FROM `books` WHERE `book_id` = $bookid";
$result = $con->query($sql);
$row = $result->fetch_assoc();

$pdf = $row['book_sample'];
header("Content-Disposition:attachment;filename=$pdf");
readfile("../book_samples/$pdf");

?>