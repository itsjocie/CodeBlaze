<?php 
   session_start();
   include("connect.php");
   
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Symbols+Rounded:opsz, wght, FILL, GRAD@48,400,0,0">
<link rel="stylesheet" href="home.css">
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

<div class="main-content">
<div class="pldbtn-container">
    <button onclick="Upldbtn()" class="pldbtn">Upload Documents</button>
</div>
<div class="popup" id="popup-1">
    <div class="container">
        <div class="upldbox">
            <input type="file" id="uploadBtn" accept=".pdf" onchange="displaySelectedFileName()">
            <label for="uploadBtn">Choose File</label>
            <span id="selectedFileName"></span>
        </div>
        <div class="btn-container">
            <button onclick="createQuiz()" class="quizBtn" id="quizBtn" style="display: none;">Create Quiz</button>
            <button onclick="createReviewer()" class="reviewerBtn" id="reviewerBtn" style="display: none;">Create Reviewer</button>
        </div>
    </div>
</div>
</div>

</body>
</html>

