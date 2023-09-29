<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison tool</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>

    <div class="container">
        <h2>Comparison tool</h2>
        <form method="post" action="">
            <input type="number" name="number1" placeholder="Enter the number" required></br>
            <input type="number" name="number2" placeholder="Enter the number" required>
            <button type="submit">Compare</button>
        </form>
        </br>
        </br>
        </br>

        <div id="larger_number">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $numberOne = $_POST["number1"];
                $numberTwo = $_POST["number2"];

                $larger_number = ($numberOne > $numberTwo) ? $numberOne : $numberTwo;

                echo "The larger number is $larger_number";

            }
            ?>
        </div>
    </div>
</body>

</html>