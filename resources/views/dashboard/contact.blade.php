<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <!-- add font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- add google-fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- link bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link css file -->
    <link rel="stylesheet" href="{{asset('assets/Style/client-dashboard.css')}}">

</head>

<body>
    <div class="containers">
        <div class="navigation">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="./">
                        <span class="icon">
                            <img src="{{asset('assets/image/letterhead (1).png')}}" width="50" height="50" alt=""
                                srcset="">
                        </span>
                        <span class="title">vision</span>
                    </a>
                </li>
                <li class="nav-item active" data-content=".DeviceRunning">
                    <a class="nav-link" href="{{route('contactpage.index')}}">
                        <span class="icon">
                            <i class="fa-solid fa-power-off"></i>
                        </span>
                        <span class="title">Contact Request</span>
                    </a>
                </li>
                <li class="nav-item" data-content=".Calendar">
                    <a class="nav-link" href="./">
                        <span class="icon">
                            <i class="fa-regular fa-calendar-check"></i>
                        </span>
                        <span class="title">Calendar</span>
                    </a>
                </li>
                <li class="nav-item" data-content=".Dashboard">
                    <a class="nav-link" href="./">
                        <span class="icon">
                            <i class="fa-solid fa-gauge"></i>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" data-content=".Account">
                    <a class="nav-link" href="./">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="title">Account</span>
                    </a>
                </li>
                <li class="nav-item" data-content=".HomeDetails">
                    <a class="nav-link" href="./">
                        <span class="icon">
                            <i class="fa-solid fa-house-user"></i>
                        </span>
                        <span class="title">Home Details</span>
                    </a>
                </li>
                <li class="nav-item" data-content=".Help">
                    <a class="nav-link" href="./">
                        <span class="icon">
                            <i class="fa-regular fa-circle-question"></i>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li class="nav-item" data-content=".Invite">
                    <a class="nav-link" href="./">
                        <span class="icon">
                            <i class="fa-solid fa-user-group"></i>
                        </span>
                        <span class="title">Invite Friends</span>
                    </a>
                </li>
                <li class="nav-item" data-content=".Privacy">
                    <a class="nav-link" href="./">
                        <span class="icon">
                            <i class="fa-solid fa-asterisk"></i>
                        </span>
                        <span class="title">Terms & Privacy</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main">
            <div class="topBar">
                <div class="toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="client-img">
                    <img src="../Images/client-dashboard page/close-up-young-successful-man-smiling-camera-standing-casual-outfit-against-blue-background.jpg"
                        alt="">
                </div>
            </div>
            <!-- tabs content -->
            <div class="tabs-content">
                <div class="tab DeviceRunning">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                                <th scope="col">name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">message</th>
                            </tr>
                        </thead>
                        @foreach ($custmers as $custmer)
                        <tbody>
                        <th scope="row">{{$custmer->id}}</th>

                        <th scope="row">{{$custmer->name}}</th>
                                <td>{{$custmer->email}}</td>
                                <td>{{$custmer->subject}}</td>
                                <td>{{$custmer->message}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
              
              
           
            
            
               
            </div>
        </div>
    </div>






    <!-- link bundle-bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- link popper-bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>

    <!-- link js file -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>