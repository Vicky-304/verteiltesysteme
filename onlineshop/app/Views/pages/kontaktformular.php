<!DOCTYPE html>
<html>

<head>
    <title>
        SpringCraft & Co. | Kontakformular
    </title>
    <meta name="description" content="Springcraft & Co's Kontaktformular für Fragen aller Art">
    <meta name="viewport" content="width=device,install-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('favicon/favicon-16x16.png') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/contactformular.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allg.css') ?>">
</head>

<body>
    <section>
        <h1>Kontaktformular</h1>

        <!--Verhalten vom Button sieht man, wenn keine Weiterleitung auf Webhook stattfindet -->
        <!-- d.h. <form> muss komplett rausgenommen werden -->
        <form method="post" target="_blank" action="https://webhook.site/2543c446-f18e-4142-bb67-a373cf758c83">
            <div class="modern-form">
                <fieldset class='float-label-field' id="lblName">
                    <label for="txtName">Name</label>
                    <input id="txtName" type='text' name="name" required>
                </fieldset>

                <fieldset class='float-label-field' id="lblEmail">
                    <label for="txtEmail">Email</label>
                    <input id="txtEmail" type='email' name="email" required>
                </fieldset>

                <fieldset class='float-label-field' id="lblMessage">
                    <label for="txtMessage">Nachricht</label>
                    <textarea id="txtMessage" type='text' rows="1" name="message" required></textarea>
                </fieldset>

                <div class="button">
                    <button type="submit" id="btn" class="btn" name="origin" value="contactForm of SpringCraft & Co.">
                        <p id="btnText">senden</p>
                        <div class="check-box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </form>
        <br><br>
    </section>
    </main>
</body>
<script src="<?php echo base_url('assets/contactformular.js') ?>"></script>
<script src="<?php echo base_url('assets/allg.js') ?>"></script>

</html>