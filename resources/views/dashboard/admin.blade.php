<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <!-- add font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- add google-fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- link bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                          <img src="{{asset('assets/imgs/letterhead (1).png')}}" width="50" height="50" alt="" srcset="">
                        </span>
                        <span class="title">vision</span>
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
                        <span class="title">Projects</span>
                    </a>
                </li>
             
               
                <li class="nav-item active" data-content=".DeviceRunning">
                    <a class="nav-link" href="{{route('contactpage.index')}}">
                        <span class="icon">
                          <svg width="20px" height="20px" viewBox="0 -0.55 193.91 193.91" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a{fill:#c6c6c6;}.b{fill:#ffffff;}.c{fill:#211715;}</style></defs><path class="a" d="M7.1,71.4H186.877a4.6,4.6,0,0,1,4.6,4.6V47.825a4.6,4.6,0,0,1-4.6,4.6H7.1a4.6,4.6,0,0,1-4.6-4.6V76A4.6,4.6,0,0,1,7.1,71.4Z"></path><path class="a" d="M186.877,121.417H7.1a4.6,4.6,0,0,1-4.6-4.6V145a4.6,4.6,0,0,1,4.6-4.6H186.877a4.6,4.6,0,0,1,4.6,4.6V116.818A4.6,4.6,0,0,1,186.877,121.417Z"></path><rect class="b" x="2.504" y="2.41" width="188.972" height="50.014" rx="4.6"></rect><rect class="b" x="2.504" y="71.403" width="188.972" height="50.014" rx="4.6"></rect><rect class="b" x="2.504" y="140.395" width="188.972" height="50.014" rx="4.6"></rect><path class="c" d="M.1,46.825V144c0,3.088,4.8,3.094,4.8,0V46.825c0-3.089-4.8-3.094-4.8,0Z"></path><path class="c" d="M189.076,46.825V144c0,3.088,4.8,3.094,4.8,0V46.825c0-3.089-4.8-3.094-4.8,0Z"></path><path class="c" d="M7.1,4.81H177.179c3.171,0,6.344-.037,9.515,0a2.25,2.25,0,0,1,2.315,1.669,9.9,9.9,0,0,1,.067,2.271V21.018c0,8.769.029,17.538,0,26.307,0,1.417-.625,2.594-2.2,2.7-.173.012-.351,0-.524,0H8.316c-1.423,0-3.089.009-3.393-1.842A14.029,14.029,0,0,1,4.9,45.974V11.1c0-1.981-.768-6.177,2.2-6.286C10.183,4.7,10.2-.1,7.1.01a7.136,7.136,0,0,0-7,7.072C.08,8,.1,8.929.1,9.85V23.564C.1,31.631-.13,39.736.1,47.8c.124,4.263,3.49,7.024,7.587,7.024h167.6c3.7,0,7.4.014,11.106,0a7.19,7.19,0,0,0,7.479-7.1c.076-2.937,0-5.886,0-8.823V9.394c0-.789.025-1.583,0-2.371a7.126,7.126,0,0,0-7-7.013c-.742-.022-1.487,0-2.229,0H7.1C4.015.01,4.01,4.81,7.1,4.81Z"></path><path class="c" d="M110.985,25.017H26.652c-3.089,0-3.094,4.8,0,4.8h84.333c3.088,0,3.094-4.8,0-4.8Z"></path><path class="b" d="M160.426,18.8a8.444,8.444,0,0,1,8.611,8.559,8.3,8.3,0,0,1-8.612,8.719c-5.21,0-8.612-3.589-8.612-8.719A8.437,8.437,0,0,1,160.426,18.8Z"></path><path class="b" d="M160.426,87.793a8.444,8.444,0,0,1,8.611,8.559,8.3,8.3,0,0,1-8.612,8.72c-5.21,0-8.612-3.589-8.612-8.72A8.438,8.438,0,0,1,160.426,87.793Z"></path><path class="b" d="M160.426,156.786a8.444,8.444,0,0,1,8.611,8.559,8.3,8.3,0,0,1-8.612,8.72c-5.21,0-8.612-3.59-8.612-8.72A8.438,8.438,0,0,1,160.426,156.786Z"></path><path class="c" d="M160.426,21.2a5.375,5.375,0,0,1,2.213.361c.144.048.29.1.432.155-.455-.18.213.114.249.132a7.543,7.543,0,0,1,1.125.708c-.395-.307.155.154.187.185.107.1.211.2.312.3.152.157.3.32.436.486-.282-.332.02.026.082.122.219.338.408.683.605,1.033.04.069.19.419.027.026a7.664,7.664,0,0,1,.286.834,8.3,8.3,0,0,1,.24,1.089c-.068-.463,0,.033,0,.151,0,.191.018.381.018.573a9.8,9.8,0,0,1-.066,1.2c.062-.51-.052.228-.062.272q-.081.384-.194.76c-.053.175-.116.346-.174.52-.213.638.225-.363-.1.218-.171.308-.329.619-.524.914.007-.011-.4.533-.179.261s-.221.242-.212.232c-.139.152-.285.3-.436.438-.08.075-.55.463-.147.154a7.459,7.459,0,0,1-.87.567c-.183.1-.371.2-.561.287.417-.2,0,0-.117.042a10.933,10.933,0,0,1-1.154.33c-.146.031-.293.057-.44.083.5-.087-.407.028-.5.032a10.808,10.808,0,0,1-1.194-.012c-.047,0-.806-.1-.284-.017-.149-.024-.3-.051-.444-.082a11.616,11.616,0,0,1-1.158-.322c-.117-.037-.541-.234-.114-.034-.22-.1-.435-.212-.646-.332-.149-.085-.294-.174-.437-.268-.069-.047-.577-.461-.166-.109a8.544,8.544,0,0,1-.732-.692s-.426-.5-.2-.219-.175-.252-.172-.248a9.4,9.4,0,0,1-.605-1.077c.238.481-.05-.135-.075-.208-.048-.135-.092-.271-.133-.408a9.215,9.215,0,0,1-.288-1.293c.017.113.026.43.006-.044-.01-.235-.033-.469-.037-.7q-.006-.294,0-.586c0-.1.084-.886.012-.384a8.223,8.223,0,0,1,.3-1.306c.066-.21.138-.42.224-.623-.162.386.07-.115.126-.222a7.91,7.91,0,0,1,.7-1.1c-.309.4.148-.147.181-.182.148-.16.3-.315.462-.462.033-.031.585-.487.187-.184.175-.133.361-.256.546-.373s.382-.228.58-.331c.089-.046.63-.279.249-.129a8.475,8.475,0,0,1,1.333-.4c.027-.006.791-.116.311-.064.33-.036.662-.047.994-.051a2.4,2.4,0,1,0,0-4.8,11.01,11.01,0,0,0-10.519,7.646c-1.286,4.072-.116,9.143,3.234,11.9a11.784,11.784,0,0,0,12.866,1.138c4.148-2.265,5.941-7.092,5.257-11.616A10.942,10.942,0,0,0,160.426,16.4a2.4,2.4,0,1,0,0,4.8Z"></path><path class="c" d="M7.1,73.8H177.179c3.171,0,6.344-.037,9.515,0a2.25,2.25,0,0,1,2.315,1.669,9.9,9.9,0,0,1,.067,2.271V90.01c0,8.769.029,17.539,0,26.308,0,1.416-.625,2.594-2.2,2.7-.173.012-.351,0-.524,0H8.316c-1.423,0-3.089.009-3.393-1.843a14.015,14.015,0,0,1-.019-2.207V80.088c0-1.98-.768-6.176,2.2-6.285,3.079-.114,3.094-4.914,0-4.8a7.135,7.135,0,0,0-7,7.071C.08,77,.1,77.921.1,78.843V92.557c0,8.067-.234,16.172,0,24.235.124,4.264,3.49,7.025,7.587,7.025h167.6c3.7,0,7.4.013,11.106,0a7.19,7.19,0,0,0,7.479-7.1c.076-2.937,0-5.886,0-8.824V78.387c0-.789.025-1.583,0-2.372a7.126,7.126,0,0,0-7-7.012c-.742-.023-1.487,0-2.229,0H7.1C4.015,69,4.01,73.8,7.1,73.8Z"></path><path class="c" d="M110.985,94.01H26.652c-3.089,0-3.094,4.8,0,4.8h84.333c3.088,0,3.094-4.8,0-4.8Z"></path><path class="c" d="M160.426,90.193a5.393,5.393,0,0,1,2.213.362c.144.048.29.1.432.155-.455-.18.213.114.249.132a7.537,7.537,0,0,1,1.125.707c-.395-.306.155.155.187.185q.161.148.312.305c.152.157.3.32.436.486-.282-.333.02.026.082.122.219.338.408.683.605,1.033.04.069.19.419.027.026a7.664,7.664,0,0,1,.286.834,8.3,8.3,0,0,1,.24,1.089c-.068-.463,0,.033,0,.15,0,.191.018.382.018.573a9.773,9.773,0,0,1-.066,1.2c.062-.509-.052.229-.062.273q-.081.384-.194.759c-.053.176-.116.347-.174.521-.213.638.225-.363-.1.218-.171.308-.329.619-.524.914.007-.011-.4.533-.179.261s-.221.241-.212.232c-.139.152-.285.3-.436.438-.08.075-.55.463-.147.153a7.209,7.209,0,0,1-.87.567c-.183.1-.371.2-.561.288.417-.2,0,0-.117.042a10.928,10.928,0,0,1-1.154.329c-.146.032-.293.058-.44.083.5-.086-.407.029-.5.033a10.568,10.568,0,0,1-1.194-.013c-.047,0-.806-.1-.284-.017q-.224-.034-.444-.081a11.891,11.891,0,0,1-1.158-.322c-.117-.037-.541-.235-.114-.035-.22-.1-.435-.211-.646-.332-.149-.084-.294-.173-.437-.268-.069-.046-.577-.46-.166-.108a8.7,8.7,0,0,1-.732-.692s-.426-.5-.2-.22-.175-.252-.172-.247a9.48,9.48,0,0,1-.605-1.077c.238.481-.05-.135-.075-.208-.048-.135-.092-.271-.133-.408a9.246,9.246,0,0,1-.288-1.293c.017.113.026.43.006-.044-.01-.235-.033-.469-.037-.7,0-.2,0-.391,0-.587,0-.1.084-.886.012-.383a8.223,8.223,0,0,1,.3-1.306c.066-.21.138-.42.224-.623-.162.386.07-.115.126-.222a7.794,7.794,0,0,1,.7-1.1c-.309.4.148-.147.181-.183.148-.159.3-.314.462-.461.033-.031.585-.488.187-.184.175-.133.361-.256.546-.373s.382-.228.58-.331c.089-.046.63-.279.249-.13a8.579,8.579,0,0,1,1.333-.4c.027-.006.791-.117.311-.064.33-.036.662-.047.994-.052a2.4,2.4,0,1,0,0-4.8,11.012,11.012,0,0,0-10.519,7.647c-1.286,4.071-.116,9.143,3.234,11.9a11.784,11.784,0,0,0,12.866,1.138c4.148-2.265,5.941-7.092,5.257-11.616a10.943,10.943,0,0,0-10.838-9.072,2.4,2.4,0,1,0,0,4.8Z"></path><path class="c" d="M7.1,142.795H177.179c3.171,0,6.344-.037,9.515,0a2.251,2.251,0,0,1,2.315,1.67,9.892,9.892,0,0,1,.067,2.27V159c0,8.769.029,17.539,0,26.308,0,1.416-.625,2.593-2.2,2.7-.173.011-.351,0-.524,0H8.316c-1.423,0-3.089.009-3.393-1.843a14.027,14.027,0,0,1-.019-2.208V149.081c0-1.981-.768-6.177,2.2-6.286,3.079-.113,3.094-4.913,0-4.8a7.137,7.137,0,0,0-7,7.072c-.024.922,0,1.847,0,2.769V161.55c0,8.067-.234,16.171,0,24.235.124,4.263,3.49,7.025,7.587,7.025h167.6c3.7,0,7.4.013,11.106,0a7.19,7.19,0,0,0,7.479-7.1c.076-2.937,0-5.885,0-8.823V147.38c0-.789.025-1.583,0-2.372a7.127,7.127,0,0,0-7-7.013c-.742-.022-1.487,0-2.229,0H7.1C4.015,138,4.01,142.795,7.1,142.795Z"></path><path class="c" d="M110.985,163H26.652c-3.089,0-3.094,4.8,0,4.8h84.333c3.088,0,3.094-4.8,0-4.8Z"></path><path class="c" d="M160.426,159.186a5.375,5.375,0,0,1,2.213.361c.144.048.29.1.432.156-.455-.18.213.113.249.132a7.537,7.537,0,0,1,1.125.707c-.395-.306.155.155.187.185q.161.148.312.305c.152.156.3.319.436.486-.282-.333.02.026.082.122.219.337.408.683.605,1.032.04.07.19.42.027.027a7.664,7.664,0,0,1,.286.834,8.228,8.228,0,0,1,.24,1.089c-.068-.463,0,.033,0,.15,0,.191.018.382.018.573a9.8,9.8,0,0,1-.066,1.2c.062-.51-.052.229-.062.273q-.081.384-.194.759c-.053.176-.116.347-.174.521-.213.638.225-.363-.1.217-.171.309-.329.62-.524.914.007-.01-.4.534-.179.262s-.221.241-.212.232c-.139.151-.285.3-.436.438-.08.075-.55.463-.147.153a7.209,7.209,0,0,1-.87.567c-.183.1-.371.2-.561.288.417-.2,0,0-.117.041a10.7,10.7,0,0,1-1.154.33c-.146.032-.293.058-.44.083.5-.086-.407.028-.5.033a10.808,10.808,0,0,1-1.194-.013c-.047,0-.806-.1-.284-.017q-.224-.035-.444-.081a11.891,11.891,0,0,1-1.158-.322c-.117-.037-.541-.235-.114-.035-.22-.1-.435-.211-.646-.332-.149-.085-.294-.174-.437-.268-.069-.046-.577-.46-.166-.108a8.7,8.7,0,0,1-.732-.692s-.426-.5-.2-.22-.175-.252-.172-.248a9.467,9.467,0,0,1-.605-1.076c.238.481-.05-.135-.075-.208-.048-.135-.092-.271-.133-.409a9.183,9.183,0,0,1-.288-1.293c.017.113.026.431.006-.044-.01-.235-.033-.468-.037-.7q-.006-.292,0-.586c0-.1.084-.886.012-.384a8.237,8.237,0,0,1,.3-1.305c.066-.21.138-.42.224-.623-.162.386.07-.115.126-.222a7.794,7.794,0,0,1,.7-1.1c-.309.4.148-.148.181-.183q.222-.24.462-.462c.033-.031.585-.487.187-.183.175-.133.361-.257.546-.373s.382-.228.58-.331c.089-.046.63-.28.249-.13a8.472,8.472,0,0,1,1.333-.4c.027-.006.791-.117.311-.065.33-.036.662-.047.994-.051a2.4,2.4,0,0,0,0-4.8,11.012,11.012,0,0,0-10.519,7.647c-1.286,4.071-.116,9.143,3.234,11.9a11.784,11.784,0,0,0,12.866,1.138c4.148-2.265,5.941-7.092,5.257-11.616a10.943,10.943,0,0,0-10.838-9.072,2.4,2.4,0,1,0,0,4.8Z"></path></g></svg>
                        </span>
                        <span class="title">Servers Controls</span>
                    </a>
                </li>
                <li class="nav-item active" data-content=".DeviceRunning">
                    <a class="nav-link" href="{{route('contactpage.index')}}">
                        <span class="icon">
                        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M1694.118 0C1818.692 0 1920 101.308 1920 225.882v1468.236c0 124.574-101.308 225.882-225.882 225.882H225.882C101.308 1920 0 1818.692 0 1694.118V225.882C0 101.308 101.308 0 225.882 0h1468.236Zm-903.53 564.706h338.824V225.882H790.588v338.824Zm-564.706 0h338.824V225.882H225.882v338.824Zm0 564.706h338.824V790.588H225.882v338.824Zm0 564.706h338.824v-338.824H225.882v338.824Zm564.349.47h904v-904h-904v904Zm565.063-1129.882h338.824V225.882h-338.824v338.824Z" fill-rule="evenodd"></path> </g></svg>
                        </span>
                        <span class="title">Tables</span>
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
                    <img src="{{asset('assets/imgs/letterhead (1).png')}}" alt="">
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
  @foreach($custmers as $custmer)
  <tbody>
    <tr>
      <th scope="row">{{$custmer->id}}</th>
      <td>{{$custmer->name}}</td>
      <td>{{$custmer->email}}</td>

      <td>{{$custmer->subject}}</td>
      <td>{{$custmer->message}}</td>
    </tr>
 
 
  </tbody>
  @endforeach
</table>

                </div>
                <div class="tab Calendar">
                      <table class="table">
  <thead>
    <tr>
    <th scope="col">Id</th>

      <th scope="col">Name</th>
      <th scope="col">Content</th>
      <th scope="col">image</th>
    
    </tr>
  </thead>
  @foreach($projects as $project)
  <tbody>
    <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->name}}</td>
      <td>{{$project->content}}</td>

      <td> <img src="{{asset('uplodes/posts/'.$project->image)}}" class="card-img-top" width="50" alt=""></td>
      
    </tr>
 
 
  </tbody>
  @endforeach
</table>
                </div>
                <div class="tab Dashboard">
                    <div class="box">
                   
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-Overview" role="tabpanel" aria-labelledby="nav-Overview-tab">
                            <div class="header-overview">
                                <div class="header-left">
                                   MY Details
                                </div>
                            
                            </div>
                            <!-- column chart -->
                           
                            <div class="price">
                                <div class="total">
                                    <p>Total Client:</p>
                                    <h1>{{$totalclinet}}</h1>
                                </div>
                                <div class="estimated">
                                    <p>Complete Project:</p>
                                    <h1>{{$totalproject}}</h1>
                                </div>
                            </div>
                            <div class="MonthReview">
                                <div class="box-row">
                                    <h1>
                                        -5%
                                    </h1>
                                    <p>Check if Laravel creates session f c</p>
                                </div>
                                <div class="currentPoint">
                                    <p>Totel Visitors</p>
                                    <div class="box-row">
                                        <h1>
                                            37
                                        </h1>
                                    </div>
                                    <div class="btn btn-primary"> Add Project</div>
                                </div>
                            </div>
                            <div class="lastParagraph">Check if Laravel creates session f</div>
                        </div>
                        <div class="tab-pane fade" id="nav-Tracker" role="tabpanel" aria-labelledby="nav-Tracker-tab">Tracker</div>
                        <div class="tab-pane fade" id="nav-Forecasting" role="tabpanel" aria-labelledby="nav-Forecasting-tab">
                          
                            <!-- column chart -->
                            <div class="price">
                                <div class="total">
                                    <p>Total:</p>
                                    <h1>9000$</h1>
                                </div>
                                <div class="estimated">
                                    <p>Estimated Savings:</p>
                                    <h1>17$</h1>
                                </div>
                            </div>
                            <div class="MonthReview">
                                <div class="box-row">
                                    <h1>
                                        -4%
                                    </h1>
                                    <p>water use compared to last month</p>
                                </div>
                            </div>
                            <div class="lastParagraph">Based on our estimations, next month you're going to use 4 % less water compared to AVG 3 person home. Total cost will be 85 $ and you're going to save 14 $ if you continue to use our product.</div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tab Account">
                    <div class="box">
                        <div class="client-img">
                            <img src="../Images/client-dashboard page/close-up-young-successful-man-smiling-camera-standing-casual-outfit-against-blue-background.jpg" alt="">
                            <h3>Marwan</h3>
                            <p>mmmmmmmm@gmail.com</p>
                        </div>
                        <div class="client-details">
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>name</h5>
                                    <h5>marwan</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>phone number</h5>
                                    <h5>+962 67898734534</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>e-mail</h5>
                                    <h5>mmmmmmmm@gmail.com</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>password</h5>
                                    <h5>**********</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>plumber's phone number</h5>
                                    <h5>+962 67898734534</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab HomeDetails">
                    <div class="client-details">
                        <a href="#">
                            <div class="client-details-box">
                                <h5>adress</h5>
                                <h5>king abdullah || street, 11855, amman, jordan</h5>
                            </div>
                        </a>
                        <a href="#">
                            <div class="client-details-box">
                                <h5>number of residents</h5>
                                <h5>3</h5>
                            </div>
                        </a>
                        <a href="#">
                            <div class="client-details-box">
                                <h5>rooms</h5>
                                <h5>5 (2 bendrooms, 1 bathroom, 1 kitchen, 1 livingroom)</h5>
                            </div>
                        </a>
                        <a href="#">
                            <div class="client-details-box">
                                <h5>inventory</h5>
                                <h5>7 (1 dishwasher, 1 outdoor spring, 1 shower, 2 sninks, 1 washing machine, 1 toilet)</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab Help">
                    <div class="box">
                        <form class="help-header">
                            <input type="search" id="searchInput" placeholder="How can we help you?">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                        <img src="../Images/client-dashboard page/busy-woman-doing-many-things-same-time.jpg" alt="">
                        <div class="Help-paragraph">
                            <h4>Tell us how we can help</h4>
                            <h4>24/7</h4>
                        </div>
                        <div class="client-details">
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>chat</h5>
                                    <h5>Start a conversation now</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>how to use ADADK</h5>
                                    <h5>Get useful resources</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>FAQ</h5>
                                    <h5>Start a conversation now</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>find a plumber</h5>
                                    <h5>Serach plumbers nearby</h5>
                                </div>
                            </a>
                            <a href="#">
                                <div class="client-details-box">
                                    <h5>contact us</h5>
                                    <h5>Get in touch 24/7</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab Invite">
                    <div class="box">
                        <div class="invite-img">
                            <img src="../Images/client-dashboard page/5230711_2650149.jpg" alt="">
                            <h6>Invite or share link with friends and get <span>10 points</span> for each of them </h6>
                        </div>
                        <p>Share link</p>
                        <div class="invite-share">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="../Images/client-dashboard page/facebook.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="../Images/client-dashboard page/whatsapp.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="../Images/client-dashboard page/instagram.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="../Images/client-dashboard page/messenger.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="../Images/client-dashboard page/gmail.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center">
                                        <a href="#">
                                            <img src="../Images/client-dashboard page/twitter.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>


    



    <!-- link bundle-bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- link popper-bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!-- link js file -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>