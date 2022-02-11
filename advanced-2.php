    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

    </head>
    
    <style>

    table, tr, td {
        border: <?php echo $_POST['tabeldikte']; ?> solid black;
        padding: <?php echo $_POST['tabeldikte']; ?>;
        color: <?php echo $_POST['kleur']; ?>;
    }
    </style>

        <body>
        <body style="background-color: <?php echo $_POST['achtergrondskleur']; ?>;">
        <body style="text-color": <?php echo $_POST['kleur']; ?>;">
        
        <?php
        $kaas = array("voornaam"=>"Kevin", "achternaam"=>"Bos", "leeftijd"=>"16");

            function maakrij($value, $kaas){
                echo "<tr><th>".$value."</th><th>".$kaas."</th></tr>";
            };
            ?>
            <table>
            <?php
            foreach($kaas as $values => $naam){
                maakrij($values, $naam);
            }

    ?>
           </table>    
        </body>
    </html>