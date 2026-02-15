<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percentage Calculator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/percentage-fav.svg" type="image/x-icon">
</head>
<body>
    <?php
        $howMuch = $_POST['howMuchIs'] ?? 0;
        $ofTheValue = $_POST['of'] ?? 0;
        $percentage = 0;
    ?>
    <main>
        <h1>Calculador de porcentagem</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <label for="">Quanto é</label>
            <input type="number" name="howMuchIs" step="0.001" value="<?= $howMuch ?>">
            <label for="">De</label>
            <input type="number" name="of" step="0.001" value="<?= $ofTheValue ?>">
            <div>
            <button type="submit">Calcular</button>
            <?php 
                $percentage = $howMuch / 100 * $ofTheValue;
            ?>
            <input type="tel" name="percentage" value="<?= $percentage ?>" disabled>
            </div>
        </form>
        <script>
            window.onload = function() {
                document.getElementById("myForm").reset();
            };
        </script>
    </main>
</body>
</html>