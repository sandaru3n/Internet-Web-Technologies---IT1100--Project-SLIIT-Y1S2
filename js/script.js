const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const iconClose = document.querySelector('.icon-close');

const btnPopup = document.querySelector('.btnLogin-popup');
const btnPopup1 = document.querySelector('.btnSignup-popup');
const btnPopup2 = document.querySelector('.btnLogout-popup');


registerLink.addEventListener('click', () => {
  wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
  wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', () => {
  wrapper.classList.add('active-popup');
});

btnPopup1.addEventListener('click', () => {
  wrapper.classList.add('active-popup'); 
});

btnPopup2.addEventListener('click', () => {
  wrapper.classList.add('active-popup'); 
});


if (iconClose) {
  iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup'); 
  });
}


function redirectToLogin() {
  window.location.href = "https://remialert.quizfrenzy.com/userlogin.php";
}

function redirectToSignup() {
  window.location.href = "https://remialert.quizfrenzy.com/usersignup.php";
}

function redirectToLogout() {
  window.location.href = "https://remialert.quizfrenzy.com/userlogout.php"; 
}


const header = document.querySelector("header");


















