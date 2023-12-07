@extends('admin.master')

@section('title')
    1Idea Logo Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">1Idea Logo Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th> 1Idea Logo</th>
                                    <td>
                                        <img src="{{ asset( $idea_logo->image ) }}" alt="{{$idea_logo->alt}}" class="h-100" width="100">
                                    </td>
                                </tr>
                                <tr>
                                    <th> 1Idea Logo Alt</th>
                                    <td>
                                        {{ $idea_logo->alt }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('ideaLogo.edit', Crypt::encryptString($idea_logo->id) )}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('ideaLogo.destroy', $idea_logo->id )}}" method="post" onclick="return confirm('Are you sure to delete this 1idea logo?')">
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
