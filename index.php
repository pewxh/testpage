<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Page Works!</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>


    <div id="ip" style="font-size: large">
      <?php
        echo shell_exec('/usr/sbin/ifconfig | grep -e "inet [0-9.]*"');
              ?> 
    </div>
    <button id="btn" class="magic">click me dawg!</button>
    <div id="boxes" class="boxes"></div>
    <script src="script.js"></script>
  </body>
</html>
