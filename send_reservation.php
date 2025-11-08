<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $destination = htmlspecialchars(trim($_POST['destination']));
    $nombre_personnes = htmlspecialchars(trim($_POST['nombre_personnes']));
    $date_depart = htmlspecialchars(trim($_POST['date_depart']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $informations = htmlspecialchars(trim($_POST['informations']));

    if (empty($destination) || empty($nombre_personnes) || empty($date_depart) || empty($email) || empty($telephone)) {
        die("Veuillez remplir tous les champs obligatoires.");
    }

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
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your email'; 
        $mail->Password = 'smtp app gmail';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        
        $mail->setFrom('your mail', 'Atlas Escapes');
        $mail->addAddress('users email'); 


        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle réservation - Atlas Escapes';
        $mail->Body = $message;

        
        $mail->send();

        header("Location: index.php?success=1");
        exit;
    } catch (Exception $e) {
        header("Location: index.php?error=" . urlencode("Erreur lors de l'envoi : " . $mail->ErrorInfo));
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
