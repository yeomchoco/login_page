<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Join</title>
        <link rel="stylesheet" href="deco.css">
        <style>
            fieldset {
                border-color: pink;
                border-width: 3px;
                border-radius: 8px;
                box-shadow: none;
                width: 200px;
                text-align:left;
                margin: 5px;
            }
            legend {
                color: lightpink;
                font-weight: 500;
            }
            p {
                font-size: 10px;
            }
            .data {
                border-color: whitesmoke;
                border-radius: 7px;
                border-width: 3px;
                vertical-align: bottom;
            }
            .join_button {
                padding: 12px;
                width: 200px;
                border: none;
                border-radius: 8px;
                background-color: pink;
                color: white;
                font-weight: 565;
                margin: none;
                transform: translate(0, 10%);
            }
            .join_button:active {
                background-color: lightpink;
                color: whitesmoke;
                font-weight: 570;
            }
            h1 {
                margin:5px;
                color: lightpink;
            }
            .button {
                margin: 5px;
                padding: 7px;
                width: 72px;
                border: none;
                border-radius: 8px;
                background-color: pink;
                color: white;
                font-weight: 565;
                margin: none;
            }
        </style>
    </head>
    <body>
        <header style="color:palevioletred;">
            <a href="main.php" style="text-decoration:none;">← MAIN</a>
        </header>
        <div>
        <h1><a href="join.php" style="color: lightpink; text-decoration-line:none;">회원가입</a></h1>
        <fieldset>
        <legend>✏️</legend>
        <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
        <form method="post" action="join_ok.php" autocomplete="off">
            <p>Name<br><input type="text" name="join_name" class="data" size=15px required></p>
            <p>ID<br><input type="text" name="join_id" class="data" size=15px required></p>
            <p>Password<br><input type="password" name="join_pw" class="data" size=15px required></p>
            <p><input type="submit" value="가입하기" class="join_button"></p>
        </form>
        </fieldset>
        <small><a href="login.php" style="line-height:33px;">이미 회원이신가요?</a><small>
        </div>
        <?php } else {
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "<p style=\"text-align:center\">$user_name($user_id)님은 이미 로그인하신 상태입니다.</p>";
                echo "<p style=\"text-align:center\"><button class=\"button\" onclick=\"window.location.href='main.php'\">메인으로</button> <button class=\"button\" onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
        } ?>
    </body>
</html>