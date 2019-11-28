  <div class="container">
    <form action="<?= base_url('auth/register') ?>" method="post">
      <h2> REGISTER KUY! </h2>
      <input type="text" name="fullname" id="fullname" placeholder="Full Name">
      <br>
      <br>
      <input type="text" name="email" id="email" placeholder="Email">
      <br>
      <br>
      <input type="password" name="password" id="password" placeholder="Password">
      <br>
      <br>
      <input type="password" name="password2" id="password2" placeholder="Repeat password">
      <br>
      <br>
      <button type="submit" name="register">Register</button>
    </form>
    <br>
    <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
    <br>
    <br>
    <i class="fa fa-leaf" aria-hidden="true"></i>
  </div>