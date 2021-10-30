<!DOCTYPE html>

<html>

	<head>
		<link rel="stylesheet" href="index.css">
	</head>
	<body>
        <section class="myform-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="form-area login-form">
                            <div class="form-content">
                            <img src="logo.jpeg" style="float:left; margin-left:180px; margin-right:50px; width:350px; height:350px; border:none;" />
                            </div>
                            <div class="form-input">
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="text"  id="" name="email" placeholder="User Name">
                                        <label>User Name</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="" name="password" placeholder = "Password">
                                        <label>password</label>
                                    </div>

                                    <input type="submit" name = "login" value="Login" ></input>
                                    <input type="submit" name = "create" value="Create New Account"></input>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php

if (isset($_POST["create"])) {
	header("location:http://localhost/grocery_guru/createaccount.php");
}
if (isset($_POST["login"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM users";

	$found = False;
	$user_id = 0;

	include "config.php";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
			if ($found == False) {
				if ($row["email"] == $email && $row["password"] == $password) {
					$found = True;
					$user_id = $row["id"];
					$_SESSION["userid"] = $user_id;
					if ($row["groupName"] == ""){
						header("location:http://localhost/grocery_guru/lonelydashboard.php");
					} else {
						header("location:http://localhost/grocery_guru/progress.php");
					}
				}
		  }
		}
	}

	if ($found == False) {
		echo "Incorrect, try again.";
	}
}
?>

</body>
</html>
