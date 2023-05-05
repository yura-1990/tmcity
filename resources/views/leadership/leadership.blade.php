@extends('app.app')

@section('content')
    <section class="blog-section">
        <div class="container">
            <div class="news-wrap">
                @foreach($leaderships as $leadership)
                    <div class="news-item news-item-sm">
                        <a href="">
                            <div class="news-item-img">
                                <img src="{{ Voyager::image($leadership->photo) }}" style="padding: 10%;">
                            </div>
                        </a>
                        <div class="news-item-text">

                            <a href="">
                                <h3> {{ $leadership->position_uz ?? $leadership->position_oz ?? $leadership->position_ru ?? $leadership->position_en }}
                                    <img src="{{ Voyager::image($leadership->icon) }}" style="float: right;width: 40px;position: relative;top: -20px;">
                                </h3>
                            </a>

                            <p style="line-height: 1px;font-weight: 900;color: #001a57;"> {{ $leadership->full_name_latin }} </p>

                            <p style="line-height: 1px;"> {{ $leadership->acceptance_days_uz ?? $leadership->acceptance_days_oz ?? $leadership->acceptance_days_ru ?? $leadership->acceptance_days_en }} </p>

                            <p style="line-height: 1px;"> {{ $leadership->phone }} </p>

                            <p style="line-height: 1px;"> {{ $leadership->email }} </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
