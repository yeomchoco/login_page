<?php
    if (!isset($_POST['user_id']) || !isset($_POST['user_pw'])) {
        header("Content-type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호를 기입하지 않았거나 잘못된 접근입니다.')";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    //mysql choco계정으로 접속.
    //비밀번호는 7173이다.
    //study_login이라는 데이터베이스에 접근.
    $conn= mysqli_connect('localhost', 'choco', '7173', 'study_login');
    //sql문을 sql변수에 저장해놓는다.
    $sql="SELECT * FROM member where login_id='$user_id' && login_pw='$user_pw'";
    //SUCCESS
    if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공
        session_start();
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $result['name'];
        echo "<script>alert('로그인에 성공했습니다!');";
        echo "window.location.replace('main.php');</script>";
        exit;
    }
    else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
       echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.');";
       echo "window.location.replace('login.php');</script>";
    }
?>
<meta http-equiv="refresh" content="0;url=main.php">