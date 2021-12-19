<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>SavedNotes</title>
</head>
<style>
    body{
        background-image: url("Toy.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<body>
    <div style="background-color: greenyellow;padding:20px">
        <?php
        $document = $_POST["file"];
        $file = fopen($document, "r");

        //Output lines until EOF is reached

        $line = fgets($file);
        echo "<b>".$line. "</b><br>";

        $y=0;
        while(! feof($file) and $y>=0) {
            if($y==0){
                $y=1;
                continue;
            }
            $line = fgets($file);
            echo $line. "<br>";
        }

        fclose($file);
        ?>
    </div>
</body>
</html>
