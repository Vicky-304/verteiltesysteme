<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<? echo base_url('assets/produktestyle.css') ?>">
</head>

<body>
    <main>
        <h2>Produkte</h2>
        <button class="neu" onclick="window.location.href = '<? echo site_url('produkte/neu') ?>'">Neues
            Produkt</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Lagerbestand</th>
                    <th>Name</th>
                    <th>Preis</th>
                    <th>Gewicht</th>
                    <th>Bild</th>
                    <th>Kategorie</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <? foreach ($produkte as $produkt): ?>
                    <tr>
                        <td><?= $produkt['id'] ?></td>
                        <td><?= $produkt['bestand'] ?></td>
                        <td><?= $produkt['name'] ?></td>
                        <td><?= $produkt['preis'] ?> €</td>
                        <td><?= $produkt['gewicht'] ?>
                            <?= $produkt['gewicht_einheit'] ?>
                        </td>
                        <td><img src="<? echo base_url('pictures/') ?><?= $produkt['img_pfad'] ?>"></td>
                        <td><?= $produkt['kategorie'] ?></td>
                        <td><a href="<? echo site_url('produkte/' . $produkt['id']) ?>">Details</a></td>
                    </tr>
                <? endforeach ?>
            </tbody>
        </table>
    </main>
</body>