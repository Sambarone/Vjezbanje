<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once 'ljubav.php'?>
    <form action="<?php echo $_SERVER['PHP_SELF']?> " method="post">
    <input type="text" name="on" id="on">
    <label for="on">Unesi njegovo ime</label>
    <br>
    
    <input type="text" name="ona" id="ona">
    <label for="ona">Unesi njegovo ime</label>
    <button class="button" type="submit" value="Submit">Izračunaj</button>
    </form>
    <p>
      <?php if((int)$rez>0){
    echo $rez;
      }
    ?></p>
    
</body>
</html>