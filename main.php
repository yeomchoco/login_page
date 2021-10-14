<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <style>
        div {
            text-align: center;
            padding:20px;
        }
        h1 {
            color: lightpink;
            font-size: 50px;
        }
        footer {
            color: pink;
            line-height: 50px;
        }
        .button {
                margin: 5px;
                padding: 7px;
                width: 60px;
                border: none;
                border-radius: 8px;
                background-color: pink;
                color: white;
                font-size: 15px;
                font-weight: 565;
                margin: none;
            }
        .button:active {
                background-color: lightpink;
                color: whitesmoke;
                font-weight: 570;
            }
        iframe {
            padding:10px;
        }
    </style>
</head>
<body>
    <div>
    <h1><a href="main.php" style="color: lightpink; text-decoration-line:none;">｡._-+* MAIN PAGE *+-_.｡</a></h1>
    <?php
        if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
            echo "<p><button class=\"button\" onclick=\"window.location.href='login.php'\">LOGIN</button> <small style=\"color:lightpink; font-weight:700;\">OR</small> <button class=\"button\" onclick=\"window.location.href='join.php'\">JOIN</button></p>";
        } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<p>🌸 $user_name(ID : $user_id)님 어서오세요 🌸</p>";
            echo "<p><button class=\"button\" style=\"width: 72px;\" onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        }
    ?>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/oc3MgVv_jug" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <footer>
            made by choco
        </footer>
    </div>
</body>
</html>