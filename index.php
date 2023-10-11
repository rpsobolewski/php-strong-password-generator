<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>
</head>

<body>
    <h1>Generatore di Password Casuale</h1>

    <?php


    include('functions.php');

    if (isset($_GET['length'])) {
        $length = (int)$_GET['length'];
        if ($length > 0) {
            $password = generateRandomPassword($length);
            echo "La tua password casuale è: $password";
        } else {
            echo "La lunghezza della password deve essere un numero positivo.";
        }
    }
    ?>

    <form method="get" action="index.php">
        <label for="length">Lunghezza password:</label>
        <input type="text" name="length" id="length" required>
        <input type="submit" value="Genera ">
    </form>


</body>

</html>