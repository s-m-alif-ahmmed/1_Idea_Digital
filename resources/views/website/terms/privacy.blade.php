@extends('website.master')

@section('title')
    Privacy Policy
@endsection

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="mx-auto">
                    <pre class="text-start d-inline-block">
                        @foreach($privacies->sortBy('created_at')->take(1) as $privacy)
                            {!!  $privacy->name  !!}
                        @endforeach
                    </pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
