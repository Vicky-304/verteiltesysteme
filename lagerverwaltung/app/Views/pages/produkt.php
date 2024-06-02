<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/produktstyle.css') ?>">
</head>

<body>
    <main>
        <div class="headerele">
            <?php if (isset($produkt)): ?>
                <h1><?php echo $produkt['name'] ?></h1>
            <?php else: ?>
                <h1>Neues Produkt</h1>
            <?php endif ?>

            <div class="navigation">
                <button class="alle" onclick="window.location.href = '<? echo site_url('produkte') ?>'">
                    Alle Produkte</button>

            </div>
        </div>
        <div class="content">
            <div class="formdiv">
                <form method="POST" id="form"
                    action="<?= site_url('produkte/' . ((isset($produkt)) ? 'update/' . $produkt['id'] : 'create')) ?>"
                    enctype="multipart/form-data">
                    <div class="input">
                        <label for="name">Name</label>
                        <input type="text" name="name"
                            value="<?php if (isset($produkt)): ?><?php echo $produkt['name'] ?><?php endif; ?>">
                    </div>
                    <div class="input">
                        <label for="preis">Preis</label>
                        <input type="number" name="preis" step="0.01" min="0" value="<?php if (isset($produkt)): ?><?php
                           echo $produkt['preis'] ?><?php endif; ?>">
                    </div>
                    <div class="input">
                        <label for="bestand">Bestand</label>
                        <input type="number" name="bestand" min="0"
                            value="<?php if (isset($produkt)): ?><?php echo $produkt['bestand'] ?><?php endif; ?>">
                    </div>
                    <div class="input">
                        <label for="gewicht">Gewicht</label>
                        <input type="number" name="gewicht"
                            value="<?php if (isset($produkt)): ?><?php echo $produkt['gewicht'] ?><?php endif; ?>">
                    </div>
                    <div class="input">
                        <label for="gewicht_einheit">Gewichtseinheit</label>
                        <select name="gewicht_einheit">
                            <option value="ml">Milliliter</option>
                            <option value="l">Liter</option>
                            <option value="g">Gramm</option>
                            <option value="kg">Kilogramm</option>
                            <option value="mg">Milligramm</option>
                            <option value="st">Stück</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="kategorie">Kategorie</label>
                        <input type="text" name="kategorie"
                            value="<?php if (isset($produkt)): ?><?php echo $produkt['kategorie'] ?><? endif; ?>">
                    </div>
                    <div class="input">
                        <label for="beschreibung">Beschreibung</label>
                        <textarea name="beschreibung"
                            value="<?php if (isset($produkt)): ?><?php echo $produkt['beschreibung'] ?><? endif; ?>"></textarea>
                    </div>
                    <div class="input">
                        <label for="groesse">Größe</label>
                        <input type="text" name="groesse"
                            value="<?php if (isset($produkt)): ?><?php echo $produkt['groesse'] ?><? endif; ?>"
                            placeholder="B x H x L">
                    </div>
                    <div class="input">
                        <label for="img">Bild</label>
                        <input type="file" name="img" size="20">

                    </div>

                    <div>
                        <? if (isset($produkt)): ?>
                            <button type="button" class="bearbeiten"
                                onclick="enableForm('form')">Abbrechen</button><? endif; ?>
                        <button type="submit" class="speichern" id="speichern">Speichern</button>
                        <? if (isset($produkt)): ?>
                            <a class="loeschen" href="<? echo site_url('produkte/delete/' . $produkt['id']) ?>"
                                onclick="return confirm('Möchten Sie dieses Produkt wirklich löschen?')">Löschen</a>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
            <div>
                <img src="<?php if (isset($produkt)): ?><?php echo base_url('pictures/' . $produkt['img_pfad']) ?><? endif; ?>"
                    alt="<?php if (isset($produkt)): ?><?php echo $produkt['name'] ?><? endif; ?>">
            </div>
        </div>
    </main>

</body>

<script src="<?php echo base_url('assets/produktscript.js') ?>"></script>