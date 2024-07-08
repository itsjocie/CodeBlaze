<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign In and Sign Up</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Symbols+Rounded:opsz, wght, FILL, GRAD@48,400,0,0">
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="#" class="logo">
                <img src="pic/img.png" alt="logo">
            </a>
                <button class="login-btn">GET STARTED</button>
               
        </nav>
    </header>
    <div class="display">
        <h1 class="knowt">KnowTest</h1>
        <h2 class="ai-driven">
            An AI-driven document upload system for quiz generation in
            educational settings can greatly enhance reviewer capabilities and
            streamline the assessment process.
          </h2>
    </div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>   
        <div class="form-box login" >
            <div class="form-content" id="login">
                <h2>WELCOME BACK!</h2>
                <form action="register.php" method="post">
                    <div class="input-field">
                        <input type="type"required name="name">
                        <label>Name<span>(First Name, Last Name)</span></label>
                    </div>
                    <div class="input-field">
                        <input type="email"required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password"required id="password" name="password">
                        <label>Password</label>
                        <i class="fa-solid fa-eye-slash" id="show-password"></i>
                    </div>
                    <a href="#" class="forgot-pass"> Forgot Password</a>
                    <button type="submit" name="login">Log In</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Sign Up</a>
                </div>
            </div>
        </div>

    <div class="form-box signup">
            <div class="form-content" id="signup">
                <h2>CREATE NEW ACCOUNT</h2>
                <form action="register.php" method="post">
                    <div class="input-field">
                        <input type="type"required name="name">
                        <label>Enter your Name<span>(First Name, Last Name)</span></label>
                    </div>
                    <div class="input-field">
                        <input type="email"required name="email">
                        <label>Enter your Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required id="password" name="password">
                        <label>Create password</label>
                        <i class="fa-solid fa-eye-slash" id="show-password"></i>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" id="policy">
                        <label for="policy">
                            I agree the 
                            <a href="#">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit" name="signup">Sign Up</button>
                </form>
                <div class="bottom-link">
                    Already have an account?
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>