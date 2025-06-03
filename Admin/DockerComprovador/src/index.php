<?php
$flags = [
    'Flag1' => 'B0L4D3P3LL',
    'Flag2' => 'Z4S3NT0D4L4B0C4',
    'Flag3' => 'T0C...T0C...T0C...R00T?',
    'Flag4' => 'U0C2025'
];
$pistes = [
    'Flag1' => ['Dins dels píxels que hi trobem?', 'Quina paraula de pas obtenim amb steghide?'],
    'Flag2' => ['Saltaràs la validació de la base de dades?', 'Que hi trobem al domini de la nota?'],
    'Flag3' => ['La comanda -a mostra arxius ocults del directori', 'Tens permisos per executar?'],
    'Flag4' => ['TIC TAC cada minut executarà', 'Has fet servir linPEAS? Què executa el crontab?']
];
$resultats = [];
if(isset(
    $_POST['Flag1'], $_POST['Flag2'],
    $_POST['Flag3'], $_POST['Flag4']
)){
    foreach($flags as $clau => $valor){
        $entrada = trim($_POST[$clau]);
	$valid = ($entrada === $valor);
        $resultats[$clau] = $valid;
	if($valid) {
		$_POST[$clau] = $valor;
	}
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>🚩 Fun with Flags 🚩</title>
  <style>
    :root { --bg: #1e1e2f; --fg: #e0def4; --primary: #89b4fa; --accent: #f38ba8; }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { background: var(--bg); color: var(--fg); font-family: 'Segoe UI', sans-serif; }
    .container { max-width: 600px; margin: 50px auto; padding: 20px; background: #313244; border-radius: 10px; }
    h1 { text-align: center; margin-bottom: 20px; font-size: 2.5em; color: var(--accent); }
    form { display: grid; grid-template-columns: auto 1fr auto auto; row-gap: 15px; column-gap: 10px; }
    label { align-self: center; font-weight: bold; }
    input[type=text] { width: 100%; padding: 8px; border: 2px solid var(--primary); border-radius: 5px; background: #45475a; color: var(--fg); }
    .pista-btn { background: transparent; border: none; cursor: pointer; font-size: 1.2em; color: var(--primary); }
    .pista-text { grid-column: 2 / span 3; font-size: 0.9em; margin-top: -5px; color: var(--fg); display: none; }
    .btn-submit { grid-column: 1 / -1; margin-top: 20px; padding: 12px; background: var(--accent); color: var(--bg); border: none; border-radius: 6px; font-size: 1.1em; cursor: pointer; }
    .btn-submit:hover { background: #eba0ac; }
    .resultats { margin-top: 25px; padding: 15px; background: #45475a; border-radius: 6px; }
    .resultats h2 { margin-bottom: 10px; color: var(--primary); }
    .resultats ul { list-style: none; padding-left: 0; }
    .resultats li { margin-bottom: 8px; }
    .correcta { color: #a6e3a1; }
    .incorrecta { color: #f38ba8; }
  </style>
</head>
<body>
  <div class="container">
    <h1>🚩 Fun for Flags 🚩</h1>
    <form method="post">
      <?php foreach($flags as $clau => $valor): ?>
        <label for="<?php echo $clau; ?>"><?php echo 'Flag'.substr($clau,-1); ?></label>
        <input type="text" id="<?php echo $clau; ?>" name="<?php echo $clau; ?>" value="<?php echo htmlspecialchars($_POST[$clau] ?? ''); ?>" <?php echo $ok ? 'disabled class="disabled"' : ''; ?>>
        <button type="button" class="pista-btn" data-clau="<?php echo $clau; ?>" data-idx="0">🔍</button>
        <button type="button" class="pista-btn" data-clau="<?php echo $clau; ?>" data-idx="1">🔍</button>
        <div class="pista-text" id="pista-<?php echo $clau; ?>-0"><?php echo $pistes[$clau][0]; ?></div>
        <div class="pista-text" id="pista-<?php echo $clau; ?>-1"><?php echo $pistes[$clau][1]; ?></div>
      <?php endforeach; ?>
      <button type="submit" class="btn-submit">Comprovar Flags</button>
    </form>
    <?php if($resultats): ?>
      <div class="resultats">
        <h2>Resultats</h2>
        <ul>
        <?php foreach($resultats as $clau => $ok): ?>
          <li class="<?php echo $ok ? 'correcta' : 'incorrecta'; ?>">
            <?php echo 'Flag'.substr($clau,-1); ?>: <?php echo $ok ? '✔ Correcta' : '✖ Incorrecta'; ?>
          </li>
        <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
  <script>
    document.querySelectorAll('.pista-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const clau = btn.getAttribute('data-clau');
        const idx = btn.getAttribute('data-idx');
        const el = document.getElementById(`pista-${clau}-${idx}`);
        el.style.display = el.style.display === 'block' ? 'none' : 'block';
      });
    });
  </script>
</body>
</html>
