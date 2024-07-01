<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulaCheck.php" method='post'>
        <h1>Задача:</h1>
        <p>Ln(  R1 -  R2  )  *  R2  -  R3</p>
        <label for="num1">
            Значение1 (R1)
            <input name='num1' type="text" pattern='[0-9]{0,}'>
        </label>

        <label for="num2">
            Значение2 (R2)
            <input name='num2' type="text" pattern='[0-9]{0,}'>
        </label>

        <label for="num3">
            Значение3 (R3)
            <input name='num3' type="text" pattern='[0-9]{0,}'>
        </label>
        <input type="submit" value="Вычислить!">
    </form>
</body>
</html>