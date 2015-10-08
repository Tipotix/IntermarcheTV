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
    <div class="container">
    	<?= $this->fetch('content') ?>