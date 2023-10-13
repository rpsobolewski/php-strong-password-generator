<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Generatore di Password Casuale</h1>

        <?php
        include('functions.php');

        if (isset($_GET['length'])) {
            $length = (int)$_GET['length'];
            if ($length > 0) {
                $password = generateRandomPassword($length);
                echo "<div class='alert alert-success mt-4'>La tua password casuale è: $password</div>";
            } else {
                echo "<div class='alert alert-danger mt-4'>La lunghezza della password deve essere un numero positivo.</div>";
            }
        }
        ?>

        <form method="get" action="index.php">
            <div class="form-group mt-4">
                <label for="length">Lunghezza password:</label>
                <input type="text" class="form-control" name="length" id="length" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Genera</button>
        </form>
    </div>
</body>


</html>