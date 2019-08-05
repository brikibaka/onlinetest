<?php
   require_once("dbconnection.php");

   class Register {
      public function register_user($username, $password, $repassword, $category)
      {
         try
         {
            $conn = new Connection();
            $dbconn = $conn->getConnection();

            $sql = "SELECT `username` FROM `account` WHERE `username` = '{$username}'";
            $user = null;
            foreach ($dbconn->query($sql, PDO::FETCH_ASSOC) as $userr)
            {
               $user[0] = $userr;
            }

            if ($user[0]["username"] == $username) {
               echo "<script type=\"text/javascript\">
                  alert(\"Tên đăng nhập không khả dụng.\");
                  window.location = \"index.php\"
                  </script>";
            }
            else {
               $password = md5($password);
               $insertQuery = "INSERT INTO account(username, password, category) VALUES ('{$username}', '{$password}', '{$category}')";
               $preparedQuery = $dbconn->prepare($insertQuery);
               $result = $preparedQuery->execute($user);
               if ($result == 1) {
                  echo "<script type=\"text/javascript\">
                  alert(\"Đăng ký thành công.\");
                  window.location = \"index.php\"
                  </script>";
               }
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