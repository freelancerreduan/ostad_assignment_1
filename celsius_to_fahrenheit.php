





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius to Fahrenheit Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
        }
        input[type="number"] {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Celsius to Fahrenheit Converter</h2>
        <form action="" method="post">
            <label for="celsius">Enter Celsius temperature:</label>
            <input type="number" id="celsius" name="celsius" required>
            <input type="submit" value="Convert">
        </form>
        <div class="result">
            <!-- PHP script will output result here -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["celsius"])) {
                    $celsius = $_POST["celsius"];
                    $fahrenheit = ($celsius * 9/5) + 32;
                    echo "<p> $celsius Celsius is $fahrenheit degrees Fahrenheit.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

