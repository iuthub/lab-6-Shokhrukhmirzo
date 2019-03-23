<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		
		<h1>Registration Form</h1>
			
		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form action="index.php" method="post" class="row d-flex justify-content-space-between align-items-center">
			<div class="col-6">
				<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name">
			</dd>
			
			<dt>Email</dt>
			<dd>
				<input type="email" name="email">
			</dd>

			<dt>Username</dt>
			<dd>
				<input type="text" name="username">
			</dd>

			<dt>Password</dt>
			<dd>
				<input type="password" name="password">
			</dd>

			<dt>Confirm Password</dt>
			<dd>
				<input type="password" name="confirmpassword">
			</dd>

			<dt>Date Of Birth</dt>
			<dd>
				<input type="date" name="date">
			</dd>

			

				<dt>Marital Status</dt>
			<dd>
				<select name="marital" id="marital">
					<option value="">Single</option>
					<option value="">Married</option>
					<option value="">Divorced</option>
					<option value="">Widowed</option>
				</select>
			</dd>

			<dt>Address</dt>
			<dd>
				<input type="text" name="address">
			</dd>

			<dt>City</dt>
			<dd>
				<input type="text" name="city">
			</dd>

			<dt>Gender</dt>
			<dd>
				Male
				<input type="radio" name="checkgender">
				Female
				<input type="radio" name="checkgender">
			</dd>
			</div>


			<div class="col-6">
			

			<dt>Postal Code</dt>
			<dd>
				<input type="text" name="postcode">
			</dd>

			<dt>Home Phone</dt>
			<dd>
				<input type="text" name="phonenumber">
			</dd>

			<dt>Mobile Phone</dt>
			<dd>
				<input type="text" name="mobilephone">
			</dd>

			<dt>Credit Card Number</dt>
			<dd>
				<input type="text" name="cardnumber">
			</dd>

			<dt>Credit Card expiry date</dt>
			<dd>
				<input type="date" name="cardexdate">
			</dd>

			<dt>Monthly Salary</dt>
			<dd>
				<input type="text" name="salary">
			</dd>

			<dt>Web Site URL</dt>
			<dd>
				<input type="url" name="website">
			</dd>

			<dt>Overall GPA</dt>
			<dd>
				<input type="number" name="gpa">
			</dd>
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
		</dl>
			</div>

		<div>
			<button class="btn btn-primary" type="submit">Register</button>

		</div>
		</form>
		
	</body>
</html>