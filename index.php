<?php
include "header.php";
?>

<!-- Sida som visas på mobila enheter -->
<section class="mobilePage">
    <div class="mobileInfo">
        Denna sida är inte anpassad för att använda på små enheter såsom mobiler. 
        Denna applikation gör sig bäst på datorer med tangentbord men fungerar även på 
        skrivplattor med touchskärm. 
    </div>
</section>

<!-- Första-sida -->
<section class="header noMobile" id ="top">
    <?php include "andre.svg"; ?>
    <div class="h2Title">ABC 123</div>
    <div class="h2Title">Ett spel för att främja tangent och musvana</div>
    <div id="arrowContainer">
        <a href="#nav"><img src="arrow.png" id="arrow"></a>
    </div>
</section>

<!-- Meny-sida med länkar de de olika spelen -->
<section class = "noMobile" id="nav">
    <nav class="centerNavigation">
        <a href="#alphabet">
            <div class="navigation">
                <div class="navigationText">
                    A B C
                </div>
            </div>
        </a>
        <a href="#numbers">
            <div class="navigation">
                <div class="navigationText">
                    1 2 3
                </div>
            </div>
        </a>
        <a href="#ball" id="ballNav">
            <div class="navigation">
                <div class="navigationText">
                    Boll
                </div>
            </div>
        </a>
        <a href="#about">
            <div class="navigation">
                <div class="navigationText">
                    Om sidan
                </div>
            </div>
        </a>
    </nav>
</section>

<!-- Sida för bokstavsspel. Bokstäverna är klickbara men det 
    går ocks bra att trycka på repektive bokstav på tangentbordet -->
<section class = "noMobile" id="alphabet"  tabindex="1">
    <div class="row">
        <div class="link">
            <a href="#letterDiv">A</a>
        </div>
        <div class="link">
            <a href="#letterDiv">B</a>
        </div>
        <div class="link">
            <a href="#letterDiv">C</a>
        </div>
        <div class="link">
            <a href="#letterDiv">D</a>
        </div>
        <div class="link">
            <a href="#letterDiv">E</a>
        </div>
        <div class="link">
            <a href="#letterDiv">F</a>
        </div>
    </div>

    <div class="row">
        <div class="link">
            <a href="#letterDiv">G</a>
        </div>
        <div class="link">
            <a href="#letterDiv">H</a>
        </div>
        <div class="link">
            <a href="#letterDiv">I</a>
        </div>
        <div class="link">
            <a href="#letterDiv">J</a>
        </div>
        <div class="link">
            <a href="#letterDiv">K</a>
        </div>
        <div class="link">
            <a href="#letterDiv">L</a>
        </div>
    </div>

    <div class="row">
        <div class="link">
            <a href="#letterDiv">M</a>
        </div>
        <div class="link">
            <a href="#letterDiv">N</a>
        </div>
        <div class="link">
            <a href="#letterDiv">O</a>
        </div>
        <div class="link">
            <a href="#letterDiv">P</a>
        </div>
        <div class="link">
            <a href="#letterDiv">Q</a>
        </div>
        <div class="link">
            <a href="#letterDiv">R</a>
        </div>
    </div>

    <div class="row">
        <div class="link">
            <a href="#letterDiv">S</a>
        </div>
        <div class="link">
            <a href="#letterDiv">T</a>
        </div>
        <div class="link">
            <a href="#letterDiv">U</a>
        </div>
        <div class="link">
            <a href="#letterDiv">V</a>
        </div>
        <div class="link">
            <a href="#letterDiv">W</a>
        </div>
        <div class="link">
            <a href="#letterDiv">X</a>
        </div>
    </div>

    <div class="row">
        <div class="link">
            <a href="#letterDiv">Y</a>
        </div>
        <div class="link">
            <a href="#letterDiv">Z</a>
        </div>
        <div class="link">
            <a href="#letterDiv">Å</a>
        </div>
        <div class="link">
            <a href="#letterDiv">Ä</a>
        </div>
        <div class="link">
            <a href="#letterDiv">Ö</a>
        </div>
    </div>
</section>

<!-- Sida för att visa bild för respektive bokstav -->
<section class="page" id="letterDisplay">
</section>

<!-- Sida för sifferspel. Siffrorna är klickbara men det 
    går ocks bra att trycka på repektive siffra på tangentbordet --> 
<section class="noMobile" id="numbers" tabindex="1">
     <div class="row">
        <div class="link">
            <a href="#numberDiv">1</a>
        </div>
        <div class="link">
            <a href="#numberDiv">2</a>
        </div>
        <div class="link">
            <a href="#numberDiv">3</a>
        </div>
    </div>

    <div class="row">
        <div class="link">
            <a href="#numberDiv">4</a>
        </div>
        <div class="link">
            <a href="#numberDiv">5</a>
        </div>
        <div class="link">
            <a href="#numberDiv">6</a>
        </div>
    </div>

    <div class="row">
        <div class="link">
            <a href="#numberDiv">7</a>
        </div>
        <div class="link">
            <a href="#numberDiv">8</a>
        </div>
        <div class="link">
            <a href="#numberDiv">9</a>
        </div>    
    </div>

    <div class="row">
        <div class="link">
            <a href="#numberDiv">0</a>
        </div>
    </div>
</section>

<!-- Sida för att visa bild för respektive siffra -->
<section class="page" id="numberDisplay">
</section>

<!-- Sida för bollspel -->
<section class="page noMobile" id="ball">
    <div class="webgl-content">
        <div id="gameContainer" style="width: 960px; height: 600px"></div>
    </div>
    <div class = "waitText" id = "waitText">
    </div>
</section>

<!-- Sida för about -->
<section class="noMobile" id="about">
    <div class="infoText">
        <p>
            Syftet med denna sida är att 
            få barn att få en viss datorvana. Både vad gäller 
            tangentbordet och dess tangenter samt användning av musen.
        </p>
        <p>
            För att avsluta ett befintligt spel så kan man närsomhelst 
            trycka på luftballongen för att komma tillbaka till början.
        </p>
        <p>
            Den här applikationen gör sig bäst på dator med tangentbord. 
            En begränsad version kan köras på touchskärmar.
        </p>
        <p>
            Det finns idag inget stöd för att köra denna applikation på mobil.
        </p>
        <p>
            Bollspelet fungerar bäst på dator med webläsaren Chrome. På andra 
            enheter så kan laddningstiden bli lång. 
        </p>
    </div>
    <div>
    </div>
</section>

<?php include "footer.php"; ?>

<!-- TODO 
    - fixa ljud för iPad
    - ändra ordningen på markeringsområdet för alla bokstäver och siffror
    - snyggare övergång till webGL samt få det att fungera bättre på alla enheter
-->

