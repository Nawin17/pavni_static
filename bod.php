<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This site is optimized with the Yoast SEO plugin v23.4 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Pavni Engineering</title>
    <link rel="icon" type="image/x-icon" href="./images/Pavni_Logo.png">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Pavni Engineering – Pioneers in Thermal, Utilities, and LNG Solutions" />
    <meta property="og:description" content="Established in 2016, Pavni Engineering brings over a decade of experience in executing large-scale projects in Oil Refineries, LNG plants, Gas processing units, and more. Founded by industry experts with a focus on innovation and quality, the company has completed projects across India, Russia, and beyond, spanning defense, nuclear power, and hydrocarbon sectors. With a highly skilled team, Pavni Engineering continues to deliver excellence in the global engineering space." />

    <meta property="article:modified_time" content="2024-01-25T09:40:39+00:00" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="10 minutes" />

    <style>
        .bod-section {
            padding: 60px 250px 20px 250px;
            margin: -20px;
        }

        .text-culture p {
            display: grid;
            justify-content: center;
        }

        .img-wrap {
            height: 300px;
            width: 350px;
        }

        @media (max-width: 767px) {

            .bod-section {
                padding: 45px 45px 0px 45px;
                margin: -20px;
            }

            .img-wrap {
                height: 300px;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQHGPMG9"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include './header.php' ?>

    <section class="breadcum">
        <picture>
            <img data-src="" src="./images/bg/slide 9 - Copy.jpg" class="img-responsive  lazyloaded" alt="knowledgecenter-breadcrum">
        </picture>
        <div class="container breadcum_container">
            <div class="caption-heading">
                <h1 class="f-semibold">BOARD OF DIRECTORS</h1>
                <p class="f-semibold"> We are a passionate team clued by the Creative ideas</p>
            </div>
        </div>
    </section>
    
        <section class="bod-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="img-wrap">
                            <!-- Dynamically output first image -->
                            <img src="./uploads/board_director/66fe6e5a20697-Mr.Ramkishore.jpg" class="img-fluid" alt="Mr. Ram Kishore">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="text-culture">
                            <!-- Dynamically output first director's name and description -->
                            <h4 class="f-semibold blue">Mr. Ram Kishore</h4>
                            <p class="f-light">Mr. Ram Kishore is a Mechanical Engineer who serves as the Director of Pavni Engineering Private Limited. He has over 18 plus years of experience managing projects and fabricating and constructing pipes in a variety of businesses globally. He has managed multinational projects and guided large, varied teams. Possesses expertise working in hazardous project environments and adverse weather. Based on his expertise in technology, problem-solving abilities, and project management capabilities, the organisation has progressed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bod-section">
            <div class="container">
                <div class="row">
                    <!-- Dynamically output second director's text first -->
                    <div class="col-md-7">
                        <div class="text-culture">
                            <h4 class="f-semibold blue">Mrs. Veni</h4>
                            <p class="f-light">Mrs. Veni as a Director, has an experience of about more than 8 years as a professor in the area of Upstream and Downstream processes. She holds the Degree of Master of Technology in Petroleum Refining and Petrochemicals from Anna University. Her technical acumen and managing back end operations has enabled a harmonious balance.</p>
                        </div>
                    </div>

                    <!-- Dynamically output second image -->
                    <div class="col-md-5">
                        <div class="img-wrap">
                            <img src="./uploads/board_director/66fe6e777805e_Mrs. Veni.jpg" class="img-fluid" alt="Mrs. Veni">
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
    <?php include './footer.php' ?>

    <script type="text/javascript" src="./assests/js/jquery.min.js"></script>
    <script type="text/javascript" src="./assests/js/popper.min.js"></script>
    <script type="text/javascript" src="./assests/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assests/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./assests/js/parallax.min.js"></script>
    <script type="text/javascript" src="./assests/js/custom.js"></script>
    <script type="text/javascript" src="./assests/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="./assests/js/slick.min.js"></script>
    <script type="text/javascript" src="./assests/js/aos.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".column a").click(function(event) {
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top - 80
                }, 2000);
            });
        });
    </script>

    <script type="text/javascript">
        var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
        var collapseList = collapseElementList.map(function(collapseEl) {
            collapseEl.addEventListener('hidden.bs.collapse', function() {
                let children = this.querySelectorAll('.collapse.show');
                children.forEach((c) => {
                    var collapse = bootstrap.Collapse.getInstance(c)
                    collapse.hide()
                })
            })
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#product-dropdown1").click(function() {
                $(".dropdown-menu.mobile-services").toggle();
            });
        });
    </script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
    <script type="text/javascript">
        var telInput = $("#phone5"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({

            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "all",
            ipinfoToken: "yolo",

            nationalMode: false,
            numberType: "MOBILE",
            preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "In",
            geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        });

        var reset = function() {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function() {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);


        $(document).ready(function() {
            var text1 = $('.solution-form .selected-dial-code').html();
            $('input[name="country_code"]').val(text1);

            $('.solution-form .country-list').on('click', function() {
                var text = $('.solution-form .selected-dial-code').html();
                $('input[name="country_code"]').val(text);
            });
        });
    </script>

    <script type="text/javascript">
        function captchaCode() {
            var Numb1, Numb2, Numb3, Numb4, Code;
            Numb1 = (Math.ceil(Math.random() * 10) - 1).toString();
            Numb2 = (Math.ceil(Math.random() * 10) - 1).toString();
            Numb3 = (Math.ceil(Math.random() * 10) - 1).toString();
            Numb4 = (Math.ceil(Math.random() * 10) - 1).toString();
            $(".captcha-error").hide();

            Code = Numb1 + Numb2 + Numb3 + Numb4;
            $("#captcha span").remove();
            $("#captcha input").remove();
            $("#captcha").append("<span id='code'>" + Code + "</span><input type='button' onclick='captchaCode();'>");
        }

        $(function() {
            $(".email-error").hide();
            captchaCode();
            emailstatus = false;
            msgstatus = false;
            captchastatus = false;
            $('.email').on('input', function(e) {

                var emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,10})+$/;
                var emailText = $(".email").val();
                if (emailFilter.test(emailText)) {
                    $(".contactbtn").prop("disabled", false);
                    window.emailstatus = true;
                    $(".email-error").hide();
                } else {
                    window.emailstatus = false;
                    $(".email-error").show();
                    $(".contactbtn").prop("disabled", true);

                }
            });

            $("#msg-error").hide();
            var allowed = 0; // how many times url can be allowed
            var urlregex = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/g; //match urls
            var emailregex = /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}\b/ig; //match emails
            var specialregex = /[\'^Â£$%&*(){}@#~><>|=_+Â¬]/g; //match special characters

            $('#contactmsg').on('input', function() {
                var textUrl = $(this).val().match(urlregex); // search url
                var textArea = $(this).val().match(emailregex); // search email
                var textChar = $(this).val().match(specialregex); // search special character
                if ((textUrl && textUrl.length > allowed) || (textArea && textArea.length > allowed) || (textChar && textChar.length > allowed)) {
                    $('.contactbtn').attr("disabled", true);
                    window.msgstatus = false;
                    $("#msg-error").show();
                } else {
                    $('.contactbtn').attr("disabled", false);
                    window.msgstatus = true;
                    $("#msg-error").hide();
                }
            });

            $('.captcha').on('input', function(e) {
                var captchaVal = $("#code").text();
                var captchaCode = $(".captcha").val();
                if (captchaVal == captchaCode) {
                    $(".contactbtn").prop("disabled", false);
                    window.captchastatus = true;
                    $(".captcha-error").hide();
                } else {
                    $(".contactbtn").prop("disabled", true);
                    window.captchastatus = false;
                    $(".captcha-error").text("Please Enter Correct Captcha");
                    $(".captcha-error").show();


                }
            });

            $('form').on('submit', function(e) {
                var msgval = $('#contactmsg').val();
                if (msgval == '') {
                    if (window.emailstatus && window.captchastatus) {
                        $('form .formload').show();
                        $(".contactbtn").prop("disabled", false);
                    } else {
                        e.preventDefault();
                        if (window.emailstatus == "" || window.emailstatus == false) {
                            $(".email-error").show();
                            $(".contactbtn").prop("disabled", true);
                        }
                        if (window.captchastatus == "" || window.captchastatus == false) {
                            $(".captcha-error").show();
                            $(".contactbtn").prop("disabled", true);
                        }
                    }
                } else if (msgval !== '') {

                    if (window.msgstatus && emailstatus && captchastatus) {
                        $('form .formload').show();
                        $(".contactbtn").prop("disabled", false);
                    } else {
                        e.preventDefault();
                        if (window.msgstatus == "" || window.msgstatus == false) {
                            $("#msg-error").show();
                            $(".contactbtn").prop("disabled", true);
                        }
                        if (window.emailstatus == "" || window.emailstatus == false) {
                            $(".email-error").show();
                            $(".contactbtn").prop("disabled", true);
                        }
                        if (window.captchastatus == "" || window.captchastatus == false) {
                            $(".captcha-error").show();
                            $(".contactbtn").prop("disabled", true);
                        }
                    }
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {});
    </script>
    <script type="text/javascript">
        // input type name field script
        $(function() {
            $('#txtFirstName').keydown(function(e) {
                if (e.ctrlKey || e.altKey) {
                    e.preventDefault();
                } else {
                    var key = e.keyCode;
                    if (!((key == 8) || (key == 9) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                        e.preventDefault();
                    }
                }
            });
        });
    </script>
</body>

</html>
</body>

</html>