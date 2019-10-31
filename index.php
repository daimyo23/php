<?php
$sudas1 = (rand(1, 100));

$sudas2 = (rand(101, 200));
$sudas3 = (rand(201, 300));

$h1 = "Skolos skaciuokle";
$h2 = "Su vienu kabanciku grazinsi";
$h3 = "Jei paemei";
$h4 = "Su dviem  kabancikais grazinsi";
?>
<html>
    <head>
        <title></title>
        <style></style>
    </head>
    <body>
        <div class="body1">
            <h1><?php print $h1; ?></h1>
            <h3><?php print $h3; ?> <?php print $sudas1; ?> jewsu</h3>
            <h2><?php print $h2; ?> <?php print $sudas2; ?> </h2>
            <h4><?php print $h4; ?> <?php print $sudas3 ?></h4>

        </div>
    </body>
</html>