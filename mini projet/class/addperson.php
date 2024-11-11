<?php
require_once '../class/ajoutepersonne.php';
require_once '../class/bdd.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];
    $typepersonne = $_POST['typepersonne'];
    $groupe = $_POST['groupe'];
    $matricule = $_POST['matricule'];
    $email = $_POST['email'];
    $specialite = $_POST['specialite'];
    

    $db = new Database('localhost', 'root', '', 'php');
    $conn = $db->getConnection();
    $person = new Person($nom, $prenom, $password, $specialite,  $matricule,$groupe , $email, 1);
    if ($person){
        header("Location:../page1/page1.html");

    }
else{
    header("Location:../page2/index.html");
}
} 
    ?>