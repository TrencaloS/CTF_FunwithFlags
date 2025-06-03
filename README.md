# Fun with Flags – CTF 

Aquest projecte forma part del  meu Treball de final de Grau, que consisteix en el disseny d’un repte CTF educatiu centrat en vulnerabilitats OWASP i pràctica de tècniques d’auditoria de seguretat.

## 📁 Estructura del projecte

FunWithFlags/
├── Admin/
│      └── DockerComprovador/ → Contenidor que comprova si les flags són correctes
├── Pere/
│      └── DockerFunFlags/ → Contenidor vulnerable
│      ├── secret/ → Fitxers amagats, notes i imatges
│      ├── src/ → Codi PHP, DB SQLite i web vulnerable
│      └── videos/ → Pista audiovisual
├── root/
│      ├── comprova-usuaris.sh → Script per escalada de privilegis
│      └── crontab → Configuració de tasca programada

## ⚙️ Tecnologies utilitzades en aquet treball

- Docker
- Apache + PHP
- SQLite
- Bash + cron
- OWASP Top 10 (2021)

> 📎 Tota la informació addicional es pot consultar a la memòria del TFG (ben aviat...)
