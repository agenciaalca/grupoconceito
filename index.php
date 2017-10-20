<?php include_once 'header.php'; ?>
<?php include_once 'mail.php'; ?>

<div id="slider" class="slider">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/slider.jpg">
                <div class="carousel-caption titulos-de-contexto">
                    <h1>Titulo</h1>
                    <p>Descrição</p>
                </div>
            </div>
            <div class="item">
                <img src="img/slider.jpg" >
                <div class="carousel-caption titulos-de-contexto">
                    <h1>Titulo</h1>
                    <p>Descrição</p>
                </div>
            </div>
            <div class="item">
                <img src="img/slider.jpg" >
                <div class="carousel-caption titulos-de-contexto">
                    <h1>Titulo</h1>
                    <p>Descrição</p>
                </div>
            </div>
            <div class="item">
                <img src="img/slider.jpg" >
                <div class="carousel-caption titulos-de-contexto">
                    <h1>Titulo</h1>
                    <p>Descrição</p>
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
                            <img class="thumbnail imagem-carousel" src="img/grupo.png">
                        </div>
                        <div class="conteudo-de-texto col-md-8">
                            <h2>MISSÃO:</h2>
                            <p>A nossa missão é resolver problemas e solucionar necessidades de marketing de
                                empresas e profissionais liberais que procuram agregar valor ao seu produto/serviço e
                                alcançar mais competitividade no mercado garantindo uma boa imagem corporativa.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="conteudo-de-texto col-md-4">
                            <img class="thumbnail imagem-carousel" src="img/grupo.png">
                        </div>
                        <div class="conteudo-de-texto col-md-8">
                            <h2>MISSÃO</h2>
                            <p>A nossa missão é resolver problemas e solucionar necessidades de marketing de
                                empresas e profissionais liberais que procuram agregar valor ao seu produto/serviço e
                                alcançar mais competitividade no mercado garantindo uma boa imagem corporativa.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="conteudo-de-texto col-md-4">
                            <img class="thumbnail imagem-carousel" src="img/grupo.png">
                        </div>
                        <div class="conteudo-de-texto col-md-8">
                            <h2>MISSÃO</h2>
                            <p>A nossa missão é resolver problemas e solucionar necessidades de marketing de
                                empresas e profissionais liberais que procuram agregar valor ao seu produto/serviço e
                                alcançar mais competitividade no mercado garantindo uma boa imagem corporativa.</p>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
                </div>
            </div>
        </div>
    </section><!--  o grupo conceito -->

    <section id="servicos" class="servicos content">
        <div class="row">
            <div class="titulos-de-contexto">
                <h1>Serviços</h1>
                <hr id="hr1"><hr id="hr2">
            </div>
        </div>
        <div class="row">
            <div class="bloco-servico ">
                <div class="col-md-3  col-sm-6  ">
                    <div class="item-servico espaco">
                        <span class="icon-Add-Shopping-Cart">
                            <span class="path9"></span>
                        </span>
                        Lorem Ipsum
                        caixa de conteudo
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="item-servico  espaco">
                        <span class="icon-Alarm"> </span>
                        Lorem Ipsum
                        caixa de conteudo
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 ">
                    <div class="item-servico  espaco">
                        <span class="icon-Alarm"> </span>
                        Lorem Ipsum
                        caixa de conteudo
                    </div>
                </div>
                <div class="col-md-3  col-sm-6 ">
                    <div class="item-servico espaco">
                        <span class="icon-Alarm"> </span>
                        Lorem Ipsum
                        caixa de conteudo
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="clientes" class="clientes content">
        <div class="row">
            <div class="titulos-de-contexto">
                <h1>Clientes</h1>
                <hr id="hr1"><hr id="hr2">
            </div>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="conteudo-de-texto  espaco col-md-8 col-sm-6">
                        <p>A nossa missão é resolver problemas e solucionar necessidades de marketing de
                            empresas e profissionais liberais que procuram agregar valor ao seu produto/serviço e
                            alcançar mais competitividade no mercado garantindo uma boa imagem corporativa.</p>
                    </div>
                    <div class="conteudo-de-texto  espaco col-md-4 col-sm-6">
                        <img class="thumbnail imagem-carousel" src="img/grupo.png">
                        <p><b>Nome</b>Empresa.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="conteudo-de-texto col-md-8 col-sm-6">
                        <p>A nossa missão é resolver problemas e solucionar necessidades de marketing de
                            empresas e profissionais liberais que procuram agregar valor ao seu produto/serviço e
                            alcançar mais competitividade no mercado garantindo uma boa imagem corporativa.</p>
                    </div>
                    <div class="conteudo-de-texto col-md-4 col-sm-6">
                        <img class="thumbnail imagem-carousel" src="img/grupo.png">
                        <p><b>Nome</b>Empresa.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="conteudo-de-texto col-md-8 col-sm-6">
                        <p>A nossa missão é resolver problemas e solucionar necessidades de marketing de
                            empresas e profissionais liberais que procuram agregar valor ao seu produto/serviço e
                            alcançar mais competitividade no mercado garantindo uma boa imagem corporativa.</p>
                    </div>
                    <div class="conteudo-de-texto col-md-4 col-sm-6">
                        <img class="thumbnail imagem-carousel" src="img/grupo.png">
                        <p><b>Nome</b>Empresa.</p>
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
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