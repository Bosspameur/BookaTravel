<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération et sécurisation des données
    $destination = htmlspecialchars(trim($_POST['destination']));
    $nombre_personnes = htmlspecialchars(trim($_POST['nombre_personnes']));
    $date_depart = htmlspecialchars(trim($_POST['date_depart']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $informations = htmlspecialchars(trim($_POST['informations']));

    // Vérification basique
    if (empty($destination) || empty($nombre_personnes) || empty($date_depart) || empty($email) || empty($telephone)) {
        die("Veuillez remplir tous les champs obligatoires.");
    }

    // Corps de l'email
    $message = "
    <h2>Nouvelle réservation</h2>
    <p><strong>Destination :</strong> $destination</p>
    <p><strong>Nombre de personnes :</strong> $nombre_personnes</p>
    <p><strong>Date de départ :</strong> $date_depart</p>
    <p><strong>Email :</strong> $email</p>
    <p><strong>Téléphone :</strong> $telephone</p>
    <p><strong>Informations supplémentaires :</strong><br>" . nl2br($informations) . "</p>
    ";

    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'paspaul13@gmail.com'; // Ton adresse Gmail
        $mail->Password = 'mvht babj yqlw iybx'; // Mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Destinataires
        $mail->setFrom('paspaul13@gmail.com', 'Atlas Escapes');
        $mail->addAddress('abdoumiaz@gmail.com'); // L'adresse qui recevra les réservations

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle réservation - Atlas Escapes';
        $mail->Body = $message;

        // Envoi
        $mail->send();

        // Redirection avec message de succès
        header("Location: index.php?success=1");
        exit;
    } catch (Exception $e) {
        // En cas d'erreur
        header("Location: index.php?error=" . urlencode("Erreur lors de l'envoi : " . $mail->ErrorInfo));
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
