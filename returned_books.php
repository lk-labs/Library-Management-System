<?php
include("setting.php");

// Fetch only the book name and student ID from the returned_books table
$books_query = mysqli_query($set, "SELECT name, sid FROM returned_books");

// Check if there are any books available
if (mysqli_num_rows($books_query) > 0) {
    // Initialize an empty variable to store the HTML table
    $table_output = "<table border='1' class='table'>\n";
    $table_output .= "<tr><th>Book Name</th><th>Student ID</th></tr>\n";

    // Loop through each book and add a row to the table
    while ($book = mysqli_fetch_array($books_query)) {
        $table_output .= "<tr><td>{$book['name']}</td><td>{$book['sid']}</td></tr>\n";
    }

    $table_output .= "</table>";
} else {
    $table_output = "<p>No books available.</p>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>View Returned Books</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="banner">
        <span class="head">Librasys connect</span><br />
        <marquee class="clg" direction="right" behavior="alternate" scrollamount="1">A streamlined library management
            system</marquee>
    </div>
    <div align="center">
        <div id="wrapper">
            <br />
            <br />
            <span class="SubHead">View  Returned Books</span>
            <br />
            <br />
            <?php echo $table_output; ?>
            <br />
            <br />
            <a href="adminhome.php" class="link">Go Back</a>
            <br />
            <br />
        </div>
    </div>
</body>

</html>
