<!-- START SECTION SERVICES -->
<section class="all-services bg-white-3">
    <div class="container">
        <div class="section-title">
            <h2> TASHKILOT FAOLIYATI </h2>
            <h3> Asosiy vazilar va funksiyalar </h3>
        </div>
        <div class="row mt-50">
            @foreach($allActivities as $allAtivity)
                <div class="col-lg-4 col-xs-12 col-sm-12 col-md-6">
                    <div class="item mb-30">
                        <div class="service-box">
                            <div class="clearfix service-inner-box">
                                <div class="service-icon-box"><img src="{{ Voyager::image($allAtivity->icon) }}" alt=""></div>
                                <div class="service-content-box">
                                    <h3><a href="" style="color: #ffffff;"> {{ $allAtivity->activity_type_uz ?? $allAtivity->activity_type_oz ?? $allAtivity->activity_type_ru ?? $allAtivity->activity_type_en }} </a></h3>
                                    <p style="color: #fff;text-align: inherit;"> {{ $allAtivity->activity_text_uz ?? $allAtivity->activity_text_oz ?? $allAtivity->activity_text_ru ?? $allAtivity->activity_text_en }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <section id="hero-area">

                <div class="hero-inner">
                    <a href="#" class="btn btn-default btn-theme-colored2 btn-xl mt-5"> BATAFSIL <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

            </section>
        </div>
    </div>
</section>
<!-- END SECTION SERVICES -->
