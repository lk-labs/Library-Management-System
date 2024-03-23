<?php
include("setting.php");
session_start();
if (!isset($_SESSION['aid'])) {
    header("location:index.php");
}

$aid = $_SESSION['aid'];

// Initialize message variable
$msg = "";

// Handle return action
if (isset($_GET['r'])) {
    $return_id = $_GET['r'];

    // Retrieve book details to be returned
    $result = mysqli_query($set, "SELECT * FROM issue WHERE id='$return_id'");
    $book = mysqli_fetch_assoc($result);

    // Insert returned book details into returned_books table
    $insert_query = mysqli_query($set, "INSERT INTO returned_books(name, author, sid, date) VALUES ('{$book['name']}', '{$book['author']}', '{$book['sid']}', '{$book['date']}')");

    // Check if insertion was successful
    if ($insert_query) {
        // Delete the returned book entry from the issue table
        mysqli_query($set, "DELETE FROM issue WHERE id='$return_id'");
        $msg = "Book Returned Successfully";
    } else {
        $msg = "Failed to Return Book";
    }
}

// Redirect back to admin home with the message
header("location: issue.php?msg=" . urlencode($msg));
exit();
?>
