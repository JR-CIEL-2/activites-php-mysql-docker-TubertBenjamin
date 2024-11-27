<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = isset($_POST['name']) ? trim($_POST['name']) : '';  
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : ''; 
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';  
    $mpd = isset($_POST['password']) ? trim($_POST['password']) : '';  
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';  

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email incorrect !"; 
        exit;
    }
    $dataFile = 'data.json';
    foreach ($data as $user) {
        if ($user['email'] === $email) {
            echo json_encode(["status" => "error", "message" => "Un compte est déjà enregistré avec cet email."]);
            exit;
        }
    }
    $newUser = [
        'nom' => $nom, 
        'prénom' => $prenom, 
        'email' => $email, 
        'password' => $pwd, 
        'message' => $message
    ];

    $data[] = $newUser;


    if (file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        echo json_encode(["status" => "success", "message" => "Utilisateur cree correctement !"]);
    } 

    echo "Bienvenue :";
    echo "<p>Monsieur :".htmlspecialchars($nom).htmlspecialchars($prenom)."</p>";  
    echo "<p>Email :".htmlspecialchars($email)."</p>";
    echo "<p>Message :". htmlspecialchars($message)."</p>";
} else {
 
    echo "Veuillez soumettre le formulaire correctement. Les champs n'ont pas été complété correctement.";
}
?>