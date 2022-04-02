<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Function</title>
</head>
<body>
    <?php 
        echo "Hi Ezra";
    ?>
    <br>
    <?php 
        echo strlen ("Hi Ezra");
    ?>
    <br>
    <?php 
        echo str_word_count ("Hi Ezra");
    ?>
    <br>
    <?php 
        echo strrev ("Hi Ezra");
    ?>
    <br>
    <?php 
        echo strpos ("Hi Ezra","Ezra");
    ?>
    <br>
    <?php 
        echo str_replace ("Ezra","Jason","Hi Ezra");
    ?>
</body>
</html>