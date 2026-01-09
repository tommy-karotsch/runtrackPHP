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
            <input type="text" name="username" placeholder=" Username">
            <input type="password" name="password" placeholder=" Password">
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


            $username = isset($_POST['username']) ? $_POST['username'] :'';
            $password = isset($_POST['password']) ? $_POST['password'] :'';

            if(!empty($_POST)){

            foreach ($_POST as $key => $value){
            echo $key . " : " . $value . "<br>";
            }
            if ($username == "John" && $password == "Rambo"){
                echo "C'est pas ma guerre";
                } else {
                echo "Votre pire cauchemar";
                }
            }
            ?>
            </tbody>
        </table>
    </main>
</body>
</html>
