<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New Credentials</title>
  </head>
  <body>

    <h1>Credenciales para la base de datos</h1>
    <form id="newCredentials">
      <input type="text" name="host" required="true" placeholder="host">
      <input type="text" name="dbName" required="true" placeholder="Nombre DB">
      <input type="text" name="user" required="true" placeholder="usuario">
      <input type="text" name="password" placeholder="password">
      <input type="submit">
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/dbCredentials.js"></script>

  </body>
</html>
