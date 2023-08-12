
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="0tSYF3KNOd6EE5V8qUlCumQqUb7R55ISS0lEghoo">
    <meta name="description" content="CrowdSquare is a leading investment platform allowing people to invest in real estate online in an easy and secure way.">
</head>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="0tSYF3KNOd6EE5V8qUlCumQqUb7R55ISS0lEghoo">
    <title>
        CrowdSquare -  Invest in Real Estate Online
    </title>
    .
    <link rel="stylesheet" href="https://crowdsq.com/asset/frontend/css/cookie.css">
    <link href="https://crowdsq.com/asset/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://crowdsq.com/asset/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://crowdsq.com/asset/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="https://crowdsq.com/asset/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://crowdsq.com/asset/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://crowdsq.com/asset/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="https://crowdsq.com/asset/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://crowdsq.com/asset/frontend/css/selectric.css">
    <link rel="stylesheet" href="https://crowdsq.com/asset/frontend/css/animate.min.css">
    <link rel="stylesheet" href="https://crowdsq.com/asset/frontend/css/slick.css">
    <link rel="stylesheet" href="https://crowdsq.com/asset/frontend/css/font-awsome.min.css">
    <link href="https://crowdsq.com/asset/frontend/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://crowdsq.com/asset/frontend/css/iziToast.min.css">
    <link rel="stylesheet"
          href="https://crowdsq.com/asset/frontend/css/color.php?primary_color=0059FF">
</head>

<body>

<h1> CrowdSquare - Invest in real estate online </h1>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-B8D2BS69L8"></script>
<script>
    'use strict'
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "G-B8D2BS69L8");
</script>

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <div class="logo me-auto me-lg-0"><a href="{{ route('index') }}">
                <h3 style="font-weight: bolder" class="text-primary">{{ env('APP_NAME') }}</h3>

            </a>
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li class="active"><a class="nav-link"
                                      href="{{ route('index') }}">Home</a></li>
                <li><a class="nav-link" href="{{ route('properties') }}">Properties</a>
                </li>

                <li><a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li><a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

                <li class="d-md-block d-lg-none d-block ">
                    <a style="background-color: black" class="nav-link" href="{{ route('login') }}">Sign Up</a>
                </li>
                <li class="d-md-block d-lg-none d-block ">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <div class="header-right d-flex d-none  d-md-none d-lg-block">

            <a style="background-color: black" href="{{ route('login') }}" class="cmn-btn btn-sm ms-3">Sign Up</a>
            <a href="{{ route('login') }}" class="cmn-btn btn-sm ms-3">Login</a>
        </div>
    </div>
</header>
@yield('content')

<footer class="footer-section has-bg-img">
    <div class="footer-obj">
        <img src="https://crowdsq.com/asset/images/footer/63dd076d8bd311675429741.png" alt="">
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <div class="footer-box">
                        <div class="logo">
                            <a href="https://crowdsq.com">
                                <span>

                                    <img class="img-fluid rounded sm-device-img text-align"
                                         src="https://crowdsq.com/asset/images/logo/secondary_logo.png" width="100%"
                                         alt="pp">


                                </span>
                            </a>
                        </div>
                        <ul class="footer-info-list mt-4">
                            <li>
                                <span class="caption">Address</span>
                                <span class="description">25 Krum Kyulyavkov, Sofia, Bulgaria</span>
                            </li>
                            <li>
                                <span class="caption">Phone</span>
                                <span class="description">+359 896 84 72 50</span>
                            </li>
                            <li>
                                <span class="caption">Email</span>
                                <span class="description">Info@crowdsq.com</span>
                            </li>
                        </ul>
                        <div class="footer-payment">
                            <h6 class="text-white">Payment Methods:</h6>
                            <img src="https://crowdsq.com/asset/images/footer_image/630534532de7b1661285459.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-box">
                        <h4 class="title">Useful Links</h4>
                        <ul class="footer-link-list">
                            <li> <a href="https://crowdsq.com">Home</a></li>
                            <li><a href="https://crowdsq.com/about">About</a></li>
                            <li><a href="https://crowdsq.com/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-box">
                        <h4 class="title">Our Services</h4>
                        <ul class="footer-link-list">
                            <li><a
                                    href="https://crowdsq.com/service/commercial-real-estate">Commercial Real Estate</a>
                            </li>
                            <li><a
                                    href="https://crowdsq.com/service/residential-real-estate">Residential Real Estate</a>
                            </li>
                            <li><a
                                    href="https://crowdsq.com/service/guide">Step By Step Guide</a>
                            </li>
                            <li><a
                                    href="https://crowdsq.com/service/referral-program">Referral Program</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-box">
                        <h4 class="title">Subscribe To Our Newsletter</h4>

                        <form class="subscribe-form" id="subscribe">
                            <input type="email" name="email" class="form-control subscribe-email"
                                   placeholder="Your email">
                            <button type="submit">Subscribe</button>
                        </form>

                        <h6 class="text-white mt-4 mb-3">Social Links:</h6>
                        <ul class="social-links">
                            <li>
                                <a href="Https://www.facebook.com/crowdsq" target="_blank" class="twitter"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="Https://www.linkedin.com/company/crowdsq" target="_blank" class="twitter"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="Https://twitter.com/crowd_square" target="_blank" class="twitter"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="Https://www.youtube.com/@crowdsq" target="_blank" class="twitter"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="text-center mb-0 text-white">
                Copyright © 2022 CrowdSquare. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>


<button type="button" class="cmn-btn btn-sm btn-floating" id="btn-back-to-top">
    <i class="fas fa-arrow-up text-light"></i>
</button>

<script src="https://crowdsq.com/asset/frontend/js/jquery.min.js"></script>
<script src="https://crowdsq.com/asset/frontend/vendor/purecounter/purecounter.js"></script>
<script src="https://crowdsq.com/asset/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://crowdsq.com/asset/frontend/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://crowdsq.com/asset/frontend/js/slick.min.js"></script>
<script src="https://crowdsq.com/asset/frontend/vendor/php-email-form/validate.js"></script>
<script src="https://crowdsq.com/asset/frontend/js/selectric.min.js"></script>
<script src="https://crowdsq.com/asset/frontend/js/main.js"></script>
<script src="https://crowdsq.com/asset/frontend/js/iziToast.min.js"></script>
<script src="https://crowdsq.com/asset/frontend/js/jquery.uploadPreview.min.js"></script>

<script>
    $(function() {
        'use strict'

        $('.balance').on('click', function() {
            const modal = $('#invest');
            modal.find('input[name=plan_id]').val($(this).data('plan').id);
            modal.modal('show')
        })


        $('.featured-bookmark-btn').on('click', function() {

            let modal = $('#bookmark')

            if ($(this).data('bookmark') == 1) {
                modal = $('#bookmark-remove')
            }

            modal.find('form').attr('action', $(this).data('href'))
            modal.modal('show')
        })


        $('.invest-bookmark-btn').on('click', function() {

            let modal = $('#bookmark')

            if ($(this).data('bookmark') == 1) {
                modal = $('#bookmark-remove')
            }

            modal.find('form').attr('action', $(this).data('href'))
            modal.modal('show')
        })
    })
</script>
<script>
    'use strict';
    $(document).ready(function() {
        $(document).on('click', '.calculate-btn', function(e) {
            e.preventDefault();

            $('.invalid-feedback').addClass('d-none')
            $('#amount').removeClass('is-invalid').removeClass('is-valid')

            let modal = $('#calculateModal');

            $('.amount').val('');

            let plan = $(this).data('plan');

            $('input[name=id]').val(plan.id);

            if ($(this).data('plan').amount_type == 0) {


                $('.fixed-amount').addClass('d-none')
                $('.min-max').removeClass('d-none')

                $('.min').text(Number($(this).data('plan').minimum_amount).toFixed(2))

                $('.max').text(Number($(this).data('plan').maximum_amount).toFixed(2))
            } else {
                $('.fixed-amount').removeClass('d-none')
                $('.min-max').addClass('d-none')

                $('.fixed-amount .min').text(Number($(this).data('plan').amount).toFixed(2))
            }


            $('#profit').html(`


                 <ul class="cal-list">
                            <li>
                                <span class="caption">Plan</span>
                                 <span class="value">-</span>
                            </li>
                            <li>
                                <span class="caption">Amount</span>
                                 <span class="value">-</span>
                            </li>
                            <li>
                                <span class="caption">Payout Period</span>
                                 <span class="value">-</span>
                            </li>
                            <li>
                                <span class="caption">Profit</span>
                                 <span class="value">-</span>
                            </li>
                            <li>
                                <span class="caption">Capital Back</span>
                                 <span class="value">-</span>
                            </li>
                            <li>
                                <span class="caption">Total</span>
                                 <span class="value">-</span>
                            </li>
                        </ul>

                 `);

            modal.modal('show')


        });


        $(document).on('keyup', '.amount', function() {
            let amount = $(this).val();

            let id = $('input[name=id]').val();

            if(amount == ''){
                $('.invalid-feedback').addClass('d-none')
                $('#amount').removeClass('is-invalid').removeClass('is-valid')

                return
            }

            var url = "https://crowdsq.com/investment/calculate/:id";

            url = url.replace(':id', id);

            $.ajax({
                type: 'GET',
                url: url,
                data: {
                    amount: amount,
                    selectplan: id
                },
                success: (data) => {
                    if (data.message) {

                        let message = data.message + ' ' + Number(data.amount).toFixed(2)

                        $('#amount').removeClass('is-valid').addClass('is-invalid')

                        $('.invalid-feedback').addClass('d-block')

                    } else {

                        $('#profit').html(data);

                        $('#amount').removeClass('is-invalid').addClass('is-valid')

                        $('.invalid-feedback').addClass('d-none').text('')

                        modal.modal('show');
                    }


                },
                error: (error) => {
                    if (typeof(error.responseJSON.errors.amount) !== "undefined") {
                        iziToast.error({
                            message: error.responseJSON.errors.amount,
                            position: 'topRight',
                        });
                    }
                    if (typeof(error.responseJSON.errors.selectplan) !== "undefined") {
                        iziToast.error({
                            message: error.responseJSON.errors.selectplan,
                            position: 'topRight',
                        });
                    }
                }
            })
        })



    });
</script>


<script>
    'use strict'
    $(document).on('submit', '#subscribe', function(e) {
        e.preventDefault();
        const email = $('.subscribe-email').val();
        var url = "https://crowdsq.com/subscribe";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: url,
            data: {
                email: email,
            },
            success: (data) => {
                iziToast.success({
                    message: data.message,
                    position: 'topRight',
                });
                $('.subscribe-email').val('');

            },
            error: (error) => {
                if (typeof(error.responseJSON.errors.email) !== "undefined") {
                    iziToast.error({
                        message: error.responseJSON.errors.email,
                        position: 'topRight',
                    });
                }

            }
        })

    });

    var url = "https://crowdsq.com/changeLang";


    $('.changeLang').val("EN")

    $(".changeLang").change(function() {
        if ($(this).val() == '') {
            return false;
        }
        window.location.href = url + "?lang=" + $(this).val();
    });
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


</body>


</html>
