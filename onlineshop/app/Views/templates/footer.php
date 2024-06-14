<footer id="footer">
    <div class="payments">
        <a href="https://paypal.com" class="tooltip">
            <img src="<?php echo base_url('icons/paypal.png') ?>" id="paypal">
            <span class="tooltiptext">Paypal</span>
        </a>
        <a href="https://www.klarna.com/de/" class="tooltip">
            <img src="<?php echo base_url('icons/klarna.png') ?>" id="klarna">
            <span class="tooltiptext">Klarna</span>
        </a>
        <a href="https://www.mastercard.de/de-de.html" class="tooltip">
            <img src="<?php echo base_url('icons/mastercard.png') ?>" id="mastercard">
            <span class="tooltiptext">Mastercard</span>
        </a>
        <a href="https://www.visa.de/" class="tooltip">
            <img src="<?php echo base_url('icons/visa.png') ?>" id="visa">
            <span class="tooltiptext">Visa Card</span>
        </a>
        <a href="https://www.apple.com/de/" class="tooltip">
            <img src="<?php echo base_url('icons/apple.png') ?>" id="apple">
            <span class="tooltiptext">Apple Pay</span>
        </a>
        <a href="https://pay.google.com/" class="tooltip">
            <img src="<?php echo base_url('icons/google.png') ?>" id="google">
            <span class="tooltiptext">Google Pay</span>
        </a>
    </div>
    <div class="copyRight">
        <br><a href="#">Datenschutz | </a>
        <a href="#">AGB | </a>
        <a href="<?php echo base_url('impressum/') ?>">Impressum | </a>
        <a href="<?php echo base_url('kontakt/') ?>">Kontakt | </a>
        <a href="#">Newsletter abonnieren</a>
        <br>
        <p>Copyright 2023 by michellekoenigseder</p>
    </div>
</footer>
</body>
<?php if (isset($jsFile)): ?>
    <script src="<?= base_url('assets/' . $jsFile) ?>"></script>
<?php endif; ?>
<script src="<?php echo base_url('assets/allg.js') ?>"></script>

</html>