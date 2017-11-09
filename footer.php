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

                        <p>contato@grupoconceito.com.br</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<footer>
  <!-- <div class="logo"><img src="img/logo-footer.png"></div> -->
    <div class="container-fluid redes-sociais">
        <a href="#" target="_blank"><img src="img/icone-facebook.png"></a>
        <a href="#" target="_blank"><img src="img/icone-instagram.png"></a>
        <a href="#" target="_blank"><img src="img/icone-linkedin.png"></a>
    </div>

    <div class="copyright">© GRUPO CONCEITO. ALL RIGHTS RESERVED. DESENVOLVIDO POR <a href="http://agenciaalca.com" target="_blank"> AGÊNCIA ALCA</a></div>        
</footer>  



<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/scroll.js"></script>


</body>

</html>