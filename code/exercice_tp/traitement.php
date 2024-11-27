<?php
$name = $prenom = $email = $password = $message = $major = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"] ?? "");
    $prenom = test_input($_POST["prénom"] ?? "");
    $email = test_input($_POST["email"] ?? "");
    $message = test_input($_POST["message"] ?? "");
    $major = isset($_POST["major"]) ? "Oui" : "Non";

    echo "<h2>Votre saisie :</h2>";
    echo "Nom : $name<br>";
    echo "Prénom : $prenom<br>";
    echo "Email : $email<br>";
    echo "Message : $message<br>";
    echo "Majeur : $major<br>";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
