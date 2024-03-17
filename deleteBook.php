<?php
include ("setting.php");
// session_start();
// if(!isset($_SESSION['sid'])) {
// 	header("location:index.php");
// 	exit(); // Add exit to stop further execution
// }

// Check if a book is selected for deletion
if (isset ($_POST['name'])) {
    $delete_id = $_POST['name'];
    $delete_query = mysqli_query($set, "DELETE FROM books WHERE id='$delete_id'");
    if ($delete_query) {
        $msg = "Book deleted successfully";
    } else {
        $msg = "Error deleting book";
    }
}

?>
<!DOCTYPE html>
<html>

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

            <span class="SubHead">Delete Book</span>
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
                        <td class="labels">Book : </td>
                        <td><select name="name" class="fields" required>
                                <option value="" disabled="disabled" selected="selected"> - - Select Book - - </option>
                                <?php
                                // Fetching and displaying books from the database
                                $x = mysqli_query($set, "SELECT * FROM books");
                                while ($y = mysqli_fetch_array($x)) {
                                    ?>
                                    <option value="<?php echo $y['id']; ?>">
                                        <?php echo $y['name'] . " " . $y['author']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="DELETE" class="fields" /></td>
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