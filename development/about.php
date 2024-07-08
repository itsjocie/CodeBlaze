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

<div class="about">
    <h1>ABOUT US</h1>
    <span>
        <a href="home.php"><i class='bx bx-arrow-back' ></i></a>
    </span>
    <p>
    The Know test: AI-Driven Document Upload for Quiz Generation System is an 
    innovative project developed by a team of researchers. We believe that traditional 
    methods of manually creating quizzes and assessments are time-consuming and may not 
    accurately reflect the breadth and depth of the course material. Our system aims 
    to address these challenges by automating the quiz generation process, allowing 
    instructors and educators to focus on more activities.
    </p>
    <br> 
    <p>
    Our team comprises experts from various fields, including computer science, 
    artificial intelligence, educational technology, and subject matter experts from 
    diverse disciplines. We collaborate closely to develop cutting-edge solutions that 
    seamlessly integrate advanced AI algorithms with user-friendly interfaces and 
    educational frameworks.
    </p>
    <br> 
    <p>
    At the core of our system is a natural language processing (NLP) engine that can 
    accurately analyze and comprehend uploaded course materials, such as textbooks, 
    lecture notes, and supplementary resources. By extracting key concepts, topics, 
    and relationships from these documents, our system generates a comprehensive set 
    of quiz questions tailored to the specific subject matter.
    </p>
    <br> 
    <p>
    We are committed to promoting fairness, objectivity, and inclusivity in the 
    assessment process. Our AI-driven approach aims to minimize potential biases and
    ensure that the generated questions accurately reflect the course content, enabling 
    a more equitable and effective evaluation of student understanding. Join us on this 
    transformative journey as we harness the power of AI to enhance reviewer capabilities,
    promote personalized learning experiences, and ultimately contribute to the 
    advancement of education for generations to come.
    </p>
</div>

</body>
</html>

