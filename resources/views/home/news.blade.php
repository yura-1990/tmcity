<!-- START SECTION RECENTLY WORKS -->
<section class="recently portfolio">
    <div class="container-fluid recently-slider">
        <div class="section-title">
            <h2 style="color: #1A4DC2"> SO'NGGI YANGILIKLAR </h2>
            <h3 style="color: #968484"> Tashkilotning faoliyatiga oid so’nggi yangiliklar </h3>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                @foreach($news as $new)
                    <a href="{{ route('show.news', ['id' => $new->id]) }}" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-center" style="background-image: url({{ Voyager::image($new->images) }});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">{{ $new->title_uz ?? $new->title_oz ??  $new->title_ru ??  $new->title_en  }}</div>
                        </div>
                        <div class="view-proper">View Details</div>
                    </a>
                @endforeach
            </div>
            <div class="hero-inner">
                <a href="{{ route('news') }}" class="btn btn-default btn-theme-colored2 btn-xl mt-5"> Barcha yangiliklar </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION RECENTLY WORKS -->
