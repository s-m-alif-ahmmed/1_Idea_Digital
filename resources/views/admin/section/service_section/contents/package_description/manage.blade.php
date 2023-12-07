@extends('admin.master')

@section('title')
    Package Description
@endsection

@section('content')

    <section class="py-5">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"> Package Description </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Manage Package Description </li>
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

        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive export-table">
                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom w-100" >
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Service Name </th>
                            <th> Package Description Image </th>
                            <th> Status </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($package_descriptions as $package_description)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    {{ $package_description->service->name }}
                                </td>
                                <td>
                                    <img src="{{asset( $package_description->image )}}" alt="{{ $package_description->alt }}" class="w-100" style="height: 80px;" />
                                </td>
                                <td>
                                    @if($package_description->status == 'active')
                                        <a href="{{route('status.packageDescription', $package_description->id )}}" class="btn btn-success mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Active</a>
                                    @else($package_description->status == 'inActive')
                                        <a href="{{route('status.packageDescription', $package_description->id )}}" class="btn btn-danger mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">InActive</a>
                                    @endif
                                </td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('packageDescription.show', Crypt::encryptString($package_description->id))}}" class="text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('packageDescription.edit', Crypt::encryptString($package_description->id))}}" class="text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('packageDescription.destroy', $package_description->id )}}" method="post" onclick="return confirm('Are you sure to delete this package description content?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-danger border-0" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

@endsection


