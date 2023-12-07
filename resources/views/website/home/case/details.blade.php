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
            <nav class="navbar navbar-expand-lg bg-white bg-body-tertiary">

                <div class="col-md-2 d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('/')}}website/img/1idea_digital-removebg-preview.png" alt="1_idea_digital" style="height: 75px;" />
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-white rounded-2"></span>
                </button>

                <div class="col-md-8 collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="text-decoration-none text-white font-pop-600 px-4">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="text-decoration-none text-white font-pop-600 px-4">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('case.studies') }}" class="text-decoration-none text-white font-pop-600 px-4">CASE STUDIES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="text-decoration-none text-white font-pop-600 px-4">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="text-decoration-none text-white font-pop-600 px-4">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="text-decoration-none text-white font-pop-600 px-4">BLOGS</a>
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
                <h3 class="text-center col-12 p-2" style="color: #CF443D">SERVICES DEPLOYED</h3>
                <div style="width: 100px;" class="mx-auto"><hr /></div>
                <div class="container py-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col-10 col-md-4 col-lg-3 mx-4 my-3">
                            <img src="{{ asset('/') }}website/img/content-marketing.png" alt="">
                            <h6 class="pt-3 text-center">CONTENT MARKETING</h6>
                        </div>
                        <div class="col-10 col-md-4 col-lg-3 mx-4 my-3">
                            <img src="{{ asset('/') }}website/img/target-acquisition.png" alt="">
                            <h6 class="pt-3 text-center">TARGET ACQUISITION</h6>
                        </div>
                        <div class="col-10 col-md-4 col-lg-3 mx-4 my-3">
                            <img src="{{ asset('/') }}website/img/content-strategy.png" alt="">
                            <h6 class="pt-3 text-center">CONTENT STRATEGY</h6>
                        </div>
                    </div>
                </div>
                <div class="text-center mx-auto py-5">
                    <button type="submit" class="btn btn-close-white bg-danger text-white p-3 rounded-1 fw-bold">VIEW ALL</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #2C2C2C">
        <div class="row">
            <div class="col-md-10 my-4 mx-auto text-white">
                <h5>CLIENT TESTIMONIAL</h5>
                <h6>Growth Hackers efforts in SEO have driven more traffic. The project management is very active and communication is good. Their attention to detail and time management are very good. They do a great job.
                </h6>
                <h5>Amarabati Sen | Product Owner – Decathlon</h5>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h3 class="text-center p-2" style="color: #CF443D">ABOUT THE COMPANY & CHALLENGE</h3>
                <div style="width: 100px;" class="mx-auto"><hr/></div>
                <p class="py-5">
                    Decathlon is a French sporting goods retailer. With over 1500 stores in 49 countries, it is officially the largest sporting goods retailer in the world according to the numbers it did in 2019.

                    Decathlon has a blog specifically for India where they write content regularly but is failing to get much traction. Even though it has almost 800 published blogs it hardly gets enough traffic to make it a viable medium to engage with the audience or create revenue out of it.

                    The primary goal was to create high-quality content to help people who are looking to participate in sport or learn more about a certain sport. Also, they eventually wanted it to drive some revenue so that it becomes self-sustaining.

                    Health and sports being such a competitive industry with a lot of quality content out there already, we knew that we would have to perform quite extensive research to identify quick wins along with keywords that will drive traffic in the long term.

                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h3 class="text-center p-2" style="color: #CF443D">THE RESULTS</h3>
                <div style="width: 100px;" class="mx-auto"><hr/></div>
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-4 text-white text-center card card-body rounded-0 bg-danger p-3 m-5">
                            <p class="fs-2">Blog:</p>
                            <p class="fs-2">10X Traffic</p>
                            <p class="fs-2">Growth</p>
                        </div>
                        <div class="col-md-4 text-white text-center card card-body rounded-0 bg-danger p-3 m-5">
                            <p class="fs-2">Ecommerce</p>
                            <p class="fs-2">4X Search Visibility</p>
                            <p class="fs-2">2X Traffic Growth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h3 class="text-center p-2" style="color: #CF443D">EXECUTION STRATEGY</h3>
                <div style="width: 100px;" class="mx-auto"><hr/></div>
                <p class="py-5">
                    To start with we have conducted a thorough audit to identify underlying issues that might hinder the blog’s performance on the search and fix. The next immediate step is to repurpose the current content and the last and most important step is to identify new content pieces that will be relevant for Decathlon and will get traffic. We know that initially we would have to stick with topics that have low competition so that we can gain some authority before we tackle the high volume and high competitive topics.

                    Post the SEO audit and fixes, our SEO team worked very closely with Decathlon’s Content team to understand the current methods they are practicing. We did a content audit of their article inventory and identified that most of the content was written for the European audience and not suited to the Indian taste. We had to redo parts of it to make it more relevant.

                    Now to the crucial part where we had to deep dive into the keyword and topic research to identify the topics that we would want Decathlon to write about so that they will start seeing traffic coming in immediately. We were able to identify a lot of topics on a monthly basis that helped them increase their traffic many folds.

                    Within 3 months of starting, we increased the traffic to 10x and were able to achieve a sustainable growth of 100% month on month.
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-white rounded-0 border-0">
                    <img src="{{asset('/')}}website/img/Decathlon-Graph.png" class="card-img w-100" alt="Stony Beach"/>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <p class="p-2">As a consequence of this, Growth Hackers Digital was assigned 2 more new projects by Decathlon India which included SEO responsibilities of their e-commerce site.

                    We have so far achieved 2X growth with our efforts to their e-commerce site within 6 months of the association, see the screenshot below:
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="card text-white rounded-0 border-0">
                    <img src="{{asset('/')}}website/img/Screenshot-2020-01-21-at-12.52.47-PM.png" class="card-img w-100" alt="Stony Beach"/>
                </div>
            </div>
        </div>
    </div>

    <div class="page-main">

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

    </div>

</div>
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
