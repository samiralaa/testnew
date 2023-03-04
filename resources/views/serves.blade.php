



@extends('header')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@section('content')

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rouya | services</title>
    <!-- link font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link style file -->
    <link rel="stylesheet" href="{{asset('assets/Style/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Style/ourServices.css')}}">
</head>
<body>
    <!-- start metavirus section -->
    <div class="metavirus margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2 data-lang="metaH2"></h2>
                            <p data-lang="metaP"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-img">
                            <img src="{{asset('assets/imgs/home/andy-kelly-0E_vhMVqL9g-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end metavirus section -->







    <!-- start Research-development section -->
    <div class="Research-development margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2 data-lang="researchH2"></h2>
                            <p class="Research-arb" data-lang="researchP"></p>
                        </div>
                        <div class="Research-development-list">
                            <div class="Research">
                                <i class="fa-solid fa-1"></i>
                                <span class="research-arb" data-lang="researchSpan1"></span>
                            </div>
                            <div class="Research">
                                <i class="fa-solid fa-2"></i>
                                <span class="research-arb" data-lang="researchSpan2"></span>
                            </div>
                            <div class="Research">
                                <i class="fa-solid fa-3"></i>
                                <span class="research-arb" data-lang="researchSpan3"></span>
                            </div>
                            <div class="Research">
                                <i class="fa-solid fa-4"></i>
                                <span class="research-arb" data-lang="researchSpan4"></span>
                            </div>
                            <div class="Research">
                                <i class="fa-solid fa-5"></i>
                                <span class="research-arb" data-lang="researchSpan5"></span>
                            </div>
                            <div class="Research">
                                <i class="fa-solid fa-6"></i>
                                <span class="research-arb" data-lang="researchSpan6"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-img">
                        <img src="{{asset('assets/imgs/home/sigmund-2qd9noyeuRE-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Research-development section -->





    <!-- start networks section -->
    <div class="networks margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 colsm-12">
                        <div class="content-text">
                            <h2 data-lang="networksH2"></h2>
                            <h4 data-lang="networksH4"></h4>
                                <ul>
                                    <li data-lang="networksLi1"></li>
                                    <li data-lang="networksLi2"></li>
                                    <li data-lang="networksLi3"></li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-img">
                        <img src="{{asset('assets/imgs/home/ian-battaglia-9drS5E_Rguc-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end networks section -->





    <!-- start vpn section -->
    <div class="vpn margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2 data-lang="vpnH2"></h2>
                            <p>نركب أحدث أجهزة الربط بين المواقع عن طريق وذلك من أجل ربط جميع المواقع والفروع في شبكة واحدة مؤمنة</p>
                        </div>
                    </div>
                    <div class="col-md-4 colsm-12">
                        <div class="content-img">
                        <img src="{{asset('assets/imgs/home/marvin-meyer-SYTO3xs06fU-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end vpn section -->


    <!-- start Backup section -->
    <div class="Backup margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2 data-lang="BackupH2"></h2>
                            <p data-lang="BackupP"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-img">
                        <img src="{{asset('assets/imgs/home/stephen-phillips-hostreviews-co-uk-shr_Xn8S8QU-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Backup section -->






    <!-- start cloudComputing section -->
    <div class="cloudComputing margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2 data-lang="cloudComputingH2"></h2>
                            <p data-lang="cloudComputingP"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-img">
                        <img src="{{asset('assets/imgs/home/sigmund-xLZ9EP4hJtQ-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cloudComputing section -->



    <!-- start securityCameras section -->
    <div class="securityCameras margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2 data-lang="securityCamerasH2"></h2>
                            <p data-lang="securityCamerasP"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-img">
                        <img src="{{asset('assets/imgs/home/arno-senoner-42t-DKecmPk-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end securityCameras section -->



    <!-- start smartHomes section -->
    <div class="smartHomes margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2 data-lang="smartHomesH2"></h2>
                            <p data-lang="smartHomesP"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-img">
                        <img src="{{asset('assets/imgs/home/sebastian-scholz-nuki-IJkSskfEqrM-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end smartHomes section -->



    <!-- start CommunicationCenters section -->
    <div class="CommunicationCenters margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="content-text">
                            <h2 data-lang="CommunicationCentersH2"></h2>
                            <p data-lang="CommunicationCentersP1"></p>
                            <p data-lang="CommunicationCentersP2"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="content-img">
                        <img src="{{asset('assets/imgs/home/arif-riyanto-vJP-wZ6hGBg-unsplash.jpg')}}" class="mt-20" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end CommunicationCenters section -->




        <!-- start Security section -->
        <div class="Security margin-bottom reveal">
            <div class="container">
                <div class="box">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="content-text">
                                <h2 data-lang="SecurityH2"></h2>
                                <p data-lang="SecurityP"></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="content-img">
                            <img src="{{asset('assets/imgs/home/fly-d-mT7lXZPjk7U-unsplash.jpg')}}" class="mt-20" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Security section -->






  





    <!-- links js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


    <!-- link js file -->
  
</body>
</html>

    @endsection