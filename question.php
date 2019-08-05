<?php
	include("header.php");

	if(!isset($_SESSION['username'])) {
		header("Location: index.php");
	}
?>
	<button>Xem tất cả câu hỏi</button>
	<br><br>
	<form name="formname" method="post" action="" onsubmit="return validation()" enctype="multipart/form-data">
		<input type="hidden" name="username" value="<?php echo $_SESSION["username"]; ?>" />

		<table class="tftable" width="565">
			<tr>  <th colspan='2'>&nbsp;</th>  </tr>
			<tr>
				<th width="60">Loại câu hỏi <font color='#FF0033'> * </font></th>
				<td width="357"><select name="select" size="1"  onchange="showUser(this.value)">
					<option value="Select">Chọn</option>
					<?php

					?>
				</select></td>
			</tr>
			<tr>
 				<th>Câu hỏi<font color='#FF0033'> * </font></th>
 				<td><textarea rows=2 cols=35 name="question" placeholder="Nhập câu hỏi	"></textarea>
 				</td>
 			</tr>
 			<tr>
 				<th>Hình minh họa <font color='#FF0033'>*</font></th>
 				<td>
 					<input type=file name=uploads>
 					<input type="hidden" name="imgset" value="" />
 				</td>
 			</tr>
 			<tr>
 				<th>Đáp án A <font color='#FF0033'>*</font></th>
 				<td><textarea rows=2 cols=35 name="optiona" placeholder="Nhập đáp án"></textarea>
				</td>
			</tr>
			<tr>
 				<th>Đáp án B <font color='#FF0033'>*</font></th>
				<td><textarea rows=2 cols=35  name="optionb" placeholder="Nhập đáp án" ></textarea>
				</td>
			</tr>

			<tr>
				<th>Đáp án C <font color='#FF0033'>*</font></th>
				<td><textarea rows=2 cols=35  name="optionc" placeholder="Nhập đáp án"></textarea>
				</td>
			</tr>

			<tr>
				<th>Đáp án D <font color='#FF0033'>*</font></th>
				<td><textarea rows=2 cols=35  name="optiond" placeholder="Nhập đáp án"></textarea>
				</td>
			</tr>

			<tr>
				<th>Đáp án đúng<font color='#FF0033'> *</font></th>
				<td>
					<select size=1 name="answerid">
					<option>Chọn</option>
					<?php
					  $arr =  array("1","2","3","4");
					  foreach($arr as $val)
					  {
						if($val == $rsedit[answer])
					    {
						  echo "<option selected value='$val'>$val</option>";
					    }
						else
					    {
						  echo "<option value='$val'>$val</option>";
						}
				      }
					?>
					</select>
				</td>
			</tr>

			<tr>
			  <th>Giải thích</th>
			  <td><textarea rows=2 cols=35 name="description" placeholder="Giải thích đáp án"></textarea>
			  </td>
			</tr>

			<tr>
			  <td colspan="2" align="center">
			  <input type="submit" value="Thêm" name="submit">
			  </td>
			</tr>
		</table>
	</form>

<?php
  include("footer.php");
?>