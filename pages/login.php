<style>
  body{
    margin-top:20px;
    background:#eee;
}
.container {
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
    width: 100%;
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}



.card-columns .card {
    margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
    .card-columns {
        column-count: 3;
        column-gap: 1.25rem;
    }
    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}
.text-muted {
    color: #9faecb !important;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}
.mb-3 {
    margin-bottom: 1rem !important;
}

.input-group {
    position: relative;
    display: flex;
    width: 100%;
} 

.btn:hover{
  cursor: pointer;
}
</style>

<?php

  if (isset($_POST['submit'])) {
    $email = htmlspecialchars(trim($_POST['email']));
	  $password = sha1(htmlspecialchars(trim($_POST['password'])));

    if (user_check($email, $password) == 0) {
      $error_message = "Wrong email or password";
    }else{
      // register($firstname, $lastname, $email, $password);
      $_SESSION['finance'] = $email;
      $message = "Login successful";
      header('Location: index.php?page=dashboard');
    }
  }
?>

<br>
<link rel="stylesheet" href="style.css">

<form id="logForm" method="post">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group mb-0">
          <div class="card p-4">
            <div class="card-body">
              <h1>Login</h1>
              <p class="text-muted">Sign In to your account</p>
              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input required name="email" type="email" class="form-control" placeholder="email">
              </div>
              <div class="input-group mb-4">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input required type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="error">
                <?= isset($error_message)? $error_message : '';?>
              </div>
              <div class="row">
                <div class="col-6">
                  <button type="submit" name="submit" class="btn btn-primary px-4">Login</button>
                </div>
                <div class="col-6 text-right">
                  <button type="button" class="btn btn-link px-0">Forgot password?</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Sign up</h2>
                <p>If you do not yet have your account, click here.</p>
                <a href="index.php?page=register"><button type="button" class="btn btn-primary active mt-3">Register Now!</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>