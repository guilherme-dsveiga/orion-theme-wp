<!--?php /* Template name: Contact Page */ ?-->

<?php
get_header();
?>

<main id="primary" class="site-main">
    <div class="d-flex ps-5 gap-5">
        <div class="left d-flex flex-column gap-4 w-65 py-5">
            <div class="border-contact text-uppercase p-2 rounded fs-4 fw-bold text-blue fit-content">Contato</div>
            <h1 class="fw-bold">Solicite um Atendimento</h1>

            <form class="d-flex flex-column gap-4">
                <div class="d-flex gap-4">
                    <input class="bg-light p-2 w-55" type="text" placeholder="Nome">
                    <input class="bg-light p-2 w-45" type="tel" placeholder="Telefone">
                </div>
                <input class="bg-light p-2" type="email" placeholder="E-mail">
                <textarea class="bg-light p-2" name="" id="" cols="20" rows="5" placeholder="Mensagem"></textarea>
                <input class="bg-blue text-white fit-content fs-5 py-4 px-5" type="submit" value="ENVIAR">
            </form>
        </div>
        <div class="right d-flex flex-column bg-blue w-35 justify-content-center gap-5 py-5 px-5">
            <div class="d-flex align-items-center gap-4">
                <img class="contact-icon" src="<?php echo get_bloginfo('template_url') ?>/assets/telefone.png" alt="Icone de Telefone">
                <div class="d-flex flex-column justify-content-center text-white">
                    <span class="fw-bold">Telefone</span>
                    <span>+55 (53) 2125-4400</span>
                </div>
            </div>
            <div class="d-flex align-items-center gap-4">
                <img class="contact-icon" src="<?php echo get_bloginfo('template_url') ?>/assets/email.png" alt="Icone de E-mail">
                <div class="d-flex flex-column justify-content-center text-white">
                    <span class="fw-bold">E-mail</span>
                    <span>orion@rgd.amorion.com.br</span>
                </div>
            </div>
            <div class="d-flex align-items-center gap-4">
                <img class="contact-icon" src="<?php echo get_bloginfo('template_url') ?>/assets/endereço.png" alt="Icone de Endereço">
                <div class="d-flex flex-column justify-content-center text-white">
                    <span class="fw-bold">Endereço</span>
                    <span>Rua Aquidaban, 623 - Centro <br> CEP:96200-480 - Rio Grande / RS <br> Brazil</span>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center rounded contact-bg gap-4 p-4">
                <img class="contact-icon" src="<?php echo get_bloginfo('template_url') ?>/assets/atendimento.png" alt="Icone de Atendimento">
                <span class="text-white fw-bold fs-4">Horario <br>de Atendimento</span>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
