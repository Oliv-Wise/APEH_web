<?php
session_start();
require_once 'db/includes/db_config.php';
// Vérification de la session administrateur
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login_admin.php");
    exit();
}

try {
    $stmt = $pdo->query("SELECT nom, prenom, email, telephone, adresse, contact_nom, contact_phone, domaine, statut, date_inscription FROM users ORDER BY date_inscription DESC");
    $inscrits = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la récupération des inscrits : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des inscrits - APEH-France</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            padding: 2rem;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 1rem;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .logout {
            display: inline-block;
            margin-top: 1rem;
            background-color: #dc3545;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

<h1>Liste des membres inscrits</h1>

<a class="logout" href="logout_admin.php">Déconnexion</a>

<?php if (count($inscrits) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Personne à contacter en Haïti</th>
                <th>Téléphone en Haïti</th>
                <th>Domaine</th>
                <th>Statut</th>
                <th>Date d'inscription</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscrits as $membre): ?>
                <tr>
                    <td><?= htmlspecialchars($membre['nom']) ?></td>
                    <td><?= htmlspecialchars($membre['prenom']) ?></td>
                    <td><?= htmlspecialchars($membre['email']) ?></td>
                    <td><?= htmlspecialchars($membre['telephone']) ?></td>
                    <td><?= htmlspecialchars($membre['adresse']) ?></td>
                    <td><?= htmlspecialchars($membre['contact_nom']) ?></td>
                    <td><?= htmlspecialchars($membre['contact_phone']) ?></td>
                    <td><?= htmlspecialchars($membre['domaine']) ?></td>
                    <td><?= htmlspecialchars($membre['statut']) ?></td>
                    <td><?= date('d/m/Y H:i', strtotime($membre['date_inscription'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun membre inscrit pour le moment.</p>
<?php endif; ?>
</body>
</html>
