<!DOCTYPE html>
<html>

<head>
    <title>
        Willkommen auf der DIY Seite von SpringCraft & Co.
    </title>
    <meta name="description" content="Euer Onlineshop für kreative Bastelideen und frühlingshafte DIYs">
    <meta name="viewport" content="width=device,install-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('favicon/favicon-16x16.png') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/diy.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allg.css') ?>">
</head>

<body>
    <section>
        <h1>Willkommen auf der DIY Seite von SpringCraft & Co.</h1>
        <h3>Hier findest du all unsere DIYs oder andere Bastellsets!</h3>
        <h3>Viel Spaß beim durchstöbern!</h3>
        <div class="modern-form">
            <fieldset class='float-label-field' id="lblSuche">
                <label for="txtSuche">Suche</label>
                <input id="txtSuche" type='text'>
            </fieldset>
            <button id="btnSuchen">Suchen</button>
        </div>
        <!--
                    Quelle der Bilder:
                        https://platzwechsel.de/
                -->
        <!-- In der class Shop werden die jeweiligen API Einträge generiert -->
        <div class="shop" id="shop-wrapper"></div>
    </section>

    </main>
</body>
<script src="<?php echo base_url('assets/diy.js') ?>"></script>
<script src="<?php echo base_url('assets/allg.js') ?>"></script>

</html>