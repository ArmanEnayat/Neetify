console.log('Hello World!');

const loginForm = document.querySelector(".loginForm");

const signupForm = document.querySelector(".signupForm");

const loginButton = document.querySelector(".loginSlide");

const signupButton = document.querySelector(".signupSlide");

const signupLink = document.querySelector(".signupPageLink a");

const signupText = document.querySelector(".titleText .signup");

const loginText = document.querySelector(".titleText .login");

const alertText = document.querySelector(".alert");

const alertGText = document.querySelector(".alertG");

const alertRText = document.querySelector(".alertR");

const close = document.querySelector(".close");

const closeG = document.querySelector(".closeG");

const closeR = document.querySelector(".closeR");

const ham = document.querySelector("#ham");

const nav = document.querySelector(".navUl");

signupButton.onclick = (() =>{
  loginForm.style.marginLeft = "-50%";
  loginForm.style.display = "none";
  signupForm.style.display = "block";
  loginText.style.marginLeft = "-50%";
  console.log("working");
});

loginButton.onclick = (() => {
    loginForm.style.marginLeft = "0%";
    loginForm.style.display = "block";
    signupForm.style.display = "none";
    loginText.style.marginLeft = "0%"
});

signupLink.onclick = (() => {
  signupButton.click();
});

close.onclick = (() => {
    alertText.classList.remove("show");
    alertText.classList.add("hide");
});

closeG.onclick = (() => {
    
    alertGText.classList.remove("show");
    alertGText.classList.add("hide");
    
    /* One Way Of Doing*/
    alertGText.style.display = "none";
});

closeR.onclick = (() => {
    alertRText.classList.remove("show");
    alertRText.classList.add("hide");
    
    alertRText.style.display = "none";
});

$('#ham').click(function(){
    $('nav .nav ul').addClass('active');
});

$('#hamClose').click(function() {
    $('nav .nav ul').removeClass('active');
});
