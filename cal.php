<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero";
                }
                break;
            default:
                $result = "Invalid operator";
                break;
        }
    } else {
        $result = "Error: Please enter valid numbers";
    }
} else {
    $result = "Error: Invalid request method";
}

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Simple Calculator - Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .result {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .result h2 {
            margin-bottom: 20px;
        }
        .result p {
            font-size: 18px;
        }
        .result a {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        .result a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class='result'>
        <h2>Calculation Result</h2>
        <p>$result</p>
        <a href='calculat.html'>Go back</a>
    </div>
</body>
</html>";
?>
