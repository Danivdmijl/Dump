<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>🀄Drakuze🀄</title>
</head>

<body>
    <div class="tekst">
        <h1>Drakuze</h1>
    </div>
    <div onclick="Klikscript" class="container-article-kaartjes">
        <article class="container-kaartjes">
            <div class="kaartjes kaart-1" style="cursor:pointer;" onClick="window.open('https://myanimelist.net/animelist/Drakuze','_newtab');">
                <img class="FotoKaartjes" src="img/MyAnimeList_Logo.webp" alt="Logo My Anime List">
                <h2 class="TitelKaartjes">My Anime List</h2>
                <h3 class="BeschrijvingKaartjes">Hier staat informatie over de Anime's die ik gekeken heb!</h3>
            </div>
            <div class="kaartjes" style="cursor:pointer;" onClick="window.open('https://osu.ppy.sh/users/12895528','_newtab');">
                <img class="FotoKaartjes osufoto" src="img/OsuLogo.webp" alt="Osu!">
                <h2 class="TitelKaartjes">Osu!</h2>
                <h3 class="BeschrijvingKaartjes">osu! is een rythm game, informatie over mijn profiel is hier te vinden!</h3>
            </div>
            <div class="kaartjes" style="cursor:pointer;" onClick="window.open('https://medal.tv/u/Drakuzez','_newtab');">
                <img class="FotoKaartjes" src="img/MedalLogo.webp" alt="Logo Medal.Tv">
                <h2 class="TitelKaartjes">Medal</h2>
                <h3 class="BeschrijvingKaartjes">Je vind hier clips van leuke momenten tijdens het gamen!</h3>
            </div>
            <div class="kaartjes kaart-pokemon" style="cursor:pointer;" onClick="window.open('https://shinypokemonsdrakuze.netlify.app/','_newtab');">
                <img class="FotoKaartjes fotopokemon" src="img/shinyspark.webp" alt="Shiny Pokemon Sparkle">
                <h2 class="TitelKaartjes">Shiny Pokemon</h2>
                <h3 class="BeschrijvingKaartjes">Je zal hier de Pokemon vinden die ik shiny gevangen heb!</h3>
            </div>
        </article>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
</body>

</html>