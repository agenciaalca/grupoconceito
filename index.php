<?php include_once 'header.php'; ?>
<?php include_once 'mail.php'; ?>

<div id="slider" class="slider">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/grupo-conceito-1.jpg">
                <div class="carousel-caption titulos-de-contexto">
                    <h1>Cliente satisfeito</h1>
                    <p>Atendimento de alto padrão com resultados reais</p>
                </div>
            </div>
            <div class="item">
                <img src="img/grupo-conceito-2.jpg" >
                <div class="carousel-caption titulos-de-contexto">
                    <h1>Somos especialistas</h1>
                    <p>Em qualquer circunstância, o nosso principal foco são os seus direitos</p>
                </div>
            </div>
            <div class="item">
                <img src="img/grupo-conceito-3.jpg" >
                <div class="carousel-caption titulos-de-contexto">
                    <h1>Construindo confiança</h1>
                    <p>A transparência é a base de nosso trabalho</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
            <div id="myCarouselCliente" class="carousel slide conteudo-grupo" data-ride="carousel">
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
                <div class="servico-item col-md-3">
                    <img class="servicos-img" src="img/direito-trabalhista.png" >
                    <p class="servicos-descricao">Direito Trabalhista</p>
                </div>
                <div class="servico-item col-md-3">
                    <img class="servicos-img" src="img/direito-civil.png" >
                    <p class="servicos-descricao">Direito Civil</p>
                </div>
                <div class="servico-item col-md-3">
                    <img class="servicos-img" src="img/Direito-Tributa.png" >
                    <p class="servicos-descricao">Direito Tributário</p>
                </div>
                <div class="servico-item col-md-3">
                    <img class="servicos-img" src="img/Direito-do-consumidor.png" >
                    <p class="servicos-descricao">Direito do Consumidor</p>
                </div>
                <div class="servico-item col-md-3 col-sm-6 ">
                    <img class="servicos-img" src="img/direito-criminal.png" >
                    <p class="servicos-descricao">Direito Criminal</p>
                </div>
                <div class="servico-item col-md-3  col-sm-6 ">
                    <img class="servicos-img" src="img/Direito-ambiental.png" >
                    <p class="servicos-descricao">Direito Ambiental</p>
                </div>
                <div class="servico-item col-md-3  col-sm-6 ">
                    <img class="servicos-img" src="img/direito-contratual.png" >
                    <p class="servicos-descricao">Direito Contratual</p>
                </div>
                <div class="servico-item col-md-3  col-sm-6 ">
                    <img class="servicos-img" src="img/Direito-de-Familia.png" >
                    <p class="servicos-descricao">Direito de Família e Sucessões</p>
                </div>
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

<section id="contato" class="contato content">

    <div class="container">
        <div class="row">
            <div class="titulos-de-contexto ">
                <h1>Contato</h1>
                <hr id="hr1"><hr id="hr2">
                <h3>Entre em contato conosco e tire suas dúvidas.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ">
                <form method="post" action="index.php#contato" name="formulario-contato" data-toggle="validator" role="form">
                    <div class="col-md-6">
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="nome*" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="email*" required
                                       data-error="Por favor, informe um e-mail válido.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="telefone" id="telefone" value="" placeholder="telefone*" required
                                       data-error="Por favor, somente números.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea" rows="4" 
                                      id="message" name="mensagem" placeholder="mensagem*" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="botao ">
                            <button class="btn btn-primary btn-block" id="submit" name="submit" type="submit" value="ENVIAR">Enviar Mensagem</button>
                        </div> 
                    </div>
                </form>
                <div class="col-md-12">

                    <div class="mensagem-alerta"><?php echo $msg ?></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="informacoes-contato">
                    <div class="informacoes-contato  espaco text-left">
                        <p>Fone: (062) 3636-0111</p>

                        <p>Endereço: Rua 88-B, nº 73, Setor Sul, Goiânia - GO, 74085-030</p>

                        <p>grupoconceito@grupoconceito.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include_once 'footer.php'; ?>