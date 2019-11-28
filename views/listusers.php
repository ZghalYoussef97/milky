<?php
    include "../core/userC.php";
    $F = new userC();
    $liste = $F->getusers();
    $number = $F->getusersNumber();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Liste des Users</title>
</head>
<body>
    <center><h1>Liste des Users</h1></center>
    <hr>
    <a href="ajouter.html"><button id="a_button">Ajouter Film</button></a>

    <br>
    
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Rang</th>
            <th>Supprimer</th>
        </tr>
        <?php
            foreach($liste as $row){
                ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['rang']; ?></td>
                    <td><a href="supprimer.php?ref=<?php echo $row['username']; ?>"><button>Supprimer</button></a></td>
                </tr>
                <?php
            }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Le nombre total = </td>
            <td><?php foreach($number as $num) echo $num[0]; ?></td>
        </tr>
    </table>
</body>
</html>