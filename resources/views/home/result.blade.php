<!-- START SECTION COUNTER UP -->
<section class="counterup">
    <div class="container">
        <div class="row">
            @foreach($institutions as $institution)
                <div class="col-md-3">
                    <div class="countr">
                       {{-- <i class="fa fa-trophy" aria-hidden="true"></i>--}}
                        {{--<img src="{{ Voyager::image($institution->icon) }}"  />--}}

                        <p class="counter"> {{ $institution->number }} </p>
                        <h3>{{ $institution->text_uz ?? $institution->text_oz ?? $institution->text_ru ?? $institution->text_en }}</h3>
                    </div>
                </div>
            @endforeach

            <div class="col-md-3">
                <div class="">
                    <!-- START FOOTER -->
                    <footer class="first-footer">
                        <div class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="{{ url('/contact') }}" class="bloq-email mailchimp form-inline" method="post">
                                            @csrf
                                            <label for="subscribeEmail" class="error"></label>
                                            <div class="email">
                                                <label> Ism </label>
                                                <input type="text" class="form-control" id="subscribeEmail" name="name" placeholder="Ism">
                                                <label> Email </label>
                                                <input type="email" class="form-control" id="subscribeEmail" name="email" placeholder="Email">
                                                <label> Taklif qoldirish </label>
                                                <textarea class="form-control aria" name="text"></textarea>
                                                <input type="submit" value="Subscribe">
                                                <p class="subscription-success"></p>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END SECTION COUNTER UP -->
