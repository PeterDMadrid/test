<?php 
    include "validation.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    
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
        <div class="box4 <?php echo $loginSuccessful; ?>">
            <h5><?php echo $response; ?></h5>
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
    </div>
    </form>

    <style>
        body {
            box-sizing: border-box;
            margin: 0;
            font-family: 'Verdana', sans-serif;
            display: flex;
            justify-content: center;
            font-size: 14px;
            background-color: #d6d6d4;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 80px;
            margin-right: 250px;
            width: 300px;
            height: 200px;
            border: 2px  red;
            color: white;
            background-color: #1c1c1c;
            border-radius: 4px;

            background: rgba( 35, 35, 35, 0.75 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 14.5px );
            -webkit-backdrop-filter: blur( 14.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        .box1 {
            border: 2px  blue;
            margin-top: 10px;
        }
        .box2 {
            border: 2px  orange;

        }
        .box3{
            border: 2px  cyan;
            margin-bottom: 24px;

        }
        .box {
            display: flex;
            flex-direction: row;
        }
        .box1, .box2, .box3 {
            width: 80%;
            height: 40px;
        }
        
        .item {

            height: 20px;
            border: 2px  purple;
            margin-top: 5px;
        }
        .item1, .item3{
            width: 80px;
            padding-left: 15px;
            padding-top: 2px;
        }
        .item2, .item4{
            width: 130px;
        }
        #fields {
            width: 130px;
        }
        .box3 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #btn {
            font-family: 'Verdana', sans-serif;
            width: 100px;
            height: 20px;
            background-color: white;
            color: black;
            border-radius: 10px;
            border: 1px solid white;
            cursor: pointer;
        }
        .box4 {
            position: absolute;
            margin-top: 100px;
            text-align: center;
            width: 100px;
            height: 20px;
            display: <?php echo $showMessage ? 'block' : 'none'; ?>;
            transition: opacity 0.5s ease-out;
            color: yellow;
        }
        .hidden {
            opacity: 0;
        }
        .success {
            color: yellow;
        }
        .box5{
            /* Positionng */
            position: absolute;
            margin-left: 540px;
            width: 200px;
            height: 200px;

            /* Background color */
            background: rgba( 35, 35, 35, 0.75 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 14.5px );
            -webkit-backdrop-filter: blur( 14.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );

            /* Text */
            text-align: center;
        }   
        ul {
            text-align: start;
        }

    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var box4 = document.querySelector('.box4');
                box4.classList.add('hidden'); 
            }, 1500); 
        });
    </script>
</body>
</html>