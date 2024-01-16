<?php include 'header.php' ?>

<style>
    .carousel {
        z-index: 1;
    }
</style>
<section id="hero">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/hero-banner3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/hero-banner2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="image/hero-banner1.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section id="ExploreWithUs">
    <div class="container">
        <h2 class="mb-4 explore_with_us">Explore with Us</h2>
        <div class="ExploreWithUsCardGrid">
            <a href="greateOne.php">
                <div class="ExploreWithUsCard">
                    <img src="image/ExploreWithUs1.png" alt="" class="img-fluid">
                    <h5 class="innerText">Gratitude to the Great Ones </h5>
                </div>
            </a>
            <a href="#">
                <div class="ExploreWithUsCard">
                    <img src="image/ExploreWithUs2.png" alt="" class="img-fluid">
                    <h5 class="innerText">Fortune Cookie </h5>
                </div>
            </a>
            <a href="#">
                <div class="ExploreWithUsCard">
                    <img src="image/ExploreWithUs3.png" alt="" class="img-fluid">
                    <h5 class="innerText">Self Empowering practices </h5>
                </div>
            </a>
            <a href="stress-management.php">
                <div class="ExploreWithUsCard">
                    <img src="image/ExploreWithUs4.png" alt="" class="img-fluid">
                    <h5 class="innerText">Management Series </h5>
                </div>
            </a>
            <a href="#">
                <div class="ExploreWithUsCard">
                    <img src="image/ExploreWithUs5.png" alt="" class="img-fluid">
                    <h5 class="innerText">Breakup Cue </h5>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="StudentZone">
    <div class="container">
        <h2 class="studentZone_heading mb-4">Student Zone</h2>

        <div class="row">
            <div class="col-lg-6">
                <ul class="">
                    <li class="flower">Your path to Success</li>
                    <p>Embark on a journey towards balance, well-being, and the keys to success with our
                        student-focused resources and services.</p>
                    <li class="questionsMark">Discover Answers to your Questions</li>
                    <p>Explore our wealth of knowledge and guidance to find answers to your most pressing questions
                        on stress, emotions, time management, and spirituality.</p>
                </ul>
            </div>
            <div class="col-lg-6 text-end">
                <img src="image/StudentZone1.png" alt="" style="width: 60%;">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6">
                <img src="image/StudentZone2.png" alt="" style="width: 60%;">
            </div>
            <div class="col-lg-6">
                <ul class="">
                    <li class="flower">Manage stress</li>
                    <li class="flower">Understanding Emotions </li>
                    <li class="flower">Mastering Time Management </li>
                    <li class="flower">Infusing Spirituality </li>

                </ul>
            </div>
            <div class="col-lg-12 text-center mt-2">
                <a href="#" class="exp_now_btn text-light" style="background-color: rgba(66, 95, 89, 0.91);">Explore Now</a>
            </div>
        </div>
    </div>
</section>

<section id="ExploreMore">
    <div class="container">
        <h2 class="heading_color text-center mb-5">Explore more</h2>
        <div class="row g-5">
            <div class="col-lg-3 col-sm-6">
                <img src="image/Exploremore1.png" alt="" class="img-fluid">
                <p class="text-center mid_text mt-3">Hypnotherapy</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="image/Exploremore2.png" alt="" class="img-fluid">
                <p class="text-center mid_text mt-3">Emotions</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="image/Exploremore3.png" alt="" class="img-fluid">
                <p class="text-center mid_text mt-3">Animal Connect</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="image/Exploremore4.png" alt="" class="img-fluid">
                <p class="text-center mid_text mt-3">Meditative Ice</p>
            </div>
        </div>
    </div>
</section>

<section id="ExploreMore">
    <div class="container">
        <h2 class="heading_color text-center mb-5">Testimonials </h2>


        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="col-lg-12 px-5 card">
                        <svg width="68" height="73" viewBox="0 0 68 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0344 22.6861C14.1178 22.4243 15.2253 22.2925 16.3363 22.2931C25.1338 22.2931 32.2634 30.4411 32.2634 40.4881C32.2634 50.5381 25.1338 58.6861 16.3363 58.6861C7.53875 58.6861 0.40625 50.5411 0.40625 40.4881C0.40625 40.1941 0.411875 39.8971 0.425937 39.6031H0.40625C0.40625 24.4381 11.2063 12.0991 24.4813 12.0991V18.2071C20.1753 18.2071 16.2041 19.8811 13.0344 22.6861ZM48.68 22.6861C49.7431 22.4281 50.8456 22.2931 51.9762 22.2931C60.7738 22.2931 67.9062 30.4411 67.9062 40.4881C67.9062 50.5381 60.7738 58.6861 51.9762 58.6861C43.1788 58.6861 36.0491 50.5411 36.0491 40.4881C36.0491 40.1941 36.0547 39.8971 36.0688 39.6031H36.0491C36.0491 24.4381 46.8491 12.0991 60.1241 12.0991V18.2071C55.8153 18.2071 51.8497 19.8811 48.68 22.6861Z" fill="#4D6A61" />
                        </svg>

                        <h5>Your app brings so much peace and tolerance to our homeh5</h5>
                        <p class="mt-3">Rachael, UK</p>
                        <p>on meditation’s positive effect on family life</p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-lg-12 px-5 card">
                        <svg width="68" height="73" viewBox="0 0 68 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0344 22.6861C14.1178 22.4243 15.2253 22.2925 16.3363 22.2931C25.1338 22.2931 32.2634 30.4411 32.2634 40.4881C32.2634 50.5381 25.1338 58.6861 16.3363 58.6861C7.53875 58.6861 0.40625 50.5411 0.40625 40.4881C0.40625 40.1941 0.411875 39.8971 0.425937 39.6031H0.40625C0.40625 24.4381 11.2063 12.0991 24.4813 12.0991V18.2071C20.1753 18.2071 16.2041 19.8811 13.0344 22.6861ZM48.68 22.6861C49.7431 22.4281 50.8456 22.2931 51.9762 22.2931C60.7738 22.2931 67.9062 30.4411 67.9062 40.4881C67.9062 50.5381 60.7738 58.6861 51.9762 58.6861C43.1788 58.6861 36.0491 50.5411 36.0491 40.4881C36.0491 40.1941 36.0547 39.8971 36.0688 39.6031H36.0491C36.0491 24.4381 46.8491 12.0991 60.1241 12.0991V18.2071C55.8153 18.2071 51.8497 19.8811 48.68 22.6861Z" fill="#4D6A61" />
                        </svg>

                        <h5>Your app brings so much peace and tolerance to our homeh5</h5>
                        <p class="mt-3">Rachael, UK</p>
                        <p>on meditation’s positive effect on family life</p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-lg-12 px-5 card">
                        <svg width="68" height="73" viewBox="0 0 68 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0344 22.6861C14.1178 22.4243 15.2253 22.2925 16.3363 22.2931C25.1338 22.2931 32.2634 30.4411 32.2634 40.4881C32.2634 50.5381 25.1338 58.6861 16.3363 58.6861C7.53875 58.6861 0.40625 50.5411 0.40625 40.4881C0.40625 40.1941 0.411875 39.8971 0.425937 39.6031H0.40625C0.40625 24.4381 11.2063 12.0991 24.4813 12.0991V18.2071C20.1753 18.2071 16.2041 19.8811 13.0344 22.6861ZM48.68 22.6861C49.7431 22.4281 50.8456 22.2931 51.9762 22.2931C60.7738 22.2931 67.9062 30.4411 67.9062 40.4881C67.9062 50.5381 60.7738 58.6861 51.9762 58.6861C43.1788 58.6861 36.0491 50.5411 36.0491 40.4881C36.0491 40.1941 36.0547 39.8971 36.0688 39.6031H36.0491C36.0491 24.4381 46.8491 12.0991 60.1241 12.0991V18.2071C55.8153 18.2071 51.8497 19.8811 48.68 22.6861Z" fill="#4D6A61" />
                        </svg>

                        <h5>Your app brings so much peace and tolerance to our homeh5</h5>
                        <p class="mt-3">Rachael, UK</p>
                        <p>on meditation’s positive effect on family life</p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-lg-12 px-5 card">
                        <svg width="68" height="73" viewBox="0 0 68 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0344 22.6861C14.1178 22.4243 15.2253 22.2925 16.3363 22.2931C25.1338 22.2931 32.2634 30.4411 32.2634 40.4881C32.2634 50.5381 25.1338 58.6861 16.3363 58.6861C7.53875 58.6861 0.40625 50.5411 0.40625 40.4881C0.40625 40.1941 0.411875 39.8971 0.425937 39.6031H0.40625C0.40625 24.4381 11.2063 12.0991 24.4813 12.0991V18.2071C20.1753 18.2071 16.2041 19.8811 13.0344 22.6861ZM48.68 22.6861C49.7431 22.4281 50.8456 22.2931 51.9762 22.2931C60.7738 22.2931 67.9062 30.4411 67.9062 40.4881C67.9062 50.5381 60.7738 58.6861 51.9762 58.6861C43.1788 58.6861 36.0491 50.5411 36.0491 40.4881C36.0491 40.1941 36.0547 39.8971 36.0688 39.6031H36.0491C36.0491 24.4381 46.8491 12.0991 60.1241 12.0991V18.2071C55.8153 18.2071 51.8497 19.8811 48.68 22.6861Z" fill="#4D6A61" />
                        </svg>

                        <h5>Your app brings so much peace and tolerance to our homeh5</h5>
                        <p class="mt-3">Rachael, UK</p>
                        <p>on meditation’s positive effect on family life</p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-lg-12 px-5 card">
                        <svg width="68" height="73" viewBox="0 0 68 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0344 22.6861C14.1178 22.4243 15.2253 22.2925 16.3363 22.2931C25.1338 22.2931 32.2634 30.4411 32.2634 40.4881C32.2634 50.5381 25.1338 58.6861 16.3363 58.6861C7.53875 58.6861 0.40625 50.5411 0.40625 40.4881C0.40625 40.1941 0.411875 39.8971 0.425937 39.6031H0.40625C0.40625 24.4381 11.2063 12.0991 24.4813 12.0991V18.2071C20.1753 18.2071 16.2041 19.8811 13.0344 22.6861ZM48.68 22.6861C49.7431 22.4281 50.8456 22.2931 51.9762 22.2931C60.7738 22.2931 67.9062 30.4411 67.9062 40.4881C67.9062 50.5381 60.7738 58.6861 51.9762 58.6861C43.1788 58.6861 36.0491 50.5411 36.0491 40.4881C36.0491 40.1941 36.0547 39.8971 36.0688 39.6031H36.0491C36.0491 24.4381 46.8491 12.0991 60.1241 12.0991V18.2071C55.8153 18.2071 51.8497 19.8811 48.68 22.6861Z" fill="#4D6A61" />
                        </svg>

                        <h5>Your app brings so much peace and tolerance to our homeh5</h5>
                        <p class="mt-3">Rachael, UK</p>
                        <p>on meditation’s positive effect on family life</p>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="col-lg-12 px-5 card">
                        <svg width="68" height="73" viewBox="0 0 68 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0344 22.6861C14.1178 22.4243 15.2253 22.2925 16.3363 22.2931C25.1338 22.2931 32.2634 30.4411 32.2634 40.4881C32.2634 50.5381 25.1338 58.6861 16.3363 58.6861C7.53875 58.6861 0.40625 50.5411 0.40625 40.4881C0.40625 40.1941 0.411875 39.8971 0.425937 39.6031H0.40625C0.40625 24.4381 11.2063 12.0991 24.4813 12.0991V18.2071C20.1753 18.2071 16.2041 19.8811 13.0344 22.6861ZM48.68 22.6861C49.7431 22.4281 50.8456 22.2931 51.9762 22.2931C60.7738 22.2931 67.9062 30.4411 67.9062 40.4881C67.9062 50.5381 60.7738 58.6861 51.9762 58.6861C43.1788 58.6861 36.0491 50.5411 36.0491 40.4881C36.0491 40.1941 36.0547 39.8971 36.0688 39.6031H36.0491C36.0491 24.4381 46.8491 12.0991 60.1241 12.0991V18.2071C55.8153 18.2071 51.8497 19.8811 48.68 22.6861Z" fill="#4D6A61" />
                        </svg>

                        <h5>Your app brings so much peace and tolerance to our homeh5</h5>
                        <p class="mt-3">Rachael, UK</p>
                        <p>on meditation’s positive effect on family life</p>

                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>

        </div>
    </div>
</section>


<?php include 'footer.php' ?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000, // Delay between transitions in milliseconds (e.g., 3000ms or 3s)
            disableOnInteraction: false, // Set to false so that autoplay continues when user interacts with the slider
        },
        breakpoints: {
            // when window width is <= 768px
            768: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            // when window width is <= 992px
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            // when window width is <= 1200px
            1200: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },

    });

    const myCarouselElement = document.querySelector('#carouselExampleIndicators')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000,
        touch: false
    })
</script>
</body>

</html>