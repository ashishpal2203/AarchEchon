<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Gilda+Display&family=Lato&family=Open+Sans&display=swap" rel="stylesheet">
      
    <title>Document</title>
</head>

<body>

    <style>
        .Express_btn{
            background-color: #D8214A;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 15px;
        }
        #dilhai{
          background-color: rgb(52, 83, 83);
          padding: 3rem;
        }
        .input{
            background-color: rgb(204, 205, 207);
            outline: none;
            border-radius: 7px;
            font-family: 'Lato', sans-serif;
        }
        .dil_animate{
            animation-iteration-count: infinite;
            animation-duration: 2s;
        }
        .dil_animate svg{
            width: 70%;
        }
    </style>
<section id="dilhai">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 text-center">
                <h5 style="color: #fff;">Open Your Heart: A Space for Spiritual Expression and Connection.</h5>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                   <textarea name="" id=""  rows="10" class="input w-100 " maxlength="500" onkeyup="hearmagic();"></textarea>
            </div>
            <div class="col-lg-6 text-center pt-5">
               <div class="dil_animate animate__animated  animate__pulse">
                <svg width="468" height="405" viewBox="0 0 468 405" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="gradient" x1="0%" y1="100%" x2="0%" y2="0%">
                            <stop offset="0%" id="heartfiller" style="stop-color: #D8214A; stop-opacity:1" />
                            <stop offset="0%" style="stop-color:rgba(243, 168, 185, 0.1); stop-opacity:2" />
                        </linearGradient>
                        <!-- ... (rest of the code remains unchanged) ... -->
                    </defs>
                    <g filter="url(#filter0_d_14337_2706)">
                        <path
                            d="M7 135.151C7 247 99.46 306.593 167.126 359.953C191 378.767 214 396.5 237 396.5C260 396.5 283 378.79 306.874 359.93C374.563 306.616 467 247 467 135.174C467 23.325 340.5 -56.002 237 51.546C133.5 -56.025 7 23.302 7 135.151Z"
                            fill="url(#gradient)" />
                    </g>
                </svg>
               </div>

              <div class="text-center mt-4">
                <button class="Express_btn">Express your heart</button>
              </div>
                
            </div>
        </div>
      </div>
    
</section>


    <script>
        function hearmagic() {
            var len = $(".input").val().length;
            var data = (len /500)*100;
            $("#heartfiller").attr("offset", data + "%");
        }
    </script>
</body>

</html>