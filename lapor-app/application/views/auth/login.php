  <div class="container">
    <form action="<?= base_url(); ?>auth" method="post">
      <label for="email">Email : </label>
      <br>
      <input type="text" name="email" id="email" placeholder="Email">
      <br>

      <label for="password">Password : </label>
      <br>
      <input type="password" name="password" id="password" placeholder="Password">
      <br>
      <br>

      <button type="submit" name="login">Login</button>
    </form>

    <a href="<?= base_url('auth/register');  ?>">Create an Account!</a>
  </div>