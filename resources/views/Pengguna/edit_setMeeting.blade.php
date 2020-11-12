<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, user-scalable=no, shrink-to-fit=no" />
        
        <link rel="stylesheet" href="{{ asset('dbc/assets/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
        <link rel="stylesheet" href="{{ asset('dbc/assets/css/bootstrap-datetimepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('dbc/assets/css/bootstrap-datetimepicker-standalone.css') }}" />
        <link rel="stylesheet" href="{{ asset('dbc/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('dbc/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

        <title>Digital Business Card</title>
    </head>
    <style>
        
    </style>
    <body>
        <div class="container-mobile">
            <div class="background">

                <div class="meeting">
                    <div class="logo logo--black">
                        <img src="{{ asset('dbc/assets/images/logo-black.svg') }}" class="img-fluid" />
                    </div>
                    <form class="form" action="{{url('/editmeeting/save')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$setmeeting->id}}" class="form-control" placeholder="tulis id disini">
                        <div class="meeting__title">
                            Schedule a Meeting
                        </div>
                        <div class="form-group form__input">
                            <label for="topic" class="form__input-label">Topic</label>
                            <input type="text" class="form-control form__input-tag" id="topik" name="topik" value="{{$setmeeting->topik}}" placeholder="Topic Meeting">
                        </div>
                        <div class="form-group form__input">
                            <label for="email" class="form__input-label">Your Mail</label>
                            <input type="email" class="form-control form__input-tag" id="email" name="email" value="{{$setmeeting->email}}" placeholder="Your Mail">
                        </div>
                        <div class="form-group form__input">
                            <div class="d-flex">
                                <label for="date-from" class="form__input-label">Date</label>
                                <div class="flex-fill form__input-label--time-zone">Time Zone : Jakarta (GMT+7)</div>
                            </div>
                            <div class="d-flex">
                                <input type="text" class="form-control form__input-tag form__input-tag--date datepicker" id="date" value="{{$setmeeting->date}}" name="date">
                                <input type="text" class="form-control form__input-tag form__input-tag--time timepicker" id="time" value="{{$setmeeting->time}}" name="time">
                            </div>
                        </div>
                        <div class="form-group form__input form__input--to">
                            <label for="date-to" class="form__input-label">To</label>
                            <div class="d-flex">
                                <input type="text" class="form-control form__input-tag form__input-tag--date datepicker" value="{{$setmeeting->due}}" id="due" name="due">
                                <input type="text" class="form-control form__input-tag form__input-tag--time timepicker" value="{{$setmeeting->due_time}}" id="due_time" name="due_time">
                            </div>
                        </div>
                        <div class="form-group form__input">
                            <label for="date-from" class="form__input-label">Type Meeting</label>
                            <select class="form-control form__input-tag" id="type_meeting" name="type_meeting">
                                <option>Offline</option>
                                <option>Online</option>
                            </select>
                        </div>
                        <div class="form-group form__input">
                            <label for="description" class="form__input-label">Description</label>
                            <textarea class="form-control form__input-tag form__input-tag--textarea" id="deskripsi" name="deskripsi">{{$setmeeting->deskripsi}}</textarea>
                        </div>
                        <div class="footer footer--pb-50">
                            Powered by The Netwerk | <a href="">Create yours!</a>
                        </div>
                        <div class="d-flex">
                            <a href="/deletemeeting/{{ $setmeeting->id }}" class="btn button button--grey button--grid-2">Delete</a>
                            <button class="btn button button--grid-2" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="{{ asset('dbc/assets/js/bootstrap.min.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script src="{{ asset('dbc/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script type="text/javascript">
            function myFunction() {
                window.open("home_pengguna");
            }
            $(window).on('load', function () {
                $('.profile__image').animate({
                    'marginTop': '16px'
                }, 1500 );

                updateBodyBar();
            });

            $(window).resize(function(event) {
                updateBackground();
            });

            $(document).ready(function() {
                var height = $(window).height();
                var profile_h = $('.profile').height();
                var margin_top = (height - profile_h - 92) / 2;

                $('.profile__image').css('margin-top',margin_top);

                updateBackground();

                $('#schedule-meeting').click(function(){
                    $('.background').removeClass('animate__fadeInLeft').addClass('animate__animated').addClass('animate__fadeOutLeft'), setTimeout(function () {
                        $('.background').addClass('d-none');
                    }, 800);
                    
                    $('.meeting').removeClass('animate__fadeOutLeft').removeClass('d-none').addClass('animate__animated').addClass('animate__fadeInLeft'), setTimeout(function () {
                        updateBackground();
                    }, 800);
                });

                $('#cancel-meeting').click(function(){
                    $('.meeting').removeClass('animate__fadeInLeft').addClass('animate__fadeOutLeft'), setTimeout(function () {
                        $('.meeting').addClass('d-none');
                    }, 800);

                    $('.background').removeClass('animate__fadeOutLeft').removeClass('d-none').addClass('animate__fadeInLeft'), setTimeout(function () {
                        updateBackground();
                    }, 800);
                });

                var company_h = 0;

                $('.information__top-bar').click(function(){
                    let action = $(this).data('action');
                    let ch = $('.information__company').height();
                    if(ch!=0){
                        company_h = ch;
                    }

                    if(action=="top"){
                        $('.profile__image').animate({
                            'marginTop': '250px'
                        }, 1500 );

                        $('.profile__name').animate({
                            'marginTop': '-330px',
                            'marginBottom': '330px',
                        }, 1500 );

                        $('.profile__name-size').removeClass('profile__name-size--small').addClass('profile__name-size--big');

                        $('.information__company').animate({
                            'height': '0px'
                        }, 1500 );

                        $('.information__about-me-title').animate({
                            'marginTop': '0px'
                        }, 1500 );

                        var height = $(window).height();
                        var bodybar_h = height - (170);

                        $('.information__body-bar').removeClass('d-none').animate({
                            'height': bodybar_h+'px'
                        }, 1500, function() {
                            $('.information__body-bar').css('overflow-y','scroll');
                        });

                        $(this).data('action','bottom');
                    }else if(action=="bottom"){
                        $('.profile__image').animate({
                            'marginTop': '16px'
                        }, 1500 );

                        $('.profile__name').animate({
                            'marginTop': '12px',
                            'marginBottom': '0px',
                        }, 1500 );

                        $('.profile__name-size').removeClass('profile__name-size--big').addClass('profile__name-size--small');

                        $('.information__company').animate({
                            'height': company_h+'px'
                        }, 1500 );

                        $('.information__about-me-title').animate({
                            'marginTop': '24px'
                        }, 1500 );
                        
                        updateBodyBar();

                        $(this).data('action','top');
                    }else{
                        $('.information__qr-code').animate({
                            'opacity': '0'
                        }, 800, function() {
                            $('.information__qr-code').addClass('d-none');
                            $('.information__body-bar-content').removeClass('d-none');
                        });

                        $('.information__body-bar-content').animate({
                                'opacity': '1'
                        }, 2500 );

                        $(this).data('action','top');
                    }
                });

                $('#share-button').click(function(){
                    $('.information__body-bar-content').animate({
                            'opacity': '0'
                    }, 800, function() {
                        $('.information__body-bar-content').addClass('d-none');
                        $('.information__qr-code').removeClass('d-none');
                    });

                    $('.information__qr-code').animate({
                        'opacity': '1'
                    }, 2500 );

                    $('.information__top-bar').data('action','back');
                });

                $('.information__button-bottom-grey').click(function(){
                    $('.information__button-bottom-grey').toggleClass('information__button-bottom-grey--active')
                    
                    if($(this).data('active')==1){
                        $('.information__button-bottom-popup').css('height','110px').animate({
                            'opacity': '1'
                        }, 1500 );
                        $(this).data('active','2');
                    }else{
                        $('.information__button-bottom-popup').animate({
                            'opacity': '0'
                        }, 1500, function() {
                            $('.information__button-bottom-popup').css('height','0px');
                        });
                        $(this).data('active','1');
                    }
                });

                $('.datepicker').datetimepicker({
                    useCurrent: false,
                    format: 'YYYY/MM/DD'
                });
                $('.timepicker').datetimepicker({
                    useCurrent: false,
                    format: 'hh:mm A'
                });

                $("#date-from").on("dp.change", function (e) {
                    $('#time-from').data("DateTimePicker").minDate(e.date);
                    $('#date-to').data("DateTimePicker").minDate(e.date);
                    $('#time-to').data("DateTimePicker").minDate(e.date);
                });
                $("#time-from").on("dp.change", function (e) {
                    $('#date-from').data("DateTimePicker").minDate(e.date);
                    $('#date-to').data("DateTimePicker").minDate(e.date);
                    $('#time-to').data("DateTimePicker").minDate(e.date);
                });
                $("#date-to").on("dp.change", function (e) {
                    $('#date-from').data("DateTimePicker").maxDate(e.date);
                    $('#time-from').data("DateTimePicker").maxDate(e.date);
                });
                $("#time-to").on("dp.change", function (e) {
                    $('#date-from').data("DateTimePicker").maxDate(e.date);
                    $('#time-from').data("DateTimePicker").maxDate(e.date);
                });
            });

            function updateBackground(){
                var container_w = $('.container-mobile').width();
                $('.information').css('width', container_w);
                $('.information__button-bottom').css('width', container_w);
                $('.meeting').css('width', container_w);

                var height = $(window).height();
                var bg_h = $('.background').height();
                var meeting_h = $('.meeting').height();
                $('.background').css('height', height);
                $('.meeting').css('height', height);
            }

            function updateBodyBar(){
                var height = $(window).height();
                var logo_h = 55;
                var profile_h = 266;
                var topbar_h = $('.information__top-bar').height();

                var bodybar_h = height - (logo_h + profile_h + topbar_h + 110);

                $('.information__body-bar').removeClass('d-none').animate({
                    'height': bodybar_h+'px'
                }, 1500 , function() {
                    $('.information__body-bar').css('overflow-y','hidden');
                });
                console.log(bodybar_h);

                if(bodybar_h>100){
                    $('.information__button-bottom').addClass('animate__animated').addClass('animate__delay-1s').addClass('animate__fadeInUp');
                }else{
                    $('.information__button-bottom').addClass('d-none');
                }
            }
        </script>
    </body>
</html>