@extends('admin.master')

@section('title')
    Add Plan Content
@endsection

@section('content')

    <section class="py-5">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-5">
            <div class="breadcrumb-title pe-3"> Plan Content </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Add New Plan Content </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('planContent.create') }}" class="btn btn-outline-secondary justify-content-between">
                                Add New Plan Content
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
                        <h5 class="mb-0">Add New Plan Content </h5>
                    </div>
                    <div class="card-body">
                        <div class="border p-3 ">
                            <form class="row g-3" method="post" action="{{route('planContent.store')}}">
                                @csrf
                                @method('post')

                                <div class="col-12 form-group">
                                    <label for="form-label" class="form-label"> Plan Type Name </label>
                                    <select class="form-control select2 form-select" name="plan_type_id" data-placeholder="Choose one service" required>
                                        @foreach($plan_types as $plan_type)
                                            <option label="Choose one service"></option>
                                            <option value="{{ $plan_type->id }}" {{$plan_type->plan_content_id == $plan_type->id ? 'selected' : ''}} >{{ $plan_type->name }} ({!! $plan_type->description !!})</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="start" class="form-label"> Plan Content Start </label>
                                    <input class="form-control" type="text" name="start" id="start" placeholder="*Starting From" required />
                                </div>

                                <div class="col-12">
                                    <label for="price" class="form-label"> Plan Content Price </label>
                                    <input class="form-control" type="text" name="price" id="price" placeholder="100 INR/100 USD" required />
                                </div>

                                <div class="col-12">
                                    <label for="time" class="form-label"> Plan Content Time </label>
                                    <input class="form-control" type="text" name="time" id="time" placeholder="Weekly/Monthly/Yearly" required />
                                </div>

                                <div class="col-12">
                                    <label for="tax" class="form-label"> Plan Content Tax </label>
                                    <input class="form-control" type="text" name="tax" id="tax" placeholder="EXCLUSIVE OF ALL TAXES" required />
                                </div>

                                <div class="col-12">
                                    <label for="button" class="form-label"> Plan Content Button </label>
                                    <input class="form-control" type="text" name="button" id="button" placeholder="Enter button name" required />
                                </div>

                                <div class="col-12">
                                    <label for="apply" class="form-label"> Plan Content Apply </label>
                                    <input class="form-control" type="text" name="apply" id="apply" placeholder="T&C Apply" required />
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

