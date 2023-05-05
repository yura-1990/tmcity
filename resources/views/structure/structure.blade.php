@extends('app.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ Voyager::image($structure->structure_image) }}" alt="" style="width: 1110px;">
                </div>
            </div>
        </div>
    </section>
@endsection

