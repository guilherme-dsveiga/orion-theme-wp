<!--?php /* Template name: Localization Page */ ?-->

<?php
get_header();
?>

<main id="primary" class="site-main">
    <div class="d-flex mx-5 py-5 flex-column justify-content-center align-items-center where-border">
        <h1 class="text-blue">Onde Estamos</h1>
        <h5>Clique na localização e confira mais informações!</h5>
    </div>
    <div class="map-border mx-5"></div>
    <div class="map-bg d-flex align-items-center justify-content-center">
        <div class="scrollable-container ms-5 text-white">
            <div class="fs-3 mb-2 px-2 fw-bold text-uppercase pointer bg-blue" id="belem">belém - Pa</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="fortaleza">fortaleza - ce</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="imbituba">imbituba - sc</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="itaguaí">itaguaí - rj</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="itajaí">itajaí - sc</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="juriti">juriti - pa</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="macapá">macapá - ap</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="paranaguá">paranaguá - pr</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="alegre">porto alegre - rs</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="açu">porto de açu - rj</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="janeiro">rio de janeiro - rj</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="grande">rio grande - rs<span class="text-normal"> (Head Office)</span></div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="salvador">salvador - ba</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="santarém">santarém - pa</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="luiz">são luiz - ma</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="francisco">são francisco do sul - sc</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="santos">santos - sp</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="vitória">vitória - es</div>
            <div class="fs-3 mb-2 fw-bold text-uppercase pointer" id="conde">vila do conde - pa</div>
        </div>
        <img class="negative-m h-100 p-5" src="<?php echo get_bloginfo('template_url') ?>/assets/map.png" alt="Imagem do mapa com as localizações da Orion Maritima">
        <div class="d-flex flex-column justify-content-center text-black bg-white info-container mb-5 me-5 py-4 px-5">
            <div class="fw-bold mb-2" id="box-title"> BELÉM - PA</div>
            <div class="fw-bold">Orion Rodos Maritima e Portuária Ltda</div>
            <div id="box-text">Av. Governador José Malcer, 815, Salas 309 – Edif. Palladium
                CEP: 66055-260 - Nazaré – PA – Brazil
                PHONE: +55(91) 3754-3191
                E-mail: operations.blm@orionrodos.com
            </div>
            <a class="mt-2 text-blue" href="#">Como chegar</a>
        </div>
    </div>
    </div>
    <div class="d-flex bg-dark-blue text-white flex-basis p-5">
        <div class="left">
            <div class="d-flex align-items-center">
                <span class="square-lg me-2"></span>
                <h4 class="text-uppercase">Escritórios:</h4>
            </div>
            <ul>
                <li class="text-uppercase local-border">Rio Grande</li>
                <li class="text-uppercase local-border">porto alegre</li>
                <li class="text-uppercase local-border">imbituba</li>
                <li class="text-uppercase local-border">itají</li>
                <li class="text-uppercase local-border">são francisco do sul</li>
                <li class="text-uppercase local-border">paranaguá</li>
                <li class="text-uppercase local-border">santos</li>
                <li class="text-uppercase local-border">itaguai</li>
                <li class="text-uppercase local-border">macapá</li>
                <li class="text-uppercase local-border">juriti</li>
                <li class="text-uppercase local-border">rio de janeiro</li>
                <li class="text-uppercase local-border">porto de açu</li>
                <li class="text-uppercase local-border">vitória</li>
                <li class="text-uppercase local-border">salvador</li>
                <li class="text-uppercase local-border">fortaleza</li>
                <li class="text-uppercase local-border">são luiz</li>
                <li class="text-uppercase local-border">belém</li>
                <li class="text-uppercase local-border">vila do conde</li>
            </ul>
        </div>
        <div class="right">
            <div class="d-flex align-items-center">
                <span class="square-lg me-2"></span>
                <h4 class="text-uppercase ">Área de Cobertura:</h4>
            </div>
            <ul>
                <li class="text-uppercase local-border">Pelotas - São José do Norte</li>
                <li class="text-uppercase local-border">Santa Clara - Tramandaí</li>
                <li class="text-uppercase local-border">-</li>
                <li class="text-uppercase local-border">Navegantes</li>
                <li class="text-uppercase local-border">itapoá</li>
                <li class="text-uppercase local-border">antonina - pontal do paraná</li>
                <li class="text-uppercase local-border">piaçaguera - são sebastião</li>
                <li class="text-uppercase local-border">csn - cmbs - porto sudeste - sepetiba - tkcsa - ilha guaíba</li>
                <li class="text-uppercase local-border">fazendinha - munguba - santana</li>
                <li class="text-uppercase local-border">alcoa</li>
                <li class="text-uppercase local-border">shell - ilha redonda - brasken - multirio - libra - exxon - ilha d'agua</li>
                <li class="text-uppercase local-border">-</li>
                <li class="text-uppercase local-border">tubarão - praia mole - portocel - ponta ubú</li>
                <li class="text-uppercase local-border">aratu - madre de deus - ilhéus - usiba</li>
                <li class="text-uppercase local-border">mucuripe - pecem</li>
                <li class="text-uppercase local-border">itaqui - ponta da madeira - alumar</li>
                <li class="text-uppercase local-border">icoaraci - outeiro - ocrim - miramar</li>
                <li class="text-uppercase local-border">iacoatiara - terfron - hidroveias do brasil - imerys - tgpm - manaus</li>
            </ul>
        </div>
    </div>
    <div class="container w-75 flex-basis d-flex gap-5 py-5">
        <div class="left">
            <div class="d-flex align-items-center">
                <div class="square-md me-2"></div>
                <h4>Agência Marítima Orion Ltda </h4>
                <div class="square-md ms-2"></div>
            </div>
            <ul class="mt-3">
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase">Rio Grande - RS </span>(Head Office)</h6>
                    </div>
                    <p>Rua Aquidaban, 623 - Centro</p>
                    <p>CEP: 96200-480 - Rio Grande – RS – Brazil</p>
                    <p>PHONE: +55(53) 2125-4400</p>
                    <p>E-mail: orion@rgd.amorion.com.br</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase">PORTO ALEGRE - RS</h6>
                    </div>
                    <p>Av. Diário de Notícias, 400, Sl. 2009/2010 - Cristal</p>
                    <p>CEP: 90810-080 - Porto Alegre – RS – Brazil</p>
                    <p>PHONE: +55(51) 3511 5100</p>
                    <p>E-mail: orion@poa.amorion.com.br</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase">IMBITUBA - SC</h6>
                    </div>
                    <p>Rua Nereu Ramos, 404, Sala 302 - Centro</p>
                    <p>CEP: 88780-000 - Imbituba – SC – Brazil</p>
                    <p>PHONE: +55(48) 3255-3853</p>
                    <p>E-mail: orion@imb.amorion.com.br</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase">ITAJAÍ - SC</h6>
                    </div>
                    <p>Rua Gil Stein Ferreira, 357, Salas 401/402 – Centro
                    </p>
                    <p>CEP: 88301-210 - Itajaí – SC – Brazil
                    </p>
                    <p>PHONE: +55(47) 2104-6400
                    </p>
                    <p>E-mail: orion@itj.amorion.com.br</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> SÃO FRANCISCO DO SUL - SC
                        </h6>
                    </div>
                    <p>Rua Alameda Ipiranga, 290 - Centro| CEP: 89240-000
                    </p>
                    <p>São Francisco do Sul - SC - Brazil
                    </p>
                    <p>PHONE: +55(47) 3444-2156</p>
                    <p>E-mail: orion@sfs.amorion.com.br</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> PARANAGUÁ - PR
                        </h6>
                    </div>
                    <p>Rua Manoel Corrêa, 1345 - Alto São Sebastião
                    </p>
                    <p>CEP: 83206-030 - Paranaguá – PR – Brazil
                    </p>
                    <p>PHONE: +55(41) 2152-3700
                    </p>
                    <p>E-mail: orion@png.amorion.com.br</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> SANTOS - SP
                        </h6>
                    </div>
                    <p>Praça Barão do Rio Branco, 14, Salas 91/92 - Centro
                    </p>
                    <p>CEP: 11010-921 - Santos – SP – Brazil
                    </p>
                    <p>PHONE: +55(13) 3213-3100
                    </p>
                    <p>E-mail: orion@sts.amorion.com.br</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> SALVADOR - BA
                        </h6>
                    </div>
                    <p>Avenida da França, 164, Salas 910/911 - Comércio
                    </p>
                    <p>CEP: 40010-000 - Salvador - BA – Brazil
                    </p>
                    <p>PHONE: +55(71) 3037-4020
                    </p>
                    <p>E-mail: orion@ssa.amorion.com.br
                    </p>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="d-flex align-items-center">
                <div class="square-md me-2"></div>
                <h4>Orion Rodos Marítima e Portuária Ltda</h4>
                <div class="square-md ms-2"></div>
            </div>
            <ul class="mt-3">
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase">VITÓRIA – ES </span>(Head Office)</h6>
                    </div>
                    <p>Avenida Jerônimo Monteiro, 1000, Salas 1013 a 1024
                    </p>
                    <p>Centro | CEP: 29010-935 - Vitória – ES – Brazil
                    </p>
                    <p>PHONE: +55(27) 3029-8484
                    </p>
                    <p>E-mail: operations.vix@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> PORTO DE AÇU – RJ
                        </h6>
                    </div>
                    <p>Rua do Sacramento, 104, Sala 02 - Centro
                    </p>
                    <p>CEP: 28200-970 - São João da Barra - RJ - Brazil
                    </p>
                    <p>PHONE: +55(21) 2253-7853
                    </p>
                    <p>E-mail: operations.acu@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> RIO DE JANEIRO - RJ
                        </h6>
                    </div>
                    <p>Avenida Rio Branco, 25, Sala 16A - Centro
                    </p>
                    <p>CEP: 20090-003 - Rio de Janeiro – RJ – Brazil
                    </p>
                    <p>PHONE: +55(21) 2253-7835
                    </p>
                    <p>E-mail: operations.rio@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> ITAGUAÍ - RJ
                        </h6>
                    </div>
                    <p>Est Prefeito Wilson Pedro Francisco, 53 – Qd 19 Lt 16 Bl 201 a 204
                    </p>
                    <p>Ilha da Madeira - CEP: 23826-640 – Itaguaí – RJ – Brazil
                    </p>
                    <p>PHONE: +55(21) 2688-4845
                    </p>
                    <p>E-mail: operations.itaguai@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> SÃO LUÍS - MA
                        </h6>
                    </div>
                    <p>Rua dos Tucanos, Qd 1, Casa 5 - Renascença II
                    </p>
                    <p>CEP: 65075-430 - São Luís – MA – Brazil
                    </p>
                    <p>PHONE: +55(98) 2109-7600
                    </p>
                    <p>E-mail: operations.slm@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> BELÉM - PA
                        </h6>
                    </div>
                    <p>Av. Governador José Malcer, 815, Salas 309 – Edif. Palladium
                    </p>
                    <p>CEP: 66055-260 - Nazaré – PA – Brazil
                    </p>
                    <p>PHONE: +55(91) 3754-3191
                    </p>
                    <p>E-mail: operations.blm@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> JURITI - PA
                        </h6>
                    </div>
                    <p>Travessa Manuel Marinho da Silva, 550 - Centro
                    </p>
                    <p>CEP: 68170-000 - Juriti - PA - Brazil
                    </p>
                    <p>MOBILE: +55(93) 99156-2241
                    </p>
                    <p>E-mail: operation.jur@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> SANTARÉM - PA
                        </h6>
                    </div>
                    <p>Travessa 15 de Agosto, 20, Sala 309 - Centro
                    </p>
                    <p>Santarém - PA - Brazil
                    </p>
                    <p>MOBILE: +55(91) 99231-9343
                    </p>
                    <p>E-mail: operations.stm@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> MACAPÁ - AP
                        </h6>
                    </div>
                    <p>Avenida Mendonça Furtado, 1007 - Sala C - Bairro Centro
                    </p>
                    <p>CEP: 68900-060 - Macapá - AP - Brazil
                    </p>
                    <p>Phone: +55(91) 98495-3800
                    </p>
                    <p>E-mail: operations.mcp@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> VILA DO CONDE - PA
                        </h6>
                    </div>
                    <p>Travessa Ezequiel José da França, Qd 389, LOTE 07 - Vila dos Cabanos
                    </p>
                    <p>CEP: 68447-000 - Barcarena – PA – Brazil
                    </p>
                    <p>PHONE: +55(91) 3754-3191
                    </p>
                    <p>E-mail: operations.vdc@orionrodos.com</p>
                </li>
                <li class="d-flex flex-column li-border my-2 py-2">
                    <div class="d-flex align-items-center">
                        <div class="square-sm me-1"></div>
                        <h6><span class="fw-bold text-uppercase"> FORTALEZA - CE
                        </h6>
                    </div>
                    <p>Rua Osvaldo Cruz, 01, Suíte 508/509 - Meireles | CEP 60125 150
                    </p>
                    <p>Fortaleza – CE – Brazil
                    </p>
                    <p>PHONE: +55(85) 3045-0041
                    </p>
                    <p>E-mail: operations.for@orionrodos.com
                    </p>
                </li>
            </ul>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
