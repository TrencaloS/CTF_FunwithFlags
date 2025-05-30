<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Benvingut a la Web d'en Pere Fèric</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 40px;
    }

    h2 {
      text-align: center;
    }

    .login {
      position: absolute;
      top: 30px;
      right: 30px;
      border: 1px solid #ccc;
      padding: 15px;
      border-radius: 8px;
      background-color: #f9f9f9;
      box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
    }

    .login label {
      display: inline-block;
      width: 100px;
    }

    .galeria {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      margin: 50px auto;
      max-width: 900px;
    }

    figure {
      margin: 0;
      text-align: center;
    }

    figcaption {
      margin-top: 8px;
      font-size: 14px;
      color: #444;
    }

    .galeria img {
      width: 100%;
      max-width: 250px;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
    }

    .destacada img {
      border: 3px solid #f1c40f;
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(241, 196, 15, 0.5);
    }

    .destacada figcaption {
      font-weight: bold;
      color: #d35400;
    }
  </style>
</head>
<body>

<div class="login">
  <form method="POST" action="login.php">
    <strong>Accés a l'àrea privada:</strong><br><br>
    <label for="user">Usuari:</label>
    <input type="text" id="user" name="user"><br><br>
    <label for="pass">Contrasenya:</label>
    <input type="password" id="pass" name="pass"><br><br>
    <input type="submit" value="Entrar">
  </form>
</div>

<h2>Les fotos del meu estimat gat Bola de Pell</h2>

<div class="galeria">
  <figure>
    <img src="img/boladepell1.jpg" alt="Foto 1">
    <figcaption>El seu millor perfil</figcaption>
  </figure>
  <figure>
    <img src="img/boladepell2.jpg" alt="Foto 2">
    <figcaption>Una abraçada al sofà</figcaption>
  </figure>
  <figure>
    <img src="img/boladepell3.jpg" alt="Foto 3">
    <figcaption>Curiositat mode MAX</figcaption>
  </figure>

  <figure>
    <img src="img/boladepell4.jpg" alt="Foto 4">
    <figcaption>Pianista?</figcaption>
  </figure>
  <figure class="destacada">
    <img src="img/PrimerDiaBoladePell.jpg" alt="Naixement">
    <figcaption>❤️  El primer dia amb mi!! · 01/12/2024 ❤️ </figcaption>
  </figure>
  <figure>
    <img src="img/boladepell5.jpg" alt="Foto 5">
    <figcaption>Badall o lleó?</figcaption>
  </figure>

  <figure>
    <img src="img/boladepell6.jpg" alt="Foto 6">
    <figcaption>Hora de dormir</figcaption>
  </figure>
  <figure>
    <img src="img/boladepell7.jpg" alt="Foto 7">
    <figcaption>Gentleman</figcaption>
  </figure>
  <figure>
    <img src="img/boladepell8.jpg" alt="Foto 8">
    <figcaption>mode Pixar activat!</figcaption>
  </figure>
</div>

</body>
</html>
