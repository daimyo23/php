<?php
$distance = rand(15, 30); // k,
$comsumption = 7.5; // valgo/km
$price_1 = 1.3; // eur/l
$sunaduota= $distance/$comsumption;
$kaina= $sunaduota*$price_1;

$h1= "Keliones skaiciukle";
$li1= "Nuvaziuota distancija: $distance km";
$li2="Sunadota: $sunaduota litru";
$li3="Kaina: $kaina jewsu "
?>
<html>
    <head>
        <title></title>
        <style></style>
    </head>
    <body>
        <h1><?php print $h1 ?></h1>
        <ul>
            <li><?php print $li1?></li>
            <li><?php print $li2?></li>
            <li><?php print $li3?></li>
            
        </ul>
    

        </div>
    </body>
</html>