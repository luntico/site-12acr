<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ligamos para você</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Deixe seus dados e retornaremos o mais breve possível.</p>
        <?php dynamic_sidebar('formligamos'); ?>
      </div>
    </div>
  </div>
</div>
<footer id="footer">
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a href="<?php site_url();?>">
            <img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo-a.png" alt="" width="100px">
          </a>
        </div>
        <div class="col-md-8" align="center">
          <ul class="menu-footer">         
            <li>
              <a class="movediv" href="http://alternativatelecom.net.br/#box-sobre">Sobre</a>
            </li>
            <li>
              <a class="movediv" href="http://alternativaprovedor.com.br/#box-planos">planos</a>
            </li>
            <li>
              <a class="movediv" href="http://alternativaprovedor.com.br/#box-ajuda">ajuda</a>
            </li>
            <li>
              <a class="movediv" href="http://alternativaprovedor.com.br/#box-app" href="">app</a>
            </li>
            <li>
              <a class="movediv" href="http://alternativaprovedor.com.br/#box-contato" href="">fale conosco</a>
            </li>
            <li>
              <a href="http://alternativaprovedor.com.br/" target="_blank" title="Central do Assinante">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                Central do Assinante
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-2" align="center">
          <p style="font-size: 10px;">ACOMPANHE NAS REDES SOCIAIS</p>
          <ul class="icones-sociais-footer">
            <li>
              <a href="https://www.facebook.com/alternativatelecomevc/" target="_blank">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/alternativatelecom.vc/?hl=pt-br" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <!-- <li>
              <a href="#">
                <i class="fa fa-youtube-square" aria-hidden="true"></i>
              </a>
            </li> -->
          </ul>
          <p>
            <img src="<?php echo get_template_directory_uri(); ?>/theme/img/logo-abint.png" width="100px">
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
</div>
<!-- Container ID -->
<div class="clearfix"></div>
<div class="footer-rodape">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <span class="footer-texto">
          &COPY; 2012/2018 - Alternativa Telecom - Todos os Direitos Reservados.
          <br> Ato de Autorização - ANATEL -
          <strong>Nº 5.390 DE 17/09/2012</strong>
        </span>
      </div>
      <div class="col-sm-2">
        <?php echo ENIUM_DESIGN_BY; ?>
      </div>
    </div>
  </div>
</div>
<!-- footer-rodape -->
</footer>
<?php wp_footer();?>
</body>

</html>