<main class="back-purple color-white">
    <section class="banner">
        <div class="container">
            <div class="informacoes-banner">
                <h2 class="titulo-banner-eae">Opa, eae <i class="fas fa-hand-paper"></i></h2>
                <h2>Eu sou:</h2>
                <h1 id="titulo-banner">"Front-End Developer"</h1>
                <button class="btn-more">Saiba Mais</button>
            </div>
        </div>
    </section>
    <section class="habilidades">
        <div class="container">
            <div class="titulo-habilidades">
                <h1>Algumas Habilidades</h1>
                <p>Ou em desenvolvimento</p>
            </div>
            <div class="cards">
                <div class="w33 card-wraper">
                    <div class="card">
                        <div class="back-card">HTML5</div>
                        <div class="face-card"><i class="fab fa-html5"></i></div>
                    </div>
                </div>
                <div class="w33 card-wraper">
                    <div class="card">
                        <div class="back-card">CSS3</div>
                        <div class="face-card"><i class="fab fa-css3-alt"></i></div>
                    </div>
                </div>
                <div class="w33 card-wraper">
                    <div class="card">
                        <div class="back-card">JavaScript</div>
                        <div class="face-card"><i class="fab fa-js"></i></div>
                    </div>
                </div>
                <div class="w33 card-wraper">
                    <div class="card">
                        <div class="back-card">PHP</div>
                        <div class="face-card"><i class="fab fa-php"></i></div>
                    </div>
                </div>
                <div class="w33 card-wraper">
                    <div class="card">
                        <div class="back-card">MySQL</div>
                        <div class="face-card"><i class="fas fa-database"></i></div>
                    </div>
                </div>
                <div class="w33 card-wraper">
                    <div class="card">
                        <div class="back-card">C</div>
                        <div class="face-card"><i class="fab fa-cuttlefish"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sobre">
        <div class="container">
            <div class="titulo-sobre">
                <h1>Sobre Mim</h1>
            </div>
            <div class="conteudo-sobre">
                <div class="foto-sobre"></div>
                <div class="texto-sobre">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit est rem amet
                        molestias tempora non. Sunt quod, earum soluta, sit consequuntur dolor architecto autem
                        culpa, vel error ad. Dolor, architecto.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa voluptas aliquam
                        veritatis eaque odit, ipsam maiores officia nihil. Natus eaque odit repudiandae id quasi ab
                        adipisci quod cupiditate alias!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci culpa voluptas aliquam
                        veritatis eaque odit, ipsam maiores officia nihil. Natus eaque odit repudiandae id quasi ab
                        adipisci quod cupiditate alias!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="projetos" id="projetos">
        <div class="container">
            <div class="titulo-projetos">
                <h1>Alguns de meus projetos</h1>
            </div>
            <div class="projetos-container swiper-container">
                <div class="swiper-wrapper">
                    <div class="projeto-single w33 swiper-slide">
                        <div class="projeto-wraper">
                            <div class="face-projeto">
                                <div class="foto-projeto"
                                    style="background-image: url('./assets/projetos/edicao--videos.png');"></div>
                            </div>
                            <div class="back-projeto">
                                <h2>Edição de Vídeos</h2>
                                <p>Trabalho Escolar</p>
                            </div>
                        </div>
                    </div>
                    <div class="projeto-single w33 swiper-slide">
                        <div class="projeto-wraper">
                            <div class="face-projeto">
                                <div class="foto-projeto"
                                    style="background-image: url('./assets/projetos/loja-pcs.png');"></div>
                            </div>
                            <div class="back-projeto">
                                <h2>Venda de Computadores</h2>
                                <p>Trabalho Escolar</p>
                            </div>
                        </div>
                    </div>
                    <div class="projeto-single w33 swiper-slide">
                        <div class="projeto-wraper">
                            <div class="face-projeto">
                                <div class="foto-projeto"
                                    style="background-image: url('./assets/projetos/manutencao-pcs.png');"></div>
                            </div>
                            <div class="back-projeto">
                                <h2>Manutenção de Computadores</h2>
                                <p>Trabalho Escolar</p>
                            </div>
                        </div>
                    </div>
                    <div class="projeto-single w33 swiper-slide">
                        <div class="projeto-wraper">
                            <div class="face-projeto">
                                <div class="foto-projeto"
                                    style="background-image: url('./assets/projetos/molian.png');"></div>
                            </div>
                            <div class="back-projeto">
                                <h2>Imposto de Renda</h2>
                                <p>Site de imposto de renda</p>
                            </div>
                        </div>
                    </div>
                    <div class="projeto-single w33 swiper-slide">
                        <div class="projeto-wraper">
                            <div class="face-projeto">
                                <div class="foto-projeto" style="background-image: url('./assets/projetos/tcc.png');">
                                </div>
                            </div>
                            <div class="back-projeto">
                                <h2>Venda de TCC</h2>
                                <p>Trabalho Escolar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="contato" id="contato">
        <div class="container">
            <div class="titulo-contato">
                <h1>Contato</h1>
            </div>
        </div>
        <form action="" method="post" id="form-contato">
            <?php 
                    /*if(isset($_POST['acao'])) {
                        $sql = MySql::conectar()->prepare("INSERT INTO `testando_contato` VALUES (null, ?, ?, ?)");
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $msg = $_POST['msg'];
                        if($sql->execute(array($nome, $email,$msg))){
                            Site::alert('permitido', 'Sua mensagem foi enviada!');
                        } else {
                            Site::alert('erro', 'Sua mensagem não foi enviada!');
                        }
                        die();
                    }*/
                    ?>
            <div class="form-wraper">
                <label for="nome" class="left">Nome:</label><span class="contador-letras-contato">0/erro</span>
                <input type="text" name="nome" id="nome-form"  placeholder="Digite seu nome..."
                    class="campo-formulario">
            </div>
            <div class="form-wraper">
                <label for="email" class="left">E-Mail:</label><span class="contador-letras-contato">0/erro</span>
                <input type="email" name="email" id="email-form"  placeholder="Digite seu e-mail..."
                    class="campo-formulario">
            </div>
            <div class="form-wraper">
                <label for="msg" class="left">Mensagem:</label><span class="contador-letras-contato">0/erro</span>
                <textarea name="msg" id="msg-form" rows="5"  placeholder="Digite sua mensagem..."
                    class="campo-formulario"></textarea>
            </div>
            <div class="form-wraper">
                <input type="submit" value="Enviar" name="acao" id="botao-contato" class="btn">
            </div>
        </form>
        </div>
    </section>
</main>