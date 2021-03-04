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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css/" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<script src="https://kit.fontawesome.com/fabc49d872.js" crossorigin="anonymous"></script>
<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<div class="container">
        <img src=images/københanv.PNG class="card-img-bottom img-fluid" alt="...">
</div>

<br>


<!-- table before
<div class="table-wrapper">
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>Maks/min temp.</th>
            <th>Nedbør</th>
            <th>Vind</th>
            <th>UV stråler</th>
            <th></th>
        </tr>
        </thead>
        <thead>
        <tbody>
        <tr>
            <td class="hjerte"><span id='clickableAwesomeFont'><i class="fas fa-heart" style="font-size: 80%;"></span></td>

            <td class="københavn">København</td>
            <td class="sky"><i class="fas fa-cloud" style="font-size: 80%;"></i></td>
            <td>10°/7°</td>
            <td>0 mm</td>
            <td>3 m/s</td>
            <td>UV max 1</td>
            <td class="last"></td>
        </tr>
        <tr>
            <td class="hjerte"><i class="fas fa-heart" style="font-size: 80%;" id="toggleImage2"></td>
            <td class="århus">Århus</td>
            <td class="sky"><i class="fas fa-cloud" style="font-size: 80%;"></i></td>
            <td>8°/7°</td>
            <td>0 mm</td>
            <td>2 m/s</td>
            <td>UV max 1</td>
            <td class="last"></td>
        </tr>
        </tbody>
        </thead>
    </table>
</div>
-->

<!-- table after -->
<div class="container">
    <table class="table table-hover">
        <tbody>
        <tr>
            <th scope="col"></th>
            <th scope="col"><p class="text-muted fw-normal">Maks/min temp.</p></th>
            <th scope="col"><p class="text-muted fw-normal">Nedbør</p></th>
            <th scope="col"><p class="text-muted fw-normal">Vind</p></th>
            <th scope="col"><p class="text-muted fw-normal">UV stråler</p></th>
        </tr>
        <tr>
            <th scope="row">København</th>
            <td>°10/°7</td>
            <td>0 mm</td>
            <td>2 m/s</td>
            <td>UV max 1</td>
        </tr>
        <tr>
            <th scope="row">Århus</th>
            <td>°11/°5</td>
            <td>0 mm</td>
            <td>15 m/s</td>
            <td>UV max 2</td>
        </tr>
        </tbody>
    </table>
</div>

<br>


<!-- før vejrkort -->
<!--
<div class="vejrkort mx-auto w-75">

    <div class="vejrkort-text">
        <h1 class="overskrift">Vejrkort og radar</h1>
        <br>
        <p class="brødtext">
            Her finder du vejr, radar og lyn, lufttryk og nedbør, vind, vandstand, havtemperatur, strøm, <br>
            bølger, glatføre samt satellit. Læs mere om Vejrkortet og de forskellige lag her.
        </p>
    </div>

    <div class="billede">
        <img src="images/vejrkort.jpg " alt="">
    </div>

</div>
-->

<!-- efter vejrkort -->
<div class="container">
    <div class="vejrkort mx-auto w-100">

        <div class="vejrkort-text">
            <h1 class="overskrift">Vejrkort og radar</h1>

            <br>

            <p class="brødtext">
                Her finder du vejr, radar og lyn, lufttryk og nedbør, vind, vandstand, havtemperatur, strøm, <br>
                bølger, glatføre samt satellit. Læs mere om Vejrkortet og de forskellige lag her.
            </p>
        </div>


        <div class="billede">
            <img src="images/vejrkort.jpg" class="img-fluid">
        </div>
</div>

<br><br>

<div class="container">
    <div class="card">
        <div class=d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">

                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Københavns lufthavn
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Kalundbord</a></li>
                        <li><a class="dropdown-item" href="#">Kolding fyr</a></li>
                        <li><a class="dropdown-item" href="#">Ringsted flyveplads</a></li>
                    </ul>
                </div>
            </div>

            <div class="p-2 bd-highlight">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Temperatur
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Luftfugtighed</a></li>
                        <li><a class="dropdown-item" href="#">Vind</a></li>
                        <li><a class="dropdown-item" href="#">Nedbør</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="card-body">
            <h5 class="card-title">Københavns lufthavn</h5>
            <p class="card-text">Temperatur (°C)</p>
        </div>
    <img src="images/temp%20køb.PNG" class="card-img-bottom img-fluid" alt="...">
    </div>
</div>




</body>
</html>
