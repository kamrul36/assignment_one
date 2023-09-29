<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather report</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>

    <div class="container">
        <h2>Weather report</h2>
        <form method="post" action="">
            <input type="number" name="temperature" placeholder="Enter current temperature in Celseius" required></br>
            <button type="submit">Current weather</button>
        </form>

        <div id="result">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $temperature = $_POST["temperature"];

                if ($temperature <= 0) {
                    $result = "It's freezing!";
                    echo $result;
                } else if ($temperature > 0 && $temperature < 18) {
                    $result = "It's cool.";
                    echo $result;
                } else if ($temperature >= 18) {
                    $result = "It's warm.";
                    echo $result;
                }
            }

            ?>

        </div>
    </div>
</body>

</html>