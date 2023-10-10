<!DOCTYPE html>
<html>
<head>
    <title>Ülesanded</title>
</head>
<body>
    <button id="vahetaUlesanne">Vaheta ülesanne</button>
    <div id="ulesandeAla">
        <h2>Ülesanne <span id="ulesandeNumber">1</span></h2>
        
        <!-- Kuvame CSV-faili andmeid -->
        <h3>Tootajad</h3>
        <div id="tootajateTabel"></div>
        
        <!-- Kuvame ülesanded -->
    </div>

    <script>
        // JavaScript, mis vahetab ülesannet
        const nupp = document.getElementById('vahetaUlesanne');
        const ula = document.getElementById('ulesandeAla');
        const ulesandeNumber = document.getElementById('ulesandeNumber');
        let aktiivneUlesanne = 1;
        const maksimaalneUlesanne = 14; // Muutke vastavalt ülesannete arvule

        nupp.addEventListener('click', () => {
            aktiivneUlesanne += 1;
            if (aktiivneUlesanne > maksimaalneUlesanne) {
                aktiivneUlesanne = 1;
            }
            laeUlesanne(aktiivneUlesanne);
        });

        function laeUlesanne(ulesanneNr) {
            // Dünaamiliselt laadige PHP-fail vastava ülesandega
            fetch(`ulesanne${ulesanneNr}.php`)
                .then(response => response.text())
                .then(data => {
                    ulesandeNumber.textContent = ulesanneNr; // Näita ülesande numbrit
                    ula.innerHTML = data;
                });
        }

        // Laeme CSV-faili andmed
        function laeCSVAndmed() {
            fetch('tootajad.csv')
                .then(response => response.text())
                .then(data => {
                    // Kuvame CSV-faili andmed
                    const tootajateTabel = document.getElementById('tootajateTabel');
                    tootajateTabel.innerHTML = data;
                })
                .catch(error => {
                    console.error('Viga andmete laadimisel:', error);
                });
        }

        // Alustuseks laetakse esimene ülesanne ja CSV-faili andmed
        laeUlesanne(aktiivneUlesanne);
        laeCSVAndmed();
    </script>
</body>
</html>
