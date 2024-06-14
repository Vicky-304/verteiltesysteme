<body>
    <div class="login" id="orderPopup">
        <div class="orderDiy">
            <h3>DIY erfolgreich bestellt!</h3>
            <a href="javascript:void(0)" class="closebtn" id="closeOrderBtn">&times;</a>
        </div>
    </div>

    <section>
        <h1>Willkommen im Onlineshop von SpringCraft & Co.</h1>
        <h3>Hier findest du alles was du für unsere DIYs oder andere Bastellideen brauchst!</h3>
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
        <div class="shop" id="shop-wrapper">

            <?php if (!empty($records) && is_array($records)): ?>
                <?php foreach ($records as $record): ?>
                    <div class="shop-entry">
                        <img id="img-entry" src="<?= $record['img_pfad'] ?>" alt="<?= $record['name'] ?>">
                        <div class="entry-details">
                            <label class="desciption">
                                <?= esc($record['name']) ?> - <?= esc($record['beschreibung']) ?>
                            </label>
                            <label class="price">
                                <?= esc($record['preis']) ?>€
                            </label>
                            <!--<p>Category: <?= esc($record['kategorie']) ?></p>
                            <p>Stock: <?= esc($record['bestand']) ?></p>
                            <p>Size: <?= esc($record['groesse']) ?></p>
                            <p>Weight: <?= esc($record['gewicht']) ?> <?= esc($record['gewicht_einheit']) ?></p>-->
                            <div class="icons">
                                <? if (isset($_COOKIE['id'])): ?>
                                    <form action="<?= site_url('shop/bestellen/' . $record['id']) ?>" method="POST">
                                        <label for="id" style="display: none;"></label>
                                        <input type="text" id="id" style="display: none;" name="id"
                                            value="<?= esc($record['id']) ?>">
                                        <label for="bestand" style="display: none;"></label>
                                        <input type="text" class="bestand" id="bestand" style="display: none;" name="bestand"
                                            value="<?= esc($record['bestand']) ?>">
                                        <button type="submit" class="order" id="order" onclick="openOrder()">bestellen</button>
                                    </form>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Es konnten keine Produkte gefunden werden.</p>
            <?php endif; ?>

        </div>
    </section>

    </main>
</body>