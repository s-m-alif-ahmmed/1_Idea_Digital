@extends('website.master')

@section('title')
    About
@endsection

@section('content')

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <h1 class="text-center p-2 display-1" style="color: #CF443D;">ABOUT US</h1>
                    <p class="col-md-7 mx-auto text-muted " style="font-size: 18px;">
                        In a world where algorithms change and attention spans waver, 1idea Digital is your constant – adapting, innovating, and delivering. We exist to reshape how businesses perceive and harness the power of the digital realm. Our goal is to empower you with strategies that not only amplify your online presence but also leave a lasting impact on your audience.
                    </p>
                </div>
                <div class="text-center py-5">
                    <h2 class="" style="color: red;">MEET THE FOUNDERS</h2>
                    <hr class="mx-auto" style="width: 100px;" />
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row d-flex py-5 ">
                <div class="col-md-4 text-center px-3" >
                    <a href="https://bd.linkedin.com/in/md-sazib-hossain-654200216" class="text-decoration-none" target="_blank">
                        <img src="{{asset('/')}}website/img/about_us/Md._Sazib_Hossain.png" class="rounded-circle" style="height: 240px; width: 240px;"/>
                        <h6 class="mx-auto py-5" style="color: #CF443D;">Md. Sazib Hossain</h6>
                    </a>
                    <p>
                        Md. Sazib Hossain is currently employed as a trainer for BASIS (Bangladesh Association of Software and Information Services) as a digital marketing expert.
                    </p>
                </div>
                <div class="col-md-4 text-center px-3">
                    <a href="https://au.linkedin.com/in/rubaiyet-abir-4476a9196" class="text-decoration-none" target="_blank">
                        <img src="{{asset('/')}}website/img/about_us/Rubaiyet_S_Abir.png" class="rounded-circle" style="height: 240px; width: 240px;"/>
                        <h6 class="mx-auto py-5" style="color: #CF443D;">Rubaiyet S Abir</h6>
                    </a>
                    <p>
                        Rubaiyet S Abir is a trained digital marketer from BASIS. A graduate from business background, he has previously worked as a sales and marketing representative.
                    </p>
                </div>
                <div class="col-md-4 text-center px-3">
                    <a href="https://bd.linkedin.com/in/hasibz3a" class="text-decoration-none" target="_blank">
                        <img src="{{asset('/')}}website/img/about_us/Md._Hasibuzzaman_Hasib.jpeg"  class="rounded-circle" style="height: 240px; width: 240px;"/>
                        <h6 class="mx-auto py-5" style="color: #CF443D;">Md. Hasibuzzaman Hasib</h6>
                    </a>
                    <p>
                        Md. Hasibuzzaman Hasib is a certified digital marketer from BASIS who has 18+ years of proven experience in retail, marketing, sales, operations management, manufacturing, business development and CRM.
                    </p>
                </div>
            </div>
        </div>

        <section>
            <div class="container-fluid">
                <div class="row ">
                    <div class="text-center py-5">
                        <a href="{{route('contact')}}" class="btn btn-danger fw-bold px-3 py-3" style="border-radius: 3px; width: 250px; color: white;">CONTACT US</a>
                    </div>
                    <section style="background-color: #F7F7F7;">
                        <div class="text-center py-5">
                            <h3 class="text-center p-2" style="color: #CF443D">SOME PROMINENT FACES</h3>
                            <div style="width: 100px;" class="mx-auto"><hr/></div>
                            <div class=" container-fluid p-5" >
                                <div class="row d-flex">
                                    <div class="col-md-3 text-center px-3">
                                        <a href="#" class="text-decoration-none" target="_blank">
                                            <img src="{{asset('/')}}website/img/about_us/5.png" class="rounded-circle" style="width: 130px;"/>
                                            <h6 class="mx-auto py-5" style="color: #CF443D;">Somaiya</h6>
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center px-3">
                                        <a href="#" class="text-decoration-none" target="_blank">
                                            <img src="{{asset('/')}}website/img/about_us/1.png" class="rounded-circle" style="width: 130px;"/>
                                            <h6 class="mx-auto py-5" style="color: #CF443D;">Asif</h6>
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center px-3">
                                        <a href="https://smalifahmmed.com" class="text-decoration-none" target="_blank">
                                            <img src="{{asset('/')}}website/img/about_us/alif.png" class="rounded-circle" style="width: 130px;"/>
                                            <h6 class="mx-auto py-5" style="color: #CF443D;">S M Alif Ahmmed</h6>
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center px-3">
                                        <a href="#" class="text-decoration-none" target="_blank">
                                            <img src="{{asset('/')}}website/img/about_us/toufiq.png" class="rounded-circle" style="width: 130px;"/>
                                            <h6 class="mx-auto py-5" style="color: #CF443D;">Md. Toufiqul Karim</h6>
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center px-3">
                                        <a href="#" class="text-decoration-none" target="_blank">
                                            <img src="{{asset('/')}}website/img/about_us/2.png" class="rounded-circle" style="width: 130px;"/>
                                            <h6 class="mx-auto py-5" style="color: #CF443D;">Esan</h6>
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center px-3">
                                        <a href="#" class="text-decoration-none" target="_blank">
                                            <img src="{{asset('/')}}website/img/about_us/3.png" class="rounded-circle" style="width: 130px;"/>
                                            <h6 class="mx-auto py-5" style="color: #CF443D;">Rime</h6>
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center px-3">
                                        <a href="#" class="text-decoration-none" target="_blank">
                                            <img src="{{asset('/')}}website/img/about_us/4.png" class="rounded-circle" style="width: 130px;"/>
                                            <h6 class="mx-auto py-5" style="color: #CF443D;">Rahul</h6>
                                        </a>
                                    </div>
                                    <div class="col-md-3 text-center px-3">
                                        <a href="#" class="text-decoration-none" target="_blank">
                                            <img src="{{asset('/')}}website/img/about_us/6.png" class="rounded-circle" style="width: 130px;"/>
                                            <h6 class="mx-auto py-5" style="color: #CF443D;">Toufique</h6>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="row">
                <div class="text-center py-5">
                    <h2 class="" style="color: red;">T E S T I M O N I A L S</h2>
                    <hr class="mx-auto" style="width: 100px;" />
                </div>
            </div>
            <section class="container">
                <div class="ps-2 pt-2 container-fluid d-flex">
                    <div class="row">
                        <div class="col-md-6 p-5">
                            <span><i class="fa-solid fa-quote-left" style="color: #bcbfc8; font-size: 40px;"></i></span>
                            <p>
                                1iDEA Digital's strategy in SEO has helped my company drive more traffic into our website and social media. Their attention to details was very impressive and I was very happy with their work.
                            </p>
                            <h5 style="color: #0A0A0A;font-size: 18px;">
                                Faridul Islam | CEO - MMIT
                            </h5>
                            <img src="{{asset('/')}}website/img/clients/mmit-soft-logo.png" style="height: 60px;"/>
                        </div>
                        <div class="col-md-6 p-5">
                            <span><i class="fa-solid fa-quote-left" style="color: #bcbfc8; font-size: 40px;"></i></span>
                            <p>
                                1iDEA Digital's online marketing effort has enabled us to reach out to a larger audience than our traditional marketing strategy. Their prompt communication and project management was extremely satisfying and will for sure work with them again in the future.
                            </p>
                            <h5 style="color: #0A0A0A;font-size: 18px;">
                                Md Rime | Co Chairman Standing Committee on Market Development USA - BGMEA
                            </h5>
                            <img src="{{asset('/')}}website/img/clients/BGMEA_Logo.jpg"  style="height: 60px;" />
                        </div>
                        <div class="col-md-6 p-5">
                            <span><i class="fa-solid fa-quote-left" style="color: #bcbfc8; font-size: 40px;"></i></span>
                            <p>
                                They did a phenomenal job for our company. We wanted to incorporate digital marketing techniques into our business and 1idea digital set us up from scratch. Their communication and behaviour is gentlemanlike and I eagerly look forward to a long lasting business partnership.
                            </p>
                            <h5 style="color: #0A0A0A;font-size: 18px;">
                                Nawazish M. Chowdhury | Director - Green Marble & Stone Ltd.
                            </h5>
                            <img src="{{asset('/')}}website/img/clients/green-group-limited.png"  style="height: 60px;" />
                        </div>
{{--                        <div class="col-md-6 p-5">--}}
{{--                            <span><i class="fa-solid fa-quote-left" style="color: #bcbfc8; font-size: 40px;"></i></span>--}}
{{--                            <p>The team at Growth Hackers operate more as a partner than an agency. They quickly started fixing the issues we are facing with SEO and Customer Acquisition.</p>--}}
{{--                            <h5 style="color: #0A0A0A;font-size: 18px;">Ankur Choudhary | CEO – Goalwise</h5>--}}
{{--                            <img src="{{asset('/')}}website/img/Goalwise-1.png" style="width: 160px;"/>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 p-5">--}}
{{--                            <span><i class="fa-solid fa-quote-left" style="color: #bcbfc8; font-size: 40px;"></i></span>--}}
{{--                            <p>Growth Hackers cut down our app install costs by 50% in the first month of engagement.</p>--}}
{{--                            <h5 style="color: #0A0A0A;font-size: 18px;">Ashutosh Dabral | CEO – Hush</h5>--}}
{{--                            <img src="{{asset('/')}}website/img/Hush-1.png" style="width: 108px;"/>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 p-5">--}}
{{--                            <span><i class="fa-solid fa-quote-left" style="color: #bcbfc8; font-size: 40px;"></i></span>--}}
{{--                            <p>Growth Hackers solved the problems we were facing with ease. They drove up our social media engagement by close to 400%.</p>--}}
{{--                            <h5 style="color: #0A0A0A;font-size: 18px;">Ajay Y J | Co-founder – Moonwalkr</h5>--}}
{{--                            <img src="{{asset('/')}}website/img/Moonwalkr-1.png" style="width: 212px;"/>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 p-5">--}}
{{--                            <span><i class="fa-solid fa-quote-left" style="color: #bcbfc8; font-size: 40px;"></i></span>--}}
{{--                            <p>Growth Hackers have been able to reach out to a larger audience than we had been doing with traditional marketing efforts. Growth Hackers in-depth knowledge of various platforms such as Hubspot and Microsoft Dynamics which is vital for our operations. We like that Growth Hackers go above and beyond the call of duty — they’ve connected for late night/early am calls with our global team. It was imperative that Growth Hackers understood a lot of the terminology and the competition we are up against.</p>--}}
{{--                            <h5 style="color: #0A0A0A;font-size: 15px;">Alysha Maria Lobo | SEA Marketing Head – Universal Robots</h5>--}}
{{--                            <img src="{{asset('/')}}website/img/Universal_Robots_Logo_in1_PRINT.png" style="width: 228px;"/>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 p-5">--}}
{{--                            <span><i class="fa-solid fa-quote-left" style="color: #bcbfc8; font-size: 40px;"></i></span>--}}
{{--                            <p>Firstly, I would like to thank Sundeep, Sneha and the entire team for their hard work. Whenever we needed advice or help, they were always at hand to provide us. Whether it was through hangout call or calls, we always got prompt replies from Growth Hackers Team. Any issues were promptly dealt with by the team. Overall, the whole process was smooth however, These were solved by a joint effort between us and the SEO team. Making this dynamic approach for Pattem Digital website was a complicated project which involved many hours of hard work and I feel as though the whole team have done a great job. We are very happy with the final output of the SEO and content structure for the website, Quora, Blogs and Medium. Growth Hacker team attitude towards the work was really impressive.</p>--}}
{{--                            <h5 style="color: #0A0A0A;font-size: 18px;">Vidyasagar Pattem | MD – Pattem Digital</h5>--}}
{{--                            <img src="{{asset('/')}}website/img/Pattem-1.png" style="width: 160px;"/>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </section>
        </section>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center p-2" style="color: #CF443D">A W A R D S</h3>
                    <div style="width: 100px;" class="mx-auto"><hr/></div>
                    <div class="d-flex py-5">
                        <div class="col-md-4 p-2">
                            <img src="{{asset('/')}}website/img/2023-the-manifest.png"/>
                        </div>
                        <div class="col-md-4 p-2">
                            <img src="{{asset('/')}}website/img/2022-clutch-award.png"/>
                        </div>
                        <div class="col-md-4 p-2">
                            <img src="{{asset('/')}}website/img/Dragon-Awards-Icon.png"/>
                        </div>
                    </div>
                    <div class="d-flex py-5">
                        <div class="col-md-4 p-2">
                            <img src="{{asset('/')}}website/img/A2.png"/>
                        </div>
                        <div class="col-md-4 p-2">
                            <img src="{{asset('/')}}website/img/A1.png"/>
                        </div>
                        <div class="col-md-4 p-2">
                            <img src="{{asset('/')}}website/img/A3.png"/>
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
                                    <div class="text-center mx-auto py-3">
                                        <button type="submit" class="btn btn-close-white bg-white text-black p-3 rounded-1 fw-bold">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </section>

@endsection
