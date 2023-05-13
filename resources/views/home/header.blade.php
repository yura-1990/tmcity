<!-- STAR HEADER SEARCH -->
@foreach($homeHeads as $homeHead)
    @if(request()->getRequestUri() == $homeHead->url)
        <section id="hero-area" class="parallax-search overlay home-1" style="background-image: url({{ Voyager::image($homeHead->background_image) }})" data-stellar-background-ratio="0.5">
            <div class="hero-main">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-inner">
                                <!-- Welcome Text -->
                                    <div class="welcome-text">
                                        <h1 class="h1"> {{ $homeHead->title_uz ?? $homeHead->title_oz ?? $homeHead->title_ru ?? $homeHead->title_en }} </h1>
                                        <p class="mt-4"> {{ $homeHead->text_uz ?? $homeHead->text_oz ?? $homeHead->text_ru ?? $homeHead->text_en }} </p>
                                    </div>
                                    <!--/ End Welcome Text -->
                                @if(request()->getRequestUri() == '/')
                                    <a href="{{ route('regulatory-documents') }}" class="btn btn-default btn-theme-colored2 btn-xl mt-5"> BATAFSIL </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach

<!-- END HEADER SEARCH -->
