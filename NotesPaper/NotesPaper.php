<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<style>
    body{
        background-image: url("space.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }
    @keyframes title {
        0%{background-color:orange; left:0; top:0;}
        50%{background-color:blue; left:200px; top:0;}
        100%{background-color:red; left:0; top:0;}
    }
</style>
<?php
    $title=$name="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["title"])){
            $title="Title is required";
        }
        if(empty($_POST["name"])){
            $name="File name required";
        }
    }
?>
<body>
    <h1 style="text-align: center;font-size: 60px;text-decoration: underline;color: cornsilk;
    text-shadow: 4px 4px chartreuse"><img src="note.png" alt="Icon" style="animation-name:title;
    animation-duration: 2s;position:relative;float:left;width:120px;height:120px">NotesPaper</h1><br>

    <form action="" method="post">
        <div style="overflow:auto;background-color: red;border-radius: 30px; width: 50%;margin-left: 25%; padding:20px;
        text-align:center">
            <label for="title" style="background-color: darkolivegreen;border-radius:10px; color:whitesmoke;
            font-size: 40px">Title:</label><br><br>
            <input type="text" id="title" name="title" placeholder="Title..." style="border-style:solid;
            border-color:mediumblue;border-width: thick">
            <span class="error">* <?php echo $title;?></span><br><br>
            <label for="Notes" style="text-shadow:4px 4px darkgrey;background-color: greenyellow;font-size: 40px;
            border-radius:10px">Notes:</label><br><br>
            <textarea id="Notes" name="notes" placeholder="Enter message..." style="height:200px; width:60%;
            border-style:groove;border-color: purple;border-width: 60px;border-radius: 30px;"></textarea><br>
            <label for="name"><b>File name:</b></label>
            <input type="text" id="name" name="name">
            <span class="error">* <?php echo $name;?></span><br><br>
            <input type="submit" value="Save" style="background-color:palevioletred;color:darkblue;
            font-size: 20px"><br><br>
        </div>
        <?php
        $filename = $_POST["name"];
        $file = fopen($filename.".txt","a");
        fwrite($file,$_POST["title"]."\n");
        fwrite($file,$_POST["notes"]);
        fclose($file);
        ?>
    </form><br>

    <form action="Display.php" method="post">
        <div style="background-color:brown;color:seashell;border-radius: 30px;width:50%;margin-left:25%;padding:20px;
        text-align: center;text-decoration: lavender">
            <input type="file" name="file"><br><br>
            <button type="submit" name="upload">Upload Document</button>
        </div>
    </form>

    <div style="background-color: aqua">
        <footer style="position: unset;bottom: 0;width:100%;text-align: center">
            <p>Contact us & Reference<br><br>
                <a href="http://instagram.com/thanishnish?utm_source=qr" target="_blank">
                    <img src="insta.png" alt="Instagram" style="border-radius: 25px; width:42px;height:42px"></a>
                <a href="mailto:thanishnata09@gmail.com" target="_blank">
                    <img src="gmail.png" alt="Gmail" style="border-radius: 15px; width:60px;height:42px"></a>
                <a href="https://www.w3schools.com/default.asp" target="_blank">
                    <img src="w3s.png" alt="w3school" style="width:60px;height:42px">
                </a>
            </p>
        </footer>
    </div>
</body>
</html>