  <form action="<?= base_url() ?>user/insert" method="post">
    <label for="username">username</label>
    <input type="text" name="username" id="username" placeholder="username">
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
    <button type="submit">Login</button>
  </form>
  <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>