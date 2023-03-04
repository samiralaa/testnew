@extends('header')

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
    <link rel="stylesheet" href="{{asset('assets/Style/backup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Style/networks.css')}}">
</head>
<body>
 





    <!-- start DefinitionOfBackup section -->
    <div class="DefinitionOfBackup margin-bottom reveal">
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="DefinitionOfBackup-img">
                            <h3 data-lang="DefinitionOfBackupH3"></h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="DefinitionOfBackup-text">
                            <div class="text-arb">
                                <span data-lang="DefinitionOfBackupSpan1"></span>
                                <br>
                                <br>
                                <span data-lang="DefinitionOfBackupSpan2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end IntroducingNetworks section -->





    <!-- start NetworkTypes section -->
    <div class="NetworkTypes margin-bottom reveal">
        <div class="container">
            <div class="box">
                <h2 data-lang="netH2"></h2>
                <ul>
                    <li data-lang="netLI1"></li>
                    <li data-lang="netLI2"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end NetworkTypes section -->








    <!-- links js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


    <!-- link js file -->
    <script src="{{asset('assets/js/mainfront.js')}}"></script>
</body>
</html>
@endsection