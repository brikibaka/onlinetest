<?php
	require_once("loginprocess.php");

	if(isset($_POST["loginuser"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if (!$username || !$password) {
        	echo "<script type=\"text/javascript\">
                  alert(\"Vui lòng điền đầy đủ thông tin để đăng nhập.\");
                  window.location = \"index.php\"
                  </script>";
        	exit;
    	}
    	else {
    		$loginObject = new Login();
			$loginObject->login_user($username, $password);
    	}
	}
?>