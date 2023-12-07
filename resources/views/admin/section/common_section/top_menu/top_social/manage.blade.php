@extends('admin.master')
@section('title')
    Top Social Link
@endsection

@section('content')

    <section class="py-5">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"> Top Social Link </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> Manage Top Social Link </li>
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
        <p class="text-center text-muted">{{session('message')}}</p>

        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive export-table">
                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom w-100" >
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Social Link Name </th>
                            <th> Status </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($top_socials as $top_social)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    {{ $top_social->name }}
                                </td>
                                <td>
                                    @if($top_social->status == 'active')
                                        <a href="{{route('status.top.social', $top_social->id )}}" class="btn btn-success mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Active</a>
                                    @else($top_social->status == 'inActive')
                                        <a href="{{route('status.top.social', $top_social->id )}}" class="btn btn-danger mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">InActive</a>
                                    @endif
                                </td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('topSocial.show', Crypt::encryptString($top_social->id))}}" class="text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('topSocial.edit', Crypt::encryptString($top_social->id))}}" class="text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('topSocial.destroy', $top_social->id )}}" method="post" onclick="return confirm('Are you sure to delete this top social link?')">
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


