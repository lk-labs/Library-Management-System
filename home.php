<?php
include ("setting.php");
session_start();
if (!isset ($_SESSION['sid'])) {
	header("location:libsys.php");
}
$sid = $_SESSION['sid'];
$a = mysqli_query($set, "SELECT * FROM students WHERE sid='$sid'");
$b = mysqli_fetch_array($a);
$name = $b['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        #logoutbtn {
            background-color: red;
        }
        img{
            width: 150px;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="grid-container">

        <!-- Header -->
        <header class="header">
            <div>
                <span class="Welcome">Welcome
                    <?php echo $name; ?>
                </span>
            </div>
        </header>
        <!-- End Header -->


        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined"><img src="images/logo.png" alt=""></span>
                </div>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="viewBook.php">
                        <span class="material-icons-outlined">View Book</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="issueBook.php">
                        <span class="material-icons-outlined">Request Book</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="request.php">
                        <span class="material-icons-outlined">Request New Books</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="changePassword.php">
                        <span class="material-icons-outlined">Change Password</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="viewProfile.php">
                        <span class="material-icons-outlined">view profile</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="logout.php">
                        <span class="material-icons-outlined" id="logoutbtn">Logout</span>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- End Sidebar -->

        <!-- Main -->
        <main class="main-container">
            <div class="main-title">
                <h2>USER DASHBOARD</h2>
            </div>
        </main>

    </div>
</body>

</html>