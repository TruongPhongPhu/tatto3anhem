<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David T Tattoo</title>
    <link rel="stylesheet" href="frontend/css/reset.css">
    <link rel="stylesheet" href="frontend/css/home.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-...your-integrity-hash..." />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-...your-integrity-hash..." crossorigin="anonymous" />
    <!-- reponsive -->
    <!-- <link rel="stylesheet" media="screen and (min-width: 900px)" href="widescreen.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="smallscreen.css"> -->
</head>

<body>
    {{-- <header>
        <div class="nav-bar">
            <div class="container-fluid">
                <div class="header">
                    <a href="{{URL::to('/')}}" title="David T Tattoist" class="header__logo">
                        <video id="logoVideo" width="100%" height="62" autoplay loop muted>
                            <source src="frontend/img/icon.mp4" type="video/mp4">
                        </video>
                    </a>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__list-item">
                                <a href="{{URL::to('/')}}" class="option">Home</a>
                            </li>

                            <li class="menu__list-item--drop">
                                <a href="#TacPham" class="option">
                                    <span>ArtWork</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                        viewBox="0 0 10 10" fill="none">
                                        <path d="M8.75 3.5L5 7.25L1.25 3.5" stroke="#5A5A5A" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                                <ul class="sub-menu">
                                    <li class="show">
                                        <a href="{{URL::to('/product')}}">
                                            <span>Tác phẩm xăm</span>
                                        </a>
                                    </li>
                                    <li class="show">
                                        <a href="#TacPhamTranh">
                                            <span>Tác phẩm tranh</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="menu__list-item--drop">
                                <a href="#SanPham" class="option">
                                    <span>Sản Phẩm</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                        viewBox="0 0 10 10" fill="none">
                                        <path d="M8.75 3.5L5 7.25L1.25 3.5" stroke="#5A5A5A" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                                <ul class="sub-menu">
                                    <li class="show">
                                        <a href="{{URL::to('/kemduong')}}">
                                            <span>Kem dưỡng</span>
                                        </a>
                                    </li>
                                    <li class="show">
                                        <a href="#DungCuXam">
                                            <span>Dụng cụ xăm</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__list-item">
                                <a href="#worker" class="option">
                                    <span>Tattoist</span>

                                </a>
                            </li>
                            <li class="menu__list-item--drop">
                                <a href="#contact" class="option">
                                    <span>Liên hệ</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                        viewBox="0 0 10 10" fill="none">
                                        <path d="M8.75 3.5L5 7.25L1.25 3.5" stroke="#5A5A5A" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                                <ul class="sub-menu">
                                    <li class="show">
                                        <a href="#TuVan">
                                            <span>Tư vấn</span>
                                        </a>
                                    </li>
                                    <li class="show">
                                        <a href="#CSKH">
                                            <span>CSKH</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu__list-item">
                                <a href="{{ route('home.bookingform') }}" class="option">
                                    <span>Booking</span>

                                </a>
                            </li>
                        </ul>
                    </nav>
                    <form >
                    <div class="btn-group">
                        <button class="btn --transparent">
                            <a href="{{URL::to('/signin')}}">Log in</a>
                        </button>
                        <button class="btn --black">
                            <a href="{{URL::to('/signup')}}">Sign Up</a>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <section id="vd_Heading">
            <div id="video-container">
                <video id="background-video" autoplay loop muted>
                    <source
                        src="frontend/img/y2mate.com - TIME  DAVID T  TATTOO FILM_1080p.mp4">
                    </source>
                </video>
                
                <div class="video-title">
                    <div class="container-fluid">
                        <h2>Welcome to David T Tattoist</h2>
                        <p>The private studio in VietNAM</p>
                        <button class="btnBooking">
                            <a href="{{ route('home.bookingform') }}" class="btn-text">Booking Now</a>
                        </button>

                    </div>
                </div>

            </div>


        </section>
    </header> --}}
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar">
                <a href="{{URL::to('/')}}" class="nav-branding">
                    <video id="logoVideo" autoplay loop muted>
                        <source src="frontend/img/icon.mp4" type="video/mp4">
                    </video>
                </a>


                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="{{URL::to('/customer2')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item drop">
                        <a href="#Artwork" class="nav-link">ArtWork
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <path d="M8.75 3.5L5 7.25L1.25 3.5" stroke="#5A5A5A" stroke-width="1.3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <ul class="sub-menu">
                                <li class="show">
                                    <a href="{{URL::to('/product2')}}">
                                        <span>Tác phẩm xăm</span>
                                    </a>
                                </li>
                                <li class="show">
                                    <a href="#TacPhamTranh">
                                        <span>Tác phẩm tranh</span>
                                    </a>
                                </li>
                            </ul>
                        </a>

                    </li>
                    <li class="nav-item drop">
                        <a href="#Product" class="nav-link">Product
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <path d="M8.75 3.5L5 7.25L1.25 3.5" stroke="#5A5A5A" stroke-width="1.3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <ul class="sub-menu">
                                <li class="show">
                                    <a href="{{URL::to('/kemduong2')}}">
                                        <span>Kem dưỡng</span>
                                    </a>
                                </li>
                                <li class="show">
                                    <a href="#DungCuXam">
                                        <span>Dụng cụ xăm</span>
                                    </a>
                                </li>
                            </ul>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="#Tattoist" class="nav-link">Tattoist</a>
                    </li>
                    <li class="nav-item drop">
                        <a href="#Contact" class="nav-link">Contact
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <path d="M8.75 3.5L5 7.25L1.25 3.5" stroke="#5A5A5A" stroke-width="1.3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <ul class="sub-menu">
                                <li class="show">
                                    <a href="#TuVan">
                                        <span>Tư vấn</span>
                                    </a>
                                </li>
                                <li class="show">
                                    <a href="#CSKH">
                                        <span>CSKH</span>
                                    </a>
                                </li>
                            </ul>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ route('home.bookingform') }}" class="nav-link">Booking</a>
                    </li>
                </ul>
                <div class="hambuger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <div style="color: white" class="btn-group">
                    <?php
                    $name=Session::get('name');
                    if($name){
                        echo $name;
                    }
                    ?> 
                    <button style="margin-inline: 10px" class="btn-form">
                        <a href="{{URL::to('/logout')}}">Log out</a>
                    </button>
                </div>


            </nav>
        </div>
    </div>
    <section id="vd_Heading">
        <div id="video-container">
            <video id="background-video" autoplay loop muted>
                <source src="frontend/img/y2mate.com - TIME  DAVID T  TATTOO FILM_1080p.mp4">
            </video>

            <div class="video-title">
                <div class="container-fluid">
                    <h2>Welcome to David T Tattoist</h2>
                    <p>The private studio in VietNam</p>
                    <button class="btnBooking">
                        <a href="{{ route('home.bookingform') }}" class="btn-text">Booking Now</a>
                    </button>

                </div>
            </div>

        </div>


    </section>
    <main>
        <section id="introduce">
            <div class="container">
                <div class="content-ideas">
                    <div class="content--main">
                        <h2 class="heading --h2">
                            DAVID T TATTOOIST
                        </h2>
                        <p class="text --main">
                            David T Tattoist được thành lập tù những nghệ sĩ xăm tài năm đến từ mọi miền tổ quốc. Với
                            những thợ xăm nhiều năm kinh nghiệm và đoạt nhiều giải thưởng lớn nhỏ khác nhau. Chúng tôi
                            mong muốn mang đến cho bạn những giá trị nghệ thuật đến với bạn thông qua những đường nét
                            Tattoo được chạm khắc tinh tế bởi các nghệ sĩ của David T Tattoist.
                        </p>
                        <div class="content__btn --main">
                            <button class="btnBooking">
                                <a href="" class="btn-text">See more</a>
                            </button>
                        </div>
                    </div>
                    <div class="img-main">
                        <img src="frontend/img/icon.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="Tattoo">
            <div class="container">
                <div class="main-blog">
                    <div class="img-blog">
                        <img src="frontend/img/La-ma.jpg" alt="">
                    </div>
                    <div class="text-blog">
                        <h2 class="heading --h2">
                            Dịch vụ TATTOO
                        </h2>
                        <p class="text --main">
                            không gian sang trọng và riêng tư
                        </p>
                        <div class="content__btn --main">
                            <button class="btnBooking">
                                <a href="{{ route('home.bookingform') }}" class="btn-text">Booking</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Tattoist">
            <div class="container">
                <div class="main-blog">
                    <div class="img-blog">
                        <img src="frontend/img/Tattoist.jpg" alt="">
                    </div>
                    <div class="text-blog">
                        <h2 class="heading --h2">
                            Thợ xăm tay nghề xuất sắc và chuyên nghiệp
                        </h2>
                        <p class="text --main">
                            Anh Tuấn David là người có nhiều năm trong nghề và là người sáng lặp nên DavidTtattoos
                            Với nhiều sản phẩm xuất sắc và nhận được đánh giáo tích cực từ các vị khách.
                        </p>
                        <div class="content__btn --main">
                            <button class="btnBooking">
                                <a href="{{ route('home.bookingform') }}" class="btn-text">Booking</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Tranh">
            <div class="container">
                <div class="main-blog">
                    <div class="img-blog">
                        <img src="frontend/img/tranh.jpg" alt="">
                    </div>
                    <div class="text-blog">
                        <h2 class="heading --h2">
                            David T Tattooist Painting
                        </h2>
                        <p class="text --main">
                            Những bức tranh của David D Tattoist giúp cho góc của bạn trở nên đẹp hơn và tinh tế hơn.
                        </p>
                        <div class="content__btn --main">
                            <button class="btnBooking">
                                <a href="   " class="btn-text">Buy now</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="grid-view">
            <div class="container">
                <div class="grid-title">
                    <h2 class="heading --h2">Tattoo content</h2>
                </div>
                <div class="grid-container">
                    <div class="grid-item">
                        <video autoplay loop muted>
                            <source src="frontend/img/vd1.mp4" type="video/mp4">
                        </video>
                        <div class="caption">Caption for Video 1</div>
                    </div>
                    <div class="grid-item">
                        <video autoplay loop muted>
                            <source src="frontend/img/vd2.mp4" type="video/mp4">
                        </video>
                        <div class="caption">Caption for Video 2</div>
                    </div>
                    <!-- Thêm thêm các grid-item khác -->
                    <div class="grid-item">
                        <video autoplay loop muted>
                            <source src="frontend/img/vd3.mp4" type="video/mp4">
                        </video>
                        <div class="caption">Caption for Video 3</div>
                    </div>
                    <div class="grid-item">
                        <video autoplay loop muted>
                            <source src="frontend/img/vd4.mp4" type="video/mp4">
                        </video>
                        <div class="caption">Caption for Video 4</div>
                    </div>
                    <div class="grid-item">
                        <video autoplay loop muted>
                            <source
                                src="frontend/img/SAI GON _ DAVID T _ TATTOO FILM.mp4"
                                type="video/mp4">
                        </video>
                        <div class="caption">Caption for Video 5</div>
                    </div>
                    <div class="grid-item">
                        <video autoplay loop muted>
                            <source src="frontend/img/vd5.mp4" type="video/mp4">
                        </video>
                        <div class="caption">Caption for Video 6</div>
                    </div>
                </div>
                <div class="btn-seemore">
                    <button class="arrow-button">
                        <a href="{{URL::to('/product')}}" class="btn-text">See more Tattoo</a>
                    </button>
                </div>

                <!-- Thêm các grid item khác tương tự -->
            </div>
        </section>
        <section id="question">
            <div class="container">
                <h2 class="heading --h2">Các câu hỏi thường gặp</h2>
                <p>In this example we have added a "plus" sign to each button. When the user clicks on the button, the
                    "plus" sign is replaced with a "minus" sign.</p>
                <button class="accordion">Câu hỏi 1</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Câu hỏi 2</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Câu hỏi 3</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer">
            <div class="container">

                <div class="footer-column">
                    <a href="home.html" title="David T Tattoist" class="">
                        <video id="logoVideo" width="100%" height="150px" autoplay loop muted>
                            <source src="frontend/img/icon.mp4" type="video/mp4">
                        </video>
                    </a>

                </div>
                <div class="footer-column">
                    <h3>Business Hours</h3>
                    <ul class="business-hours">
                        <li>Monday - Friday: 9am - 6pm</li>
                        <li>Saturday: 10am - 4pm</li>
                        <li>Sunday: Closed</li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact us Booking</h3>
                    <ul class="business-hours">
                        <p style="color: #777;">+84 36 809 8894</p>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Follow Us</h3>
                    <ul class="social-media">
                        <li>
                            <a href="#" class="facebook-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/david.t.tattooist?igsh=MTVjM2Y2ODQ3c2w1Yg=="
                                class="instagram-icon">
                                <i class="fab fa-instagram"></i>
                            </a>


                        </li>
                        <li>
                            <a href="https://www.youtube.com/@DavidTtattoos" class="youtube-icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <p style="color: white; text-align: center;padding-top: 25px; text-decoration: underline; ">© 2024 David T All
            Rights Reserved.</p>
    </footer>
</body>
<script src="frontend/Ws_Tatto/home.js"></script>

</html>