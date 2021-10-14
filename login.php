<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="deco.css">
        <style>
            .new_button {
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
            .new_button:active {
                background-color: lightpink;
                color: whitesmoke;
                font-weight: 570;
            }
        </style>
    </head>
    <body>
        <header style="color:palevioletred;">
            <a href="main.php" style="text-decoration:none;">← MAIN</a>
        </header>
        <div>
            <h1><a href="login.php" style="color: lightpink; text-decoration:none;">LOG-IN</a></h1>
            <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
            <form method="post" action="login_ok.php" autocomplete="off">
            <span>😺 <input type="text" name="user_id" class="box" required size="13px"></span><br><br>
            <span>🐟 <input type="password" name="user_pw" class="box" required size="13px"></span>
            <br><input type="submit" value="로그인" class="button">
            </form>
            <small><a href="join.php">처음 오셨나요?</a><small>
            <?php } else {
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "<p>$user_name($user_id)님은 이미 로그인한 상태입니다.";
                echo "<p><button class=\"new_button\" onclick=\"window.location.href='main.php'\">메인으로</button> <button class=\"new_button\" onclick=\"window.location.href='logout.php'\">로그아웃</button></p>";
            } ?>
        </div>
    </body>
</html>