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
            <a href="main.php" style="text-decoration:none;">β MAIN</a>
        </header>
        <div>
            <h1><a href="login.php" style="color: lightpink; text-decoration:none;">LOG-IN</a></h1>
            <?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
            <form method="post" action="login_ok.php" autocomplete="off">
            <span>πΊ <input type="text" name="user_id" class="box" required size="13px"></span><br><br>
            <span>π <input type="password" name="user_pw" class="box" required size="13px"></span>
            <br><input type="submit" value="λ‘κ·ΈμΈ" class="button">
            </form>
            <small><a href="join.php">μ²μ μ€μ¨λμ?</a><small>
            <?php } else {
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "<p>$user_name($user_id)λμ μ΄λ―Έ λ‘κ·ΈμΈν μνμλλ€.";
                echo "<p><button class=\"new_button\" onclick=\"window.location.href='main.php'\">λ©μΈμΌλ‘</button> <button class=\"new_button\" onclick=\"window.location.href='logout.php'\">λ‘κ·Έμμ</button></p>";
            } ?>
        </div>
    </body>
</html>