<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicon@2.1/css/boxicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="frontend/SignUp/css/reset.css">
    <link rel="stylesheet" href="frontend/SignUp/css/sigin.css">
    <link rel="stylesheet" href="frontend/SignUp/img/icon.mp4">
</head>

<body>
    <div class="form-container">
        <div class="col col-1">
            <p class="featured-title">Welcome To DavidTtattoos</p>
            <div class="img-layer">
                <video class="form-img-main" autoplay loop muted>
                    <source src="frontend/SignUp/img/icon.mp4" type="video/mp4">
                </video>
            </div>
            <p class="featured-words">Create by <span>Mr.David</span> <br>All right Reserved</p>
        </div>
        <!--############# Register Form ###########-->
        <form id="registerForm" class="active" action="{{URL::to('/create-signup')}}" method="POST">
            @csrf
            <div class="register-form">
                <div class="form-title1">
                    <span>Sign up</span>
                </div>
                <div class="form-input">
                    <div class="input-box">
                        <input type="text" name="customer_name" class="input-fileld" placeholder="User Name" required>
                        <i class="fas fa-user"></i>
                        <p class="error-msg" style="color: red;"></p>
                    </div>
                    <div class="input-box">
                        <input type="text" name="customer_email" class="input-fileld" placeholder="Email" id="inputField" required>
                        <i class="fas fa-envelope"></i>
                        <p class="error-msg" style="color: red;"></p>
                    </div>
                    <div class="input-box">
                        <input type="text" name="customer_phone" class="input-fileld" placeholder="Số điện thoại" id="inputField" required>
                        <i class="fas fa-envelope"></i>
                        <p class="error-msg" style="color: red;"></p>
                    </div>
                    <div class="input-box">
                        <input type="password" name='customer_password'class="input-fileld" placeholder="Password" id="ipnPasswordSignUp" on
                            input="handleInput ()" required>
                        <i class="fas fa-eye" id="btnPasswordSignUp" style="cursor: pointer;"></i>
                        <p class="error-msg" style="color: red;"></p>
                    </div>
                    {{-- <div class="input-box">
                        <input type="password" name="confirm_password" class="input-fileld" placeholder="Confirm Password"
                            id="ipnRePasswordSignUp" on input="handleInput ()" required>
                        <i class="fas fa-eye" id="btnRePasswordSignUp" style="cursor: pointer;"></i>
                        <p id="errorMsg" class="error-msg" style="color: red;"></p>
                    </div> --}}
                    <div class="forget-pass">
                        <a href="#">Forget Password</a>
                    </div>
                    <div class="input-box">
                        <button id="registerBtnSubmit" class="input-submit">
                            <span>Sign up</span>
                        </button>
                    </div>
                    <!-- <form action="php" method="post">
                    </form> -->
                    <div class="social-login">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </div>
                </div>
            </div>
        </form>

    </div>
</body>
<script src="frontend/SignUp/script.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
  // Get the necessary elements
  const passwordInput = document.getElementById('ipnPasswordSignUp');
  const togglePasswordBtn = document.getElementById('btnPasswordSignUp');
  const rePasswordInput = document.getElementById('ipnRePasswordSignUp');
  const toggleRePasswordBtn = document.getElementById('btnRePasswordSignUp');
  const errorMsg = document.querySelectorAll('.error-msg');

  // Add event listener to the toggle password button
  togglePasswordBtn.addEventListener('click', () => {
    togglePasswordVisibility(passwordInput, togglePasswordBtn);
  });

  // Add event listener to the toggle confirm password button
  toggleRePasswordBtn.addEventListener('click', () => {
    togglePasswordVisibility(rePasswordInput, toggleRePasswordBtn);
  });

  // Add event listener to the password input field
  passwordInput.addEventListener('input', () => {
    handleInput(errorMsg[0]);
  });

  // Add event listener to the confirm password input field
  rePasswordInput.addEventListener('input', () => {
    handleInput(errorMsg[1]);
  });

  function togglePasswordVisibility(input, button) {
    // Toggle the password input type
    const currentType = input.getAttribute('type');
    input.setAttribute('type', currentType === 'password' ? 'text' : 'password');

    // Toggle the button icon
    button.classList.toggle('fa-eye');
    button.classList.toggle('fa-eye-slash');
  }

  function handleInput(errorMsg) {
    // Clear the error message
    errorMsg.textContent = '';
  }
});

</script>

</html>