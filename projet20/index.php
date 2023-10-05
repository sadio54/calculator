<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice en PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Calculatrice</h1>
    <div class="wrap">
        <form>
            <input type="text" name="display" class="box"><br><br>

            <input type="button" value="9" onclick="addToDisplay('9')">
            <input type="button" value="8" onclick="addToDisplay('8')">
            <input type="button" value="7" onclick="addToDisplay('7')">
            <input type="button" value="+" onclick="addToDisplay('+')">
            <br><br>

            <input type="button" value="6" onclick="addToDisplay('6')">
            <input type="button" value="5" onclick="addToDisplay('5')">
            <input type="button" value="4" onclick="addToDisplay('4')">
            <input type="button" value="-" onclick="addToDisplay('-')">
            <br><br>

            <input type="button" value="3" onclick="addToDisplay('3')">
            <input type="button" value="2" onclick="addToDisplay('2')">
            <input type="button" value="1" onclick="addToDisplay('1')">
            <input type="button" value="*" onclick="addToDisplay('*')">
            <br><br>

            <input type="button" value="0" onclick="addToDisplay('0')">
            <input type="button" value="." onclick="addToDisplay('.')">
            <input type="button" value="%" onclick="addToDisplay('%')">
            <input type="button" value="/" onclick="addToDisplay('/')">
            <br><br>

            <input type="button" value="Effacer" id="del" onclick="clearDisplay()">
            <input type="button" value="=" onclick="calculate()">

        </form>
    </div>

    <script>
        // Fonction pour ajouter des valeurs au champ de texte
        function addToDisplay(value) {
            document.getElementsByName('display')[0].value += value;
        }

        // Fonction pour effectuer le calcul et mettre à jour le champ de texte
        function calculate() {
            var display = document.getElementsByName('display')[0];
            display.value = eval(display.value);
        }

        function clearDisplay() {
        var display = document.getElementsByName("display")[0];
        display.value = '';
    }
    </script>
</body>

</html>
