// ================== Grab Elements ==================
const formContainer  = document.getElementById("form_container");
const overlay        = document.getElementById("overlay");
const loginForm      = document.getElementById("login_form");
const signupForm     = document.getElementById("signup_form");
const showLoginBtn   = document.getElementById("show_login_form");
const showSignupLink = document.getElementById("show_signup");
const showLoginLink  = document.getElementById("show_login");
const closeBtn       = document.getElementById("form_close");

    // Eye toggle for all password fields
    document.querySelectorAll(".togglePassword").forEach(icon => {
      icon.addEventListener("click", function() {
        const input = document.querySelector(this.getAttribute("toggle"));
        if (input.type === "password") {
          input.type = "text";
          this.classList.remove("uil-eye-slash");
          this.classList.add("uil-eye");
        } else {
          input.type = "password";
          this.classList.remove("uil-eye");
          this.classList.add("uil-eye-slash");
        }
      });
    });
// ================== Popup Events ==================

// Toggle login popup
showLoginBtn.addEventListener("click", () => {
  const isHidden = formContainer.style.display === "none" || formContainer.style.display === "";
  if (isHidden) {
    formContainer.style.display = "block";
    overlay.style.display = "block";
    signupForm.style.display = "none";
    loginForm.style.display = "block";
  } else {
    formContainer.style.display = "none";
    overlay.style.display = "none";
  }
});

// Switch to signup
showSignupLink.addEventListener("click", (e) => {
  e.preventDefault();
  loginForm.style.display = "none";
  signupForm.style.display = "block";
});

// Switch back to login
showLoginLink.addEventListener("click", (e) => {
  e.preventDefault();
  signupForm.style.display = "none";
  loginForm.style.display = "block";
});

// Close popup
closeBtn.addEventListener("click", () => {
  formContainer.style.display = "none";
  overlay.style.display = "none";
});

// Close if overlay clicked
overlay.addEventListener("click", () => {
  formContainer.style.display = "none";
  overlay.style.display = "none";
});
