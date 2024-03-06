<?php 
    include "validation.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post" action="">
    <div class="container">
        <div class="box box1"> 
            <div class="item item1">username: </div>
            <div class="item item2"><input type="text" name="username" id="fields"></div>
        </div>
        <div class="box box2">
            <div class="item item3">password: </div>
            <div class="item item4"><input type="password" name="password" id="fields"></div>
        </div>
        <div class="box3">
            <button type="submit" id="btn">Login</button>
        </div>
        <div class="box4">
            <h5><?php echo $message; ?></h5>
        </div>
        <div class="box5">
            <h3>Valid Inputs:</h3>
            <ul>
                <li><b>U:</b> peter</li>
                <li><b>P:</b> peter123<br><br></li>
                <li><b>U:</b> kirsch</li>
                <li><b>P:</b> kirsch123<br><br></li>
                <li><b>U:</b> madrid</li>
                <li><b>P:</b> madrid123<br><br></li>
            </ul>
        </div>
        <div class="box6">
        <p style="color: yellow">Exercise 5: <br></p>
            <ul>
                <li>Apostrophe (') is not allowed</li>
                <li>Checks empty inputs</li>
                <li>Notify which field is/are empty</li>
            </ul>
        </div>
    </div>
    </form>

    <style>
        .box4 {
        position: absolute;
        margin-top: 80px;
        text-align: center;
        width: 100px;
        height: 20px;
        display: <?php echo $showMessage ? 'block' : 'none'; ?>;
        transition: opacity 0.5s ease-out;
        color: yellow;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var box4 = document.querySelector('.box4');
                box4.classList.add('hidden'); 
            }, 2000); 
        });
    </script>
</body>
</html>