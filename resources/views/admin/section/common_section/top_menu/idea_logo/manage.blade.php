@extends('admin.master')
@section('title')
    1Idea Logos
@endsection

@section('content')

    <section class="py-5">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">1Idea Logo</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage 1Idea Logo</li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('ideaLogo.create') }}" class="btn btn-outline-secondary justify-content-between">
                                Add New Idea Logo
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
                            <th> 1Idea Logo </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($idea_logos as $idea_logo)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img src="{{ asset( $idea_logo->image ) }}" alt="{{$idea_logo->alt}}" class="h-100" width="100">
                                </td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="{{route('ideaLogo.show', Crypt::encryptString($idea_logo->id))}}" class="text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('ideaLogo.edit', Crypt::encryptString($idea_logo->id))}}" class="text-warning mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('ideaLogo.destroy', $idea_logo->id )}}" method="post" onclick="return confirm('Are you sure to delete this idea logo?')">
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


