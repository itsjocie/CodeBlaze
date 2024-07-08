const showPopupBtn = document.querySelector(".login-btn");
const formPopupBtn = document.querySelector(".form-popup");
const hidePopupBtn = document.querySelector(".form-popup .close-btn");
const loginSignupLink = document.querySelectorAll(".form-box .bottom-link a");
const showPassword = document.querySelector("#show-password");
const passwordField = document.querySelector("#password");

showPopupBtn.addEventListener("click", () =>{
    document.body.classList.toggle("show-popup");
});

hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

loginSignupLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopupBtn.classList[link.id === "signup-link" ? 'add' : 'remove']("show-signup");
    });
})
showPassword.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
})
function showScreen(screen) {
    const screens = document.querySelectorAll('.screen');
    screens.forEach(s => s.classList.add('hidden'));
    screen.classList.remove('hidden');
  }

/*******HOME********/
function Upldbtn() {
    document.getElementById("popup-1").classList.toggle("active");
  }
  
  function displaySelectedFileName() {
    const input = document.getElementById("uploadBtn");
    const fileNameSpan = document.getElementById("selectedFileName");
    const fileLabel = document.getElementById("fileLabel");
    const quizBtn = document.getElementById("quizBtn");
    const reviewerBtn = document.getElementById("reviewerBtn");
  
    if (input.files.length > 0) {
      fileNameSpan.textContent = input.files[0].name;
      fileLabel.style.display = "none";
      quizBtn.style.display = "inline-block";
      reviewerBtn.style.display = "inline-block";
    } else {
      fileNameSpan.textContent = "";
      fileLabel.style.display = "inline-block";
      quizBtn.style.display = "none";
      reviewerBtn.style.display = "none";
    }
  }
  
  function createQuiz() {
    console.log("Creating a quiz...");
  }
  
  function createReviewer() {
    console.log("Creating a reviewer...");
  }
