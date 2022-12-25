<!DOCTYPE html>
<html>

<head>
	<title>Ajax POST request with JQuery and PHP</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<style type="text/css">
		body {
			font-family: calibri;
		}

		.box {
			margin-bottom: 10px;
		}

		.box label {
			display: inline-block;
			width: 80px;
			text-align: right;
			margin-right: 10px;
		}

		.box input,
		.box textarea {
			border-radius: 3px;
			border: 1px solid #ddd;
			padding: 5px 10px;
		}

		.btn-submit {
			margin-left: 90px;
		}

		.container {
			width: 50%;
			margin: 0 auto;
		}
	</style>
</head>

<body class="container">

	<h2>Ajax POST </h2>
	<form>
		<div class="box">
			<label for="firstName">First Name:</label><input type="text" name="firstName" id="firstName" /><br>
		</div>
		<div class="box">
			<label for="lastName">Last Name:</label><input type="text" name="lastName" id="lastName" /><br>
		</div>
		<div class="box">
			<label for="email">Email:</label><input type="email" name="email" id="email" /><br>
		</div>
		<div class="box">
			<label for="message">Message:</label><textarea type="text" name="message" id="message"></textarea><br>
		</div>
		<input id="submit" type="button" class="btn-submit" value="Submit" />
	</form>
	<script>
		$(document).ready(function() {
			$("#submit").click(function() {
				var firstName = $("#firstName").val();
				var lastName = $("#lastName").val();
				var email = $("#email").val();
				var message = $("#message").val();
				if (firstName == '' || lastName == '' || email == '' || message == '') {
					alert("Please fill all fields.");
					return false;
				}
				$.ajax({
					type: "POST",
					url: "store.php",
					data: {
						firstName: firstName,
						lastName: lastName,
						email: email,
						message: message,
					},
					cache: false,
					success: function(data) {
						window.location.href = "ajax.php";
						console.log(data);
						alert(data);
						alert("successfull");
					},
					error: function(xhr, status, error) {
						console.error(xhr);
					}
				});

			});

		});
	</script>
</body>

</html>