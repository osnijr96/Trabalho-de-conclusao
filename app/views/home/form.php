<!-- CONTACT FORM -->
<form id="contact-form" action="assets/php/contact.php" method="post">
    <input id="contact-form-name" type="text" name="name" class="form-control scroll-animated-from-right"
        placeholder="* Seu Nome" />

    <input id="contact-form-email" type="text" name="email" class="form-control scroll-animated-from-right"
        placeholder="* Seu Email" />

    <!-- PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) -->
    <div class="fhp-input">
        <input id="contact-form-company" type="text" name="company" class="form-control" />
    </div>
    <!-- /PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) -->

    <textarea id="contact-form-message" name="message" class="form-control scroll-animated-from-right"
        placeholder="* Mensagem"></textarea>

    <button type="submit" class="form-control scroll-animated-from-right">
        Enviar
    </button>

    <div class="success-message">* Mensagem Enviada!</div>
</form>
<!-- /CONTACT FORM -->
</section>
<!-- /CONTACT -->