<!DOCTYPE HTMl>
<html>
<head>
    <title>Sign In</title>
    <style type="text/css">
        .Page {
            display: none;
        }
        .visiblePage {
            display: block;
        }

        body {
            background-image: url("https://cdn.pixabay.com/photo/2019/10/11/09/23/lake-4541454_960_720.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            /*min-height: 800px;*/

            position: relative;

            color: white;
        }

        #LoginPage {
            margin: auto;
            padding: 70px;
            text-align: center;
            position: relative;
        }
        #signUp {
            text-align: center;
            position: relative;
        }

        input[type=text], input[type=password] {
            width: 50%;
            padding: 10px;
            color: white;
            background: none;

        }
        
        /*Footer --> class lai replace garxa Id le*/
        #myFooterId {
            position: fixed;
        }

        .button {
            background: none;
            color: white;
            padding: 8px 21px;
            margin: 4px 2px;
            font-size: 16px;
            cursor: pointer;

        }
        @media only screen and (max-width: 900px) {
            body {
                background-image: url("https://cdn.pixabay.com/photo/2015/11/19/08/12/milky-way-1050526_960_720.jpg");
                
            }
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- <div class="loginContainer">
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
    </div> -->

    <div id="LoginPage">
        <form action="<?php echo $_SERVER['login.php']; ?>" method="post">
            Email:
            <input type="text" name="emailL" placeholder="Enter Email">
            <span class="error">* <?php echo $emailErr ?></span>
            <br><br>
            Password: 
            <input type="password" name="passwordL" placeholder="Enter Password">
            <span class="error">* <?php echo $passErr ?></span>
            <br><br>
            <button type="submit" class="button">Log In</button>
            
        </form>
        <p>Dont have account?</p>
        <button onclick="page1();" class="button">Sign Up</button>
    </div>
    
    <div id="signUp" class="Page">
        <form action="logUp.php" method="post">
            Email:
            <input type="text" name="email" placeholder="Enter Email">
            <br><br>
            Password: 
            <input type="password" name="password" placeholder="Enter Password">
            <br><br>
            <button type="submit" class="button">Sign Up</button>
            <button type="reset" class="button">Reset</button>
        </form>
        <p>Lets log In</p>
        <button onclick="page2();" class="button">Sign In</button>
    </div>

<script>
    signUp = document.getElementById("signUp");
    logIn = document.getElementById("LoginPage");

    function page1() {
        // if(signUp.className==="Page") {
            signUp.className="visiblePage";
        // }
        //if(logIn.className==="visiblePage") {
            logIn.className="Page";
        //}
    }

    function page2() {
        if(logIn.className==="Page") {
            logIn.className="visiblePage";
        }
        if(signUp.className==="visiblePage") {
            signUp.className="Page";
        }
    }
</script>

    <?php
        include 'footer.php';
    ?>
</body>
</html>