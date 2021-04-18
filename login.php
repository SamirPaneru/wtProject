<!DOCTYPE HTMl>
<html>
<head>
    <title>Aboutt</title>
    <style type="text/css">
        body {
            background-image: url("https://cdn.pixabay.com/photo/2019/10/11/09/23/lake-4541454_960_720.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            /*min-height: 800px;*/

            position: relative;

            color: white;
        }

        .loginContainer {
            text-align: center;
            position: relative;
        }

        input[type=text], input[type=password] {
            width: 50%;
            padding: 10px;
            color: white;
            background: none;
        }

        @media only screen and (max-width: 900px) {
            body {
                background-image: url("https://cdn.pixabay.com/photo/2015/11/19/08/12/milky-way-1050526_960_720.jpg");
                
            }
        }

        /*Footer --> class lai replace garxa Id le*/
        #myFooterId {
            position: fixed;
        }
    </style>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="loginContainer">
        <h2>Login</h2>
        <form action="/index.php" method="post" required>
            Email<br> 
            <input type="text" name="email" placeholder="Enter Email">
            <br>
            Password<br> 
            <input type="password" name="password" placeholder="Enter Password">
            <br>
            <button type="submit">Log In</button>
        </form>
    </div>

    <?php
        include 'footer.php';
    ?>
</body>
</html>