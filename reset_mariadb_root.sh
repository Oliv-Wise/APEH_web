#!/bin/bash

echo "🔒 Arrêt du service MariaDB..."
sudo systemctl stop mariadb

echo "🚨 Lancement de MariaDB sans contrôle d'accès..."
sudo mysqld_safe --skip-grant-tables &

echo "⏳ Attente de démarrage (5 secondes)..."
sleep 5

echo "📥 Connexion à MariaDB sans mot de passe..."
mysql -u root <<EOF
-- Modification du mot de passe root
FLUSH PRIVILEGES;
ALTER USER 'root'@'localhost' IDENTIFIED BY 'NouveauMotDePasseSecure123!';
FLUSH PRIVILEGES;
EOF

echo "✅ Mot de passe modifié."

echo "🔁 Redémarrage du service MariaDB..."
sudo killall mysqld
sleep 5
sudo systemctl start mariadb

echo "🔐 Mot de passe root mis à jour avec succès !"
echo "👉 Nouveau mot de passe : Marvens07?!"
