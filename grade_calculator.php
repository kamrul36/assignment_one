<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>

    <div class="container">
        <h2>Grade Calculator</h2>
        <form method="post" action="">
            <input type="number" name="bangla" placeholder="Enter bangla number" required><br>
            <input type="number" name="english" placeholder="Enter english number" required><br>
            <input type="number" name="math" placeholder="Enter math number" required><br>

            </select>
            <button type="submit">Calculate Grade</button>
        </form>

        <div id="result">


            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $bangla = $_POST["bangla"];
                $english = $_POST["english"];
                $math = $_POST["math"];

                $avarageOfTotal = ($bangla + $english + $math) / 3;

                if ($avarageOfTotal >= 60) {
                    $result = "A";
                    echo "Grade: $result";
                } else if ($avarageOfTotal >= 50) {
                    $result = "B";
                    echo "Grade: $result";
                } else if ($avarageOfTotal >= 40) {
                    $result = "C";
                    echo "Grade: $result";
                } else if ($avarageOfTotal >= 33) {
                    $result = "D";
                    echo "Grade: $result";
                } else {
                    $result = "F";
                    echo "Grade: $result";
                }


            }

            ?>
        </div>

    </div>
</body>

</html>