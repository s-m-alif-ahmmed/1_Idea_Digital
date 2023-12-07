@extends('admin.master')

@section('title')
     Package Description Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold"> Package Description Details Page</div>

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

                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th> Package Description ID </th>
                                    <td>
                                        {{ $package_description->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Service Name </th>
                                    <td>
                                        {{ $package_description->service->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Package Description Image </th>
                                    <td>
                                        <img src="{{asset( $package_description->name )}}" alt="" class="w-100" style="height: 80px;" />
                                    </td>
                                </tr>
                                <tr>
                                    <th> Package Description Image Alt </th>
                                    <td>
                                        {{ $package_description->alt }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Package Description Description </th>
                                    <td>
                                        {!! $package_description->description !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($package_description->status == 'active')
                                            <a href="{{route('status.packageDescription', $package_description->id )}}" class="btn btn-success mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Active</a>
                                        @else($package_description->status == 'inActive')
                                            <a href="{{route('status.packageDescription', $package_description->id )}}" class="btn btn-danger mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">InActive</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('packageDescription.edit', Crypt::encryptString($package_description->id) )}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('packageDescription.destroy', $package_description->id )}}" method="post" onclick="return confirm('Are you sure to delete this service description content?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger border-0 mx-2" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
