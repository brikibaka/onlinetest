<?php
	include("header.php");
	require_once("dbconnection.php");

	if(!isset($_SESSION['username'])) {
		header("Location: index.php");
	}

	$conn = new Connection();
         $dbconn = $conn->getConnection();

         $sql = "SELECT * FROM `profile` WHERE `username` = '{$_SESSION["username"]}' LIMIT 1";

         $user = null;
         foreach ($dbconn->query($sql, PDO::FETCH_ASSOC) as $userr)
         {
            $user[0] = $userr;
         }

         $_SESSION["fullname"] = $user[0]["fullname"];
         $_SESSION["dob"] = $user[0]["dob"];
         $_SESSION["address"] = $user[0]["address"];
         $_SESSION["totalscore"] = $user[0]["totalscore"];
?>

            <div class="left_content">
            	<div class="calendar_box">
                	<div class="calendar_box_content">
                		<h1>Thông tin cá nhân</h1>
                		<form method="post" action="index.php" >
							<table>
								<tr>
									<td>Tên đăng nhập:</td>
									<td>
										<input type="text" name="username" readonly="true" value="<?php echo $_SESSION['username'] ?>" />
									</td>
								</tr>
								<tr>
									<td>Họ tên:</td>
									<td><input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>" /></td>
								</tr>
								<tr>
									<td>Ngày sinh:</td>
									<td><input type="date" name="dob" value="<?php echo $_SESSION['dob'] ?>" /></td>
								</tr>
								<tr>
									<td>Địa chỉ:</td>
									<td><input type="text" name="dob" value="<?php echo $_SESSION['address'] ?>" ></textarea></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><input type="submit" name="loginuser" value="Xác nhận"/> <a href="register.jsp">Đổi mật khẩu</a></td>
								</tr>
							</table>
                    		</form>
                	</div>
                </div>
            </div>
            <!--end of content-->
<?php
  include("footer.php");
?>