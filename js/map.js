let str = {
    belem: {
        title: 'BELÉM - PA',
        text: `Av. Governador José Malcer, 815, Salas 309 – Edif. Palladium
        CEP: 66055-260 - Nazaré – PA – Brazil
        PHONE: +55(91) 3754-3191
        E-mail: operations.blm@orionrodos.com`
    },
    grande: {
        title: 'RIO GRANDE - RS (Head Office)',
        text: `Rua Aquidaban, 623 - Centro
        CEP: 96200-480 - Rio Grande – RS – Brazil
        PHONE: +55(53) 2125-4400
        E-mail: orion@rgd.amorion.com.br`,
    },
    alegre: {
        title: 'PORTO ALEGRE - RS',
        text: `Av. Diário de Notícias, 400, Sl. 2009/2010 - Cristal
        CEP: 90810-080 - Porto Alegre – RS – Brazil
        PHONE: +55(51) 3511 5100
        E-mail: orion@poa.amorion.com.br`,
    },
    imbituba: {
        title: 'IMBITUBA - SC',
        text: `Rua Nereu Ramos, 404, Sala 302 - Centro
        CEP: 88780-000 - Imbituba – SC – Brazil
        PHONE: +55(48) 3255-3853
        E-mail: orion@imb.amorion.com.br`,
    },
    itajai: {
        title: 'ITAJAÍ - SC',
        text: `Rua Gil Stein Ferreira, 357, Salas 401/402 – Centro
        CEP: 88301-210 - Itajaí – SC – Brazil
        PHONE: +55(47) 2104-6400
        E-mail: orion@itj.amorion.com.br`,
    },
    francisco: {
        title: 'SÃO FRANCISCO DO SUL - SC',
        text: `Rua Alameda Ipiranga, 290 - Centro| CEP: 89240-000
        São Francisco do Sul - SC - Brazil      
        PHONE: +55(47) 3444-2156       
        E-mail: orion@sfs.amorion.com.br`,
    },
    paranagua: {
        title: 'PARANAGUÁ - PR',
        text: `Rua Manoel Corrêa, 1345 - Alto São Sebastião
        CEP: 83206-030 - Paranaguá – PR – Brazil
        PHONE: +55(41) 2152-3700
        E-mail: orion@png.amorion.com.br`,
    },
    santos: {
        title: 'SANTOS - SP',
        text: `Praça Barão do Rio Branco, 14, Salas 91/92 - Centro
        CEP: 11010-921 - Santos – SP – Brazil
        PHONE: +55(13) 3213-3100
        E-mail: orion@sts.amorion.com.br`,
    },
    salvador: {
        title: 'SALVADOR - BA',
        text: `Avenida da França, 164, Salas 910/911 - Comércio
        CEP: 40010-000 - Salvador - BA – Brazil
        PHONE: +55(71) 3037-4020
        E-mail: orion@ssa.amorion.com.br`,
    },
    vitoria: {
        title: 'VITÓRIA – ES (Head Office)',
        text: `Avenida Jerônimo Monteiro, 1000, Salas 1013 a 1024
        Centro | CEP: 29010-935 - Vitória – ES – Brazil
        PHONE: +55(27) 3029-8484
        E-mail: operations.vix@orionrodos.com`,
    },
    acu: {
        title: 'PORTO DE AÇU – RJ',
        text: `Rua do Sacramento, 104, Sala 02 - Centro
        CEP: 28200-970 - São João da Barra - RJ - Brazil
        PHONE: +55(21) 2253-7853
        E-mail: operations.acu@orionrodos.com`,
    },
    janeiro: {
        title: 'RIO DE JANEIRO - RJ',
        text: `Avenida Rio Branco, 25, Sala 16A - Centro
        CEP: 20090-003 - Rio de Janeiro – RJ – Brazil
        PHONE: +55(21) 2253-7835
        E-mail: operations.rio@orionrodos.com`,
    },
    itaguai: {
        title: 'ITAGUAÍ - RJ',
        text: `Est Prefeito Wilson Pedro Francisco, 53 – Qd 19 Lt 16 Bl 201 a 204
        Ilha da Madeira - CEP: 23826-640 – Itaguaí – RJ – Brazil
        PHONE: +55(21) 2688-4845
        E-mail: operations.itaguai@orionrodos.com`,
    },
    luiz: {
        title: 'SÃO LUÍS - MA',
        text: `Rua dos Tucanos, Qd 1, Casa 5 - Renascença II
        CEP: 65075-430 - São Luís – MA – Brazil
        PHONE: +55(98) 2109-7600
        E-mail: operations.slm@orionrodos.com`,
    },
    juriti: {
        title: 'JURITI - PA',
        text: `Travessa Manuel Marinho da Silva, 550 - Centro
        CEP: 68170-000 - Juriti - PA - Brazil
        MOBILE: +55(93) 99156-2241
        E-mail: operation.jur@orionrodos.com`,
    },
    santarem: {
        title: 'SANTARÉM - PA',
        text: `Travessa 15 de Agosto, 20, Sala 309 - Centro
        Santarém - PA - Brazil
        MOBILE: +55(91) 99231-9343
        E-mail: operations.stm@orionrodos.com`,
    },
    macapa: {
        title: 'MACAPÁ - AP',
        text: `Avenida Mendonça Furtado, 1007 - Sala C - Bairro Centro
        CEP: 68900-060 - Macapá - AP - Brazil
        Phone: +55(91) 98495-3800
        E-mail: operations.mcp@orionrodos.com`,
    },
    conde: {
        title: 'VILA DO CONDE - PA',
        text: `Travessa Ezequiel José da França, Qd 389, LOTE 07 - Vila dos Cabanos
        CEP: 68447-000 - Barcarena – PA – Brazil
        PHONE: +55(91) 3754-3191
        E-mail: operations.vdc@orionrodos.com`,
    },
    fortaleza: {
        title: 'FORTALEZA - CE',
        text: `Rua Osvaldo Cruz, 01, Suíte 508/509 - Meireles | CEP 60125 150
        Fortaleza – CE – Brazil
        PHONE: +55(85) 3045-0041
        E-mail: operations.for@orionrodos.com`,
    },
}

jQuery(document).ready(function () {
    jQuery('#belem').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.belem.title)
        jQuery('#box-text').text(str.belem.text)
    })
    jQuery('#fortaleza').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.fortaleza.title)
        jQuery('#box-text').text(str.fortaleza.text)
    })
    jQuery('#imbituba').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.imbituba.title)
        jQuery('#box-text').text(str.imbituba.text)
    })
    jQuery('#itaguaí').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.itaguai.title)
        jQuery('#box-text').text(str.itaguai.text)
    })
    jQuery('#itajaí').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.itajai.title)
        jQuery('#box-text').text(str.itajai.text)
    })
    jQuery('#juriti').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.juriti.title)
        jQuery('#box-text').text(str.juriti.text)
    })
    jQuery('#macapá').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.macapa.title)
        jQuery('#box-text').text(str.macapa.text)
    })
    jQuery('#paranaguá').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.paranagua.title)
        jQuery('#box-text').text(str.paranagua.text)
    })
    jQuery('#alegre').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.alegre.title)
        jQuery('#box-text').text(str.alegre.text)
    })
    jQuery('#açu').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.acu.title)
        jQuery('#box-text').text(str.acu.text)
    })
    jQuery('#janeiro').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.janeiro.title)
        jQuery('#box-text').text(str.janeiro.text)
    })
    jQuery('#grande').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.grande.title)
        jQuery('#box-text').text(str.grande.text)
    })
    jQuery('#salvador').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.salvador.title)
        jQuery('#box-text').text(str.salvador.text)
    })
    jQuery('#santarém').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.santarem.title)
        jQuery('#box-text').text(str.santarem.text)
    })
    jQuery('#luiz').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.luiz.title)
        jQuery('#box-text').text(str.luiz.text)
    })
    jQuery('#francisco').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.francisco.title)
        jQuery('#box-text').text(str.francisco.text)
    })
    jQuery('#santos').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.santos.title)
        jQuery('#box-text').text(str.santos.text)
    })
    jQuery('#vitória').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.vitoria.title)
        jQuery('#box-text').text(str.vitoria.text)
    })
    jQuery('#conde').click(function (e) {
        e.preventDefault();
        jQuery('.pointer').removeClass('bg-blue');
        jQuery(this).addClass('bg-blue');
        jQuery('#box-title').text(str.conde.title)
        jQuery('#box-text').text(str.conde.text)
    })
});