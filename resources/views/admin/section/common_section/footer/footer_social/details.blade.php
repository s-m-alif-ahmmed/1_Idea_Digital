@extends('admin.master')

@section('title')
    Footer Social Link Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold"> Footer Social Link Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th> Social Link Name </th>
                                    <td>
                                        {{ $footer_social->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Social Icon </th>
                                    <td>
                                        <span class="icon bg-black">
                                            {!! $footer_social->icon !!}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Social Link </th>
                                    <td>
                                        {{ $footer_social->slug }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Status </th>
                                    <td>
                                        @if($footer_social->status == 'active')
                                            <a href="{{route('status.footer.social', $footer_social->id )}}" class="btn btn-success mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">Active</a>
                                        @else($footer_social->status == 'inActive')
                                            <a href="{{route('status.footer.social', $footer_social->id )}}" class="btn btn-danger mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">InActive</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('footerSocial.edit', Crypt::encryptString($footer_social->id) )}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('footerSocial.destroy', $footer_social->id )}}" method="post" onclick="return confirm('Are you sure to delete this footer social link?')">
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
