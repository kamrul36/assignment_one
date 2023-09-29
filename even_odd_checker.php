<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even odd checker</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Even odd checker</h2>
        <form method="post" action="">
            <input type="number" name="even_odd" placeholder="Enter the number" required>

            <button type="submit">Check</button>
        </form>

        <div id="result">


            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $evenOdd = $_POST["even_odd"];
                $remainder = $evenOdd % 2;

                if ($remainder == 0) {
                    $result = "Number $evenOdd is even";
                    echo $result;
                } else {
                    $result = "Number $evenOdd is odd";
                    echo $result;
                }
            }


            ?>
        </div>
    </div>
</body>

</html>