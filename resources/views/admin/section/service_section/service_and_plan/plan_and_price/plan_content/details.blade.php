@extends('admin.master')

@section('title')
     Plan Content Details
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold"> Plan Content Details Page</div>

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
                                    <th> Plan Content ID </th>
                                    <td>
                                        {{ $plan_content->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Plan Type Name </th>
                                    <td>
                                        {{ optional($plan_content->planTypes)->name }} ({!! optional($plan_content->planTypes)->description !!})
                                    </td>
                                </tr>
                                <tr>
                                    <th> Plan Content Start </th>
                                    <td>
                                        {{ $plan_content->start }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Plan Content Price </th>
                                    <td>
                                        {{ $plan_content->price }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Plan Content Time </th>
                                    <td>
                                        {{ $plan_content->time }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Plan Content Tax </th>
                                    <td>
                                        {{ $plan_content->tax }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Plan Content Button </th>
                                    <td>
                                        {{ $plan_content->button }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Plan Content Apply </th>
                                    <td>
                                        {{ $plan_content->apply }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('planContent.edit', Crypt::encryptString($plan_content->id) )}}" class="text-warning mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('planContent.destroy', $plan_content->id )}}" method="post" onclick="return confirm('Are you sure to delete this plan Content?')">
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
