<!DOCTYPE html>
    <html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Forms</title>
</head>
<body>

<?php
    $userName = $_GET["userName"];
    $gear = $_GET["gear"];
    



    if ($gear=="basketball")
        echo "<div class = 'content'>  <h1> Thanks but i allreday have $gear <br> Hope to see you again $userName </h1> </div> " ;
    else if ($gear == "football")
        echo "<div class = 'content'>  <h1> Of course i have $gear <br> Hey! $userName when you play give me a call! </h1> </div> " ;
    else if ($gear == "ski suits")
        echo "<div class = 'content'>  <h1> $gear  It's first thing that I bought! </h1> </div> " ;
    else
    echo "<div class = 'content'>  <h1> Oh! its a great idea thanks! i will buy  $gear  right away! <br> Thank's! $userName  </h1> </div>";
        

?>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

</body>
</html>