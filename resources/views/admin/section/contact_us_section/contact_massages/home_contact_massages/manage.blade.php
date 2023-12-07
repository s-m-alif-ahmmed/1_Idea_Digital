@extends('admin.master')

@section('title')
    Home Contact Message
@endsection

@section('content')

    <section class="py-5">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Home Contact Message</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Home Contact Message </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

{{--        message--}}
        <p class="text-center text-muted">{{session('message')}}</p>

{{--        manage home content--}}
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th> SL </th>
                            <th> Home Contact Create </th>
                            <th> First Name </th>
                            <th> Company Name </th>
                            <th> Status </th>
                            <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($home_contacts as $home_contact)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $home_contact->created_at->setTimezone('Asia/Dhaka')->format('M d, Y, h:ia') }}</td>
                            <td>{{$home_contact->first_name}}</td>
                            <td>{{$home_contact->company}}</td>
                            <td>
                                @if($home_contact->status == 'Read')
                                    <a href="{{route('status.home.contact', $home_contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Read</a>
                                @elseif($home_contact->status == 'unRead')
                                    <a href="{{route('status.home.contact', $home_contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-primary btn-sm">UnRead</a>
                                @endif
                            </td>

                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="{{route('homeContact.show', Crypt::encryptString($home_contact->id))}}" class="text-primary mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="fa fa-eye"></i></a>
                                    <form action="{{ route('homeContact.destroy', $home_contact->id )}}" method="post" onclick="return confirm('Are you sure to delete this contact message?')">
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

