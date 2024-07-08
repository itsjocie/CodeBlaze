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

<!-------SUBSCRIPTION------->

<div class="subs">
    <div class="back">
    <span>
        <a href="home.php"><i class='bx bx-arrow-back' ></i></a>
    </span>
    </div>

    <div class="price-toggler">
        <span class="month active">monthly</span>
        <span class="year">yearly</span>
    </div>

    <div class="box-contain2">

        <div class="box2">
            <h3 class="basic">BASIC</h3>
            <div class="price1">
            <div class="price month"><span>₱</span>50.<span>00</span></div>
            <div class="price year"><span>₱</span>300.<span>00</span></div>
            </div>
            <div class="list">
                <p> <i class='bx bx-check'></i> Documentation </p>
                <p> <i class='bx bx-check'></i> Free updates </p>
                <p> <i class='bx bx-x' ></i> Full access </p>
                <p> <i class='bx bx-x' ></i> Unlimited use </p>
                <p> <i class='bx bx-x' ></i> Download Files </p>
            </div>
            <div class="but">
            <a href="#" class="btn1">BUY</a>
            </div>
        </div>

        <div class="box2">
            <h3 class="standard">STANDARD</h3>
            <div class="price2">
            <div class="price month"><span>₱</span>100.<span>00</span></div>
            <div class="price year"><span>₱</span>500.<span>00</span></div>
            </div>
            <div class="list">
                <p> <i class='bx bx-check'></i> Documentation </p>
                <p> <i class='bx bx-check'></i> Free updates </p>
                <p> <i class='bx bx-check'></i> Full access </p>
                <p> <i class='bx bx-check'></i> Unlimited use </p>
                <p> <i class='bx bx-x' ></i> Download Files </p>
            </div>
            <div class="but">
            <a href="#" class="btn2">BUY</a>
            </div>
        </div>

        <div class="box2">
            <h3 class="premium">PREMIUM</h3>
            <div class="price3">
            <div class="price month"><span>₱</span>135.<span>00</span></div>
            <div class="price year"><span>₱</span>650.<span>00</span></div>
            </div>
            <div class="list">
                <p> <i class='bx bx-check'></i> Documentation </p>
                <p> <i class='bx bx-check'></i> Free updates </p>
                <p> <i class='bx bx-check'></i> Full access </p>
                <p> <i class='bx bx-check'></i> Unlimited use </p>
                <p> <i class='bx bx-check'></i> Download Files </p>
            </div>
            <div class="but">
            <a href="#" class="btn3">BUY</a>
            </div>
        </div>
    </div>
</div>



<script>

let month = document.querySelector('.price-toggler .month');
let year = document.querySelector('.price-toggler .year');
let monthAmount = document.querySelectorAll('.box-contain2 .box2 .month');
let yearAmount = document.querySelectorAll('.box-contain2 .box2 .year');

year.onclick = () =>{
    year.classList.add('active');
    month.classList.remove('active');

    monthAmount.forEach(mo =>{ mo.style.display = 'none' });
    yearAmount.forEach(yr =>{ yr.style.display = 'block' });
};

month.onclick = () =>{
    year.classList.remove('active');
    month.classList.add('active');

    monthAmount.forEach(mo =>{ mo.style.display = 'block' });
    yearAmount.forEach(yr =>{ yr.style.display = 'none' });
};

</script>
</div>
</body>
</html>

