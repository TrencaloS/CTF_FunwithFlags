CREATE TABLE notes (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  text TEXT
);

INSERT INTO notes (text) VALUES
('Comprar llaunetes per Bola de Pell'),
('Apuntar-me a classes de Docker'),
('Capitol 4 de Big Bang Theory, que et vas adormir!!!'),
('Recordatori!!!: Pere, recorda no tornar a fer un DELETE FROM notes sense clàusula WHERE! Ah, i no oblidis que el backup és a /backup/backup.sql'),
('Idees per la web: més fotos de Bolade pell!');
CREATE TABLE credentials (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    password TEXT
);

INSERT INTO credentials (password) VALUES ('password12345678');
