@extends('admin.master')

@section('title')
    Home Contact Message Details
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Home Contact Message Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Home Contact ID </th>
                                    <td> {{$home_contact->id}} </td>
                                </tr>
                                <tr>
                                    <th> Home Comment Create </th>
                                    <td>
                                        {{ $home_contact->created_at->setTimezone('Asia/Dhaka')->format('M d, Y, h:ia') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> First Name </th>
                                    <td> {{$home_contact->first_name}} </td>
                                </tr>
                                <tr>
                                    <th> Company Name </th>
                                    <td> {{$home_contact->company}} </td>
                                </tr>
                                <tr>
                                    <th> Official Email </th>
                                    <td> {{$home_contact->email}} </td>
                                </tr>
                                <tr>
                                    <th> Number </th>
                                    <td> {{$home_contact->number}} </td>
                                </tr>
                                <tr>
                                    <th> Status </th>
                                    <td>
                                        @if($home_contact->status == 'Read')
                                            <a href="{{route('status.home.contact', $home_contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Read</a>
                                        @elseif($home_contact->status == 'unRead')
                                            <a href="{{route('status.home.contact', $home_contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-primary btn-sm">UnRead</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('homeContact.destroy', $home_contact->id )}}" method="post" onclick="return confirm('Are you sure to delete this contact message?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger border-0" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Our Note </th>
                                    <td>
                                        @if($home_contact->note)

                                            <div class="d-flex justify-content-between">
                                                {!! $home_contact->note !!}
                                                <a href="{{ route('homeContact.edit', Crypt::encryptString($home_contact->id)) }}" class="text-warning mx-1"  data-bs-target="#editNote" data-bs-toggle="modal" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>

                                                <div class="modal fade" id="editNote" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Add Note</h1>
                                                            </div>
                                                            <form action="{{ route('homeContact.update', Crypt::encryptString($home_contact->id)) }}" method="post">
                                                                @csrf
                                                                @method('patch')

                                                                <div class="modal-body">

                                                                    <input type="hidden" name="first_name" value="{{ $home_contact->first_name }}">
                                                                    <input type="hidden" name="company" value="{{ $home_contact->company }}">
                                                                    <input type="hidden" name="email" value="{{ $home_contact->email }}">
                                                                    <input type="hidden" name="number" value="{{ $home_contact->number }}">

                                                                    <textarea name="note" id="summernote" cols="30" rows="5">
                                                                            {{ $home_contact->note }}
                                                                        </textarea>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Send message</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        @else

                                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>

                                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Add Note</h1>
                                                        </div>
                                                        <form action="{{ route('homeContact.update', Crypt::encryptString($home_contact->id)) }}" method="post">
                                                            @csrf
                                                            @method('patch')

                                                            <div class="modal-body">

                                                                <input type="hidden" name="first_name" value="{{ $home_contact->first_name }}">
                                                                <input type="hidden" name="company" value="{{ $home_contact->company }}">
                                                                <input type="hidden" name="email" value="{{ $home_contact->email }}">
                                                                <input type="hidden" name="number" value="{{ $home_contact->number }}">

                                                                <textarea name="note" id="summernote" cols="30" rows="5"></textarea>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Send message</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif

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
