<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>

    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>

            <select name="operation">
                <option value="add">Addition</option>
                <option value="substract">Substraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="octal">octal Conversation</option>

            </select>
            <button type="submit">Calculate</button>
        </form>

        <div id="result">

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];

                if ($operation == "add") {
                    $result = $num1 + $num2;
                    echo "Result: $result";
                } else if ($operation == "substract") {
                    $result = $num1 - $num2;
                    echo "Result: $result";
                } else if ($operation == "multiply") {
                    $result = $num1 * $num2;
                    echo "Result: $result";
                } else if ($operation == "divide") {
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "Result: $result";
                    } else {
                        echo "Cannot divide by zero.";
                    }
                } else if ($operation == "octal") {
                    echo "Octal: " . decoct($num1);
                }
            }

            ?>


        </div>

    </div>

</body>

</html>