<!DOCTYPE HTMl>
<html>
<head>
    <title>Contact</title>

<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    }

    html {
        background-color: grey;
    }

    * {
    box-sizing: border-box;
    }

    /* Style inputs */
    input[type=text], select, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    }
    /* Style inputs */
    input[type=text], select, textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: red;
    }
    
    /* Style the container/contact section */
    .container1 {
        border-radius: 5px;
        background-color: grey;
        padding: 10px;
    }
    
    /* Create two columns that float next to eachother */
    .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
    }

    img {
        width: 100%;
    }
    
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
  }
</style>
</head>
<body>
    <?php
        include 'header.php';
        include 'action.php';
    ?>

    <div class="container1">
        <div style="text-align:center">
            <h2>Contact Us</h2>
        </div>
        <div class="row">
            <div class="column">
                <img src="pics/contact.jpg" alt="Contact Us">
            </div>
            <div class="column">
                <form action="" method="post">
                    <label for="fname">Full Name</label>
                    <input type="text" id="fname" name="name" placeholder="Your full name.." require>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email.." require>
                
                    <label for="remarks">Remarks:</label>
                    <textarea id="remarks" name="remarks" placeholder="Give your opnion..." style="height:100px" width="50px" require></textarea>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>