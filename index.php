<?php
    include("config.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flaamer | Portfólio</title>
    <meta name="keywords" content="flaamer, web, devweb, sites, jogos, fortnite, valorant">
    <meta name="description" content="Portfólio de Guilherme Andrade">
    <meta name="author" content="Flaamer">
        <!--slider-->
        <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH;?>assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/styles.css">
</head>

<body class="back-purple">
    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';    
    ?>
    <header>
        <div class="container">
            <div class="logo left">
                <h1><a href="<?php echo INCLUDE_PATH;?>" title="logo">Flaamer</a></h1>
            </div>
            <nav class="desktop-menu right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>" title="Página Inicial">Home</a><hr></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>#projetos" title="Projetos">Projetos</a><hr></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>#contato" title="Contato">Contato</a><hr></li>
                </ul>
            </nav>
            <nav class="mobile-menu">
                <div class="right">
                    <input type="checkbox" name="menu" id="menu">
                    <label for="menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                </div>
                <ul class="left" id="menu-left">
                    <div class="menu-container-left-mobile">
                        <li><a href="<?php echo INCLUDE_PATH;?>" title="Página Inicial">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH;?>#projetos" title="Projetos">Projetos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH;?>#contato" title="Contato">Contato</a></li>
                    </div>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <?php
        Site::carregarPagina();
    ?>
    <footer>
        <p><span>Foguinho</span> | Meu <a href="https://github.com/TheFlaamer" title="meu github">GITHUB</a>; Meu <a
                href="https://discord.gg/d6vACjFPQu" title="meu ddiscord">DISCORD</a>
        </p>
    </footer>

    <!--<a href='https://br.freepik.com/vetores/tecnologia'>Tecnologia vetor criado por starline - br.freepik.com</a>-->

    <!--slider-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--scroll reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--script meu-->
    <script src="js/scripts.js"></script>

</body>

</html>