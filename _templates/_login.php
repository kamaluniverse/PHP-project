<?php
$username = $_POST['email_address'];
$password = $_POST['password'];
$result = validate_certancial($username,$password);
if($result){
    ?>

<div class="bg-light p-5 rounded">
    <h1>Login Success</h1>
    <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
    <a class="btn btn-lg btn-primary" href="/docs/5.0/components/navbar/" role="button">View navbar docs »</a>
  </div>
<?php }else{

?>


<main class="form-signin">
  <form action="login.php"  method="post">
    <img  src="/assets/brand/bootstrap-logo.svg" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input  name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">©2025</p>
  </form>
</main>
<?php }?>