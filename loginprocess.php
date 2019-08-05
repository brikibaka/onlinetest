<?php
   session_start();
   require_once("dbconnection.php");

   class Login {
      public function login_user($username, $password)
      {
         try
         {
            $conn = new Connection();
            $dbconn = $conn->getConnection();
            $password = md5($password);

            $sql = "SELECT `username`, `category` FROM `account` WHERE `username` = '{$username}' AND `password` = '{$password}' LIMIT 1";

            $user = null;
            foreach ($dbconn->query($sql, PDO::FETCH_ASSOC) as $userr)
            {
               $user[0] = $userr;
            }

            if ($user[0]["category"] == "Admin")
            {
               $_SESSION['username'] = $user[0]["username"];
               $_SESSION['admin'] = $user[0]["category"];
               header("location: adhome.php");
               exit;
            }else if ($user[0]["category"] == "user") {
               $_SESSION['username'] = $user[0]["username"];
               $_SESSION['user'] = $user[0]["category"];
               header("location: user.php");
               exit;
            }{
               echo "<script type=\"text/javascript\">
                  alert(\"Tên đăng nhập hoặc mật khẩu không chính xác.\");
                  window.location = \"index.php\"
                  </script>";
            }
         }
         catch (PDOException $e)
         {
            echo "<script>alert(".$e->getMessage().");</script>";
         }
         catch (Exception $e)
         {
            echo "<script>alert(".$e->getMessage().");</script>";
         }
      }
   }

?>