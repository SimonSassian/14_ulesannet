<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Simon Sassian, 10.10.2004

// Ülesanne 3 -  interactive romb calculation
echo "
    <h1>Romb</h1>

    <label for='rombSide'>Side (a)</label>
    <input type='number' id='romb_input_side' name='rombSide'> <br>

    <label for='rombH'>Height</label>
    <input type='number' id='romb_input_h' name='rombH'> <br>

    <button onclick='calculateRomb()'>Calculate</button>
    <span id='rombOutputLabel'>Output:</span>

    <script>
        const sideInput = document.getElementById('romb_input_side');
        const heightInput = document.getElementById('romb_input_h');
        const outputLabel = document.getElementById('rombOutputLabel');
        function calculateRomb() {
            const side = Number(sideInput.value);
            const height = Number(heightInput.value);
            if (side == 0) {
                outputLabel.innerText = 'Invalid input for side';
                return;
            }
            else if (height == 0) {
                outputLabel.innerText = 'Invalid input for height';
                return;
            }

            const perimeter = 4*side;
            const area = side * height;
            outputLabel.innerText = 'Output:';
            outputLabel.innerText += 'Area: ' + area;
            outputLabel.innerText += ' Perimeter: ' + perimeter;
        }
    </script>
";


?>
</body>
</html>