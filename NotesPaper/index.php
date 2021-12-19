<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>NotesPaper</title>
</head>
<style>
    body{
        background-image: url("wallpaper.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
    }
    @keyframes click {
        0%{top:0; left:0;}
        50%{top:200px; left:250px;}
        100%{top:0; left:0;}
    }
</style>
<body>
    <h1 style="text-align: center;font-size: 60px;text-decoration: underline;color: cornsilk;
    text-shadow: 4px 4px chartreuse"> NotesPaper</h1><br>

    <img src="arrow.jpg" alt="arrow" style="margin-left=20%;border-radius: 25%;height:5%;width:5%;
    animation-name: click; animation-duration: 3s;animation-iteration-count:1000; position: relative">

    <p><a href="NotesPaper.php" target="_blank"><img src="note.png" alt="Icon" style="width:20%;height:20%;
    padding-left:40%;padding-top:2%"></a></p>
</body>
</html>