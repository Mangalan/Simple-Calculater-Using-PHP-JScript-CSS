<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <div class="calculator-grid">
        <div id="display">
            <br>
            <span id="display-number"></span>
        </div>
        <table>
            <tr>
                <td><input type="button" class="button" value="7" onclick="getNumber(7)"></td>
                <td><input type="button" class="button" value="8" onclick="getNumber(8)"></td>
                <td><input type="button" class="button" value="9" onclick="getNumber(9)"></td>
                <td><input type="button" class="button" value="/" onclick="getSymbol('/')"></td>
            </tr>
            <tr>
                <td><input type="button" class="button" value="4" onclick="getNumber(4)"></td>
                <td><input type="button" class="button" value="5" onclick="getNumber(5)"></td>
                <td><input type="button" class="button" value="6" onclick="getNumber(6)"></td>
                <td><input type="button" class="button" value="*" onclick="getSymbol('*')"></td>
            </tr>
            <tr>
                <td><input type="button" class="button" value="1" onclick="getNumber(1)"></td>
                <td><input type="button" class="button" value="2" onclick="getNumber(2)"></td>
                <td><input type="button" class="button" value="3" onclick="getNumber(3)"></td>
                <td><input type="button" class="button" value="-" onclick="getSymbol('-')"></td>
            </tr>
            <tr>
                <td><input type="button" class="button" value="0" onclick="getNumber(0)"></td>
                <td><input type="button" class="button" value="C" onclick="refresh()"></td>
                <form method="post">
                <td><input type="button" class="button" value="=" onclick="output()"></td>
                </form>
                <td><input type="button" class="button" value="+" onclick="getSymbol('+')"></td>
            </tr>
        </table>
        <br>
    </div>
</body>
</html>