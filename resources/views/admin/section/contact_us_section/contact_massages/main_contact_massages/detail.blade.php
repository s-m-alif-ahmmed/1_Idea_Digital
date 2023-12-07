@extends('admin.master')

@section('title')
    Main Contact Message Details
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header fs-3 fw-bold">Main Contact Message Details Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th> Main Contact ID </th>
                                    <td> {{$main_contact->id}} </td>
                                </tr>
                                <tr>
                                    <th> Main Comment Create </th>
                                    <td>
                                        {{ $main_contact->created_at->setTimezone('Asia/Dhaka')->format('M d, Y, h:ia') }}
                                    </td>
                                </tr>
                                <tr>
                                    <th> First Name </th>
                                    <td> {{$main_contact->full_name}} </td>
                                </tr>
                                <tr>
                                    <th> Official Email </th>
                                    <td> {{$main_contact->email}} </td>
                                </tr>
                                <tr>
                                    <th> Number </th>
                                    <td> {{$main_contact->number}} </td>
                                </tr>
                                <tr>
                                    <th> Massage </th>
                                    <td>
                                        {{$main_contact->message}}
                                    </td>
                                </tr>
                                <tr>
                                    <th> Status </th>
                                    <td>
                                        @if($main_contact->status == 'Read')
                                            <a href="{{route('status.home.contact', $main_contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Read</a>
                                        @elseif($main_contact->status == 'unRead')
                                            <a href="{{route('status.home.contact', $main_contact->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-primary btn-sm">UnRead</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('mainContact.destroy', $main_contact->id )}}" method="post" onclick="return confirm('Are you sure to delete this contact message?')">
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
                                        @if($main_contact->note)

                                            <div class="d-flex justify-content-between">
                                                {!! $main_contact->note !!}
                                                <a href="{{ route('mainContact.edit', Crypt::encryptString($main_contact->id)) }}" class="text-warning mx-1"  data-bs-target="#editNote" data-bs-toggle="modal" data-bs-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>

                                                <div class="modal fade" id="editNote" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Add Note</h1>
                                                            </div>
                                                            <form action="{{ route('mainContact.update', Crypt::encryptString($main_contact->id)) }}" method="post">
                                                                @csrf
                                                                @method('patch')

                                                                <div class="modal-body">

                                                                    <input type="hidden" name="full_name" value="{{ $main_contact->full_name }}">
                                                                    <input type="hidden" name="email" value="{{ $main_contact->email }}">
                                                                    <input type="hidden" name="number" value="{{ $main_contact->number }}">
                                                                    <input type="hidden" name="message" value="{{ $main_contact->message }}">
                                                                    <input type="hidden" name="service" value="{{ $main_contact->service }}">

                                                                    <textarea name="note" id="summernote" cols="30" rows="5">
                                                                            {{ $main_contact->note }}
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
                                                        <form action="{{ route('mainContact.update', Crypt::encryptString($main_contact->id)) }}" method="post">
                                                            @csrf
                                                            @method('patch')

                                                            <div class="modal-body">

                                                                <input type="hidden" name="full_name" value="{{ $main_contact->full_name }}">
                                                                <input type="hidden" name="email" value="{{ $main_contact->email }}">
                                                                <input type="hidden" name="number" value="{{ $main_contact->number }}">
                                                                <input type="hidden" name="message" value="{{ $main_contact->message }}">
                                                                <input type="hidden" name="service" value="{{ $main_contact->service }}">

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
