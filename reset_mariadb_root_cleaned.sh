#!/bin/bash

echo "🔒 Arrêt du service MariaDB..."
sudo systemctl stop mariadb

echo "🧹 Vérification et suppression des processus mysqld et mysqld_safe existants..."
sudo killall -q mysqld mysqld_safe
sleep 2

echo "🚨 Lancement de MariaDB sans contrôle d'accès..."
sudo mysqld_safe --skip-grant-tables &
sleep 5

echo "📥 Connexion à MariaDB sans mot de passe..."
mysql -u root <<EOF
-- Remplacez 'NouveauMotDePasse' par le mot de passe souhaité :
ALTER USER 'root'@'localhost' IDENTIFIED BY 'NouveauMotDePasse';
FLUSH PRIVILEGES;
EXIT;
EOF

echo "🔁 Redémarrage du service MariaDB..."
sudo killall -q mysqld mysqld_safe
sudo systemctl start mariadb

echo "🔐 Mot de passe root mis à jour avec succès !"
