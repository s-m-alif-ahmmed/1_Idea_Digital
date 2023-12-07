@extends('admin.master')

@section('title')
    Add Top Social Link
@endsection

@section('content')

    <section class="py-5">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-5">
            <div class="breadcrumb-title pe-3"> Top Social Link </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Add New Top Social Link </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('topSocial.create') }}" class="btn btn-outline-secondary justify-content-between">
                                Add New Top Social Link
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        {{--        message--}}
        <p class="text-center text-primary">{{session('message')}}</p>

        <!-- Create 1Idea Logo Form-->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <h5 class="mb-0">Add New Top Social Link </h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 ">
                            <form class="row g-3" method="post" action="{{route('topSocial.store')}}">
                                @csrf
                                @method('post')

                                <div class="col-12">
                                    <label for="name" class="form-label"> Social Link Name</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter social link name" required />
                                </div>

                                <div class="col-12">
                                    <label for="icon" class="form-label"> Social Icon </label>
                                    <textarea class="form-control" type="text" name="icon" id="icon" placeholder="Enter social icon code" required ></textarea>
                                </div>

                                <div class="col-12">
                                    <label for="slug" class="form-label"> Social Link </label>
                                    <textarea class="form-control" type="text" name="slug" id="slug" placeholder="Enter social link " required ></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <button class="btn btn-primary px-4" type="submit">Create</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

