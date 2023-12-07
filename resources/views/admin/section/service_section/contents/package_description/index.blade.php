@extends('admin.master')

@section('title')
    Add Package Description
@endsection

@section('content')

    <section class="py-5">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-5">
            <div class="breadcrumb-title pe-3"> Package Description </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Add New Package Description </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('packageDescription.create') }}" class="btn btn-outline-secondary justify-content-between">
                                Add New Package Description
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <!-- ROW-1 OPEN -->
        <!-- Check if any session data exists before displaying the alert -->
        @if(session('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="text-wrap">
                            <div class="example">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="alert-inner--text">{{ session('message') }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>
        @endif
        <!-- ROW-1 CLOSED -->


        <!-- Create 1Idea Logo Form-->
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header py-3 bg-transparent">
                        <h5 class="mb-0">Add New Package Description </h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 ">
                            <form class="row g-3" method="post" action="{{route('packageDescription.store')}}" enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <div class="col-12 form-group">
                                    <label for="form-label" class="form-label"> Service Name </label>
                                    <select class="form-control select2 form-select" name="service_id" data-placeholder="Choose one service" required>
                                        @foreach($services as $service)
                                            <option label="Choose one service"></option>
                                            <option value="{{ $service->id }}" {{$service->package_description_id == $service->id ? 'selected' : ''}} >{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label"> Package Description Image </label>
                                    <input type="file" class="form-control" name="image" placeholder="Enter package description name" required />
                                </div>

                                <div class="col-12">
                                    <label for="alt" class="form-label"> Package Description Image Alt </label>
                                    <input class="form-control" type="text" name="alt" id="alt" placeholder="Enter package description image alt" required />
                                </div>

                                <div class="col-12">
                                    <label class="form-label"> Package Description </label>
                                    <textarea class="form-control" type="text" name="description" id="summernote" placeholder="Enter package description " required ></textarea>
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

