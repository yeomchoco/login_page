<?php
    $join_name = $_POST['join_name'];
    $join_id = $_POST['decide_id'];
    $join_pw = $_POST['join_pw'];
    $join_pw2 = $_POST['join_pw2'];
    //mysql choco계정으로 접속.
    //비밀번호는 7173이다.
    //study_login이라는 데이터베이스에 접근.
    $conn= mysqli_connect('localhost', 'choco', '7173', 'study_login');
    //sql문을 sql변수에 저장해놓는다.
    // $sql="INSERT INTO member(name, login_id, login_pw, created) VALUES ('{$join_name}', '{$join_id}', '{$join_pw}', now())";
    // $auto="SET @COUNT = 0; UPDATE member SET id = @COUNT:=@COUNT+1";
    //신규 회원정보 삽입 + ID 재정렬
    $sql = "SELECT * FROM member where login_id='$join_id'";  //아이디중복확인
    $multi = "
        INSERT INTO member(name, login_id, login_pw, created) VALUES ('{$join_name}', '{$join_id}', '{$join_pw}', now());
        SET @COUNT = 0;
        UPDATE member SET id = @COUNT:=@COUNT+1;
    ";
    if(!$check = mysqli_fetch_array(mysqli_query($conn, $sql))){
        //새로운 ID
        if ($join_pw != $join_pw2){  //비밀번호 불일치
            echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
        } else {  //비밀번호 일치
                if($result = mysqli_multi_query($conn,$multi)){
                    echo "<script>alert('회원가입이 완료되었습니다.');";
                    echo "window.location.replace('login.php');</script>";
                    exit;
                }
                else {//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
                echo "<script>alert('저장에 문제가 생겼습니다. 관리자에게 문의해주세요.');";
                echo mysqli_error($conn);
                }
            } 
    } else {  //존재하는 ID
        echo "<script>alert('아이디가 중복됩니다.'); history.back();</script>";
    }
?>
<meta http-equiv="refresh" content="0;url=main.php">