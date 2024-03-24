<?php
include ("setting.php");
include ("Function.php");

session_start();
if (!isset ($_SESSION['aid'])) {
    header("location:libsys.php");
}
$aid = $_SESSION['aid'];
$a = mysqli_query($set, "SELECT * FROM admin WHERE aid='$aid'");
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
                    <a href="returned_books.php">
                        <span class="material-icons-outlined">View Returned books</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="adminViewBooks.php">
                        <span class="material-icons-outlined">View Books</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="addBooks.php">
                        <span class="material-icons-outlined">Add Books</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="editBook.php">
                        <span class="material-icons-outlined">Edit Books</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="deleteBook.php">
                        <span class="material-icons-outlined">Delete Books</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="deleteUser.php">
                        <span class="material-icons-outlined">Delete user</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="bookRequests.php">
                        <span class="material-icons-outlined">Books Requests</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="issue.php">
                        <span class="material-icons-outlined">Book Issue</span>
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="changePasswordAdmin.php">
                        <span class="material-icons-outlined">Change Password</span>
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
                <h2>DASHBOARD</h2>
            </div>

            <div class="main-cards">

                <div class="card">
                    <div class="card-inner">
                        <h2>BOOKS TOTAL</h2>
                    </div>
                    <h1>4,021</h1>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <h2>STUDENT TOTAL</h2>
                    </div>
                    <h1>1,962</h1>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <h2>REQUESTED BOOKS</h2>
                    </div>
                    <h1>1,962</h1>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <h2>AUTHORS TOTAL</h2>
                    </div>
                    <h1>8,731</h1>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <h2>RETURNED BOOK</h2>
                    </div>
                    <h1>3,841</h1>
                </div>
            </div>
        </main>

    </div>
</body>

</html>