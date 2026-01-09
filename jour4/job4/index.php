<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Adresse mail">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <input type="submit" value="Envoyez">
        </form>
        <table cellspacing ="20">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($_POST)){

                        foreach ($_POST as $key => $value){
                            echo "<tr>";
                            echo "<td>" . $key . "</td>";
                            echo "<td>" . $value . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
            </tbody>
        </table>
    </main>
</body>
</html>
