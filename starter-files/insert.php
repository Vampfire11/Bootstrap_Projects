<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => brainsterlabs
		$conn = mysqli_connect("localhost", "root", "", "brainsterlabs");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$name_surname = $_REQUEST['name_surname'];
		$company_name = $_REQUEST['company_name'];
		$email = $_REQUEST['email'];
		$number = $_REQUEST['number'];
		$student_type = $_REQUEST['student_type'];

		// Performing insert query execution
		// here our table name is students
		$sql = "INSERT INTO students VALUES ('$name_surname',
			'$company_name','$email','$number','$student_type')";

		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>