@extends('app.app')

@section('content')

    <section class="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ Voyager::image($about->certificate) }}" alt="">
                    <div class="box bg-2">
                        <a href="" class="button button--wayra button--border-thick button--text-upper button--size-s mb-5 mt-4"> <img src="images/bg/list-1.png"> Nizom </a>
                        <a href="" class="button button--wayra button--border-thick button--text-upper button--size-s mb-5 mt-4" style="background: #fff;color: #000;border: 2px solid #001a57;border-radius: 8px;"><img src="images/bg/list-2.png"> Ustav </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div>
                        <h2 class="text-inherit mb-4" style="font-size: 120%;
"> {{ $about->title_uz ?? $about->title_oz ?? $about->title_ru ?? $about->title_en }} </h2>
                    </div>
                    <div class="pftext">
                        <p> {!! $about->text_uz ?? $about->text_oz ?? $about->text_ru ?? $about->text_en !!} </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
