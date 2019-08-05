<?php

    require_once("registerprocess.php");
    if(isset($_POST["registeruser"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $category = $_POST["category"];

        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        $repassword = strip_tags($repassword);
        $repassword = addslashes($repassword);


        if (!$username || !$password || !$repassword) {
            echo "<script type=\"text/javascript\">
                  alert(\"Vui lòng nhập đầy đủ thông tin để đăng ký.\");
                  window.location = \"index.php\"
                  </script>";
            exit;
        }
        else if ($password != $repassword) {
            echo "Mật khẩu nhập lại không đúng. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        else {
            $registerObject = new Register();
            $registerObject->register_user($username, $password, $repassword, $category);
        }
    }

?>