<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, user-scalable=no, shrink-to-fit=no" />
        
        <link rel="stylesheet" href="{{ asset('dbc/assets/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
        <link rel="stylesheet" href="{{ asset('dbc/assets/css/bootstrap-datetimepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('dbc/assets/css/bootstrap-datetimepicker-standalone.css') }}" />
        <link rel="stylesheet" href="{{ asset('dbc/assets/css/style.css') }}" />

        <title>Digital Business Card</title>
    </head>
    <style>

    </style>
    <body>
        <div class="container-mobile">
            <div class="background">
                <div class="logo">
                    <img src="{{ asset('dbc/assets/images/logo.svg') }}" class="img-fluid" />
                </div>
                
                <div class="profile">
                    <div class="profile__image rounded-circle"><img src="{{ asset('dbc/assets/images/profile.svg') }}" class="img-fluid" /></div>
                    <div class="profile__name">
                        <div class="profile__name-size">Stephanie Sugandi Gan</div>
                    </div>
                    <div class="profile__position">Director</div>
                    <div class="button button--chat">
                        Chat Me <img src="{{ asset('dbc/assets/images/icon-chat.svg') }}" class="img-fluid" />
                    </div>
                    <div class="button button--room">Enter Room</div>
                </div>
                
                <div class="information">
                    <div class="information__top-bar" data-action="top">
                        <div class="information__pin-bar"></div>
                    </div>
                    <div class="information__body-bar d-none">
                        <div class="information__body-bar-content">
                            <div class="information__company">
                                <div class="information__company-name">PT. Digital Netwerk Venture Indonesia</div>
                                <div class="information__company-description">A Leapfrog Creative Technology Company 10 years experience in digital industry, we believe the keys of success in business are able to FORECAST & ADAPT.</div>
                                <ul class="information__company-contact">
                                    <li>W : <a href="">https://www.the-netwerk.com</a></li>
                                    <li>P : (1234) 12345678</li>
                                    <li>T : 081234567890 / 080987654321</li>
                                </ul>
                            </div>
                            <div class="information__about-me">
                                <div class="information__about-me-title">About Me</div>
                                <div class="information__about-me-contact">
                                    <div class="d-flex">
                                        <div>Name</div>
                                        <div>:</div>
                                        <div>Stephanie Sugandi Gan</div>
                                    </div>
                                    <div class="d-flex">
                                        <div>Title</div>
                                        <div>:</div>
                                        <div>Director</div>
                                    </div>
                                    <div class="d-flex">
                                        <div>Email</div>
                                        <div>:</div>
                                        <div>stephanie@the-netwerk.com</div>
                                    </div>
                                    <div class="d-flex">
                                        <div>Phone</div>
                                        <div>:</div>
                                        <div>081234567890</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="" target="_blank">
                                        <div class="information__button-contact information__button-contact--ig rounded-circle">
                                            <img src= "{{ asset('dbc/assets/images/icon-instagram.svg') }}" class="img-fluid" />
                                        </div>
                                    </a>
                                    <a href="" target="_blank">
                                        <div class="information__button-contact information__button-contact--ig rounded-circle">
                                            <img src= "{{ asset('dbc/assets/images/icon-linkedin.svg') }}" class="img-fluid" />
                                        </div>
                                    </a>
                                    <a href="" target="_blank">
                                        <div class="information__button-contact information__button-contact--ig rounded-circle">
                                            <img src= "{{ asset('dbc/assets/images/icon-line.svg') }}" class="img-fluid" />
                                        </div>
                                    </a>
                                    <a id="share-button" href="javascript:void(0);">
                                        <div class="information__button-contact information__button-contact--ig rounded-circle">
                                            <img src= "{{ asset('dbc/assets/images/icon-share.svg') }}" class="img-fluid" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="information__office">
                                <div class="information__office-title">
                                    Office
                                </div>
                                <div class="information__office-list">
                                    HQ/Production Office
                                    <div class="information__office-list-address">
                                        Pandanwangi Green Park B-1
                                        Jl. Simpang LA. Sucipto
                                        Malang, Indonesia 65126
                                    </div>
                                </div>
                                <div class="information__office-list">
                                    Operational Office
                                    <div class="information__office-list-address">
                                        Jl. Hayam Wuruk No 3HH
                                        Kebon Kelapa, Gambir
                                        Jakarta Pusat, Indonesia 10120
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                Powered by The Netwerk | <a href="">Create yours!</a>
                            </div>
                        </div>
                        <div class="information__qr-code d-none">
                            <img src="{{ asset('dbc/assets/images/qr-code.svg') }}" class="img-fluid" />
                            <div>or Share With Link :</div>
                            <div class="information__qr-code-link">gg.gg/stephaniegan</div>
                        </div>
                        <div class="information__button-bottom">
                            <div class="information__button-bottom-popup">
                                <div class="button button--save-contact">
                                    <img src="{{ asset('dbc/assets/images/icon-contact.svg') }}" class="img-fluid" /> Save Contact
                                </div>
                                <div class="button button--visit-web">
                                    <img src="{{ asset('dbc/assets/images/icon-visit.svg') }}" class="img-fluid" /> Visit Web
                                </div>
                            </div>
                            <div class="information__button-bottom-bg d-flex">
                                <div id="schedule-meeting" class="button button--schedule-meeting">Schedule a Meeting</div>
                                <div class="information__button-bottom-grey rounded-circle" data-active="1">
                                    <img class="information__dot dot-first" src="{{ asset('dbc/assets/images/dot-menu.svg') }}" />
                                    <img class="information__dot dot-second" src="{{ asset('dbc/assets/images/dot-menu.svg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="meeting d-none">
                <div class="logo logo--black">
                    <img src="{{ asset('dbc/assets/images/logo-black.svg') }}" class="img-fluid" />
                </div>
                <form method="post">
                    <div class="meeting__title">
                        Schedule a Meeting
                    </div>
                    <div class="form-group form__input">
                        <label for="topic" class="form__input-label">Topic</label>
                        <input type="text" class="form-control form__input-tag" id="topic" name="topic" placeholder="Topic Meeting">
                    </div>
                    <div class="form-group form__input">
                        <div class="d-flex">
                            <label for="date-from" class="form__input-label">Date</label>
                            <div class="flex-fill form__input-label--time-zone">Time Zone : Jakarta (GMT+7)</div>
                        </div>
                        <div class="d-flex">
                            <input type="text" class="form-control form__input-tag form__input-tag--date datepicker" id="date-from" name="date-from">
                            <input type="text" class="form-control form__input-tag form__input-tag--time timepicker" id="time-from" name="time-from">
                        </div>
                    </div>
                    <div class="form-group form__input form__input--to">
                        <label for="date-to" class="form__input-label">To</label>
                        <div class="d-flex">
                            <input type="text" class="form-control form__input-tag form__input-tag--date datepicker" id="date-to" name="date-to">
                            <input type="text" class="form-control form__input-tag form__input-tag--time timepicker" id="time-to" name="time-to">
                        </div>
                    </div>
                    <div class="form-group form__input">
                        <label for="date-from" class="form__input-label">Type Meeting</label>
                        <select class="form-control form__input-tag" id="date-from" name="date-from">
                            <option>Offline</option>
                            <option>Online</option>
                        </select>
                    </div>
                    <div class="form-group form__input">
                        <label for="description" class="form__input-label">Description</label>
                        <textarea class="form-control form__input-tag form__input-tag--textarea" id="description" name="description">Add Description...</textarea>
                    </div>
                    <div class="footer footer--pb-50">
                        Powered by The Netwerk | <a href="">Create yours!</a>
                    </div>
                    <div class="d-flex">
                        <button id="cancel-meeting" class="btn button button--grey button--grid-2" type="button">Cancel</button>
                        <button class="btn button button--grid-2" type="submit">Schedule</button>
                    </div>
                </form>
            </div>

            <div class="edit-profile">
                <div class="logo logo--black">
                    <img src="{{ asset('dbc/assets/images/logo-black.svg') }}" class="img-fluid" />
                </div>
                <form method="post">
                    <div class="enter-room__title" style="margin-top: 20px;">
                        Enter Our Room
                    </div>
                    <div class="enter-room__title">
                        (Interactive & Immersive Virtual Office)
                    </div>
                    <div class="text-ket" style="margin-top: 20px;">
                        This room run on your browser
                    </div>
                    <div class="text-ket">
                        (best performance : chrome )
                    </div>
                    <div class="form-group form__input">
                        <label for="name" class="form__input-label">Room Name</label>
                        <input type="text" class="form-control form__input-tag" id="roomname" name="roomname" placeholder="Room Name" value="Stephanies Room">
                    </div>
                    <div class="form-group form__input">
                        <label for="enterroom" class="form__input-label">Enter Room</label>
                        <input type="text" class="form-control form__input-tag" id="enterroom" name="enterroom" placeholder="Type Name">
                    </div>
                    <div class="form-group form__input">
                        <label for="password" class="form__input-label">Password (if any)</label>
                        <input type="password" class="form-control form__input-tag" id="password" name="password" placeholder="Type room's password">
                    </div>
                    <div class="footer footer--pt-pb-40">
                        Powered by The Netwerk | <a href="">Create yours!</a>
                    </div>
                    <div class="d-flex">
                        <button id="cancel-meeting" class="btn button button--grey button--grid-2" type="button">Cancel</button>
                        <button class="btn button button--grid-2" type="submit">Enter Room</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="{{ asset('dbc/assets/js/bootstrap.min.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script src="{{ asset('dbc/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
        <script type="text/javascript">
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
                    format: 'L'
                });
                $('.timepicker').datetimepicker({
                    useCurrent: false,
                    format: 'LT'
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