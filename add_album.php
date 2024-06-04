<?php
// Start de sessie
session_start();

// Controleer of het verzoek via POST is gedaan
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Valideer de ingediende gegevens
    $errors = [];
    $formValues = [
        'naam' => $_POST['naam']?? '',
        'artiesten' => $_POST['artiesten']?? '',
        'elease_datum' => $_POST['release_datum']?? '',
        'url' => $_POST['url']?? '',
        'afbeelding' => $_POST['afbeelding']?? '',
        'prijs' => $_POST['prijs']?? '',
    ];

    // Valideer naam
    if (empty($_POST['naam'])) {
        $errors['naam'] = "Naam is verplicht.";
    }

    // Valideer artiesten
    if (empty($_POST['artiesten'])) {
        $errors['artiesten'] = "Artiesten zijn verplicht.";
    }

    // Valideer release datum
    if (empty($_POST['release_datum'])) {
        $errors['release_datum'] = "Release datum is verplicht.";
    }

    // Valideer url
    if (empty($_POST['url'])) {
        $errors['url'] = "Voer voor het gemak een spotify link van dit album toe. Dit is verplicht.";
    }

    // Als er geen validatiefouten zijn, voeg de album toe aan de database
    if (empty($errors)) {
        require_once 'db.php';
        require_once 'classes/Album.php';

        // Maak een nieuw Album object met de ingediende gegevens
        $album = new Album();
        $album->setNaam($_POST['naam']);
        $album->setArtiesten($_POST['artiesten']);
        $album->setReleaseDatum($_POST['release_datum']);
        $album->setUrl($_POST['url']);
        $album->setAfbeelding($_POST['afbeelding']);
        $album->setPrijs($_POST['prijs']);

        // Voeg de album toe aan de database
        // You need to implement the save method in your Album class
        // $album->save($db);

    } else {
        // Sla de fouten en formulier waarden op in sessievariabelen
        $_SESSION['errors'] = $errors;
        $_SESSION['formValues'] = $formValues;
    }

    // Stuur de gebruiker terug naar de index.php
    header("Location: album.php");
    exit;

} else {
    header("Location: album.php");
}

