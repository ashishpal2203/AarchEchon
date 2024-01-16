<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AarchEchon</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

  

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="script.js"></script>
    <!-- Bootstrap JS -->
</head>

<style>
   
    #magic_section {
        background-color: #FDC991;
        padding-bottom: 5rem;
        position: relative;
        min-height: 90vh;
    }

    .select_question {
        background-image: url(card_first_bg.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 1rem 2rem;
        border-radius: 5px;
    }



    .btn-group .select {
        position: relative;
        width: 100%;
    }

    .btn-group .select input:checked+label {
        background-color: #ffc107;
    }

    .btn-group .select input:checked+label:hover,
    .btn-group .select input:checked+label:focus,
    .btn-group .select input:checked+label:active {
        background-color: #ffc107;
    }

    .btn-group .select input {
        opacity: 0;
        position: absolute;
    }

    .btn-group .select .button_select {
        margin: 0 10px 10px 0;
        display: flex;
        background-color: transparent;
        justify-content: center;
    }

    .cookies_image {
        width: 400px;
    }

    #confetti {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
    }

    #confetti {
        display: none;
    }

    .animate__animated.animate__rubberBand {
        animation-iteration-count: infinite;
    }

    .open_cookies {
        width: 500px;
        margin-top: 3rem;
    }

    @media screen and (max-width: 500px) {

        .cookies_image,
        .open_cookies {
            width: 300px;
        }
    }
</style>

<body>
    <header>
        <div class="container-fluid mobile_container-fluid ">
            <div class="h-logo">
                <a href="index.html">
                    <img src="../image/h_logo.svg" alt="" class="">
                </a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" style="display: none;" href="index.html"><img src="image/h_logo.svg" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#web-menu" aria-controls="web-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="web-menu">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="services.html" id="dropdownSubmenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Healing
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownSubmenuLink">
                                            <li><a class="dropdown-item" href="services.html#service_sec1">Reiki
                                                    Healing</a></li>
                                            <li><a class="dropdown-item" href="services.html#service_sec2">Pranic
                                                    Healing</a></li>
                                            <li><a class="dropdown-item" href="services.html#service_sec3">Access
                                                    Consciousness/BARS</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="stress-management.html" id="dropdownSubmenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                            Management Series
                                        </a>

                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="Therapy.html" id="dropdownSubmenuLink3" data-bs-toggle="dropdown" aria-expanded="false">
                                            Therapy
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownSubmenuLink3">
                                            <li><a class="dropdown-item" href="Therapy.html#Therapy1">Hypnotherapy</a>
                                            </li>
                                            <li><a class="dropdown-item" href="Therapy.html#Therapy2">Regression/Past
                                                    Life therapy </a></li>
                                            <li><a class="dropdown-item" href="Therapy.html#Therapy3">Soul Retrieval
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="Other-Services.html" id="dropdownSubmenuLink3" data-bs-toggle="dropdown" aria-expanded="false">
                                            Other Consultations
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownSubmenuLink3">
                                            <li><a class="dropdown-item" href="Other-Services.html#Other_Services1">Counselling Services </a>
                                            </li>
                                            <li><a class="dropdown-item" href="Other-Services.html#Other_Services2">Numerology </a></li>
                                            <li><a class="dropdown-item" href="Other-Services.html#Other_Services3">Magic of elements </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="AnimalConnect.html">What’s your Animal </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Heart-Heart Interaction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Student-zone.html">Student Zone</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link exp_now_btn exp_now_btnphone" href="#">Explore Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>



        </div>
    </header>


    <section id="magic_section">
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="first_cookie.png" alt="" class="cookies_image animate__animated" id="main_image">
                </div>
                <div class="col-lg-6 m-auto select_question">
                    <div class="btn-group w-100">
                        <div class="select">
                            <input type="checkbox" id="item_1">
                            <label class="btn btn-warning button_select" for="item_1">Strength</label>
                        </div>

                        <div class="select">
                            <input type="checkbox" id="item_2">
                            <label class="btn btn-warning button_select" for="item_2">Desire </label>
                        </div>

                        <div class="select">
                            <input type="checkbox" id="item_3">
                            <label class="btn btn-warning button_select" for="item_3">Luck </label>
                        </div>
                    </div>
                    <p class="text-center">Select two words to unlock your universal message. Crack the <br> cookie to
                        reveal the wisdom within!</p>
                </div>
                <div class="col-lg-12 mt-5">
                    <div style="width: 200px; margin: auto;text-align: center; z-index: 1000; position: relative;">
                        <label class="exp_now_btn w-100" onclick="magic();">Crack open</label>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script>
        function magic() {

            $("#confetti").show();
            $("#main_image").addClass('animate__rubberBand');

            setInterval(function() {
                $("#main_image").removeClass('animate__rubberBand');
                $("#main_image").addClass('animate__wobble');
                $("#main_image").removeClass('cookies_image');
                $("#main_image").addClass('open_cookies');
                $(".select_question").hide();
                $("#confetti").hide();
                $("#main_image").attr('src', 'open_cookie.png'); // Use attr() to set the 'src' attribute
            }, 2000)
        }
    </script>
</body>

</html>