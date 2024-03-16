<?php
include ("setting.php");

// Fetch all available books and their authors from the database
$books_query = mysqli_query($set, "SELECT * FROM books");

// Check if there are any books available
if (mysqli_num_rows($books_query) > 0) {
    // Initialize an empty variable to store the HTML table
    $table_output = "<table border='1' class='table'>\n";
    $table_output .= "<tr><th>Book Name</th><th>Author</th></tr>\n";

    // Loop through each book and add a row to the table
    while ($book = mysqli_fetch_array($books_query)) {
        $table_output .= "<tr><td>{$book['name']}</td><td>{$book['author']}</td></tr>\n";
    }

    $table_output .= "</table>";
} else {
    $table_output = "<p>No books available.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Books</title>
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
            <span class="SubHead">View Books</span>
            <br />
            <br />
            <?php echo $table_output; ?>
            <br />
            <br />
            <a href="home.php" class="link">Go Back</a>
            <br />
            <br />
        </div>
    </div>
</body>

</html>