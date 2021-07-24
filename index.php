<!-- php -S localhost:8000 -->

<!DOCTYPE html>
<html>
<head>
    <title>Cinema Ghar</title>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/img_slider.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/grid.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        include 'header.php';
        // include_once('api_key.php');
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
            <!-- https://cdn.pixabay.com/photo/2020/06/10/12/58/joker-5282593_960_720.jpg -->
            <!-- https://www.themoviedb.org/t/p/original/hd8H2TvqtAbqYnBUbf5AdXZf87s.jpg?api_key=e63916f5ba0898c4a318d0db8f237661 -->
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


    <main id="main">
        <div class="movie">
            <img src="https://m.media-amazon.com/images/M/MV5BMTQ4MzQzMzM2Nl5BMl5BanBnXkFtZTgwMTQ1NzU3MDI@._V1_UY268_CR4,0,182,268_AL_.jpg" alt="img">

            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green">9.8</span>
            </div>

            <div class="overview">
                <h3>Overview</h3>
                <p>blah blah blah</p>
            </div>

        </div>  

        <div class="movie">
            <img src="https://m.media-amazon.com/images/M/MV5BMTQ4MzQzMzM2Nl5BMl5BanBnXkFtZTgwMTQ1NzU3MDI@._V1_UY268_CR4,0,182,268_AL_.jpg" alt="img">

            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green">4</span>
            </div>

            <div class="overview">
                <h3>Overview</h3>
                <p>blah blah blah</p>
            </div>

        </div>

        <div class="movie">
            <img src="https://m.media-amazon.com/images/M/MV5BMTQ4MzQzMzM2Nl5BMl5BanBnXkFtZTgwMTQ1NzU3MDI@._V1_UY268_CR4,0,182,268_AL_.jpg" alt="img">

            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green">9.8</span>
            </div>

            <div class="overview">
                <h3>Overview</h3>
                <p>blah blah blah</p>
            </div>

        </div>
    </main>

    <script src="js/img_slider.js"></script>
    <script src="js/tmdb.js"></script>

    <?php
        //include 'toggle.php';
        include 'footer.php';
    ?>
</body>
</html>