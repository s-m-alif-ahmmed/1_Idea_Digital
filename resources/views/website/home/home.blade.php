@extends('website.master')

@section('title')
    Home
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
                    <div class="card rounded-0 border-0">
                        <div class="bg-image-1 h-100"></div>
                        <img src="{{asset('/')}}website/img/Home-page-Hero-Image-Low-1.png" class="card-img  w-100" alt="Stony Beach"/>
                        <div class="position-absolute" style="bottom: 10%; right: 10%;">
                            <a href="{{route('contact')}}" class="btn text-white fw-bold rounded-0 py-2" style="background-color: #cf443d;">GET IN TOUCH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 p-4"><span class="text-muted" >TRUSTED BY |</span></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 p-4"><img src="{{asset('/')}}website/img/BITM.png" class="img-fluid w-100" alt="Company 1" style="height: 50px;" /></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 p-4"><img src="{{asset('/')}}website/img/Logo.png" class="img-fluid w-100" alt="Company 2" style="height: 50px;" /></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 p-4"><img src="{{asset('/')}}website/img/Dhakafox_logo.png" class="img-fluid w-100" alt="Company 3" style="height: 50px;" /></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 p-4"><img src="{{asset('/')}}website/img/biddabari.jpg" class="img-fluid w-100" alt="Company 4" style="height: 50px;" /></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6 p-4"><img src="{{asset('/')}}website/img/rupkumari.png" class="img-fluid w-100" alt="Company 5" style="height: 50px;" /></div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @media (min-width: 300px) {
                .d-sm-none {
                    display: none !important;
                }
            }
            @media (min-width: 426px) {
                .d-md-block {
                    display: block !important;
                }
            }
        </style>

        <div class="container" >
            <div class="row">
                <div class="col-md-6 d-sm-none d-md-block p-5 mb-2 mt-5" style="color: #CF443D">
                    <div class="">
                        <div class="mx-5 mt-5">
                            <p class="fw-bolder display-2 text-uppercase">
                                connect
                            </p>
                            <p class="fw-bolder display-2 text-uppercase">
                                Grow
                            </p>
                            <p class="fw-bolder display-2 text-uppercase">
                                Build
                            </p>
                            <p class="fw-bold display-6 ">
                                Your Business with Us
                            </p>
                        </div>
                        <div style="width: 350px;" class="pt-3">
                            <img src="{{asset('/')}}website/img/google-fb-badges-uai-516x206.png"/>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card card-body border-0 rounded-0">
                                <h5 class="bold pb-3">TRAFFIC</h5>
                                <img src="{{asset('/')}}website/img/Traffic-uai-258x258.png" class="mb-2" style="height: 100%; width: 120px;" />
                                <p class="pt-3">
                                    Targeted traffic is the most desirable goal for any online business. Optimizing organic, paid, and social channels to drive the right traffic happens to be our forte.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="card card-body border-0 rounded-0">
                                <h5 class="bold pb-3">BRANDING</h5>
                                <img src="{{asset('/')}}website/img/Branding-uai-258x258.png" class="mb-2" style="height: 100%; width: 120px;" />
                                <p class="pt-3">
                                    Branding is often misunderstood, it is not burning more cash than the competition. It is creating a brand persona to stand out from the crowd and we can help with that.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="card card-body border-0 rounded-0">
                                <h5 class="bold pb-3">CONVERSION</h5>
                                <img src="{{asset('/')}}website/img/Conversion-uai-258x258.png" class="mb-2" style="height: 100%; width: 120px;" />
                                <p class="pt-3">
                                    Having a lot of visitors without a desirable conversion rate is a problem, the right CRO can help save resources and improve conversions overnight. Talk to us!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="card card-body border-0 rounded-0">
                                <h5 class="bold pb-3">RETENTION</h5>
                                <img src="{{asset('/')}}website/img/Retention-uai-258x258.png" class="mb-2" style="height: 100%; width: 120px;" />
                                <p class="pt-3">
                                    Converting customers is important for the cash flow but retaining them is where you hit gold. We can help your customers fall in love with you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-12 mx-auto">
                    <h3 class="text-center col-12 p-2" style="color: #CF443D">CASE STUDIES</h3>
                    <div style="width: 100px;" class="mx-auto"><hr /></div>
                    <div class="container py-3">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 col-md-4 col-lg-3 mx-4 my-3">
                                <a href="{{ route('case.details') }}">
                                    <img src="{{ asset('/') }}website/img/Decathlon2.1-uai-516x516.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 mx-4 my-3">
                                <a href="">
                                    <img src="{{ asset('/') }}website/img/ICICI-bank-uai-516x516.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 mx-4 my-3">
                                <a href="">
                                    <img src="{{ asset('/') }}website/img/Vahan-uai-516x516.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mx-auto py-5">
                        <button type="submit" class="btn btn-close-white bg-danger text-white p-3 rounded-1 fw-bold">VIEW ALL</button>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .carousel .carousel-indicators button {
                width: 10px;
                height: 10px;
                border-radius: 100%;
            }
        </style>

        <div class="container-fluid py-5 h-auto">
            <div class="row">
                <h1 class="text-danger text-center">TESTIMONAL</h1>
                <hr class="mx-auto" style="width: 85px;"/>
            </div>
            <div class="row">
                <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button data-bs-target="#slider" data-bs-slide-to="0" class="active bg-dark rounded-circle"></button>
                        <button data-bs-target="#slider" data-bs-slide-to="1" class="bg-dark rounded-circle"></button>
                        <button data-bs-target="#slider" data-bs-slide-to="2" class="bg-dark rounded-circle"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item py-5 active">
                            <div class="col-10 text-black text-center mx-auto">
                                    <span class="">
                                        <i class="fa fa-quote-left fa-fw pb-5" style="font-size: 75px;"></i>
                                    </span>
                                <p>
                                    1iDEA Digital's strategy in SEO has helped my company drive more traffic into our website and social media. Their attention to details was very impressive and I was very happy with their work.
                                </p>
                                <h4>Faridul Islam | CEO - MMIT</h4>
                            </div>
                        </div>
                        <div class="carousel-item py-5">
                            <div class="col-10 text-black text-center mx-auto">
                                    <span class="py-5">
                                        <i class="fa fa-quote-left fa-2xl fa-fw pb-5" style="font-size: 75px;"></i>
                                    </span>
                                <p>
                                    1iDEA Digital's online marketing effort has enabled us to reach out to a larger audience than our traditional marketing strategy. Their prompt communication and project management was extremely satisfying and will for sure work with them again in the future.
                                </p>
                                <h4>Md Rime | Co Chairman Standing Committee on Market Development USA - BGMEA</h4>
                            </div>
                        </div>
                        <div class="carousel-item py-5">
                            <div class="col-10 text-black text-center mx-auto">
                                    <span class="py-5">
                                        <i class="fa fa-quote-left fa-2xl fa-fw pb-5" style="font-size: 75px;"></i>
                                    </span>
                                <p>
                                    They did a phenomenal job for our company. We wanted to incorporate digital marketing techniques into our business and 1idea digital set us up from scratch. Their communication and behaviour is gentlemanlike and I eagerly look forward to a long lasting business partnership.
                                </p>
                                <h4>Nawazish M. Chowdhury | Director - Green Marble & Stone Ltd.</h4>
                            </div>
                        </div>
                    </div>
                    <a href="#slider" class="carousel-control-prev justify-content-start" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-black py-5"></span>
                    </a>
                    <a href="#slider" class="carousel-control-next justify-content-end" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-black py-5"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <h3 class="text-center p-2" style="color: #CF443D;">A W A R D S</h3>
                    <div style="width: 100px;" class="mx-auto"><hr/></div>
                    <ul class=" py-5 justify-content-center nav">
                        <li class=" p-2">
                            <img src="{{asset('/')}}website/img/2023-the-manifest.png"/>
                        </li>
                        <li class=" p-2">
                            <img src="{{asset('/')}}website/img/2022-clutch-award.png"/>
                        </li>
                        <li class=" p-2">
                            <img src="{{asset('/')}}website/img/Dragon-Awards-Icon.png"/>
                        </li>
                        <li class=" p-2">
                            <img src="{{asset('/')}}website/img/A2.png"/>
                        </li>
                        <li class=" p-2">
                            <img src="{{asset('/')}}website/img/A1.png"/>
                        </li>
                        <li class=" p-2">
                            <img src="{{asset('/')}}website/img/A3.png"/>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="col-md-2 col-sm-4 col-6 p-4"><span class="text-muted">AS SEEN ON |</span></div>
                        <div class="col-md-2 col-sm-4 col-6 p-4"><img src="{{asset('/')}}website/img/logo.svg" class="img-fluid" alt="Company 1"/></div>
                        <div class="col-md-2 col-sm-4 col-6 p-4"><img src="{{asset('/')}}website/img/Clutch-1.png" class="img-fluid" alt="Company 2"/></div>
                        <div class="col-md-2 col-sm-4 col-6 p-4"><img src="{{asset('/')}}website/img/HindustanTimes.png" class="img-fluid" alt="Company 3"/></div>
                        <div class="col-md-2 col-sm-4 col-6 p-4"><img src="{{asset('/')}}website/img/IIDE.png" class="img-fluid" alt="Company 4"/></div>
                        <div class="col-md-2 col-sm-4 col-6 p-4"><img src="{{asset('/')}}website/img/SiliconIndia.png" class="img-fluid" alt="Company 5"/></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: #CF443D">
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
                                <div class="text-center mx-auto py-3">
                                    <button type="submit" class="btn btn-close-white bg-white text-black p-3 rounded-1 fw-bold">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="row d-flex">
                <div class="col-md-6 px-3" >
                    <h3 style="color: black" class="fw-bold">Find Us</h3>
                    <br/>
                    <p style="color: #990055">Location:</p>

                    <p class="text-muted">
                        3rd Floor & 4th Floor,<br/>
                        DH TOWER<br/>
                        Navana Real Estate Ltd,<br/>
                        Back-part , Dhaka – 1205.<br/>
                        Contact number: +8801705048030, +8801923281111, +8801672498561
                    </p>
                    <a href="https://goo.gl/maps/HicT29XCnnnUGWG3A" class="text-decoration-none text-color" >
                        <span class="text-dark" style="font-size: 14px;">OPEN IN MAPS</span>
                    </a>
                    <br/>
                    <hr class="mt-1 mb-0" style="width: 100px; color: black;" />
                    <hr class="mt-1 mb-0" style="width: 100px; color: black;"/>
                    <p class="text-muted">
                        Sunday - Saturday<br/>
                        12pm - 11pm
                    </p>
                </div>
                <div class="col-md-6 px-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.912129475765!2d90.38963917420703!3d23.750512688774116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd31908083%3A0x870a7c1df1006795!2sD.H.%20Tower!5e0!3m2!1sen!2sbd!4v1696923048123!5m2!1sen!2sbd" height="350" class="w-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </section>

@endsection
