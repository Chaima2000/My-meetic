<?php

class DatabaseMeet
{
    private $connect;

    public function __construct($localhost, $database, $utilisateur, $password)
    {
        try {
            $this->connect = new PDO("mysql:host=$localhost;dbname=$database", $utilisateur, $password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
    }

    public function insertUser($firstname, $lastname, $birthdate, $city_id, $id_genre, $email, $password)
    {
        try {
            $sql = "INSERT INTO user (firstname, lastname, birthdate, city_id, id_genre, email, password) 
                    VALUES (:firstname, :lastname, :birthdate, :city_id, :id_genre, :email, :password)";

            $stmt = $this->connect->prepare($sql);

            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':birthdate', $birthdate);
            $stmt->bindParam(':city_id', $city_id);
            $stmt->bindParam(':id_genre', $id_genre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur lors de l'insertion dans la base de données: " . $e->getMessage());
        }
    }

    public function checkLogin($email, $password)
    {
        try {
            $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                return "success";
            } else {
                return "error";
            }
        } catch (PDOException $e) {
            die("Erreur lors de la vérification de connexion: " . $e->getMessage());
        }
    }
}   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["name_user"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $birthdate = htmlspecialchars($_POST["date"]);
    $city_id = intval($_POST["city"]);
    $id_genre = intval($_POST["genre"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    $db = new DatabaseMeet('localhost', 'mymeet', 'chaima', 'chaima2000');

    $success = $db->insertUser($firstname, $lastname, $birthdate, $city_id, $id_genre, $email, $password);

    echo json_encode("vous etes bien inscrit");
}
