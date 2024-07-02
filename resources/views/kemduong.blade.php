<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Tools</title>
    <link rel="stylesheet" href="frontend/Ws_Tatto/css/reset.css">
    <link rel="stylesheet" href="frontend/Ws_Tatto/css/tool.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-...your-integrity-hash..." />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-...your-integrity-hash..." crossorigin="anonymous" />
</head>
<body>
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar">
                <a href="" class="nav-branding">
                    <video id="logoVideo"  autoplay loop muted>
                        <source src="frontend/Ws_Tatto/img/icon.mp4" type="video/mp4">
                    </video>
                </a>


                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="{{URL::to('/')}}" class="nav-link">Home</a>
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
                        <a href="#Booking" class="nav-link">Booking</a>
                    </li>
                </ul>
                <div class="hambuger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <div class="btn-group">
                    <button class="btn-form">
                        <a href="{{URL::to('signin')}}">Log in</a>
                    </button>
                    <button class="btn-form">
                        <a href="{{URL::to('signup')}}">Sign Up</a>
                    </button>
                </div>


            </nav>
        </div>
    </div>
    <section id="vd_Heading">
        <div id="video-container">
            <img id="background-video" src="frontend/Ws_Tatto/img/tools.png" alt="">
        </div>
        <div class="video-title">

            <h2>Tattoo Tools</h2>
            <p>All products of David D Tattooist in here</p>
            <button class="btnBooking">
                <a href="/" class="btn-text">Buy Now</a>
            </button>
        </div>
    </section>

    <main>
        <section id="productShow-card">
            <div class="container">
                <div class="text-title">
                    <h2 class="heading --h2" style="text-align: center;">Tattoo products</h2>
                </div>
                <div class="main-card">
                    <div class="main-card grid">
                        <div class="box-product">
                            <div class="box-container">
                                <div class="main-box">
                                    <div class="img-box">
                                        <img class="image-to-zoom" src="frontend/Ws_Tatto/img/kem.png" alt="">
                                    </div>
                                    <div class="zoom-overlay">
                                        <img src="frontend/Ws_Tatto/img/kem.png" alt="" class="zoomed-image">
                                    </div>
                                    <div class="content-box">
                                        <h2 class="text-box h2">
                                            INKTROX BỌT BIỂN - 200ML
                                        </h2>
                                        <p class="text-box p">
                                            Inktrox Bọt Biển - PAX là kem dưỡng bôi khi đang
                                            xăm hình với công thức độc đáo và độ mịn chưa từng có. 
                                            Inktrox PAX được làm ra với các thành phần hoàn toàn từ thiên nhiên.
                                            Bạn sẽ ngạc nhiên với công việc xăm của mình trở lên dễ dàng đến ...!
                                        </p>
                                        <div class="link-product">
                                            <button class="btn-product">
                                                <a class="text" href="">Mua ngay</a>
                                            </button>
                                            <button class="btn-product non-border">
                                                <a class="text" href="">Giá: 500.000đ</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-product">
                            <div class="box-container">
                                <div class="main-box">
                                    <div class="img-box">
                                        <img class="image-to-zoom" src="frontend/Ws_Tatto/img/kem.png" alt="">
                                    </div>
                                    <div class="zoom-overlay">
                                        <img src="frontend/Ws_Tatto/img/kem.png" alt="" class="zoomed-image">
                                    </div>
                                    <div class="content-box">
                                        <h2 class="text-box h2">
                                            INKTROX BỌT BIỂN - 200ML
                                        </h2>
                                        <p class="text-box p">
                                            Inktrox Bọt Biển - PAX là kem dưỡng bôi khi đang
                                            xăm hình với công thức độc đáo và độ mịn chưa từng có. 
                                            Inktrox PAX được làm ra với các thành phần hoàn toàn từ thiên nhiên.
                                            Bạn sẽ ngạc nhiên với công việc xăm của mình trở lên dễ dàng đến ...!
                                        </p>
                                        <div class="link-product">
                                            <button class="btn-product">
                                                <a class="text" href="">Mua ngay</a>
                                            </button>
                                            <button class="btn-product non-border">
                                                <a class="text" href="">Giá: 500.000đ</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card grid">
                        <div class="box-product">
                            <div class="box-container">
                                <div class="main-box">
                                    <div class="img-box">
                                        <img class="image-to-zoom" src="frontend/Ws_Tatto/img/kem.png" alt="">
                                    </div>
                                    <div class="zoom-overlay">
                                        <img src="frontend/Ws_Tatto/img/kem.png" alt="" class="zoomed-image">
                                        
                                    </div>
                                    <div class="content-box">
                                        <h2 class="text-box h2">
                                            INKTROX BỌT BIỂN - 200ML
                                        </h2>
                                        <p class="text-box p">
                                            Inktrox Bọt Biển - PAX là kem dưỡng bôi khi đang
                                            xăm hình với công thức độc đáo và độ mịn chưa từng có. 
                                            Inktrox PAX được làm ra với các thành phần hoàn toàn từ thiên nhiên.
                                            Bạn sẽ ngạc nhiên với công việc xăm của mình trở lên dễ dàng đến ...!
                                        </p>
                                        <div class="link-product">
                                            <button class="btn-product">
                                                <a class="text" href="">Mua ngay</a>
                                            </button>
                                            <button class="btn-product non-border">
                                                <a class="text" href="">Giá: 500.000đ</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-product">
                            <div class="box-container">
                                <div class="main-box">
                                    <div class="img-box">
                                        <img class="image-to-zoom" src="frontend/Ws_Tatto/img/kem.png" alt="">
                                    </div>
                                    <div class="zoom-overlay">
                                        <img src="frontend/Ws_Tatto/img/kem.png" alt="Zoomed Image" class="zoomed-image">
                                        <button class="close-button">Close</button>
                                    </div>   

                                    <div class="content-box">
                                        <h2 class="text-box h2">
                                            INKTROX BỌT BIỂN - 200ML
                                        </h2>
                                        <p class="text-box p">
                                            Inktrox Bọt Biển - PAX là kem dưỡng bôi khi đang
                                            xăm hình với công thức độc đáo và độ mịn chưa từng có. 
                                            Inktrox PAX được làm ra với các thành phần hoàn toàn từ thiên nhiên.
                                            Bạn sẽ ngạc nhiên với công việc xăm của mình trở lên dễ dàng đến ...!
                                        </p>
                                        <div class="link-product">
                                            <button class="btn-product">
                                                <a class="text" href="">Mua ngay</a>
                                            </button>
                                            <button class="btn-product non-border">
                                                <a class="text" href="">Giá: 500.000đ</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card grid">
                        <div class="box-product">
                            <div class="box-container">
                                <div class="main-box">
                                    <div class="img-box">
                                        <img class="image-to-zoom" src="frontend/Ws_Tatto/img/kem.png" alt="">
                                    </div>
                                    <div class="zoom-overlay">
                                        <img src="frontend/Ws_Tatto/img/kem.png" alt="" class="zoomed-image">
                                    </div>
                                    <div class="content-box">
                                        <h2 class="text-box h2">
                                            INKTROX BỌT BIỂN - 200ML
                                        </h2>
                                        <p class="text-box p">
                                            Inktrox Bọt Biển - PAX là kem dưỡng bôi khi đang
                                            xăm hình với công thức độc đáo và độ mịn chưa từng có. 
                                            Inktrox PAX được làm ra với các thành phần hoàn toàn từ thiên nhiên.
                                            Bạn sẽ ngạc nhiên với công việc xăm của mình trở lên dễ dàng đến ...!
                                        </p>
                                        <div class="link-product">
                                            <button class="btn-product">
                                                <a class="text" href="">Mua ngay</a>
                                            </button>
                                            <button class="btn-product non-border">
                                                <a class="text" href="">Giá: 500.000đ</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-product">
                            <div class="box-container">
                                <div class="main-box">
                                    <div class="img-box">
                                        <img class="image-to-zoom" src="frontend/Ws_Tatto/img/kem.png" alt="">
                                    </div>
                                    <div class="zoom-overlay">
                                        <img src="frontend/Ws_Tatto/img/kem.png" alt="" class="zoomed-image">
                                    </div>
                                    <div class="content-box">
                                        <h2 class="text-box h2">
                                            INKTROX BỌT BIỂN - 200ML
                                        </h2>
                                        <p class="text-box p">
                                            Inktrox Bọt Biển - PAX là kem dưỡng bôi khi đang
                                            xăm hình với công thức độc đáo và độ mịn chưa từng có. 
                                            Inktrox PAX được làm ra với các thành phần hoàn toàn từ thiên nhiên.
                                            Bạn sẽ ngạc nhiên với công việc xăm của mình trở lên dễ dàng đến ...!
                                        </p>
                                        <div class="link-product">
                                            <button class="btn-product">
                                                <a class="text" href="">Mua ngay</a>
                                            </button>
                                            <button class="btn-product non-border">
                                                <a class="text" href="">Giá: 500.000đ</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer">
            <div class="container-fluid">

                <div class="footer-column">
                    <a href="home.html" title="David T Tattoist" class="">
                        <video id="logoVideo" autoplay loop muted>
                            <source src="frontend/Ws_Tatto/img/icon.mp4" type="video/mp4">
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