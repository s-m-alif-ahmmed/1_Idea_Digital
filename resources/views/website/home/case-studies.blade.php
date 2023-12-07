@extends('website.master')

@section('title')
    Case Studies
@endsection

@section('content')

    <section class="container-fluid">
        <div class="row">
            <section class="container-fluid text-center">
                <div class="row my-5">
                    <h1 class="display-1" style="color: #CF443D;">CASE STUDIES</h1>
                    <br/>
                    <p class="col-md-6 mx-auto text-muted" style="font-size: 18px;">
                        Success is simple. Do what’s right, the right way, at the right time.
                    </p>
                </div>
            </section>

            <section class="">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-12 mx-auto">

                            <ul class="nav d-flex justify-content-center">
                                <li>
                                    <a href="#" class="nav-link text-black">ALL</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black">SPORTS AND FITNESS</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black" >LOGISTICS</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black" >SASS</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black" >AUTOMATION</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black" >CYBER SECURITY</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black" >FASHION AND BEAUTY</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black">FINTECH</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black" >EDTECH</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black" >BANKING SERVICE</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-black" >MOBILE APPS</a>
                                </li>
                            </ul>

                            <div class="container py-3">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/Decathlon2.1-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/ICICI-bank-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/Vahan-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/Decathlon2.1-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/ICICI-bank-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/Vahan-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/Decathlon2.1-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/ICICI-bank-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/Vahan-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/Decathlon2.1-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/ICICI-bank-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3 m-5">
                                        <a href="{{ route('case.details') }}">
                                            <img src="{{ asset('/') }}website/img/Vahan-uai-516x516.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
    </section>

@endsection

