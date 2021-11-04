
<html>
<head>
    <title>Calculadora</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <style>
        .input {
            width: 59.5px;
            height: 25px;
        }
        .table th {
            display: block;
        }
    </style>
    <form method="POST">
        <table class="table">
            <tr>
                <td>
                    <p style="border: 1px solid black; height: 10px; text-align:right"><?php echo $result; ?></p>
                </td>
            </tr>
            </tr>
            <br> <tr>
                <td>
                    <input class="input" type="submit" value="1" name="value" id="value">
                    <input class="input" type="submit" value="2" name="value" id="value">
                    <input class="input" type="submit" value="3" name="value" id="value">
                </td>
            </tr>               
                <td>
                    <input class="input" type="submit" value="4" name="value" id="value">
                    <input class="input" type="submit" value="5" name="value" id="value">
                    <input class="input" type="submit" value="6" name="value" id="value">
                </td>
            </tr>
            <tr>
                <td>
                    <input class="input" type="submit" value="7" name="value" id="value">
                    <input class="input" type="submit" value="8" name="value" id="value">
                    <input class="input" type="submit" value="9" name="value" id="value">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="*" name="operator" id="operator">
                    <input type="submit" value="/" name="operator" id="operator">
                    <input type="submit" value="-" name="operator" id="operator">
                    <input type="submit" value="+" name="operator" id="operator">
                    <input type="submit" value="=" name="resultado" id="resultado">
                    <input type="submit" value="Limpar" name="limpar" id="limpar">
                </td>
            <tr>
                <td >
                    <input style="margin-left: 64.3px;" class="input" type="submit" value="0" name="value" id="value">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
