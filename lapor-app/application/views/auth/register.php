  <form action="<?= base_url('auth/register') ?>" method="post">
    <label for="fullname">Full Name</label>
    <input type="text" name="fullname" id="fullname" placeholder="Full Name">
    <br>
    <label for="email">email</label>
    <input type="text" name="email" id="email" placeholder="email">
    <br>
    <label for="password">password</label>
    <input type="password" name="password" id="password" placeholder="password">
    <br>
    <label for="password2">ulangi password</label>
    <input type="password" name="password2" id="password2" placeholder="ulangi password">
    <br>
    <button type="submit" name="register">Register</button>
  </form>
  <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>