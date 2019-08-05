<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quiz Online</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<div id="main_container"></div>
	<div class="main_content">
		<div id="header"></div>
		<div class="top_center_box"></div>
		<div class="center_box">
			<div id="menu_tab">
				<ul class="menu">
<?php
  if (isset($_SESSION['admin'])) {
?>
					<li><a href="adhome.php" class="nav"><?php echo $_SESSION['username'];  ?></a></li>
                        <li class="divider"></li>
                    <li><a href="question.php" class="nav">Thêm Câu Hỏi</a></li>
                        <li class="divider"></li>
                    <li><a href="question.php" class="nav">Tạo Đề</a></li>
                        <li class="divider"></li>
                    <li><a href="makequiz.jsp" class="nav">Xem Đề</a></li>
						<li class="divider"></li>
                    <li><a href="contact.html" class="nav">Thống Kê</a></li>
						<li class="divider"></li>
					<li><a href="logout.php" class="nav">Đăng xuất</a></li>
<?php
}
else if (isset($_SESSION['user'])) {
?>
					<li><a href="adhome.php" class="nav"><?php echo $_SESSION['username'];  ?></a></li>
                        <li class="divider"></li>
                    <li><a href="adprofile.php" class="nav">Thêm Câu Hỏi</a></li>
                        <li class="divider"></li>
                    <li><a href="question.php" class="nav">Tạo Đề</a></li>
                        <li class="divider"></li>
                    <li><a href="makequiz.jsp" class="nav">Xem Đề</a></li>
						<li class="divider"></li>
                    <li><a href="contact.html" class="nav">Thống Kê</a></li>
						<li class="divider"></li>
					<li><a href="logout.php" class="nav">Đăng xuất</a></li>
<?php
}
?>
				</ul>
			</div>

		<div class="middle_box">
            	<div class="middle_box_text_content">
                	<div class="middle_box_title"></div>
                    <p class="middle_text"></p>
                </div>
            </div>