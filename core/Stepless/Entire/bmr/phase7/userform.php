<html>
	<head>
		<title>
			BMR
		</title>
	<link rel="stylesheet" media="all" type="text/css" href="stylecss/bmr.css">		 
			
	</head>
	<body>
	<div class="validation">
		<?php
			include("validation.php");
		?>
	</div>
			<!-- ENCTYPE is necessary for the form element of file type -->
			<TABLE  CLASS="table" ALIGN="center" CELLSPACING="1" CELLPADDING="1" BGCOLOR="#FFFFFF" BORDER=0>
				<!--  <FORM ACTION="validation.php" METHOD="POST" NAME="userform" ENCTYPE="multipart/form-data" >--> <!--  onsubmit="alert('Confirm');" --> 
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	
				
					<TR><TD COLSPAN=2><p>User Details</p></TD></TR>
					<TR>
						<TD COLSPAN=2>Enter Your Name:</TD>
						<TD>
							<SELECT NAME="salutation">
								<OPTION <?php if($_POST['salutation']=='Mr') echo 'SELECTED'; ?>>Mr</OPTION>
								<OPTION <?php if($_POST['salutation']=='Mrs') echo 'SELECTED'; ?>>Mrs</OPTION>
								<OPTION <?php if($_POST['salutation']=='Miss') echo 'SELECTED'; ?>>Miss</OPTION>
								<OPTION <?php if($_POST['salutation']=='Dr') echo 'SELECTED'; ?>>Dr</OPTION>
								<OPTION <?php if($_POST['salutation']=='Prof') echo 'SELECTED'; ?>>Prof</OPTION>
							</SELECT><BR>
							<INPUT TYPE="Text" NAME="firstName" SIZE="30" MAXLENGTH="30" TABINDEX="1" PLACEHOLDER="First Name" onFocus="this.select()"
							VALUE="<?php echo $_POST['firstName'] ?>">
							<span class="error">* <?php echo $firstNameErr;?></span><br>
							<INPUT TYPE="Text" NAME="lastName" SIZE="30" MAXLENGTH="30" TABINDEX="1" PLACEHOLDER="Last Name" onFocus="this.select()"
							VALUE="<?php echo $_POST['lastName'] ?>">
							<span class="error">* <?php echo $lastNameErr;?></span><br>
						</TD>
					</TR>
					<!-- Use mailto function to send the mail using SMTP settings -->
					<TR><!-- -->
						<TD COLSPAN=2>Email: </TD>
						<TD><!-- ask for current weight and weight wanted to maintain -->
							<INPUT PLACEHOLDER="Email" TYPE="email" NAME="email" SIZE="30" MAXLENGTH="60" TABINDEX="2"
							VALUE="<?php echo $_POST['email'] ?>"><span></span>
						</TD>
					</TR>
					<TR><!-- -->
						<TD COLSPAN=2>Current Weight: </TD>
						<TD><!-- ask for current weight and weight wanted to maintain -->
							<INPUT PLACEHOLDER="Kg" TYPE="Text" NAME="weight" SIZE="30" MAXLENGTH="15" TABINDEX="2"
							VALUE="<?php echo $_POST['weight'] ?>">
							<span class="error">* <?php echo $weightErr;?></span>
						</TD>
					</TR>
					<TR>
						<TD COLSPAN=2>Desired Weight: </TD>
						<TD><!-- ask for current weight and weight wanted to maintain -->
							<INPUT PLACEHOLDER="Kg" TYPE="Text" NAME="dweight" SIZE="30" MAXLENGTH="15" TABINDEX="2"
							VALUE="<?php echo $_POST['dweight'] ?>">
							<span class="error">* <?php echo $dweightErr;?></span>
						</TD>
					</TR>
					<!-- Adding radio buttons -->
					<TR>
						<TD COLSPAN=2>Height</TD>
						<TD>
							<INPUT PLACEHOLDER="cm" TYPE="Text" NAME="height" SIZE="30" MAXLENGTH="15" TABINDEX="2"
							VALUE="<?php echo $_POST['height'] ?>">
							<span class="error">* <?php echo $heightErr;?></span><br>
						</TD>
					</TR>
					<!-- 
					either ask for dd-mm-yyyy dropdown or use datetimepicker property
					either ask for timezone you born in or ask for birthplace and calculate using google place or something like that
					either calculate from sitetimezone but there may mismatch then in data for some cases
					 -->
					<TR>
						 <TD COLSPAN=2>Age:</TD>
						 <TD><!-- ask for current weight and weight wanted to maintain -->
							<INPUT PLACEHOLDER="years" TYPE="Text" NAME="age" SIZE="30" MAXLENGTH="15" TABINDEX="2"
							VALUE="<?php echo $_POST['age'] ?>">
							<span class="error">* <?php echo $ageErr;?></span>
						</TD>
						<!-- 
						 <TD COLSPAN=2>Date Of Birth:</TD>
						<TD><input type="text" name="datetimepicker" id="datetimepicker" VALUE="<?php echo $_POST['datetimepicker'] ?>"/>
							<script type="text/javascript">
						           $('#datetimepicker').datetimepicker({
						                showSecond: false,
						                timeFormat: 'hh:mm',
						                stepHour: 1,
						                stepMinute: 5,
						                stepSecond: 10
						            });
						
						        </script>
						        <span class="error">* <?php echo $dobErr;?></span><br>
						</TD>
					<TR>
						<TD COLSPAN=2>Timezone of Birth Place:</TD>
						<TD>
							
							<?php include('timezonedropdown.php'); ?>
						</TD>
						-->
					</TR>
					
					
					<!-- Adding a select box -->
					<TR>
						<TD COLSPAN=2>WorkType:</TD>
						<TD>
							<SELECT NAME="worktype" SIZE="1" TABINDEX="7">
								<OPTION <?php if($_POST['worktype']=='sedentary') echo 'SELECTED'; ?>>Sedentary</OPTION>
								<OPTION <?php if($_POST['worktype']=='lightlyactive') echo 'SELECTED'; ?>>Lightly Active</OPTION>
								<OPTION <?php if($_POST['worktype']=='moderatelyactive') echo 'SELECTED'; ?>>Moderately Active</OPTION>
								<OPTION <?php if($_POST['worktype']=='veryactive') echo 'SELECTED'; ?>>Very Active</OPTION>
							</SELECT>
							<img src="" alt="INFO" title="details"/>
						</TD>
					</TR>
					<!-- Adding a password field -->
					<TR>
						<TD COLSPAN=2>Food Preference:</TD>
						<TD>
							<INPUT TYPE="radio" NAME="foodPreference" VALUE="vegetarian" CHECKED="true" TABINDEX="3" <?php if($_POST['foodPreference']=='vegetarian') echo 'CHECKED=TRUE'; ?>><img src="images/veg.svg" height="25px" width="25px" alt="Vegetarian" title="Vegetarian">
							<INPUT TYPE="radio" NAME="foodPreference" VALUE="Non-vegetarian" TABINDEX="4"  <?php if($_POST['foodPreference']=='Non-vegetarian') echo 'CHECKED=TRUE'; ?>><img src="images/non-veg.jpg" height="25px" width="25px" alt="Non-Vegetarian" title="Non-Vegetarian">
						</TD>
					<TR>
						<TD COLSPAN=2>Gender:</TD>
						<TD>
							<INPUT TYPE="radio" NAME="gender" VALUE="Male" CHECKED="true" TABINDEX="3" <?php if($_POST['gender']=='Male') echo 'CHECKED=TRUE'; ?>><img src="images/male-sign.jpg" height="25px" width="25px" alt="Male" title="Male">
							<INPUT TYPE="radio" NAME="gender" VALUE="Female" TABINDEX="4"  <?php if($_POST['gender']=='Female') echo 'CHECKED=TRUE'; ?>><img src="images/female-sign.jpg" height="25px" width="25px" alt="Female" title="Female"><br />
						</TD>
					</TR>
					<TR><TD>
						<INPUT TYPE="Button" VALUE="SUBMIT" onClick="submit()" class="myButton"><br/>
						
						
						<!-- <INPUT TYPE="reset" NAME="cmdReset" VALUE="RESET" class="myButton"><br />  -->
						</TD>
					</TR>
				</FORM>
			</TABLE>
		

		<div class="resultBox">
			<?php
				include('result.php');
			?>
		</div>
	</body>
</html>
<?php

?>