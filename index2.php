<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->

<h2>København</h2>
<p style="color: darkblue;font-weight: bold">Tirsdag 23. feb.</p>

<br>

<p>UV:1 Sol op: 07:16 Sol ned: 17:30 Dagen tiltaget med 03:13 Luftfugtighed: 87% Lufttryk: 1028 hPa</p>

<br>

<img src="images/kalender.png">
<img src="images/detaljeretvejr.png">

<br>

<h2>Statistik</h2>
<P>Statistik for den aktuelle måned de sidste fem år sammenholdt med referencen for 2006-2005</P>

<br>

<div class="statistik">
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="images/statistik1.png">
        </div>
        <div class="col-12 col-md-4">
            <img src="images/statistik2.png">
        </div>
        <div class="col-12 col-md-4">
            <img src="images/statistik3.png">
        </div>
    </div>
</div>
<br>

<h2>Nyheder: København</h2>

<br>

<div class="nyhedsgrid">
    <div class="row">
        <div class ="col-12 col-md-4">
            <img src="images/nyhed1.png"><h4>Vand frosset helt til</h4>
        </div>
        <div class="col-12 col-md-4">
            <img src="images/nyhed2.png."><h4>Badebro frosset helt</h4>
        </div>
        <div class="col-12 col-md-4">
            <img src="images/nyhed3.png"><h4>Have fyldt med nyfaldet sne</h4>
        </div>
    </div>
</div>

</body>
</html>
