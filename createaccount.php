<!DOCTYPE html>

<html>

	<head>
		<link rel="stylesheet" href="createaccount.css">
	</head>
	<body>

        <section class="myform-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="form-area login-form">
                            <div class="form-content">
                                <h1 class = "welcometext">Welcome to Grocery Guru</h1>
                            </div>
                            <div class="form-input">

                                <form action = "" method = "POST">
                                    <div class="form-group">
                                        <input type="text"  id="" name="name" required>
                                        <label>Name</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="" name="email" required>
                                        <label>GT Email</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="" name="password" required>
                                        <label>Password</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="" name="venmo" required>
                                        <label>Venmo</label>
                                    </div>

                                    <div class="myform-button">
                                        <button name = "submit" class="myform-btn">Create Account</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include "config.php";

if (isset($_POST["submit"])) {
	$full_name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$venmo = $_POST["venmo"];

	$sql = "INSERT INTO users SET
		full_name = '$full_name',
		email = '$email',
		password = '$password',
		venmo = '$venmo',
		groupName = ''
	";

	$result = $conn->query($sql);
	if ($result == TRUE) {
		header("location:http://localhost/grocery_guru/index.php");
	}
}
?>


	</body>


</html>
