<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Auto Sliding Carousel</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        var cont = 0;
        var xx;

        function loopSlider() {
            xx = setInterval(function () {
                if (cont === 0) {
                    $("#slider-1").fadeOut(400);
                    $("#slider-2").delay(400).fadeIn(400);
                    $("#sButton1").removeClass("bg-purple-800");
                    $("#sButton2").addClass("bg-purple-800");
                    cont = 1;
                } else {
                    $("#slider-2").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);
                    $("#sButton2").removeClass("bg-purple-800");
                    $("#sButton1").addClass("bg-purple-800");
                    cont = 0;
                }
            }, 5000);
        }

        function reinitLoop() {
            clearInterval(xx);
            loopSlider();
        }

        function sliderButton1() {
            clearInterval(xx);
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
            cont = 0;
            reinitLoop();
        }

        function sliderButton2() {
            clearInterval(xx);
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
            cont = 1;
            reinitLoop();
        }

        $(document).ready(function () {
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-purple-800");
            loopSlider();
        });
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="sliderAx w-full relative">
        <!-- Slide 1 -->
        <div id="slider-1" class="w-full">
            <div class="bg-cover bg-center h-[300px] md:h-[500px] text-white flex items-center justify-center"
                style="background-image: url('https://www.ifbagro.in/assets/images/nutrafeed-fish/advanced-formulated-fish-banner2.jpg');">
            </div>
        </div>

        <!-- Slide 2 -->
        <div id="slider-2" class="w-full hidden">
            <div class="bg-cover bg-center h-[300px] md:h-[500px] text-white flex items-center justify-center"
                style="background-image: url('https://www.ifbagro.in/assets/images/formulated-feed/formulated-feed-banner2.jpg');">
            </div>
        </div>



        <!-- Pagination Dots -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <button id="sButton1" onclick="sliderButton1()" class="w-3 h-3 bg-white rounded-full"></button>
            <button id="sButton2" onclick="sliderButton2()" class="w-3 h-3 bg-gray-400 rounded-full"></button>
        </div>
    </div>
</body>

</html>
