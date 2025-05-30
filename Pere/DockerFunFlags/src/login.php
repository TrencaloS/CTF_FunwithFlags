<?php
// login.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if ($user === 'pere' && $pass === 'Boladepell01122024') {
        echo '<!DOCTYPE html><html lang="ca"><head><meta charset="utf-8">';
        echo '<style>
                body { font-family: sans-serif; text-align: center; padding: 3em; }
                .flag { display: inline-block; background: #222; color: #0f0;
                        padding: 1em 2em; border-radius: 0.5em;
                        font-size: 1.5em; margin-bottom: 1em; }
                .btn { padding: 0.5em 1em; font-size: 1em; cursor: pointer;
                       border: none; background: #28a745; color: white;
                       border-radius: 0.3em; }
                .btn:hover { background: #218838; }
              </style>';
        echo '<div class="flag">FLAG[B0L4D3P3LL]</div>';
        echo '<p>BAZINGAAA!!!!<br>Fes clic a “Acceptar” per continuar:</p>';
        echo '<form action="notes.php" method="get">';
        echo '  <button type="submit" class="btn">Acceptar</button>';
        echo '</form>';
        echo '</body></html>';
        exit;
    } else {
        echo '<!DOCTYPE html><html lang="ca"><head><meta charset="utf-8">';
        echo '<style>body{font-family:sans-serif;text-align:center;padding:2em;}';
        echo 'h2{color:#c00;}</style></head><body>';
        echo '<h2>Error d’autenticació</h2>';
        echo '<p><a href="index.php">Autentificació incorrecta</a></p>';
        echo '</body></html>';
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8">
  <title>Login – FunWithFlags</title>
  <style>
    body { font-family: sans-serif; display: flex; height: 100vh; align-items: center; justify-content: center; }
    form { background: #f4f4f4; padding: 2em; border-radius: 0.5em; }
    label, input { display: block; width: 100%; margin-bottom: 1em; }
    input[type="submit"] { width: auto; }
  </style>
</head>
<body>
  <form action="login.php" method="post">
    <label for="user">Usuari:</label>
    <input type="text" name="user" id="user" required>
    <label for="pass">Contrasenya:</label>
    <input type="password" name="pass" id="pass" required>
    <input type="submit" value="Entrar">
  </form>
</body>
</html>
