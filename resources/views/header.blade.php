
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision</title>
    <!-- link font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link style file -->
    <link rel="stylesheet" href="{{asset('assets/Style/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Style/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Style/contact.css')}}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    <!-- start header -->
    <header class="margin-bottom">
        <!-- start navbar section -->
        <nav class="navbar navbar-expand-lg navbar-dark fw-bold">
            <div class="container">
                <a class="navbar-brand fs-3" href="{{route('home')}}">
                    <img src="{{asset('assets/imgs/logo-white-transparent.png')}}" class="nav-img-1" alt="">
                    <img src="imgs/letterhead (1).png" class="nav-img-2" alt="">
                    <span data-lang="rouya">Vision</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}" lang="en" data-lang="home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('home.serves')}}" id="navbarDropdown" aria-expanded="false" data-lang="ourServices">
                                Our services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('serves.researchAndDevelopment')}}" data-lang="dropdownItem1"></a></li>
                                <li><a class="dropdown-item" href="{{route('serves.networks')}}" data-lang="dropdownItem2"></a></li>
                                <li><a class="dropdown-item" href="vpn.html" data-lang="dropdownItem3"></a></li>
                                <li><a class="dropdown-item" href="{{route('serves.backup')}}" data-lang="dropdownItem4"></a></li>
                                <li><a class="dropdown-item" href="#" data-lang="dropdownItem5"></a></li>
                                <li><a class="dropdown-item" href="#" data-lang="dropdownItem6"></a></li>
                                <li><a class="dropdown-item" href="#" data-lang="dropdownItem7"></a></li>
                                <li><a class="dropdown-item" href="#" data-lang="dropdownItem8"></a></li>
                                <li><a class="dropdown-item" href="#" data-lang="dropdownItem9"></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('home.clints')}}" data-lang="ourClients">Our clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="whoWeAre.html" data-lang="aboutUs">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('contactpage')}}" data-lang="contactUs">Contact us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li>
                            <select id="language-selector">
                                <div>
                                    <option value="en" data-lang="english" selected>English</option>
                                    <option class="arOption" value="ar" data-lang="arabic">Arabic</option>
                                </div>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </nav >
        <!-- end navbar section -->

        <!-- start hero section -->
        <div class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <h2 data-lang="textContent">We exist to help people live better with artificial intelligence</h2>
                </div>
            </div>
        </div>
        <!-- end hero section -->
    </header>


@yield ('content')
    <!-- start newsletter-section -->
    <section class="newsletter py-4 margin-bottom">
        <div class="container d-flex justify-content-between">
            <div class="newsText text-white">
                <h3 class="text-capitalize" data-lang="newsletterH3"></h3>
                <p data-lang="newsletterP"></p>
            </div>
            <div class="form">
                <form action="{{route('home.sendmail')}}" method="post">
                    @csrf
                <input type="text" name="email" placeholder="Enter your e-mail to subscribe">
                <button>Submit</button>
                </form>
            </div>
        </div>
    </section>
    <!-- start newsletter-section -->



    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img class="logo" src="{{asset('assets/imgs/letterhead (1).png')}}" alt=""><span class="rouya" data-lang="rouya"></span>
                        <h4 class="mt-4">contact</h4>
                        <p><span>address:</span>Makkah</p>
                        <p><span>phone:</span> +966 54 454 2828</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h4 class="mt-4">about</h4>
                        <a href="#">about us</a>
                        <a href="#">delivary information</a>
                        <a href="#">our services</a>
                        <a href="#">contact us</a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h4 class="mt-4">follow us</h4>
                        <div class="socialIcons">
                          <a href="">  <i class="fa-brands fa-facebook-f"></i></a>
                          <a href=""> <i class="fa-brands fa-instagram"></i></a>
                          <a href="">  <i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container text-capitalize text-center">
                        &copy;2023 All right with Vision
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->




    <!-- links js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


    <!-- link js file -->
    <script src="{{asset('assets/js/mainfront.js')}}" type="module"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>