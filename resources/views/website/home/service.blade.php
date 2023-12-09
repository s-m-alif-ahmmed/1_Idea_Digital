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
                        <span class="col-md-6 mx-auto text-muted" style="font-size: 22px; font-family: Poppins, sans-serif;">
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
