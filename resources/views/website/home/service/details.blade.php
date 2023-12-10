<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}website/img/logo.png">

    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/my_style.css">

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('/')}}admin/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('/')}}admin/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/switcher/demo.css" rel="stylesheet">


    <!--- FONT-ICONS CSS -->
    <link href="{{asset('/')}}website/assets/plugins/icons/icons.css" rel="stylesheet" />

    <style>
        .navbar{
            background: transparent !important;
            color:white;
        }
    </style>


</head>
<body class="ltr app sidebar-mini">

<section class="banner-section">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-white">

                <div class="col-md-2 d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('/')}}website/img/1idea_digital-removebg-preview.png" alt="1_idea_digital" style="height: 75px;" />
                    </a>
                </div>

                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-white rounded-2"></span>
                </button>

                <div class="col-md-8 collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="text-decoration-none text-white font-pop-400 px-4" style="font-family: Poppins, sans-serif;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="text-decoration-none text-white font-pop-400 px-4" style="font-family: Poppins, sans-serif;">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('case.studies') }}" class="text-decoration-none text-white font-pop-400 px-4" style="font-family: Poppins, sans-serif;">CASE STUDIES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="text-decoration-none text-white font-pop-400 px-4" style="font-family: Poppins, sans-serif;">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="text-decoration-none text-white font-pop-400 px-4" style="font-family: Poppins, sans-serif;">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="text-decoration-none text-white font-pop-400 px-4" style="font-family: Poppins, sans-serif;">BLOGS</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 collapse navbar-collapse justify-content-start" id="navbarNav">
                    <ul class="navbar-nav d-flex flex-row justify-content-center">
                        <!-- Icons -->
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-facebook-f bg-danger p-2" style="color: white;"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-twitter bg-danger p-2" style="color: white;"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-linkedin-in bg-danger p-2" style="color: white;"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-instagram bg-danger p-2" style="color: white;"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</section>


{{--<!-- /app-Header -->--}}

{{--<!-- PAGE -->--}}
<div class="page">

    <div class="container py-5">

        <div class="row">
            <div class="col-12 mx-auto">
                <h3 class="text-center col-12 p-2" style="color: #CF443D">Packages</h3>
                <div style="width: 100px;" class="mx-auto"><hr /></div>
                <div class="container py-3">
                    <div class="row d-flex justify-content-center">
                        <div class="card-group">
                            @foreach($plan_types as $plan_type)
                                @if($plan_type->service_id == $service->id)
                                    @if($plan_type->status == 'active')
                                        <div class="col-12 col-md-6 col-lg-4 px-3 my-3">
                                            <div class="card shadow h-100">
                                                <div class="card-header text-center" style="background-color: #dc3a3e;">
                                                    <h3 class="pt-3 fw-bolder">{{ $plan_type->name }}</h3>
                                                    <p style="font-size: 12px;">{!! $plan_type->description !!}</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="text-center lh-sm">
                                                        @foreach($plan_contents as $plan_content)
                                                            @if($plan_content->plan_type_id ==  $plan_type->id)
                                                                @if($plan_type->status == 'active')
                                                                    <p style="font-size: 11px;">{{ $plan_content->start }}</p>
                                                                    <h4 class="fw-bolder">{{ $plan_content->price }}</h4>
                                                                    <p style="font-size: 16px;">{{ $plan_content->time }}</p>
                                                                    <p style="font-size: 11px;">{{ $plan_content->tax }}</p>
                                                    </div>

                                                    <div class="">
                                                        @foreach($plan_details as $plan_detail)
                                                            @if($plan_detail->plan_type_id == $plan_type->id)
                                                                @if($plan_detail->status == 'active')
                                                                    @if($plan_detail->on_status == 'active')
                                                                        <p>
                                                                            <span class="px-2"><i class="fa-regular fa-circle-check text-success"></i></span>
                                                                            <span>{{ $plan_detail->detail }}</span>
                                                                        </p>
                                                                    @else
                                                                        <p>
                                                                            <span class="px-2"><i class="fa-regular fa-circle-xmark text-danger"></i></span>
                                                                            <del class="text-danger"><span class="text-black">{{ $plan_detail->detail }}</span></del>
                                                                        </p>
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="card-footer border-top-0 text-center">
                                                        <a href="#" class="text-decoration-none text-black btn btn-outline-danger">{{ $plan_content->button }}</a>
                                                        <p class="py-2" style="font-size: 13px;">{{ $plan_content->apply }}</p>
                                                            @endif
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-12 my-4 mx-auto text-black">
                    @foreach($package_sub_headings->take(1) as $package_sub_heading)
                        @if($package_sub_heading->service_id == $service->id)
                            @if($package_sub_heading->status == 'active')
                                <h2 class="text-center fw-bolder">{{ $package_sub_heading->name }}</h2>
                                <div class="col-8 mx-auto pb-3">
                                    <span class="text-center">
                                        {!! $package_sub_heading->description !!}
                                    </span>
                                </div>
                            @endif
                        @endif
                    @endforeach
                    <div class="container">
                        <div class="row">
                            @foreach($package_descriptions as $package_description)
                                @if($package_description->service_id == $service->id)
                                    @if($package_description->status = 'active')
                                    <div class="col-md-5 col-sm-12 h-100 py-3 text-md-start text-lg-start text-sm-center">
                                        <img src="{{asset( $package_description->image )}}" alt="{{ $package_description->alt }}" style="height: 400px;">
                                    </div>
                                    <div class="col-md-7 col-sm-12 h-100 py-3">
                                        <span class="pt-2">
                                            {!! $package_description->description !!}
                                        </span>
                                    </div>
                                   @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section style="background-color: #CF443D">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <h3 class="text-center text-white py-5">CONTACT  US</h3>
                        <div class="col-12 col-lg-8 mx-auto">
                            <form action="{{ route('home.contact.store') }}" method="post">
                                @csrf
                                @method('POST')

                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="first_name" id="floatingInput1" placeholder="First Name" required />
                                            <label for="floatingInput1" class="form-label">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="company" id="floatingInput2" placeholder="Company" required />
                                            <label for="floatingInput2" class="form-label">Company</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="floatingInput3" placeholder="Official Email" required />
                                            <label for="floatingInput3" class="form-label">Official Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="number" id="floatingInput4" placeholder="Number" required />
                                            <label for="floatingInput4" class="form-label">Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mx-auto pt-3 pb-5">
                                    <button type="submit" class="btn btn-close-white bg-white text-black p-3 rounded-1 fw-bold">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- page -->

<!-- FOOTER -->
<section class="container-fluid">
    <div class="row">
        <footer class="p-4 bg-black text-white">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <p>&copy; Copyrights all reserved "1idea Digital" 2023. |
                            <a href="{{route('policy.privacy')}}" class="text-decoration-none text-white">Privacy Policy</a>
                            and
                            <a href="{{route('policy.terms')}}" class="text-decoration-none text-white">Terms of Use</a>
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="d-flex justify-content-md-end justify-content-center">
                            <a href="#" class="nav-link mx-3">
                                <i class="fab fa-facebook-f" style="color: white;"></i>
                            </a>
                            <a href="#" class="nav-link mx-3">
                                <i class="fab fa-twitter" style="color: white;"></i>
                            </a>
                            <a href="#" class="nav-link mx-3">
                                <i class="fab fa-linkedin-in" style="color: white;"></i>
                            </a>
                            <a href="#" class="nav-link mx-3">
                                <i class="fab fa-instagram" style="color: white;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>
<!-- FOOTER CLOSED -->




<script src="{{asset('/')}}website/js/all.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}website/js/fontawesome.js"></script>


<!-- JQUERY JS -->
<script src="{{asset('/')}}admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('/')}}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- SWITCHER JS -->
<script src="{{asset('/')}}admin/assets/switcher/js/switcher.js"></script>



<!-- BOOTSTRAP JS -->
<script src="{{asset('/')}}website/assets/plugins/bootstrap/js/popper.min.js"></script>

<!-- PROFILE JS -->
<script src="{{asset('/')}}website/assets/js/profile.js"></script>


<!-- COLOR THEME JS -->
<script src="{{asset('/')}}website/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{asset('/')}}website/assets/js/custom.js"></script>



</body>
</html>
