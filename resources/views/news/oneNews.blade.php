@extends('app.app')

@section('content')
    <section class="who-we-are" style="padding: 3rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 who-1">
                    <div>
                        <h2 class="text-left mb-4" style="color: #001a57;">
                            {{ $oneNews->title_uz ?? $oneNews->title_oz ?? $oneNews->title_ru ?? $oneNews->title_en }}
                        </h2>

                        <p style="font-weight: 700;"> {{ $oneNews->created_at }} </p>
                        <hr>
                    </div>
                    <div class="pftext">
                        <img src="{{ Voyager::image($oneNews->images) }}" style="width: 500px;float: right;padding: 0 0 20px 20px;">
                        <p style="text-align: justify;"> {!! $oneNews->text_uz ?? $oneNews->text_oz ?? $oneNews->text_ru ?? $oneNews->text_en !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

