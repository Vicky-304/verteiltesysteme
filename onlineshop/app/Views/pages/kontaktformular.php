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