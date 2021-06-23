<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
		<form method="post">
			@csrf
    		<h1>Register Form</h1>

    			<label for="full-name">Full Name :</label>
				<input type="text" placeholder="Enter Name" name="full-name" id="full-name" > <br> <br>

    			<label for="username">Username :</label>
				<input type="text" placeholder="Enter Username" name="username" id="username" > <br> <br>

				<label for="email">Email :</label>
				<input type="email" placeholder="Enter Email" name="email" id="email" > <br> <br>

				<label for="password">Password :</label>
				<input type="password" placeholder="Enter Password" name="password" id="password" > <br> <br>

				<label for="con-pass">Confirm Password :</label>
				<input type="password" placeholder="Repeat Password" name="con-pass" id="con-pass" > <br> <br>

				<label for="address">Address :</label>
				<input type="text" placeholder="Enter Address" name="address" id="address" > <br> <br>

				<label for="cname">Company Name :</label>
				<input type="text" placeholder="Enter Company Name" name="cname" id="cname" > <br> <br>

				<label for="pnumber">Phone Number :</label>
				<input type="number" placeholder="Enter Phone Number" name="pnumber" id="pnumber" > <br> <br>

				<label for="city">City :</label>
				<input type="text" placeholder="Enter City" name="city" id="city" > <br> <br>

				<label for="country">Country :</label>
				<input type="text" placeholder="Enter Country" name="country" id="country" > <br> <br>


    			<button type="submit" class="signupbtn">Sign Up</button>

			</form>
			<br>

			@foreach ($errors->all() as $err)
				{{$err}} <br>
			@endforeach
	</body>
</html>