<?php
include("setting.php");
session_start();
if(!isset($_SESSION['sid'])) {
    header("location:libsys.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sem = $_POST['sem'];
    $branch = $_POST['branch'];
    $sid = $_SESSION['sid']; // Retrieve student ID from session
    $pass = $_POST['pass'];

    // Update user details in the database
    $sql = "UPDATE students SET name='$name', email='$email', sem='$sem', branch='$branch', password='$pass' WHERE sid='$sid'";
    if (mysqli_query($set, $sql)) {
        $msg = "User details updated successfully";
    } else {
        $msg = "Error updating user details: " . mysqli_error($set);
    }
}

// Fetch user's data from the database
$sid = $_SESSION['sid']; // Retrieve student ID from session
$result = mysqli_query($set, "SELECT * FROM students WHERE sid='$sid'");
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$sem = $row['sem'];
$branch = $row['branch'];
$pass = $row['password'];
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
    <span class="head">Library Management System</span><br />
    <marquee class="clg" direction="right" behavior="alternate" scrollamount="1">TECH VEGAN</marquee>
</div>
<br />

<div align="center">
    <div id="wrapper">
        <br />
        <br />

        <span class="SubHead">Edit Student Profile</span>
        <br />
        <br />
        <form method="post" action="">
            <table border="0" cellpadding="4" cellspacing="4" class="table">
                <tr><td colspan="2" align="center" class="msg"><?php echo isset($msg) ? $msg : ''; ?></td></tr>

                <tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" value="<?php echo $name; ?>" /></td></tr>
                <tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" value="<?php echo $email; ?>" /></td></tr>
                <tr><td class="labels">Sem : </td>
                    <td>
                        <select name="sem" class="fields" required>
                            <option value="" disabled="disabled" selected="selected">- - Select Sem - -</option>
                            <option value="1" <?php if ($sem == 'First Sem') echo 'selected="selected"'; ?>>First Sem</option>
                            <option value="2" <?php if ($sem == 'Second Sem') echo 'selected="selected"'; ?>>Second Sem</option>
                            <option value="3" <?php if ($sem == 'Third Sem') echo 'selected="selected"'; ?>>Third Sem</option>
                            <option value="4" <?php if ($sem == 'Fourth Sem') echo 'selected="selected"'; ?>>Fourth Sem</option>
                            <option value="5" <?php if ($sem == 'Fifth Sem') echo 'selected="selected"'; ?>>Fifth Sem</option>
                            <option value="6" <?php if ($sem == 'Sixth Sem') echo 'selected="selected"'; ?>>Sixth Sem</option>
                            <option value="7" <?php if ($sem == 'Seventh Sem') echo 'selected="selected"'; ?>>Seventh Sem</option>
                            <option value="8" <?php if ($sem == 'Eighth Sem') echo 'selected="selected"'; ?>>Eighth Sem</option>
                        </select>
                    </td></tr>

                <tr><td class="labels">Branch : </td>
                    <td>
                        <select name="branch" class="fields" required>
                            <option value="" disabled="disabled" selected="selected">- - Select Branch - -</option>
                            <option value="Computer Engineering" <?php if ($branch == 'Computer Engineering') echo 'selected="selected"'; ?>>Computer Engineering</option>
                            <option value="Electronics Engineering" <?php if ($branch == 'Electronics Engineering') echo 'selected="selected"'; ?>>Electronics Engineering</option>
                            <option value="Mechanical Engineering" <?php if ($branch == 'Mechanical Engineering') echo 'selected="selected"'; ?>>Mechanical Engineering</option>
                            <option value="Civil Engineering" <?php if ($branch == 'Civil Engineering') echo 'selected="selected"'; ?>>Civil Engineering</option>
                            <option value="Information Technology" <?php if ($branch == 'Information Technology') echo 'selected="selected"'; ?>>Information Technology</option>
                        </select>
                    </td></tr>
                <tr><td class="labels">Student ID : </td><td><input type="text" name="sid" class="fields" placeholder="Enter Student ID" required="required" size="25" value="<?php echo $sid; ?>" readonly /></td></tr>
                <tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" placeholder="Enter Password" required="required" size="25" value="<?php echo $pass; ?>" /></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" value="Save" class="fields" /></td></tr>
            </table>
        </form><br />
        <br />
        <a href="home.php" class="link">Go Back</a>
        <br />
        <br />

    </div>
</div>
</body>
</html>
