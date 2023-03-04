@extends ('header')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rouya</title>
    <!-- link font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link style file -->
    <link rel="stylesheet" href="{{asset('assets/Style/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Style/researchAndDevelopment.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Style/networks.css')}}">
    <!-- <link rel="stylesheet" href="style/ourServices.css"> -->
</head>
<body>
  =




    <!-- start IntroducingNetworks section -->
    <div class="IntroducingNetworks margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="IntroducingNetworks-img">
                            <h2 data-lang="IntroducingNetworksH2"></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="IntroducingNetworks-text">
                            <div class="text-arb" data-lang="IntroducingNetworksText"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end IntroducingNetworks section -->






    <!-- start NetworkForms section -->
    <div class="NetworkForms margin-bottom reveal">
        <div class="container">
            <div class="box">
                <h2 data-lang="NetworkFormsH2"></h2>
                <p data-lang="NetworkFormsP"></p>
                <ul>
                    <li data-lang="NetworkFormsLI1"></li>
                    <li data-lang="NetworkFormsLI2"></li>
                    <li data-lang="NetworkFormsLI3"></li>
                    <li data-lang="NetworkFormsLI4"></li>
                    <li data-lang="NetworkFormsLI5"></li>
                    <li data-lang="NetworkFormsLI6"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end NetworkForms section -->





    <!-- start NetworkTypes section -->
    <div class="NetworkTypes margin-bottom reveal">
        <div class="container">
            <div class="box">
                <h2 data-lang="NetworkTypesH2"></h2>
                <p data-lang="NetworkTypesP"></p>
                <ul>
                    <li data-lang="NetworkTypesLI1"></li>
                    <li data-lang="NetworkTypesLI2"></li>
                    <li data-lang="NetworkTypesLI3"></li>
                    <li data-lang="NetworkTypesLI4"></li>
                    <li data-lang="NetworkTypesLI5"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end NetworkTypes section -->





    <!-- start NetworkBenefits section -->
    <div class="NetworkBenefits margin-bottom reveal">
        <div class="container">
            <div class="box">
                <h2 data-lang="NetworkBenefitsH2"></h2>
                <p data-lang="NetworkBenefitsP"></p>
                <ul>
                    <li data-lang="NetworkBenefitsLI1"></li>
                    <li data-lang="NetworkBenefitsLI2"></li>
                    <li data-lang="NetworkBenefitsLI3"></li>
                    <li data-lang="NetworkBenefitsLI4"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end NetworkTypes section -->

    <!-- links js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


    <!-- link js file -->
    <script src="js/main.js"></script>
</body>
</html>
@endsection
