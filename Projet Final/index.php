<?php require "db.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Tableau utilisateurs</title>
</head>

<body>
    <header>
        <h1>Gestion des utilisateurs</h1>
    </header>
    <main>
        <div class="form-container">
            <h2>Ajouter un nouvel utilisateur</h2>
            <form method="POST">
                <input type="text" name="lastName" placeholder="Nom" />
                <input type="text" name="firstName" placeholder="Prénom" />
                <input type="email" name="mail" placeholder="Votre email" />
                <input type="text" name="zipCode" placeholder="Code Postal" />
                <button name="add">Inscription</button>
            </form>
        </div>
        <div class="user-list">
            <h2>Liste des utilisateurs</h2>
            <table>
                <tr>
                    <th class="border">Nom</th>
                    <th class="border">Prénom</th>
                    <th class="border">Mail</th>
                    <th class="border">Code postal</th>
                    <th class="border">Action</th>
                </tr>
                <?php foreach ($users as $entry) { ?>
                    <tr>
                        <td class="border"><?= $entry['lastName']; ?></td>
                        <td class="border"><?= $entry['firstName']; ?></td>
                        <td class="border"><?= $entry['mail']; ?></td>
                        <td class="border"><?= $entry['zipCode']; ?></td>
                        <td>
                            <form class="action-button" method="POST">
                                <input type="hidden" name="id" value="<?= $entry['id']; ?>">
                                <button name="openModalEdit" class="mini-button">
                                    <img src="./assets/image/edit.svg.svg" alt="modifier" width="20px">
                                </button>
                                <button name="del" class="mini-button">
                                    <img src="./assets/image/trash.svg.svg" alt="supprimer" width="20px">
                                </button>
                            </form>

                            <?php if (isset($_POST['openModalEdit']) && $_POST['id'] == $entry['id']) { ?>
                                <div class="overlay">
                                    <div class="modal">
                                        <h2>Modification</h2>
                                        <form method="POST">
                                            <input type="hidden" name="id" value="<?= $entry['id']; ?>">
                                            <input type="text" name="editLastName" value="<?= $entry['lastName']; ?>">
                                            <input type="text" name="editFirstName" value="<?= $entry['firstName']; ?>">
                                            <input type="email" name="editMail" value="<?= $entry['mail']; ?>">
                                            <input type="text" name="editZipCode" value="<?= $entry['zipCode']; ?>">
                                            <div class="modal-buttons">
                                                <button name="edit">Modifier</button>
                                                <button name="closeModal">Fermer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <p><?= $error ?></p>
    </main>
    <footer>

    </footer>
</body>

</html>