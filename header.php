<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/haverimFavicon.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js" defer></script>

    <?php wp_head(); ?>
</head>
<style>
    #botaoMenu span {
        display: block;
        height: 45px;
        width: 45px;
        margin-left: auto;
        margin-right: 20px;
        cursor: pointer;
        background-color: #ff881c;
        background: url('<?php echo get_template_directory_uri(); ?>/assets/img/icons/navIcon.svg') center center no-repeat;
    }

    #botaoMenu.aberto span {
        background: url('<?php echo get_template_directory_uri(); ?>/assets/img/icons/closeIcon.svg') center center no-repeat;
        background-color: #ff881c;
    }
</style>

<body>
    <div id="botaoMenu" class="fechado menuMobile">
        <span></span>
    </div>

    <nav id="menuMobile" class="menuMobile roboto">
        <ul id="menuPrincipal" class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">O Grupo</a></li>
            <li><a href="#">Atuação</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
    <header>
        <div class="container">
            <div class="row header-lg roboto align-items-center">
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-9 col-9">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                </div>
                <nav class="col-lg-8 col-md-12 col-sm-12 col-xs-9 col-9 d-flex">
                    <div>
                        <ul class="d-flex justify-content-center">
                            <li><a href="">Home</a>
                            </li>
                            <li><a href="">A
                                    Haverim</a></li>
                            <li><a href="" class="">Blog</a></li>
                            <li><a href="" class="">Produtos</a></li>
                            <li><a href="">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-9 col-9">
                    <button class="phone d-flex gap-2 px-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/WhatsApp-icone.png" width="22px" height="22px" alt="">
                        <p class="text-white">| 13 97421-3810</p>
                    </button>
                </div>
            </div>
        </div>
    </header>