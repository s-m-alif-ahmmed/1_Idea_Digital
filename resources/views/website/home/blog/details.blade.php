<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Details</title>
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
            <div class="col-md-8 mx-auto">
                <p class="py-5">
                    Decathlon is a French sporting goods retailer. With over 1500 stores in 49 countries, it is officially the largest sporting goods retailer in the world according to the numbers it did in 2019.

                    Decathlon has a blog specifically for India where they write content regularly but is failing to get much traction. Even though it has almost 800 published blogs it hardly gets enough traffic to make it a viable medium to engage with the audience or create revenue out of it.

                    The primary goal was to create high-quality content to help people who are looking to participate in sport or learn more about a certain sport. Also, they eventually wanted it to drive some revenue so that it becomes self-sustaining.

                    Health and sports being such a competitive industry with a lot of quality content out there already, we knew that we would have to perform quite extensive research to identify quick wins along with keywords that will drive traffic in the long term.

                    <br/>
                    <br/>

                    <h3 class="fw-bold">Introduction</h3>

                    <br/>
                    <br/>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut beatae dolorum harum inventore ipsam, iusto nam nihil obcaecati odit praesentium quis rem, unde! Aperiam assumenda beatae delectus dolor dolorum error excepturi illum iure necessitatibus obcaecati perferendis quas, quia recusandae reiciendis rem sed similique sint soluta tempora tenetur veritatis, voluptatum.


                    <br/>
                    <br/>
                    <br/>

                    <h3 class="fw-bold">Introduction</h3>

                    <br/>
                    <br/>

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut beatae dolorum harum inventore ipsam, iusto nam nihil obcaecati odit praesentium quis rem, unde! Aperiam assumenda beatae delectus dolor dolorum error excepturi illum iure necessitatibus obcaecati perferendis quas, quia recusandae reiciendis rem sed similique sint soluta tempora tenetur veritatis, voluptatum.

                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-8 mx-auto ">
                <div class="row">
                    <div class="col-6 px-2">
                        <div class="card text-white rounded-0 border-0">
                            <img src="{{asset('/')}}website/img/Decathlon-Graph.png" class="card-img w-100" alt="Stony Beach"/>
                        </div>
                    </div>
                    <div class="col-6 px-2">
                        <div class="card text-white rounded-0 border-0">
                            <img src="{{asset('/')}}website/img/Decathlon-Graph.png" class="card-img w-100" alt="Stony Beach"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-8 px-2 mx-auto">
                <h3 class="">Tags : </h3>
                <span class="badge rounded-pill bg-primary text-white">Tag 1</span>
                <span class="badge rounded-pill bg-primary text-black">Tag 2</span>
                <span class="badge rounded-pill bg-primary text-black">Tag 3</span>
            </div>
        </div>
    </div>


    <div class="page-main">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <h3 class="text-center text-black pt-5">LEAVE A REPLAY</h3>
                            <p class="text-muted text-center py-2">Your email address will not be published. Required fields are marked.</p>
                            <div class="col-12 col-lg-8 mx-auto">
                                <form>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="form-floating">
                                                <textarea type="text" class="form-control" name="comment" id="floatingInput1" placeholder="Comment" style="height: 100px" required ></textarea>
                                                <label for="floatingInput1" class="form-label">Comment</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="name" id="floatingInput2" placeholder="Name" required />
                                                <label for="floatingInput2" class="form-label">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" name="email" id="floatingInput3" placeholder=" Email" required />
                                                <label for="floatingInput3" class="form-label"> Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mx-auto pt-3 pb-5">
                                        <button type="submit" class="btn btn-outline-primary">SEND</button>
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

