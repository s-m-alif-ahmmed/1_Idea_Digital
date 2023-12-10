<section class=" m-0 pt-0">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-white">

                <div class="col-md-2">
                    <a class="navbar-brand" href="{{ route('home') }}">
                    @foreach($idea_logos->sortBy('created_at')->take(1) as $idea_logo)
                        <img src="{{ asset( $idea_logo->image ) }}" alt="{{ $idea_logo->alt }}" style="height: 75px;" />
                        @endforeach
                    </a>
                </div>

                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="col-md-8 collapse tabs navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item active">
                            <a href="{{ route('home') }}" class="active text-decoration-none text-black font-pop-400 px-4" style="font-family: Poppins, sans-serif;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="text-decoration-none text-black font-pop-400 px-4" style="font-family: Poppins, sans-serif;">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('case.studies') }}" class="text-decoration-none text-black font-pop-400 px-4" style="font-family: Poppins, sans-serif;">CASE STUDIES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="text-decoration-none text-black font-pop-400 px-4" style="font-family: Poppins, sans-serif;">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="text-decoration-none text-black font-pop-400 px-4" style="font-family: Poppins, sans-serif;">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="text-decoration-none text-black font-pop-400 px-4" style="font-family: Poppins, sans-serif;">BLOGS</a>
                        </li>
                    </ul>
                    <div class="tab-highlighter"></div>
                </div>

                <style>
                    .tab-highlighter{
                        color: white;
                        background-color: red;
                        width: 150px;
                        height: 100px;
                    }
                </style>

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

<script>

    /*Tab Highlighter Functionality*/
    $(document).on('click', 'nav .tabs ul li a', function(){
        var $this = $(this);
        TabHighlighter.set($this);
        $this.closest('li').siblings('.active').removeClass('active');
        $this.closest('li').addClass('active');
    });
    var TabHighlighter = {
        set: function($this){
            $('.tab-highlighter').css({
                'left':  $this.closest('li').offset().left,
                'width': $this.closest('li').outerWidth()
            });
        },
        refresh: function(){
            var $this = $('.tabs ul li.active a');
            $('.tab-highlighter').css({
                'left':  $this.closest('li').offset().left,
                'width': $this.closest('li').outerWidth()
            });
        }
    };
    $(window).resize(function(){
        TabHighlighter.refresh();
    });
    $(document).ready(function(){
        TabHighlighter.refresh();
    });
</script>


