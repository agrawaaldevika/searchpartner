<div id="content"><!--Content area starts here-->
			<div>
				<img src="images/" style="float:left; margin-left:-40px;"/>
			</div>
			<div id="form2">
				<form action="" method="post">
					<h2>Sign Up Today!</h2>
					<table> 
						<tr>
							<td align="right"><strong>Name:</strong></td>
							<td><input type="text" name="u_name" required="required" placeholder="write your name"/></td>
						</tr>
						
						<tr>
							<td align="right"><strong>Password:</strong></td>
							<td><input type="password" name="u_pass" required="required" placeholder="enter a password"/></td>
						</tr>
						
						<tr>
							<td align="right"><strong>Email:</strong></td>
							<td><input type="email" name="u_email" required="required" placeholder="write your email"/></td>
						</tr>
						
						<tr>
							<td align="right"><strong>Country:</strong></td>
							<td>
								<select name="u_country">
									<option>Select a Country</option>
									<option>Afghanistan</option>
									<option>Pakistan</option>
									<option>India</option>
									<option>Japan</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td align="right"><strong>Gender:</strong></td>
							<td>
								<select name="u_gender">
									<option>Select a Gender</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td align="right"><strong>Brithday:</strong></td>
							<td><input type="date" name="u_birthday" required="required" /></td>
						</tr>
						
						<tr>
							<td colspan="6">
								<button name="sign_up">Sign Up</button>
							</td>
						</tr>
						
					</table>
				</form>
				<?php include("insert_user.php");?>
			</div>
			
		</div>
		
		<!--Content area ends here-->