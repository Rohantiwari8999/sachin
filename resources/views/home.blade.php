@extends('layout.app')

@section('appContents')
<html lang="en">

<head>
    <title>Document</title>

    <style>
        .mySlides {
            position: relative;
            display: inline-block;
        }

        .slider-imgs {
            width: 94%;
            height: 50%;
            margin-right: 3%;
            margin-left: 3%;
            border-radius: 5px;
            opacity: 1.0;
        }

        #kohli-img1 {
            width: 446px;
    height: 367px;
            border-radius: 20px;
            float: left;
            margin: 0px 20px;
        }

        #kohli-img2 {

            height: 350px;
    width: 449px;
    border-radius: 20px;
    float: right;
    margin: 0px;
        }

        .rightblock {
            width:97%;
            margin-left: 5px;
            line-height: 1.5;
            margin-left: 26px;
    margin-top: 8px;
        }

        .left {
            height: 400px;
            margin-right: 100px;
            line-height: 1.6;
            margin-left: 30px;
            width: 50%;
            margin-top: 40px;
        }

        .info-section {
            margin-top: 85px;
            width: 100%;
    display: flex;
    flex-direction: row;
        }

        /* Slideshow container */
        .slideshow-container {
            position: relative;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }


        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.9s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        /* .fade { */
        /* animation-name: fade; */
        /* animation-duration: 1.5s; */
        /* } */

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }

        .sub-heads {
            margin-top: 45px;
            text-align: center;
            font-weight: 700;
            font-family: serif;
            margin-bottom: -30px;
            color: rgb(164, 47, 37);
            font-size: 55px;
        }
    </style>


</head>

<body>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img class="slider-imgs" src="/images/slider1.jpg">
            {{-- <h1 class="home-title">Story <br> of Linus <br> Torvalds</h1> --}}
        </div>

        <div class="mySlides fade">
            <img src="/images/slider2.jpg" class="slider-imgs">
            {{-- <h1 class="home-title">Story <br> of Linus <br> Torvalds</h1> --}}
        </div>

        <div class="mySlides fade">
            <img src="/images/slider3.jpg" class="slider-imgs">
            {{-- <h1 class="home-title">Story <br> of Linus <br> Torvalds</h1> --}}
        </div>

        <div class="mySlides fade">
            <img src="/images/slider4.jpg" class="slider-imgs">
            {{-- <h1 class="home-title">Story <br> of Linus <br> Torvalds</h1> --}}
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000);
        }
    </script>
    <br><br>
    <h1 class="sub-heads">Virat Kohli</h1>
    <div class="info-section">
        <div class="leftimg">
            <img src="/images/linus.jpg" alt="no" Id="kohli-img1">
        </div>
        <div class="rightblock">
            <p class="para">
                Celebrating the Journey of a Cricketing Maestro
                Welcome to the digital home of Virat Kohli, where the legacy of a cricketing legend unfolds. Dive into the world of passion, perseverance, and unparalleled sportsmanship. <br>

                <br>Explore Virat's Universe
                Discover His Story
                <br><br>
                Embark on a captivating journey tracing Virat Kohli's evolution from a determined youngster with a cricket bat to a global icon revered for his on-field mastery. <br><br>

            <p class="para">Achievements Galore<br>
                Witness the records shattered, milestones conquered, and the countless moments that define Virat Kohli's unparalleled legacy in cricket history.
            </p>
        </div>
    </div>
    <div class="info-section">
        <div class="left">
            <p class="para">Leadership & Inspiration<br>
                Delve into the leadership qualities that set Virat apart, inspiring not just victories but a generation of aspiring athletes.
            </p><br><br>
            <p class="para">Beyond Cricket<br>
                Uncover Virat's multifaceted persona—from his fitness advocacy and philanthropic endeavors to his ventures beyond the cricket field.

                Join the Celebration
            </p><br><br>
            <p class="para">Kohli's impact on the cricketing world extends beyond his on-field performances. He's an influential figure and a role model for aspiring cricketers, admired for his passion, work ethic, and philanthropic endeavors.
            </p><br><br>
        </div>
        <div class="rightimg">
            <img src="/images/lius2.jpg" alt="no" id="kohli-img2">
        </div>
    </div>
    <div style="height: 150px"></div>
</body>

</html>
@endsection
