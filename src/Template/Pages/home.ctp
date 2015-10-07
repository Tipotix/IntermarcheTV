</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Intermarché</title>
    <?=
        $this->Html->css(['style.css', 'grid.css'])
    ?>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)">
</head>
<body>
    <!-- Message bienvenue -->
    <div class="container" style="margin-top: -30px;">
        <!-- Bienvenue, dans votre Intermarché de Flixecourt -->
        <div class="grid-8" style="margin-top: 60px;">
            <div class="container">
                <h1 class="bienvenue">Bienvenue<span>,</span>
                    dans votre
                </h1>
            </div>
            <h1 class="inter">Inter<span>marché</span></h1>
            <h1 class="bienvenue">de <span><g class="gras">Flixecourt</g></span>
            </h1>
        </div>

        <!-- Widget afin d'afficher la meteo -->
        <div class="grid-4">
            <p class="date_le">
                Nous sommes le
                <span>
                    <?php
                        setlocale (LC_TIME, 'fr_FR.utf8','fra');
                        echo(strftime("%A %d %B"));
                    ?>
                </span>
            </p>
<style>
    .date {
    text-decoration: underline;
    font-style: italic;
    font-size: 25px!important;
    float: left;
    text-decoration: none!important;
    margin-top: 10px!important;
}
</style>
            <!-- Je récupére la ville-->
            <!-- widget meteo -->
            <!-- widget meteo -->
<div class="meteo" id="widget_acff57812838f6e88ff184288dbb36a9">
<span class="meteo-span" id="l_acff57812838f6e88ff184288dbb36a9"><a href="http://www.my-meteo.fr/previsions+meteo+france/flixecourt.html">MyMeteo</a></span>
<script type="text/javascript">
(function() {
    var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
    my.src = "http://services.my-meteo.fr/widget/js2.php?ville=30587&format=carre&nb_jours=3&coins&c1=393939&c2=000000&c3=e6e6e6&c4=ffffff&c5=00d2ff&c6=d21515&police=0&t_icones=4&x=336&y=174&id=acff57812838f6e88ff184288dbb36a9";
    var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>
<!-- widget meteo -->
            <!-- widget meteo -->

            <p style="font-size: 22px; margin-left: 60px;">Bonne fête à <span><script language="Javascript" src="http://www.webmasteroo.com/saint/saint.php?s=1443865863&f=2"></script></span></p>
        </div>
    </div>

    <div class="produits container">
        <h1 class="promo-h1">Les <span>promotions</span></h1>
        <div class="carousel">
            <div class="item">
                <div class="grid-5">
                    <img src="https://intermarche.webalogues.fr/uploads/catalog/1485/sheets/middles/514337_599507.jpg" style="width: 99%;" alt="">
                </div>
                <div class="grid-7">
                    <h1 class="info">Example Title</h1>
                </div>


                <p>
                    <h2 class="prix_fou">
                    Prix fou!
                    </h2>
                    <p style="text-align: center; font-size: 29px;">2€19 <span>&gt;</span> 2€19</p>
                    <p style="text-align: center; font-size: 3em; display: block;"><span >70%</span> <g style=" display: block; font-size: 17px;text-align: center; margin-left: 10em;">en avantage carte</g></p>
                </p>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.min.js+owl.carousel.js)"></script>
    <?=
        $this->Html->script('app.js');
    ?>
</body>
</html>