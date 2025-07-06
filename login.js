const formOpenBtn = document.querySelector ("#form-open"),
home = document.querySelector (".home"),
formContainer = document.querySelector (".form_container"),
CloseIconBtn = document.querySelector (".Close_icon"), 
signupBtn = document.querySelector ("#signup"),
loginBtn = document.querySelector ("#signup"),
pwShowHide = document.querySelectorAll (".pw_hide");

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
CloseIconBtn.addEventListener("click", () => home.classList.remove("show"));
