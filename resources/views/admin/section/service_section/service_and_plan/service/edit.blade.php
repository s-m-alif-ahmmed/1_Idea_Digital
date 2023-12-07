@extends('admin.master')

@section('title')
    Edit Service
@endsection

@section('content')

    <section class="py-5">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"> Service </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Edit Service </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('service.create') }}" class="btn btn-outline-secondary justify-content-between">
                                Add New Service
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
                        <h5 class="mb-0">Edit Service</h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 ">
                            <form class="row g-3" method="post" action="{{route('service.update', Crypt::encryptString($service->id) )}}">
                                @csrf
                                @method('patch')

                                <div class="col-12">
                                    <label for="name" class="form-label"> Service Name </label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter service name" value="{{ $service->name }}" required />
                                </div>

                                <div class="col-12">
                                    <label for="name" class="form-label"> Service Icon </label>
                                    <textarea class="form-control" type="text" name="icon" id="icon" placeholder="Enter service icon code" required >{{ $service->icon }}</textarea>
                                </div>

                                <div class="col-12">
                                    <label class="form-label"> Service Description </label>
                                    <textarea class="form-control" type="text" name="detail" placeholder="Enter service detail" required >{{ $service->detail }}</textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <button class="btn btn-primary px-4" type="submit">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
