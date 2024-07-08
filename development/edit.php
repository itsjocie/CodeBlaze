<?php 
   session_start();

   include("connect.php");
   if(!isset($_SESSION['valid'])){
   }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Symbols+Rounded:opsz, wght, FILL, GRAD@48,400,0,0">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<header>
    <nav class="navbar">
        <a href="#" class="logo">
            <img src="pic/img.png" alt="logo">
        </a>
    </nav>
</header>

<div class="sidebar">
    <div class="user">
        <img src="pic/profile.png" alt="profile">
    </div>
    <div class="profile">
        <a href="pp.php">
        <p class="bold">Profile</p>
        </a>
    </div>
    <div class="icon_items">
    <ul>
        <li>
            <i class='bx bx-edit'></i> 
            <a href="edit.php">Edit Profile</a>
        </li>
        <li>
            <i class='bx bx-store'></i>
            <a href="subs.php">Subscription</a>
        </li>
        <li>
            <i class='bx bx-info-circle'></i>
            <a href="about.php">About Us</a>
        </li>
        <li>
            <i class='bx bx-log-out' id="logout"></i>
            <a href="log.php">Logout</a>
        </li>
    </ul>
    </div>
</div>

<!-------EDIT PROFILE------->
<div class="edit_profile">
<span>
        <a href="home.php"><i class='bx bx-arrow-back' ></i></a>
    </span>
<div class="form-box signup">
            <div class="form-content" id="signup">
                <h2>EDIT PROFILE</h2>
                <form action="register.php" method="post">

                    <div class="up_img">
                        <input type="file" required id="image" class="image" name="image">
                        <label>Upload Picture</label>
                    </div>

                    <div class="input-field">
                        <input type="type"required name="name">
                        <label class="lchng" >Change Name<span>(First Name, Last Name)</span></label>
                    </div>
                    <div class="input-field">
                        <input type="email"required name="email">
                        <label>Change Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required id="password" name="password">
                        <label>Change password</label>
                        <i class="fa-solid fa-eye-slash" id="show-password"></i>
                    </div>
                
                    <button type="submit" name="signup">UPDATE</button>
                </form>
            </div>
        </div>
</div>
</body>
</html>

