<style>
	body{
    margin-top:20px;
    background-color: #f2f3f8;
}
.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e5e9f2;
    border-radius: .2rem;
}
</style>


<?php
    if (is_logged() == 1) {
      header('Location: index.php?page=dashboard'); 
    }
?>

<?php

if (isset($_POST['submit'])) {
	
	$firstname = htmlspecialchars(trim($_POST['firstname']));
	$lastname = htmlspecialchars(trim($_POST['lastname']));
	$email = htmlspecialchars(trim($_POST['email']));
	$password = sha1(htmlspecialchars(trim($_POST['password'])));

	if (taken_email($email) == 1) {
		$error_message = "A user with the same already email exists!!!";
	}else{
		register($firstname, $lastname, $email, $password);
		$_SESSION['finance'] = $email;
		$message = "Registration successful";
		header('Location: index.php?page=dashboard');
	}

}

?>
<div class="container h-100">
    		<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
							<p class="lead">
								Start creating the best possible user experience for your customers.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post" id="regForm" >
										<div class="form-group">
											<label>Firstname</label>
											<input required class="form-control error form-control-lg"  type="text" id="firstname" name="firstname" placeholder="Enter your firstname">
										</div>
										<div class="form-group">
											<label>Lastname</label>
											<input required class="form-control error form-control-lg"  type="text" id="lastname" name="lastname" placeholder="Enter your lastname">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input required class="form-control error form-control-lg"  type="email" id="email" name="email" placeholder="Enter your email">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input required class="form-control error form-control-lg" type="password" id="password" name="password" placeholder="Enter password">
										</div>
										<div class="error">
											<?= isset($error_message)? $error_message : '';?>
										</div>
										<div class="text-center mt-3">
											<!-- <a class="btn btn-lg btn-primary">Sign up</a> -->
											<button type="submit" name="submit" class="btn btn-lg btn-primary">Sign up</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>