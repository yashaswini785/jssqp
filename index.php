
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JSSSTU QP Bank</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <a href="index.html"><img class="logo" href="index.html" src="jc.jpg" alt=""></a>
            <ul class="menu">
                <a href="index.html"><b>Home</b></a>
                <a href="#"><b>About</b></a>
                <a href="#"><b>Services</b></a>
                <a href="#"><b>Contact</b></a>
                <a href="http://localhost/jssqp/first.php"><b>Login</b></a>
            </ul>
        </div><br>
    
        <div class="title">
            <center><h2>Gallary</h2></center>
        </div><br>    
        
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img class="img1" src="a.jpg" style="width:100%;">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img class="img1" src="g.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img  class="img1" src="h.jpg" style="width:100%">
            </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div><br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script>
            var slideIndex = 0;
            showSlides();
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 3000); // Change image every 2 seconds
            } 
        </script>
        <script>
            $(function(){
                $('a').each(function() {
                    if ($(this).prop('href') == window.location.href) {
                        $(this).addClass('current');
                    }
                });
            });
        </script>
    </body>
</html>

