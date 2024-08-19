<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <main class="container-login">
    <form class="form-login" action="../app/config/valida_login.php" method="post">
      <h1>INSTITUTO ALEGRIA DE VIVER</h1>
      <label for="">Login:</label>
      <input class="input-text" type="text" name="username">
      <label for="">Senha:</label>
      <input class="input-text" type="password" name="password">
      <button type="submit">Entrar</button>
    </form>
  </main>
</body>

</html>