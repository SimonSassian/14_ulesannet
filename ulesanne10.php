<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dokumendiga Veebileht</title>
</head>
<body>
    <h1>Tervitus dokumendiga veebilehel</h1>
    
    <?php
    // Kontrollime, milline dokument kuvatakse URL-i järgi
    $dokumendinimi = $_GET['document'] ?? '';

    // Kui dokumenti ei eksisteeri, teavita kasutajat
    if (!file_exists("$dokumendinimi.php")) {
        echo "<p>Dokumenti '$dokumendinimi' ei eksisteeri.</p>";
    } else {
        // Kui dokument on olemas, kuvame selle
        include("$dokumendinimi.php");
    }
    ?>
</body>
</html>
