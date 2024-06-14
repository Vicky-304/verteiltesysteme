<body>

    <div class="login" id="orderPopup">
        <div class="orderDiy">
            <h3>DIY erfolgreich bestellt!</h3>
            <a href="javascript:void(0)" class="closebtn" id="closeOrderBtn">&times;</a>
        </div>
    </div>

    <div class="login editDiy" id="editPopup">
        <a href="javascript:void(0)" class="closebtn" id="closeEditBtn">&times;</a>
        <div class="userInputEdit">
            <h3>DIY editieren</h3>
            <form action="<?= site_url('/editDiy') ?>" method="post" enctype="multipart/form-data">
                <span id="pic">Bild: <input type="file" accept="image/png" name="img_pfad"></span>
                <span id="title">Name: <input placeholder="Produktname" name="titel"></span>
                <span id="selectedProducts">Produkte:
                    <label id="productsEditLabel" name="productsSelected">
                        <input type="hidden" id="productsEditInput" name="produkte">
                    </label>
                </span>
                <div id="productsGridEdit">
                    <?php if (!empty($products) && is_array($products)): ?>                            
                        <?php foreach ($products as $product): ?>
                            <label>
                                <?php if (strpos($diys[isset($_COOKIE['diyId']) || 0]['produkte'], $product['name']) !== false): ?>
                                    <input type="checkbox" value="<?= esc($product['name'])?>" checked> <?= esc($product['name'])?>
                                <?php else: ?>
                                    <input type="checkbox" value="<?= esc($product['name'])?>" onclick="updateSelectedProducts('Edit')" > <?= esc($product['name'])?>
                                <?php endif; ?>
                            </label>                        
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No records found.</p>
                    <?php endif; ?>
                </div>
                <button type="submit">speichern</button>
            </form>
            
        </div>
    </div>


    <div class="createDiy login" id="createPopup">
        <a href="javascript:void(0)" class="closebtn" id="closeCreateBtn">&times;</a>
        <div class="userInputCreate">
            <h3>Neues DIY erstellen</h3>
            <form action="<?= site_url('diy/createDiy') ?>" method="post" enctype="multipart/form-data">
                <span id="pic">Bild: <input type="file" accept="image/png" name="img"></span>
                <span id="title">Name: <input placeholder="Produktname" name="titel"></span>
                <span id="selectedProducts">Produkte:
                    <input type="hidden" id="productsCreateInput" name="produkte">
                    <label id="productsCreateLabel"></label>
                </span>
                <div id="productsGridCreate">
                    <?php if (!empty($products) && is_array($products)): ?>
                        <?php foreach ($products as $product): ?>
                            <label>
                                <input type="checkbox" value="<?= esc($product['name'])?>" onclick="updateSelectedProducts('Create')"> <?= esc($product['name'])?>
                            </label>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No records found.</p>
                    <?php endif; ?>
                </div>
                <button type="submit">erstellen</button>
            </form>
        </div>
    </div>

    <div class="login" id="deletePopup">
        <div class="deleteDiy">
            <h3>DIY Löschen</h3>
            <a href="javascript:void(0)" class="closebtn" id="closeDeleteBtn">&times;</a>
            <form action="<?= site_url('diy/deleteDiy') ?>" method="post" enctype="multipart/form-data">
                <div class="userInputDelete">
                    Möchten Sie das DIY wirklich löschen?
                </div>
                <button id="cancelDeleteDiyBtn" type="submit">löschen</button>
                <button id="deleteDiyBtn" type="reset" onclick="closeDelete()">abbrechen</button>
            </form>
        </div>
    </div>

    <section>
        <h1>Willkommen auf der DIY Seite von SpringCraft & Co.</h1>
        <h3>Hier findest du all eure DIYs!</h3>
        <h3>Viel Spaß beim durchstöbern!</h3>
        <div class="modern-form">
            <?php if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true'): ?>
                <button id="createDiyBtn" onclick="openCreate()">hinzufügen</button>
            <?php endif; ?>
        </div>
        <!--
                    Quelle der Bilder:
                        https://platzwechsel.de/
                -->
        <!-- In der class Shop werden die jeweiligen API Einträge generiert -->
        <div class="shop" id="shop-wrapper">
            <?php if (!empty($diys) && is_array($diys)): ?>
                <?php foreach ($diys as $diy): ?>
                    <div class="shop-entry">
                        <img id="img-entry" src="<?= base_url('/pictures/diy/' . $diy['img_pfad']) ?>" alt="<?= esc($diy['titel']) ?>">
                        <div class="entry-details">
                            <label class="desciption">
                                <?= esc($diy['titel']) ?> - <?= esc($diy['beschreibung']) ?>
                            </label>
                            <div class="icons">
                                <!-- <form action="<?= site_url('shop/decreaseStock') ?>" method="post">
                                    <label for="bestand" style="display: none;"></label>
                                    <input type="text" id="bestand" style="display: none;" name="bestand" value=""> 
                                    <label for="id" style="display: none;"></label>
                                    <input type="text" id="id" style="display: none;" name="id" value=""> 
                                    <button id="order" onclick="openOrder()">bestellen</button>
                                </form> -->
                                <button id="order" onclick="openOrder()">bestellen</button>
                                <?php if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true' && $_COOKIE['id'] == $diy['user_id']): ?>                    
                                    <a id="delete" onclick="openDelete()"><img src="icons/trashcan.png"></a>
                                    <a id="edit" onclick="openEdit(<?= $diy['post_id'] ?>)"><img src="icons/editPen.png"></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No records found.</p>
            <?php endif; ?>
        </div>
        <div id="diyId" style="display:none;"></div>
    </section>

    </main>
</body>