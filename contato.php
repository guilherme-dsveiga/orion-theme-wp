<!--?php /* Template name: Contact Page */ ?-->

<?php
get_header();
?>

<main id="primary" class="site-main">
    <div class="d-flex p-5">
        <div class="left d-flex flex-column gap-4">
            <div class="border-contact text-uppercase p-2 rounded fs-4 fw-bold text-blue fit-content">Contato</div>
            <h1 class="fw-bold">Solicite um Atendimento</h1>

            <form class="d-flex flex-column" action="">
                <div class="d-flex">
                    <input class="w-75 bg-light" type="text" placeholder="Nome">
                    <input type="text" placeholder="E-mail">
                </div>
                <input type="text" placeholder="Telefone">
                <textarea name="" id="" cols="20" rows="5" placeholder="Mensagem"></textarea>
            </form>
        </div>
        <div class="right d-flex bg-blue"></div>
    </div>
</main><!-- #main -->

<?php
get_footer();