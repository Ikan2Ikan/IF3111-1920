<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page</title>
</head>

<body>
  <h1>Halo,<?= $nama; ?> !</h1>
  <label for="username">username</label>
  <input type="text" name="username" id="username" placeholder="username">
  <br>
  <label for="password">password</label>
  <input type="password" name="password" id="password" placeholder="password">
  <br>
  <button type="submit">Login</button>
</body>

</html>