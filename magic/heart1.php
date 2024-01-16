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
      
    <title>Document</title>
</head>

<body>

    <style>
        .Express_btn{
            background-color: #7621d8;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 15px;
        }
        #dilhai{
            background: linear-gradient(rgba(255, 255, 255, 0.66), rgba(255, 255, 255, 0.66)), url('Heart-Interaction.png');
          background-size: contain;
          background-repeat: no-repeat;
          padding-bottom: 3rem;
          padding-top: 1rem;
        }
        .input{
            background-color: transparent;
            padding: 4rem 8rem;
            outline: none;
            border: none;
            color: #000;
        }
        .dil_animate{
            animation-iteration-count: infinite;
            animation-duration: 2s;
        }
        .dil_animate svg{
            width: 100%;
        }
        .dil_kadariya{
            width: 65%;
            margin: auto;
            position: relative;
        }
        .dilkibaate{
            position: absolute;
            top: 100px;
            width: 100%;
        }
    </style>
<section id="dilhai">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 style="color: #fff;">Open Your Heart: A Space for Spiritual Expression and Connection.</h5>
            </div>
           
            <div class="col-lg-12 ">
               <div class="dil_kadariya">
                <svg width="100%" height="100%" viewBox="0 0 896 725" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="gradient" x1="0%" y1="100%" x2="0%" y2="0%">
                            <stop offset="0%" id="heartfiller" style="stop-color: #D8214A; stop-opacity:1" />
                            <stop offset="0%" style="stop-color:rgba(243, 168, 185, 0.1); stop-opacity:2" />
                        </linearGradient>
                        <filter id="filter0_d_14337_2706" x="0" y="0" width="896" height="725" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="-3" dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0.952941 0 0 0 0 0.658824 0 0 0 0 0.72549 0 0 0 1 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_14337_2706"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_14337_2706" result="shape"/>
                        </filter>
                    </defs>
                    <g filter="url(#filter0_d_14337_2706)">
                        <path d="M7 243.732C7 446.276 185.488 554.191 316.113 650.818C362.2 684.888 406.6 717 451 717C495.4 717 539.8 684.93 585.887 650.777C716.556 554.232 895 446.276 895 243.774C895 41.2304 650.8 -102.42 451 92.3349C251.2 -102.462 7 41.1888 7 243.732Z" fill="url(#gradient)"/>
                    </g>
                </svg>

                <div class="text-center mt-4 dilkibaate">
                    <textarea name="" id=""  rows="10" class="input w-100" placeholder="Type here" maxlength="500" onkeyup="hearmagic();"></textarea>
                    <button class="Express_btn">Express your heart</button>
                  </div>
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