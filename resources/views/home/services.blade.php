<!-- START SECTION TESTIMONIALS -->
<section class="testimonials">
    <div class="container">
        <div class="section-title">
            <h2> XIZMATLAR </h2>
            <h3> Xizmat ko‘rsatiladigan yo‘nalishlar </h3>
        </div>
        <!-- START SECTION ABOUT -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 who">
                    <img src="{{ asset("images/bg/about-us-1.jpg") }}" alt="">
                </div>
                <div class="col-md-6 who-1">
                    <div class="pftext">
                        <p> {{ $services->title_uz ?? $services->title_oz ?? $services->title_ru ?? $services->title_en }} </p>
                    </div>
                @foreach($serviceItems as $serviceItem)
                        <div class="col-md-6 button button--wayra mt-1">
                            <p> {{ $serviceItem->text_item_uz ?? $serviceItem->text_item_oz ?? $serviceItem->text_item_ru ?? $serviceItem->text_item_en }} </p>
                        </div>
                @endforeach
                </div>
            </div>
        </div>

        <!-- END SECTION ABOUT -->
    </div>
</section>
<!-- END SECTION TESTIMONIALS -->
