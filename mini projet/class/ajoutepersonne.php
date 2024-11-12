<?php
class Person {
    private $nom;
    private $prenom;
    private $password;
    private $specialite;
    private $matricule;
    private $groupe;
    private $email;

    private $typepersonne;
    public function __construct($nom, $prenom, $password, $specialite, $matricule, $groupe,$email,$typepersonne) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->password = $password;
        $this->specialite = $specialite; 
        $this->matricule = $matricule;
        $this->groupe = $groupe;
        $this->email = $email;
        $this->typepersonne = $typepersonne;
    }
    public function save($conn) {
        $stmt = $conn->prepare("INSERT INTO person (matricule,nom, prenom, email, group, Spécialite, password ,id_typeperson) VALUES (?, ?, ?, ?, ?, ?, ? ,?)");

        if ($stmt === false) {
            throw new Exception("Failed to prepare statement: " . $conn->error);
        }

        $stmt->bind_param("ssssssss", $this->matricule,$this->nom, $this->prenom, $this->email, $this->groupe, $this->specialite, $this->password,$this->typepersonne);

        if ($stmt->execute()) {
            return $stmt->insert_id; 
        } else {
            throw new Exception("Error inserting record: " . $stmt->error);
        }

        $stmt->close();
    }





}
    ?>