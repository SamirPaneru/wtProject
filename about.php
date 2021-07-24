<!DOCTYPE HTMl>
<html>
<head>
    <title>Aboutt</title>
<style>
    body {
        font-family:Arial;
        margin: 0;
        color: white;
    }

    html {
        box-sizing: border-box;
    }

    *, *:before, *:after {
        box-sizing: inherit;
    }

    .row {
        text-aligh: center;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }

    .about-section {
        padding: 40px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }

    .container1 {
        padding: 0 16px;
        text-align: center;
    }

    .container1::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }

    /* .title {
        color: black;
    } */

    .button {
        border: 3px solid darkblue;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: black;
        /* border-color: white; */
        text-align: center;
        cursor: pointer;
        width: 50%;
    }

    .button:hover {
    background-color: #202020;
    }

    #myFooterId {
        position: fixed;
    }
    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
        #myFooterId {
            position: relative;
        }
    }
</style>

</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="about-section">
        <h1>About Us</h1>
        <p>We are the students of Ncit college.This website is just for the pratical purpose of web technology.</p><br>
        <p>This is the movie streaming site.You will find the movie of different countries on this site.</p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container1">
                    <h2>Sarthak Paneru</h2>
                    <p class="title">Student at Ncit.</p>
                    <p>sarthak@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container1">
                    <h2>Nisan Kafle</h2>
                    <p class="title">Student at Ncit.</p>
                    <p>nisan@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    
        <div class="column">
            <div class="card">
                <div class="container1">
                    <h2>Amit Singh</h2>
                    <p class="title">Student at Ncit.</p>
                    <p>amit@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>
</body>
</html>