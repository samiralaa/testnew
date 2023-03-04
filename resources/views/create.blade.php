@extends('header')

@section('content')

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rouya | Contact</title>
    <!-- link font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link style file -->
    <link rel="stylesheet" href="{{asset('assets/Style/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Style/contact.css')}}">
</head>
<body>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

    <!-- start form-detaols-section -->
    <div id="form-details" class="margin-bottom">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-12">
                       <form action="{{route('contactpage.store')}}" method="post">
                            @csrf
                            <span class="text-uppercase fw-bold" data-lang="formDetailsSpan"></span>
                            <h2 class="text-capitalize" data-lang="formDetailsH2"></h2>
                            <input type="text" name="name" placeholder="Your Name">
                            <input type="email" name="email" placeholder="E-mail">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Messsage"></textarea>
                            <button class="btn" data-lang="formMessage"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end form-detaols-section -->





    <!-- start contact-details-section -->
    <div class="contact-details margin-bottom">
        <div class="container">
            <div class="box">
                <div class="row">
                    <h1 class="text-capitalize fw-bold" data-lang="contactH1"></h1>
                    <div class="col-md-6 col-sm-12">
                        <div class="details mt-5">
                            <div>
                                <li class="d-flex">
                                    <i class="fa-solid fa-earth-americas"></i>
                                    <p>www.vision-things.com</p>
                                </li>
                                <li class="d-flex">
                                    <i class="fa-regular fa-envelope"></i>
                                    <p>info@vision-things.com</p>
                                </li>
                                <li class="d-flex">
                                    <i class="fa-solid fa-phone"></i>
                                    <p>+966 54 454 2828</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="details mt-5">
                            <div>
                                <li class="d-flex">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <p>vision.things.it</p>
                                </li>
                                <li class="d-flex">
                                    <i class="fa-brands fa-instagram"></i>
                                    <p>vision.things.it</p>
                                </li>
                                <li class="d-flex">
                                    <i class="fa-brands fa-snapchat"></i>
                                    <p>vision.things.it</p>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact-details-section -->
    <!-- links js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


    <!-- link js file -->
  
</body>
</html>

@endsection