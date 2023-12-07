<section class="pt-4">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-white bg-body-tertiary">

                <div class="col-md-2">
                    <a class="navbar-brand" href="{{ route('home') }}">
                    @foreach($idea_logos->sortBy('created_at')->take(1) as $idea_logo)
                        <img src="{{ asset( $idea_logo->image ) }}" alt="{{ $idea_logo->alt }}" style="height: 75px;" />
                        @endforeach
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="col-md-8 collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="text-decoration-none text-black font-pop-600 px-4">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="text-decoration-none text-black font-pop-600 px-4">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('case.studies') }}" class="text-decoration-none text-black font-pop-600 px-4">CASE STUDIES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="text-decoration-none text-black font-pop-600 px-4">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="text-decoration-none text-black font-pop-600 px-4">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="text-decoration-none text-black font-pop-600 px-4">BLOGS</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 collapse navbar-collapse justify-content-start" id="navbarNav">
                    <ul class="navbar-nav d-flex flex-row justify-content-center">
                        <!-- Icons -->
                        @foreach($top_socials->sortBy('created_at')->take(4) as $top_social)
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="{{ $top_social->slug }}" target="_blank">
                                    <span class="icon">
                                        {!! $top_social->icon !!}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</section>


