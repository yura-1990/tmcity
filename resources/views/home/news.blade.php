<!-- START SECTION RECENTLY WORKS -->
<section class="recently portfolio">
    <div class="container-fluid recently-slider">
        <div class="section-title">
            <h2> SO'NGGI YANGILIKLAR </h2>
            <h3> Tashkilotning faoliyatiga oid so’nggi yangiliklar </h3>
        </div>
        <div class="portfolio right-slider">
            <div class="owl-carousel home5-right-slider">
                @foreach($news as $new)
                    <a href="" class="recent-16" data-aos="fade-up">
                        <div class="recent-img16 img-center" style="background-image: url({{ Voyager::image($new->images) }});"></div>
                        <div class="recent-content"></div>
                        <div class="recent-details">
                            <div class="recent-title">Family Apartment</div>
                            <div class="recent-price">$230,000</div>
                            <div class="house-details">6 Bed <span>|</span> 3 Bath <span>|</span> 720 sq ft</div>
                        </div>
                        <div class="view-proper">View Details</div>
                    </a>
                @endforeach

            </div>
            <div class="hero-inner">
                <a href="#" class="btn btn-default btn-theme-colored2 btn-xl mt-5"> BATAFSIL <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION RECENTLY WORKS -->
