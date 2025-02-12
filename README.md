# 🚀 Projet Egypto - Dockerized PHP & MySQL API

## 📌 Description du projet

```markdown
Ce projet est une application web permettant d'explorer une **base de données sur l'Égypte antique** à l'aide de **Docker**, **PHP**, **MySQL**, et **phpMyAdmin**.

L'architecture repose entièrement sur **Docker Compose**, ce qui facilite le déploiement et l'utilisation du projet sans installation manuelle complexe.
```

## 🏗️ Architecture du projet

```markdown
Le projet est structuré comme suit :

📂 egypto-docker
│── 📂 www # Contient les fichiers PHP et HTML
│ ├── api.php # Endpoint PHP pour récupérer les données
│ ├── index.html # Interface utilisateur pour interagir avec l'API
│ ├── styles.css # Feuille de style pour l'affichage des résultats
│── 🐳 docker-compose.yml # Configuration Docker
│── .env # Variables d'environnement MySQL
│── README.md # Documentation du projet
```

## 🚀 Prérequis

```markdown
Avant de commencer, assurez-vous d'avoir installé **Docker** et **Docker Compose** sur votre machine.

- 📥 **[Télécharger Docker](https://www.docker.com/get-started)**
- 📥 **[Télécharger Docker Compose](https://docs.docker.com/compose/install/)**
```

## 🛠️ Installation et exécution

```sh
git clone https://github.com/HoussemBenmammar/egypto-docker.git
cd egypto-docker
```

```sh
echo "MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=egypto
MYSQL_USER=admin
MYSQL_PASSWORD=adminpassword" > .env
```

```sh
docker-compose up -d
```

## 🗄️ Base de données

```markdown
Le projet utilise **MySQL** pour stocker les données. Voici les principales tables :

- **decouvrir** : Contient les découvertes archéologiques.
- **dieu** : Liste des divinités égyptiennes et leurs attributs.
```

## 📡 API Endpoints

```markdown
L'API permet d'accéder aux données via des endpoints REST en **PHP/MySQLi**.
| Endpoint | Description |
|----------|------------|
| `/api.php?table=decouvrir` | Retourne les découvertes archéologiques |
| `/api.php?table=dieu` | Retourne les divinités égyptiennes |
```

## ⚙️ Installation de MySQLi dans Apache (Docker)

```sh
docker exec -it apache-php bash
docker-php-ext-install mysqli
docker-php-ext-enable mysqli
service apache2 restart
php -m | grep mysqli
```

## 🎯 Conclusion

```markdown
Ce projet **démontre comment utiliser Docker pour déployer une application web avec PHP et MySQL**. Il simplifie l’environnement de développement et évite les configurations complexes.
🚀 **Bon développement !** 😊
```
