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
        $x = 1;

        if ($x == 1) {
            echo "Ezra is Great!";
        } 

        else{
            echo "Ezra is not Great!";
        }

    ?>
    <br>
    <?php 
        $x = 2;

        if ($x == 1) {
            echo "Ezra is Great!";
        } 

        elseif($x == 1){
            echo "Ezra is kinda Great!";
        }
        else{
            echo "Ezra is not Great!";
        }

    ?>
    <br>
    <?php 
        $x = 1;

        if ($x != 1) {
            echo "Ezra is Great!";
        } 

        else{
            echo "Ezra is not Great!";
        }

    ?>
</body>
</html>