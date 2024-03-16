<?php
include ("setting.php");

// Check if a book is selected for editing
if (isset ($_POST['name']) && isset ($_POST['new_name']) && isset ($_POST['new_author'])) {
    $edit_name = $_POST['name']; // Selected book name
    $new_name = $_POST['new_name'];
    $new_author = $_POST['new_author'];

    // Update the book details in the database
    $update_query = mysqli_query($set, "UPDATE books SET name='$new_name', author='$new_author' WHERE name='$edit_name'");

    if ($update_query) {
        $msg = "Book details updated successfully";
    } else {
        $msg = "Error updating book details";
    }
}

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Library Management System</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="banner">
        <span class="head">Librasys connect</span><br />
        <marquee class="clg" direction="right" behavior="alternate" scrollamount="1">A streamlined library management
            system</marquee>
    </div>
    <br />

    <div align="center">
        <div id="wrapper">
            <br />
            <br />

            <span class="SubHead">Edit Book</span>
            <br />
            <br />
            <form method="post" action="">
                <table border="0" class="table" cellpadding="10" cellspacing="10">
                    <tr>
                        <td colspan="2" align="center" class="msg">
                            <?php echo $msg; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="labels">Book :</td>
                        <td>
                            <select name="name" class="fields" required>
                                <option value="" disabled="disabled" selected="selected"> - - Select Book - - </option>
                                <?php
                                // Fetching and displaying books from the "books" table
                                $books_query = mysqli_query($set, "SELECT * FROM books");
                                while ($book = mysqli_fetch_array($books_query)) {
                                    ?>
                                    <option value="<?php echo $book['name']; ?>">
                                        <?php echo $book['name']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="labels">New Book Name:</td>
                        <td><input type="text" name="new_name" class="fields" required /></td>
                    </tr>
                    <tr>
                        <td class="labels">New Author:</td>
                        <td><input type="text" name="new_author" class="fields" required /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="UPDATE" class="fields" /></td>
                    </tr>
                </table>
            </form>
            <br />
            <br />
            <a href="adminhome.php" class="link">Go Back</a>
            <br />
            <br />

        </div>
    </div>
</body>

</html>