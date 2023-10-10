<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center" id="rect-container">
        <h1>Rectangle or square?</h1>
        <form>
            <label for="sideA" class="control-label">Side A</label>
            <input type="number" name="sideA" class="form-control">
    
            <label for="sideB" class="control-label">Side B</label>
            <input type="number" name="sideB" class="form-control">
    
            <label for="sideC" class="control-label">Side C</label>
            <input type="number" name="sideC" class="form-control">
    
            <label for="sideD" class="control-label">Side D</label>
            <input type="number" name="sideD" class="form-control">

            <input type="submit" class="btn btn-primary" name="shapeComparison" value="Check">
        </form>
    </div>

    <style>
        #rect-container {
            margin-top: 5%;
            width: 15%;
        }

        #comparisonResultLbl {
            width: 100%;
            text-align: center;
            font-family: Arial;
            font-size: 32px;
        }
    </style>

    <?php
    // Ülesanne 4.4 - Rectangle or square II
    if (!empty($_GET["shapeComparison"])) {
        $resultBody = "";
        $sideA = $_GET["sideA"];
        $sideB = $_GET["sideB"];
        $sideC = $_GET["sideC"];
        $sideD = $_GET["sideD"];
        if ($sideA == "" || $sideB == "" || $sideC == "" || $sideD == "") {
            $resultBody = "Missing side";
        }
        else if ($sideA == $sideB && $sideC == $sideD && $sideD == $sideA) {
            $resultBody = "Square";
        }
        else {
            $resultBody = "Rectangle";
        }

        echo "<label id='comparisonResultLbl'>" . $resultBody . "</label>";
        return;
    }
    ?>

    <div class="container text-center" id="year-container">
        <h1>Anniversary</h1>
        <form>
            <label for="year" class="control-label">Birth year</label>
            <input type="number" name="year" class="form-control">

            <input type="submit" class="btn btn-primary" name="yearAnniversaryCheck" value="Check">
        </form>
    </div>

    <style>
        #year-container {
            margin-top: 5%;
            width: 15%;
        }

        #resultLbl {
            width: 100%;
            text-align: center;
            font-family: Arial;
            font-size: 32px;
        }
    </style>

    <?php
    // Ülesanne 4.5 - Anniversary
    if (!empty($_GET["yearAnniversaryCheck"])) {
        $resultBody = "";
        $year = $_GET["year"];
        if ($year == "") {
            $resultBody = "Missing year parameter";
        }
        else {
            $resultBody = $year % 5 == 0 ? "Anniversary" : "Not an anniversary";
        }
        echo "<label id='resultLbl'>" . $resultBody . "</label>";
        return;
    }
    ?>

    <div class="container text-center" id="year-container">
        <h1>Grade</h1>
        <form>
            <label for="points" class="control-label">Points</label>
            <input type="number" name="points" class="form-control">

            <input type="submit" class="btn btn-primary" name="calculateGrade" value="Calculate">
        </form>
    </div>

    <style>
        #year-container {
            margin-top: 5%;
            width: 15%;
        }

        #resultLbl {
            width: 100%;
            text-align: center;
            font-family: Arial;
            font-size: 32px;
        }
    </style>

    <?php
    // Ülesanne 4.6 - Grade calculator
    if (!empty($_GET["calculateGrade"])) {
        $resultBody = "";
        $points = $_GET["points"];
        if ($points == "") {
            $resultBody = "Please enter your points";
        }
        else {
            if ($points >= 10) {
                $resultBody = "SUPER!";
            }
            else if ($points >= 5) {
                $resultBody = "TEHTUD!";
            }
            else {
                $resultBody = "FAILURE!";
            }
        }

        echo "<label id='resultLbl'>" . $resultBody . "</label>";
        return;
    }
    ?>

</body>
</html>
