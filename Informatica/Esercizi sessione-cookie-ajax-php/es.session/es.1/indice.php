<!DOCTYPE html>
<html>
  <head>
    <title>Accesso utente</title>
  </head>
  <body>
    <h1>Accesso utente</h1>
    <form method="POST" action="login.php">
      <label for="username">Nome utente:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Accedi</button>
    </form>
  </body>
</html>