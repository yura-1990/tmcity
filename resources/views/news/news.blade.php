@extends('app.app')

@section('content')
<!-- START SECTION SERVICES -->
<section class="all-services ">
    <div class="container">
        <div class="row mt-50">
            @foreach($news as $new)
                <div class="col-xs-6 col-sm-3">
                    <div class="item mb-30">
                        <div class="service-box">
                            <figure class="img-box" style="height: 180px;">
                                <a href=""><img src="{{ Voyager::image($new->images) }}" alt=""></a>
                            </figure>
                            <div class="clearfix service-inner-box" style="padding: 15px 3px;">
                                <div class="service-content-box" style="width: 100%;">
                                    <h3><a href="{{ url("/news/$new->id") }}"> {{ $new->title_uz ?? $new->title_oz ?? $new->title_ru ?? $new->title_en }} </a></h3>
                                </div>
                                <p style="line-height: 20px;text-align: inherit;"> {!! $new->text_uz ?? $new->text_oz ?? $new->text_ru ?? $new->text_en !!} </p>
                            </div>
                            <div class="clearfix service-inner-box" style="padding: 2px;">
                                <div class="service-content-box">
                                    <h3><a href=""> Batafsil <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $news->links() }}
    </div>
</section>
<!-- END SECTION SERVICES -->

@endsection
