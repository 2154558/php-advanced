<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>


    <body>

        <form name="invoerformulier" action="advanced-2.php" method="POST">
        
        <label for="kleur">kies een kleur:</label>
            <select name="kleur" id="kleur">
              <option name="kleur" value="red">rood</option>
              <option name="kleur" value="blue">blauw</option>
              <option name="kleur" value="black">zwart</option>
              <option name="kleur" value="white">wit</option>
            </select> 
             <br>
            <label for="achtergrondskleur">kies een achtergrondskleur:</label>
            <select name="achtergrondskleur" id="achtergrondskleur">
              <option name="achtergrondskleur" value="red">rood</option>
              <option name="achtergrondskleur" value="blue">blauw</option>
              <option name="achtergrondskleur" value="black">zwart</option>
              <option name="achtergrondskleur" value="white">wit</option>
            </select> 
            <br>
            <label for="tabeldikte">kies een tabeldikte:</label>
            <select name="tabeldikte" id="tabeldikte">
              <option name="tabeldikte" value="1px">1px</option>
              <option name="tabeldikte" value="3px">3px</option>
              <option name="tabeldikte" value="6px">6px</option>
              <option name="tabeldikte" value="9px">9px</option>
            </select> 
            <br>
            <label for="padding">kies een padding:</label>
            <select name="padding" id="Padding">
              <option name="padding" value="1px">1px</option>
              <option name="padding" value="5px">5px</option>
              <option name="padding" value="10px">10px</option>
              <option name="padding" value="20px">20px</option>
            </select> 
             

            <input type="submit" name="submit" value="verstuur">
             <?php
       
         






?>
        </form>    
    </body>
</html>