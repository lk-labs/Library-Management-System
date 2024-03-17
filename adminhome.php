<?php
include ("setting.php");
session_start();
if (!isset ($_SESSION['aid'])) {
	header("location:index.php");
}
$aid = $_SESSION['aid'];
$a = mysqli_query($set, "SELECT * FROM admin WHERE aid='$aid'");
$b = mysqli_fetch_array($a);
$name = $b['name'];
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
		<span class="head">Librasys Connect</span><br />
		<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">A streamlined library system
		</marquee>
	</div>
	<br />

	<div align="center">
		<div id="wrapper">
			<br />
			<br />

			<span class="SubHead">Welcome
				<?php echo $name; ?>
			</span>
			<br />
			<br />
			<table border="0" class="table" cellpadding="10" cellspacing="10">
				<tr>
					<td><a href="adminnViewBook.php" class="Command">View Books</a></td>
				<tr>
					<td><a href="addBooks.php" class="Command">Add Books</a></td>
				<tr>
					<td><a href="editBook.php" class="Command">Edit Books</a></td>
				</tr>
				<tr>
					<td><a href="deleteBook.php" class="Command">Delete Books</a></td>
				</tr>
				<tr>
					<td><a href="deleteUser.php" class="Command">Delete user</a></td>
				</tr>


				<td><a href="bookRequests.php" class="Command">Books Requests</a></td>
				</tr>
				<tr>
					<td><a href="issue.php" class="Command">Book Issue</a></td>
					<td><a href="changePasswordAdmin.php" class="Command">Change Password</a></td>
				</tr>
				<tr>
					<td><a href="logout.php" class="Command">Logout</a></td>
				</tr>


			</table>
			<br />
			<br />

			<br />
			<br />

		</div>
	</div>
</body>

</html>