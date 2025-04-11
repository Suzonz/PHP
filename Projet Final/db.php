<?php
try {
    $db = new PDO("mysql:host=127.0.0.1;dbname=yolo", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


    // Affichage des utilisateurs
    $users = $db->query("SELECT * FROM user")->fetchAll();

    $error = "";

    // Ajout d'utilisateur
    if (isset($_POST["lastName"])) {
        if (!empty($_POST["lastName"]) && !empty($_POST["firstName"]) && !empty($_POST["mail"]) && !empty($_POST["zipCode"])) {
            $lastName = $_POST["lastName"];
            $firstName = $_POST["firstName"];
            $mail = $_POST["mail"];
            $zipCode = $_POST["zipCode"];
            $db->beginTransaction();
            $createNewUser = $db->prepare('INSERT INTO user (lastName, firstName, mail, zipCode) VALUES (:lastName, :firstName, :mail, :zipCode)');
            $createNewUser->bindParam(":lastName", $lastName);
            $createNewUser->bindParam(":firstName", $firstName);
            $createNewUser->bindParam(":mail", $mail);
            $createNewUser->bindParam(":zipCode", $zipCode);
            $createNewUser->execute();
            $db->commit();
            header("Refresh:0");
        } else $error = "Veuillez remplir tous les champs";
    }

    // Suppression d'utilisateur
    if (isset($_POST['del']) && isset($_POST['id'])) {
        $id = (int)$_POST['id'];
        $db->beginTransaction();

        $deleteUser = $db->prepare("DELETE FROM user WHERE id = :id");
        $deleteUser->bindParam(':id', $id);
        $deleteUser->execute();
        $db->commit();

        header("Refresh:0");
    }

    // Modification d'utilisateur
    if (isset($_POST['edit']) && isset($_POST['id'])) {
        if (!empty($_POST["editLastName"]) && !empty($_POST["editFirstName"]) && !empty($_POST["editMail"]) && !empty($_POST["editZipCode"])) {

            $id = (int)$_POST['id'];

            $lastName = $_POST["editLastName"];
            $firstName = $_POST["editFirstName"];
            $mail = $_POST["editMail"];
            $zipCode = $_POST["editZipCode"];

            $db->beginTransaction();

            $editUser = $db->prepare("UPDATE user SET lastName = :lastName, firstName = :firstName, mail = :mail, zipCode = :zipCode WHERE id = :id");
            $editUser->bindParam(":lastName", $lastName);
            $editUser->bindParam(":firstName", $firstName);
            $editUser->bindParam(":mail", $mail);
            $editUser->bindParam(":zipCode", $zipCode);
            $editUser->bindParam(":id", $id);
            $editUser->execute();

            $db->commit();
            header("Refresh:0");

        } else $error = "Veuillez ne pas laisser de champ vide";
    }
} catch (Exception $e) {
    $db->rollBack();
    echo $e->getMessage();
}
