<section class="container-fluid">
    <div class="row">
        <footer class="p-4 bg-black text-white">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <p>
                            @foreach($copyrights->sortBy('create_at')->take(1) as $copyright)
                                {{ $copyright->name }}
                            @endforeach
                            |
                            <a href="{{ route('policy.privacy') }}" class="text-decoration-none text-white">Privacy Policy</a>
                            and
                            <a href="{{route('policy.terms')}}" class="text-decoration-none text-white">Terms of Use</a>
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="d-flex justify-content-md-end justify-content-center">
                            @foreach($footer_socials->sortBy('created_at')->take(4) as $footer_social)
                                <a href="{{ $footer_social->slug }}" class="nav-link mx-3" target="_blank">
                                    <span class="icon">
                                        {!! $footer_social->icon !!}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>

