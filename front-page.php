<!--?php /* Template name: Home Page */ ?-->

<?php
get_header();
?>

<main id="primary" class="site-main">
	<div class="home-banner w-100 ps-50 d-flex flex-column justify-content-center">
		<h1 class="font-huge text-white fw-bold pb-3 mb-2">Agenciamento<br>Marítimo e Operações<br><span class="pb-2 border-bottom border-4 border-primary">Portuárias</span></h1>
		<p class="text-white fs-4">Desde 1973 presente nos principais Portos do Brasil.<br>Nos empenhamos diariamente para realizar a entrega<br>de serviços de confiança e qualidade.</p>
		<button type="button" class="btn btn-primary me-auto fs-4">saiba mais</button>
	</div>
	<section class="d-flex px-5 py-3 justify-content-center">
		<div class="basis-45 d-flex flex-column justify-content-between">
			<div class="upper">
				<h6 class="text-uppercase fs-5 mb-4 text-blue">quem somos</h6>
				<h3 class="fs-2 mb-4 fw-bold text-navy">Profissionais de serviços dedicados à área de navegação</h3>
				<p class="fs-5 text-black-50">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere illo rerum recusandae velit nulla provident architecto eum alias temporibus, voluptates sunt suscipit. Iusto doloremque, vel est odit dolores deserunt obcaecati Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam porro obcaecati fugiat a numquam.</p>
			</div>
			<div class="lower">
				<button type="button" class="btn btn-primary px-4 py-3 fs-4">Conheça nossa História</button>
			</div>
		</div>
		<div class="basis-55 d-flex justify-content-center align-items-center">
			<img class="w-100 workers" src="<?php echo get_bloginfo('template_url') ?>/assets/workers.png" alt="Trabalhadores olhando pranchetas">
		</div>
	</section>
	<section class="w-100 d-flex justify-content-center align-items-center my-3">
		<div class="container d-flex justify-content-center align-items-center offices">
			<div>
				<h1 class="font-giant text-blue fw-bold">39 escritórios</h1>
				<p class="fs-5 text-black-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam ab, quibusdam, eligendi ipsam voluptate perferendis ullam architecto repellendus laborum mollitia tempore? Distinctio quae id neque quisquam in harum quis illo?</p>
				<button type="button" class="btn btn-primary px-4 py-3 fs-4">consulte localizações</button>
			</div>
			<div>
				<img class="w-100" src="<?php echo get_bloginfo('template_url') ?>/assets/map.png" alt="Mapa do Brasil com as localidades da empresa">
			</div>
		</div>
	</section>
	<div class="bottom-banner w-100 ps-50 d-flex flex-column justify-content-center">
		<h2 class="font-huge text-white mb-4">Conheça<br><span class="fw-bold">Nossas Operações</span></h2>
		<img class="mb-4" src="<?php echo get_bloginfo('template_url') ?>" alt="Logo das operações">
		<button type="button" class="btn btn-primary px-4 py-2 fs-4 me-auto">saiba mais</button>
	</div>
</main><!-- #main -->

<?php
get_footer();
