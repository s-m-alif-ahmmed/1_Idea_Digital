@extends('website.master')

@section('title')
    Service
@endsection

@section('content')

    <section class="container-fluid">
        <div class="row">
            <section class="container-fluid text-center">
                <div class="row my-5">
                    @foreach($service_descriptions->take(1) as $service_description)
                    <h1 class="col-12 display-1" style="color: #CF443D;">{{ $service_description->name }}</h1>
                    <br/>
                    <span class="col-md-6 mx-auto text-muted" style="font-size: 18px;">
                        {!! $service_description->description !!}
                    </span>
                    @endforeach
                </div>
            </section>

            <section class="container-fluid d-flex">
                <div class="row col-md-10 col-sm-8 col-lg-10 col-xxl-10 mx-auto">

                    @foreach($services as $service)
                        @if($service->status == 'active')
                            <div class="col-lg-4 col-md-4 col-12 py-3">
                                <div class="card card-body shadow border-0 bg-body rounded-4 h-100">
                                    <a href="{{ route('service.details', Crypt::encryptString( $service->id )) }}" class="text-decoration-none">
                                        <div class="mb-2">
                                            <span class="pb-2" style="color: #cf443d; font-size: 48px;"> {!! $service->icon !!} </span>
                                            <h5 class="bold py-3 text-black"> {{ $service->name }} </h5>
                                            <p class="mx-auto text-muted" style="font-size: 15px;">
                                                {!! $service->detail !!}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @else
                        @endif
                    @endforeach

{{--                    <div class="col-lg-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa-brands fa-facebook-f pb-2" style="color: #cf443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">META ADS</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        Hate it or love it, Facebook and Instagram are the go-to platforms for most B2C products/services. With billion+ active users you can achieve some serious sales.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa-brands fa-wordpress pb-2" style="color: #cf443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">WORDPRESS DEVELOPMENT</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        Are you looking for a Marketing First website that ranks well, loads fast, converts better and looks modern? Well click the button below and let's start talking.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa-solid fa-bars pb-2" style="color: #cf443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">CONTENT MARKETING</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        You've heard content is king, maybe far too many times at this point, however, do you know how to make this king work for you? Ask us how--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa-brands fa-linkedin-in pb-2" style="color: #cf443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">LINKEDIN ADS</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        The holy grail of B2B marketing. If done right you can get high quality leads from MNCs to SMEs without lifting a finger. Low-cost high return for sure.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa-solid fa-g pb-2" style="color: #fc443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">GOOGLE ADS</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        High intent leads to a high conversion rate and that's exactly what Google Ads is all about. You target the right keywords, you reach the right audience. Let's talk!--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa-brands fa-google-plus-g pb-2" style="color: #cf443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">DV 360</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        DV360 is the biggest and baddest platform out there to reach everyone and everything that matters. This enterprise-level tool helps you scale effortlessly by keeping conversions at its heart.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa-brands fa-windows pb-2" style="color: #fc443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">Microsoft Ad Network</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        It might not be the biggest platform out there, but it boasts a specific set of audiences that is exclusive to the network, and the added data layer of LinkedIn makes the deal sweeter.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa fa-solid fa-chart-simple pb-2" style="color: #fc443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">ANALYTICS & REPORTS</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        Looking at the right data points is very important for a successful campaign. We will help you see the truth, the whole truth, and nothing but the truth.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa-solid fa-mobile-button pb-2" style="color: #fc443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">ASO</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        ASO is basically SEO for Apps with 5x more complexity. We have the expertise to get you trending, let us know if you have an app that needs some love.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=""><i class="fa fa-regular fa-eye pb-2" style="color: #fc443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">CREATIVES & MESSAGING</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        Believe it or not, creatives and messaging will decide your ad's fate. Get it right and you are in for a bountiful campaign. We have teams dedicated just for this.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-md-4 col-md-4 col-12 py-3">--}}
{{--                        <div class="card card-body shadow border-0 bg-body  rounded-4  h-100">--}}
{{--                            <a href="{{ route('service.details') }}" class="text-decoration-none">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <span class=" "><i class="fa-brands fa-empire pb-2" style="color: #fc443d; font-size: 48px;"></i></span>--}}
{{--                                    <h5 class="bold text-black py-3">OTHER GEMS</h5>--}}
{{--                                    <p class="mx-auto text-muted" style="font-size: 15px;">--}}
{{--                                        Reddit, Twitter, Quora, etc can do real wonders based on the industry you are in. Our experienced strategists can hook you up real quick if you are a good fit. Let's talk?--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="text-center py-5">
                        <a href="{{route('contact')}}" class="btn btn-outline-danger p-3 rounded-1 border-1 fw-bold">SUBMIT US YOUR REQUEST</a>
                    </div>

                </div>



            </section>


            <div class="container-fluid py-5">
                <div class="row" style="background-color: #F7F7F7;">
                    <div class="col-md-12 mx-auto">
                        <h3 class="text-center p-2" style="color: #CF443D">A W A R D S</h3>
                        <div style="width: 100px;" class="mx-auto"><hr/></div>
                        <ul class="py-5 justify-content-center  nav">
                            <li class="p-2">
                                <img src="{{asset('/')}}website/img/A3.png"/>
                            </li>
                            <li class=" p-2">
                                <img src="{{asset('/')}}website/img/A1.png"/>
                            </li>
                            <li class=" p-2">
                                <img src="{{asset('/')}}website/img/A2.png"/>
                            </li>
                        </ul>
                        <ul class="py-5 justify-content-center nav">
                            <li class="p-2">
                                <img src="{{asset('/')}}website/img/Dragon-Awards-Icon.png"/>
                            </li>
                            <li class=" p-2 ">
                                <img src="{{asset('/')}}website/img/2022-clutch-award.png"/>
                            </li>
                        </ul>

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

        </div>
    </section>

@endsection
