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
        <body style="table": <?php echo $_POST['tabeldikte']; ?>;">
        <body style="padding": <?php echo $_POST['padding']; ?>;">
        
        <?php
        $kaas = array("voornaam"=>"Kevin", "achternaam"=>"Bos", "leeftijd"=>"16");

            function maakrij($value, $kazen){
                echo "<table><tr><th>$value</th></tr></table>";
            };

            foreach($kaas as $values => $naam){
                maakrij($values, $kaas);
            }
    ?>
            </form>    
        </body>
    </html>