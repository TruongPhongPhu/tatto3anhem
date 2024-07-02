const loginBtn = document.querySelector("#login");
const registerBtn = document.querySelector("#register");
const loginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");


loginBtn.addEventListener('click', () => {
  loginBtn.style.backroundColor = "#29292adb";
  registerBtn.style.backroundColor = "rgba(0 , 0, 0, 0.2)";

  loginForm.style.left = "50%";
  registerForm.style.left = "-50%";

  loginForm.style.opacity = "1";
  registerForm.style.opacity = "0";

  document.querySelector(".col-1").style.borderRadius = "0 30% 20% 0";
})


registerBtn.addEventListener('click', () => {
  loginBtn.style.backroundColor = "rgb(255, 255, 255, 0.2)";
  registerBtn.style.backroundColor = "#29292adb";

  loginForm.style.left = "150%";
  registerForm.style.left = "50%";

  loginForm.style.opacity = "0";
  registerForm.style.opacity = "1";

  document.querySelector(".col-1").style.borderRadius = "0 20% 30% 0"
})
document.addEventListener('DOMContentLoaded', function () {
  const loginForm = document.getElementById('loginForm');
  const registerForm = document.getElementById('registerForm');
  const login = document.getElementById('login');
  const register = document.getElementById('register');

  // Chọn form đăng nhập làm form hiển thị mặc định
  loginForm.classList.add('active');

  login.addEventListener('click', function () {
    loginForm.classList.add('active');
    registerForm.classList.remove('active');
  });

  register.addEventListener('click', function () {
    registerForm.classList.add('active');
    loginForm.classList.remove('active');
  });
});


/// EYES

// step 1
const ipnElement = document.querySelector('#ipnPassword')
const btnElement = document.querySelector('#btnPassword')

// step 2
btnElement.addEventListener('click', function () {
  // step 3
  const currentType = ipnElement.getAttribute('type')
  // step 4
  ipnElement.setAttribute(
    'type',
    currentType === 'password' ? 'text' : 'password'
  )
})
// step 1
const ipnElementSu = document.querySelector('#ipnPasswordSignUp')
const btnElementSu = document.querySelector('#btnPasswordSignUp')

// step 2
btnElementSu.addEventListener('click', function () {
  // step 3
  const currentType = ipnElementSu.getAttribute('type')
  // step 4
  ipnElementSu.setAttribute(
    'type',
    currentType === 'password' ? 'text' : 'password'
  )
})


const ipnElementRe = document.querySelector('#ipnRePasswordSignUp')
const btnElementRe = document.querySelector('#btnRePasswordSignUp')

// step 2
btnElementRe.addEventListener('click', function () {
  // step 3
  const currentType = ipnElementRe.getAttribute('type')
  // step 4
  ipnElementRe.setAttribute(
    'type',
    currentType === 'password' ? 'text' : 'password'
  )
})

