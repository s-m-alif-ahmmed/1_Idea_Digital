@extends('website.master')

@section('title')
    Contact
@endsection

@section('content')

    <section class="py-5">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <p class="display-1 text-danger w-75">LET'S TALK</p>
                <p class="text-muted fs-5 col-md-8">
                    We thrive at coming up with innovative ideas but also understand that a smart concept should be supported with measurable results.
                </p>
                <span class="d-flex justify-content-center fs-4">
                    Contact:<p class="text-danger">info.1ideabd@gmail.com</p>
                </span>
            </div>
            <div class="row">
                <form action="{{ route('main.contact.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="col-md-8 col-sm-10 col-12 mx-auto mb-3">
                        <input type="text" class="form-control rounded-0" name="full_name" id="full_name" placeholder="FULL NAME" required />
                    </div>
                    <div class="col-md-8 col-sm-10 col-12 mx-auto mb-3 d-sm-flex justify-content-between">
                        <div class="col-md-6 col-sm-12 col-12 pe-md-3 mb-3 mb-sm-0">
                            <input type="email" class="form-control rounded-0" name="email" id="email" placeholder="YOUR OFFICIAL EMAIL" required />
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <input type="text" class="form-control rounded-0" name="number" id="number" placeholder="PHONE" required />
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-10 col-12 mx-auto mb-3">
                        <textarea class="form-control rounded-0" name="message" id="message" placeholder="DESCRIBE YOUR PROJECT" rows="8" required></textarea>
                    </div>
                    <div class="col-md-8 col-sm-10 col-12 mx-auto mb-3">
                        <select class="form-select form-control rounded-0" name="service" aria-label="Default select example" required>
                            <option selected>Select Service</option>
                            <option value="SEO">SEO</option>
                            <option value="Website Design">Website Design</option>
                            <option value="Website Development">Website Development</option>
                            <option value="Website Design & Development">Website Design & Development</option>
                        </select>
                    </div>
                    <div class="text-center py-5">
                        <button type="submit" class="btn text-white p-3 rounded-1 fw-bold" style="background-color: #fc443d">SUBMIT REQUEST</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="card col-lg-12 col-md-12 col-sm-12 col-12 bg-dark text-white rounded-0 h-100">
                    <img src="{{asset('/')}}website/img/growth-hackers-address-uai-1440x480.jpeg" class="card-img w-100" alt="Stony Beach"/>
                    <div class="card-img-overlay text-center" style="background-color: rgba(0, 0, 0, 0.3)">
                        <h5 class="card-title">DHAKA OFFICE</h5>
                        <hr class="bg-white mx-auto w-25" />
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <p class="card-text">
                                NAVANA DH TOWER, 6 PANTHAPATH, DHAKA 1215
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <ul class="nav justify-content-center py-5">
                    <li class="px-2">
                        <a href="" class="">
                            <img src="{{asset('/')}}website/img/linkedin.png" alt="" style="height: 60px;" />
                        </a>
                    </li>
                    <li class="px-2">
                        <a href="">
                            <img src="{{asset('/')}}website/img/instagram.png" alt="" style="height: 60px;" />
                        </a>
                    </li>
                    <li class="px-2">
                        <a href="">
                            <img src="{{asset('/')}}website/img/facebook.png" alt="" style="height: 60px;" />
                        </a>
                    </li>
                    <li class="px-2">
                        <a href="">
                            <img src="{{asset('/')}}website/img/twitter.png" alt="" style="height: 60px;" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


@endsection
