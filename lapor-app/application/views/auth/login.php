  <form action="<?= base_url(); ?>auth" method="post">
    <label for="fullname">fullname</label>
    <input type="text" name="fullname" id="fullname" placeholder="fullname">
    <br>
    <label for="password">password</label>
    <input type="password" name="password" id="password" placeholder="password">
    <br>
    <button type="submit" name="login">Login</button>
  </form>
  <a href="<?= base_url('auth/register');  ?>">Create an Account!</a>