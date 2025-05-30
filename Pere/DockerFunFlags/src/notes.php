<?php
$correct = false;
$error = "";

$db = new SQLite3('/var/www/html/notes.db');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_password = $_POST['password'] ?? '';

   
    $query = "SELECT password FROM credentials WHERE password = '$entered_password'";
    $result = $db->query($query);

    if ($result && $result->fetchArray()) {
        $correct = true;
    } else {
        $error = "Contrasenya incorrecta. Torna-ho a intentar.";
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Notes personals de Pere Fèric</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        .error { color: red; }
        .note { background: #f5f5f5; padding: 10px; margin: 10px 0; border-left: 5px solid #3498db; }
    </style>
</head>
<body>
    <h2>🔐 Notes personals de Pere Fèric</h2>

    <?php if (!$correct): ?>
        <form method="post">
            <label for="password">Contrasenya:</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Accedir">
        </form>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <?php else: ?>
        <h3>📄 Notes privades:</h3>
        <?php
            $notes = $db->query('SELECT * FROM notes');
            while ($row = $notes->fetchArray(SQLITE3_ASSOC)) {
                echo "<div class='note'>" . htmlspecialchars($row['text']) . "</div>";
            }
        ?>
    <?php endif; ?>
</body>
</html>
