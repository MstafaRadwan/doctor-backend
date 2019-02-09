<? php
echo '
	<html>
		<body>
			<form action="register.php" method="post">
				<h3> Your Name : </h3>
				<input type="text" name="name" placeholder="Enter Your Name" />
				<br>
				<h3> Your Phone Number : </h3>
				<input type="Number" name="phone" placeholder="Enter Your Phone" />
				<h3> What is your complaint : </h3>
				<input type="text" name="complain" placeholder="Enter Your Complaint" />
				<br>
				<h3> Your comment : </h3>
				<input type="text" name="comment" placeholder="Enter Your comment" />
				<br><br>
				<input type="submit" name="submit" />
			</form>
		</body>
	</html>