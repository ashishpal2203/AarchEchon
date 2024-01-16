<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AarchEchon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Bootstrap JS -->
</head>

<body>

    <header>
        <div class="container-fluid mobile_container-fluid ">
            <div class="h-logo">
                <a href="index.php">
                    <img src="image/h_logo.png" alt="" class="img-fluid">
                </a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" style="display: none;" href="index.php"><img src="image/h_logo.png" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#web-menu" aria-controls="web-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="web-menu">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu rounded-0 main-sub" aria-labelledby="dropdownMenuLink">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="dropdownSubmenuLink" data-bs-toggle="dropdown" aria-expanded="false" onclick="window.location.href='services.php';">
                                            Healing
                                        </a>
                                        <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownSubmenuLink">
                                            <li><a class="dropdown-item" href="services.php?service_sec1">Reiki
                                                    Healing</a></li>
                                            <li><a class="dropdown-item" href="services.php?service_sec2">Pranic
                                                    Healing</a></li>
                                            <li><a class="dropdown-item" href="services.php?service_sec3">Access
                                                    Consciousness/BARS</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#" onclick="window.location.href='stress-management.php';" id="dropdownSubmenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                            Management Series
                                        </a>
                                        <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownSubmenuLink2">
                                            <li><a class="dropdown-item" href="stress-management.php?stress_management1">Stress Management</a></li>
                                            <li><a class="dropdown-item" href="stress-management.php?SelfManagement">Self-Management</a></li>
                                            <li><a class="dropdown-item" href="stress-management.php?stress_management4">Cord Management</a></li>
                                            <li><a class="dropdown-item" href="stress-management.php?EmotionalManagement">Emotions Management</a></li>
                                            <li><a class="dropdown-item" href="stress-management.php">Pain/Grief management</a></li>
                                            <li><a class="dropdown-item" href="#">Breakup-Management </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#" onclick="window.location.href='Therapy.php';" id="dropdownSubmenuLink3" data-bs-toggle="dropdown" aria-expanded="false">
                                            Therapy
                                        </a>
                                        <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownSubmenuLink3">
                                            <li><a class="dropdown-item" href="Therapy.php?Therapy1">Hypnotherapy</a>
                                            </li>
                                            <li><a class="dropdown-item" href="Therapy.php?Therapy2">Regression/Past
                                                    Life therapy </a></li>
                                            <li><a class="dropdown-item" href="Therapy.php?Therapy3">Soul Retrieval
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#" onclick="window.location.href='Other-Services.php';" id="dropdownSubmenuLink3" data-bs-toggle="dropdown" aria-expanded="false">
                                            Other Consultations
                                        </a>
                                        <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownSubmenuLink3">
                                            <li><a class="dropdown-item" href="Other-Services.php?Other_Services1">Counselling Services </a>
                                            </li>
                                            <li><a class="dropdown-item" href="Other-Services.php?Other_Services2">Numerology </a></li>
                                            <li><a class="dropdown-item" href="Other-Services.php?Other_Services3">Magic of elements </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="AnimalConnect.php">What’s your Animal </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="magic/heart.php">Heart-Heart Interaction</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="Student-zone.php">Student Zone</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link exp_now_btn exp_now_btnphone" href="#">Enquire us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>



        </div>
    </header>