<?php include_once 'header.php'; ?>
<?php include_once 'mail.php'; ?>

<div id="slider" class="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">

                <img class="hidden-xs" src="img/slider/grupo-conceito-1.jpg">
                <img class="hidden-sm hidden-md hidden-lg" src="img/slider/grupo-conceito-1-mobile.jpg" >

                <div class="carousel-caption titulos-de-contexto">
                    <h1>Cliente satisfeito</h1>
                    <p>Atendimento de alto padrão com resultados reais</p>
                </div>
            </div>

            <div class="item">
                <img class="hidden-xs" src="img/slider/grupo-conceito-2.jpg" >
                <img class="hidden-sm hidden-md hidden-lg" src="img/slider/grupo-conceito-2-mobile.jpg" >

                <div class="carousel-caption titulos-de-contexto">
                    <h1>Somos especialistas</h1>
                    <p>Em qualquer circunstância, o nosso principal foco são os seus direitos</p>
                </div>
            </div>
            <div class="item">
                <img class="hidden-xs" src="img/slider/grupo-conceito-3.png" >
                <img class="hidden-sm hidden-md hidden-lg" src="img/slider/grupo-conceito-3-mobile.png" >

                <div class="carousel-caption titulos-de-contexto">
                    <h1>Construindo confiança</h1>
                    <p>A transparência é a base de nosso trabalho</p>
                </div>
            </div>

             <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

        <!-- Controls -->

    </div>
</div>

<div class="container">

    <!-- O grupo -->
    <section id="grupo" class="grupo content">

        <div class="row">
            <div class="titulos-de-contexto">
                <h1>O Grupo</h1>
                <hr id="hr1"><hr id="hr2">
            </div>
            <div id="myCarousel" class="carousel slide conteudo-grupo" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner ">
                    <div class="item active">
                        <div class="conteudo-de-texto col-md-4">
                            <img class="thumbnail imagem-carousel" src="img/icone__missão.png">
                        </div>
                        <div class="conteudo-de-texto col-md-8">
                            <h2>MISSÃO:</h2>
                            <p>Dispomos colocar a nossa energia e tempo a favor de suas necessidades.
                                O nosso objetivo central é fazer de tudo para solucionar seus problemas d
                                e forma eficaz e justa.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="conteudo-de-texto col-md-4">
                            <img class="thumbnail imagem-carousel" src="img/icone__Visão.png">
                        </div>
                        <div class="conteudo-de-texto col-md-8">
                            <h2>VISÃO:</h2>
                            <p>Somos especialistas organizados, flexíveis e dedicados.
                                Responsabilidade e êxito completam o nosso perfil. </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="conteudo-de-texto col-md-4">
                            <img class="thumbnail imagem-carousel" src="img/icone__valores.png">
                        </div>
                        <div class="conteudo-de-texto col-md-8">
                            <h2>VALORES:</h2>
                            <ol>
                                <li>Ética e integridade na condução de nossos serviços. </li>
                                <li>Respeito nas nossas relações pessoais e profissionais. </li>
                                <li>Compromisso com nossos clientes. </li>
                                <li>Organização e efetividade nos serviços a nós confiados.</li>
                            </ol>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
                </div>
            </div>
        </div>
    </section><!--  o grupo conceito -->


    <section id="servicos" class="servicos">
        <div class="row">
            <div class="titulos-de-contexto">
                <h1>Serviços</h1>
                <hr id="hr1"><hr id="hr2">
            </div>
        </div>

        <div class="bloco-servico ">
            <div class="row">
                <a href="direitotrabalhista.php">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="servico-item">
                            <img class="servicos-img" src="img/serviços/direito-trabalhista.png" >
                            <p class="servicos-descricao">Direito Trabalhista</p>
                        </div>
                    </div>
                </a>
                <a href="direitocivil.php">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="servico-item">
                            <img class="servicos-img" src="img/serviços/direito-civil.png" >
                            <p class="servicos-descricao">Direito Civil</p>
                        </div>
                    </div>
                </a>
                <a href="direitoimobiliario.php">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="servico-item">
                            <img class="servicos-img" src="img/serviços/Direito-Tributa.png" >
                            <p class="servicos-descricao">Direito Imobiliario</p>
                        </div>
                    </div>
                </a>
                <a href="direitocriminal.php">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="servico-item">
                            <img class="servicos-img" src="img/serviços/direito-criminal.png" >
                            <p class="servicos-descricao">Direito Criminal</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="row">
                <a href="direitoambiental.php">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="servico-item">
                            <img class="servicos-img" src="img/serviços/Direito-ambiental.png" >
                            <p class="servicos-descricao">Direito Ambiental</p>
                        </div>
                    </div>
                </a>
                <a href="direitocontratual.php">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="servico-item">
                            <img class="servicos-img" src="img/serviços/direito-contratual.png" >
                            <p class="servicos-descricao">Direito Contratual</p>
                        </div>
                    </div>
                </a>
                <a href="direitofamiliar.php">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="servico-item">
                            <img class="servicos-img" src="img/serviços/Direito-de-Familia.png" >
                            <p class="servicos-descricao">Direito de Família e Sucessões</p>
                        </div>
                    </div>
                </a>
                <a href="direitoconsumidor.php">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="servico-item">
                            <img class="servicos-img" src="img/serviços/Direito-do-consumidor.png" >
                            <p class="servicos-descricao">Direito do Consumidor</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="clientes" class="clientes">
        <div class="row">
            <div class="titulos-de-contexto">
                <h1>Clientes</h1>
                <hr id="hr1"><hr id="hr2">
            </div>
        </div>

        <div id="second-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#second-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#second-carousel" data-slide-to="1"></li>
                <li data-target="#second-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner ">
                <div class="item active">
                    <div class="conteudo-de-texto">
                        <blockquote>"Muito bom saber que existem empresas de bem para ajudar
                            as pessoas menos instruídas sobre as leis e direitos humanos. 
                            O Grupo Conceito é uma delas, obrigado!" - <p>Luiz Ângelo </p></blockquote> 
                        <img class="img-rounded" src="img/clientes/credmig.png">
                    </div>
                </div>
                <div class="item">
                    <div class="conteudo-de-texto">
                        <blockquote>"Entre todas as qualidades do Grupo Conceito, 
                            as que mais me surpreendeu foram à dedicação e confiança em que nos passaram.
                            Estão de parabéns!" - <p>Edilson Pereira</p></blockquote> 
                        <img class="img-rounded" src="img/clientes/estamparia.png" >
                    </div>
                </div>
                <div class="item">
                    <div class="conteudo-de-texto">
                        <blockquote>"O Grupo Conceito atendeu com excelência às minhas necessidade em um 
                            momento que eu precisava de advogados de confiança. Recomendo o trabalho deles." - <p>Weliton Leão </p></blockquote> 
                        <img class="img-rounded" src="img/clientes/esquina-88.png" >
                    </div>
                </div>

                <a class="left carousel-control" href="#second-carousel" data-slide="prev"></a>
                <a class="right carousel-control" href="#second-carousel" data-slide="next"></a>

            </div>
        </div>
    </section>

</div>




<?php include_once 'footer.php'; ?>