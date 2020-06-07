
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Teste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/formatDate.js"></script>
    <script src="js/imageGallery.js"></script>
    <script src="js/removeProperty.js"></script>
    </head>

    <body>
<h3>Format Date no Console Log [JavaScript]</h3>
        <hr>
        <h3>Image Gallery [JavaScript]</h3>
    <div class="image" id="first">
  <img src="https://goo.gl/kjzfbE" alt="First">
  <button class="remove" onclick="setup('first')">X</button>
</div>
<div class="image" id="second">
  <img src="https://goo.gl/d2JncW" alt="Second">
  <button class="remove"  onclick="setup('second')">X</button>
</div>
</body>
</html>


<?php
require_once 'php/FileOwners.php';
require_once 'php/LeagueTable.php';
require_once 'php/Palindrome.php';
require_once 'rest/CEP.php';

echo "<br><br>";

new LeagueTable(array('Mike', 'Chris', 'Arnold'));
?>
