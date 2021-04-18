<!-- php -S localhost:8000 -->

<!DOCTYPE html>
<html>
<head>
    <title>Cinema Ghar</title>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/img_slider.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
        
    <div class="slideshow-container">
        <!-- Full  width images with number and caption -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="https://cdn.pixabay.com/photo/2014/12/23/07/40/hulk-578088__340.jpg" style="width:100%" class="responsive">
            <div class="text">Hulk</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="https://cdn.pixabay.com/photo/2020/06/10/12/58/joker-5282593_960_720.jpg" style="width:100%" class="responsive">
            <div class="text">Joker</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="https://cdn.pixabay.com/photo/2019/05/31/02/08/iron-man-4241268_960_720.jpg" style="width:100%" class="responsive">
            <div class="text">Iron Man</div>
        </div>
    </div>
    <br>

    <!-- The dots circle -->
    <div style="text-align: center;">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script src="js/img_slider.js"></script>

    <?php
        //include 'toggle.php';
        include 'footer.php';
    ?>
</body>
</html>