<?php 
   session_start();
   include("connect.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Symbols+Rounded:opsz, wght, FILL, GRAD@48,400,0,0">
<link rel="stylesheet" href="home.css">
<script src="script.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<header>
   
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

<!---- TRYIIINGGG ------>


        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];

            while($result = mysqli_fetch_assoc($query)){
                $res_name = $result['name'];
                $res_email = $result['email'];
                $res_id = $result['id'];
            }
            
            echo "<a href='edit.php?id=$res_id'>Change Profile</a>";
            ?>


        </div>
    </div>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_name ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_email ?></b>.</p>
            </div>
          </div>
       </div>

    </main>
  
</body>
</html>