{{-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="backend/test2/reset.css">
    <link rel="stylesheet" href="backend/test2/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicon@2.1/css/boxicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>
    <div class="form-container">
        <div class="col col-1">
            <p class="featured-title">Welcome To DavidTtattoos</p>
            <div class="img-layer">
                <img src="backend/test2/z5313054287002_f6affb1a8bdfc3bf53357e8040fd4565.jpg" alt="" class="form-img-main">
            </div>
            <p class="featured-words">Create by <span>Mr.David</span> <br>All right Reserved</p>
        </div>
        <div class="col col-2">
            <div class="btn-box">
                <button  class="btn btn-1" id="login" onclick="toggleButtons('login')">Sign in</button>
                 <button class="btn btn-2" id="register" onclick="toggleButtons('register')">Sign up</button>
            </div>

            <form id="loginForm" class="active" action="{{ route('auth.admin') }}" method="post">
                @csrf
                <div class="login-form">
                    <div class="form-title">
                        <span>Sign in</span>
                    </div>
                    <div class="form-input">
                        <div class="input-box">
                            <input type="text" name="email" class="input-fileld" placeholder="Email/SDT">
                            <i class="fas fa-envelope"></i>
                        </div>

                        @if ($errors->has('email'))
                            <span class="error-massage"> * {{
                                $errors->first('email') }}</span>
                        @endif

                        <div class="input-box">
                            <input type="password" name="password" class="input-fileld" placeholder="Password" id="ipnPassword" >
                            <i class="fas fa-eye" id="btnPassword" style="cursor: pointer;"></i>
  
                            @if ($errors->has('password'))
                            <span class="error-massage"> * {{
                                $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="forget-pass">
                            <a href="#">Forget Password</a>
                            
                        </div>
                        <form action="">
                            
                        </form>
                    </div>
                    <div class="social-login">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </div>
                </div>
            </form>

            <form id="registerForm">
                <div class="register-form">
                    <div class="form-title1">
                        <span>Sign up</span>
                    </div>
                    <div class="form-input">
                        <div class="input-box">
                            <input type="text" class="input-fileld" placeholder="User Name" required>
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-fileld" placeholder="Email/SDT" id="inputField" required>
                            <i class="fas fa-envelope"></i>

                        </div>
                        <div class="input-box">
                            <input type="password" class="input-fileld" placeholder="Password" id="ipnPasswordSignUp" on input="handleInput ()" required>
                            <i class="fas fa-eye" id="btnPasswordSignUp" style="cursor: pointer;"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" class="input-fileld" placeholder="Confirm Password" id="ipnRePasswordSignUp" on input="handleInput ()" required>
                            <i class="fas fa-eye" id="btnRePasswordSignUp" style="cursor: pointer;"></i>
                        </div>
                        <div class="forget-pass">
                            <a href="#">Forget Password</a>
                        </div>
                        <form action="php" method="post">
                            <div class="input-box">
                                <button onclick="checkPassWord() & checkMail()" class="input-submit">
                                    <span >Sign up</span>
                                    
                                </button>
                            </div>
                        </form>
                        <div class="social-login">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                        </div>
                    </div>  
                 </div>
            </form>
        </div>
    </div>
    
    <script src="backend/test2/script.js"></script>
    <script src="backend/test2/validator.js"></script>


</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
    <link rel="stylesheet" href="backend/test2/reset.css">
    <link rel="stylesheet" href="backend/test2/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicon@2.1/css/boxicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>
    <div class="form-container">
        <div class="col col-1">
            <p class="featured-title">Welcome To DavidTtattoos</p>
            <div class="img-layer">
                <img src="backend/test2//z5313054287002_f6affb1a8bdfc3bf53357e8040fd4565.jpg" alt="" class="form-img-main">
            </div>
            <p class="featured-words">Create by <span>Mr.David</span> <br>All right Reserved</p>
        </div>
        <div class="col col-2">
            <div class="btn-box">
                {{-- <button  class="btn btn-1" id="login" onclick="toggleButtons('login')">Sign in</button> --}}
                 {{-- <button class="btn btn-2" id="register" onclick="toggleButtons('register')">Sign up</button> --}}
            </div>
    
    
            <!--############# Login Form ###########-->
            <form id="loginForm" method="POST" class="active" action="{{ route('auth.login') }}" >
                @csrf
                <div class="login-form">
                    <div class="form-title">
                        <span>Sign in</span>
                    </div>
                    <div class="form-input">
                        <div class="input-box">
                            <input type="text" name='email' class="input-fileld" placeholder="Email/SDT" >
                            <i class="fas fa-envelope"></i>
                        </div>

                        @if ($errors->has('email'))
                            <span class="error-massage"> * {{
                                $errors->first('email') }}</span>
                        @endif

                        <div class="input-box">
                            <input type="password" name='password' class="input-fileld" placeholder="Password" id="ipnPassword" >
                            <i class="fas fa-eye" id="btnPassword" style="cursor: pointer;"></i>
                        </div>

                        @if ($errors->has('password'))
                            <span class="error-massage"> * {{
                                $errors->first('password') }}</span>
                        @endif

                        <div class="forget-pass">
                            <a href="#">Forget Password</a>
                            
                        </div>
                        <div class="input-box">
                            <button class="input-submit">
                                <span>Sign in</span>
                                <i class="bx bx-right-arrow-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="social-login">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </div>
                </div>
            </form>
    
             <!--############# Register Form ###########-->
            <form id="registerForm">
                <div class="register-form">
                    <div class="form-title1">
                        <span>Sign up</span>
                    </div>
                    <div class="form-input">
                        <div class="input-box">
                            <input type="text" class="input-fileld" placeholder="User Name" >
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-fileld" placeholder="Email/SDT" id="inputField" >
                            <i class="fas fa-envelope"></i>

                        </div>
                        <div class="input-box">
                            <input type="password" class="input-fileld" placeholder="Password" id="ipnPasswordSignUp" on input="handleInput ()" >
                            <i class="fas fa-eye" id="btnPasswordSignUp" style="cursor: pointer;"></i>
                        </div>
                        <div class="input-box">
                            <input type="password" class="input-fileld" placeholder="Confirm Password" id="ipnRePasswordSignUp" on input="handleInput ()" >
                            <i class="fas fa-eye" id="btnRePasswordSignUp" style="cursor: pointer;"></i>
                        </div>
                        <div class="forget-pass">
                            <a href="#">Forget Password</a>
                        </div>
                        <form action="php" method="post">
                            <div class="input-box">
                                <button onclick="checkPassWord() & checkMail()" class="input-submit">
                                    <span >Sign up</span>
                                    
                                </button>
                            </div>
                        </form>
                        <div class="social-login">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                        </div>
                    </div>  
                 </div>
            </form>
        </div>
    </div>
    
    <script src="backend/test2/script.js"></script>
    <script src="backend/test2/validator.js"></script>
    


</body>
</html>