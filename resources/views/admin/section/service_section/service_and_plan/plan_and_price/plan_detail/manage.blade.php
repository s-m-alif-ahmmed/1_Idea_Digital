@extends('admin.master')

@section('title')
    Plan Detail
@endsection

@section('content')

    <section class="py-5">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"> Plan Detail </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Manage Plan Detail </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('planDetail.create') }}" class="btn btn-outline-secondary justify-content-between">
                                Add New Plan Detail
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
                            <th> Plan Type </th>
                            <th> Plan Detail Option </th>
                            <th> On/Off Status </th>
                            <th> Status </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($plan_details as $plan_detail)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    {{ optional($plan_detail->planTypes)->name }} ({!! optional($plan_detail->planTypes)->description !!})
                                </td>
                                <td>
                                    {{ $plan_detail->detail }}
                                </td>
                                <td>
                                    @if($plan_detail->on_status == 'active')
                                        <a href="{{route('status.on.plan.detail', $plan_detail->id )}}" class="btn btn-success mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Active</a>
                                    @else($plan_detail->on_status == 'inActive')
                                        <a href="{{route('status.on.plan.detail', $plan_detail->id )}}" class="btn btn-danger mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">InActive</a>
                                    @endif
                                </td>
                                <td>
                                    @if($plan_detail->status == 'active')
                                        <a href="{{route('status.plan.detail', $plan_detail->id )}}" class="btn btn-success mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Active</a>
                                    @else($plan_detail->status == 'inActive')
                                        <a href="{{route('status.plan.detail', $plan_detail->id )}}" class="btn btn-danger mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">InActive</a>
                                    @endif
                                </td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('planDetail.show', Crypt::encryptString($plan_detail->id))}}" class="text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('planDetail.edit', Crypt::encryptString($plan_detail->id))}}" class="text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('planDetail.destroy', $plan_detail->id )}}" method="post" onclick="return confirm('Are you sure to delete this plan detail option?')">
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


