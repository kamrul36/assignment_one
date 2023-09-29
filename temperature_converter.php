<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
    </style>
</head>


<body>

    <form method="post" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" placeholder="Enter a number" required>
        <br><br>

        <label for="conversion_type">Select Conversion:</label>
        <select name="conversion_type" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <div id="result">

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $temperature = $_POST['temperature'];
            $conversion_type = $_POST['conversion_type'];

            switch ($conversion_type) {
                case 'celsius_to_fahrenheit':
                    $result = ($temperature * 9 / 5) + 32;
                    echo "Result: $result F";
                    break;

                case 'fahrenheit_to_celsius':
                    $result = ($temperature - 32) * 9 / 5;
                    echo "Result: $result C";
                    break;

            }
        }

        ?>
    </div>

</body>

</html>