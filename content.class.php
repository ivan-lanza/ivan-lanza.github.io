<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
      <div class="profile-img text-center">
        <img src="imgs/perfil.jpg" class="rounded-circle">
      </div>
      <div class="container">
          <div class="content">
             <!-- ABOUT -->
              <p class="text-justify mt-3">
                  <span class="text-primary">Ivan Lanza</span> 24 anos, desenvolvedor <strong>front-end</strong> formado pelo Senac SP. Professor <span class="text-danger"><strong>apaixonado</strong></span> pela profissão, trabalho como freelancer nas horas vagas, desenvolvendo sites e sistemas web. 
              </p>
            
              <!-- PORTIFOLIO -->
              <div class="content-portifolio col-lg-12 col-xl-12 text-center">
                <div class="jumbotron jumbotron-fluid custom-jumbotrom text-center mt-5 mb-0">
                    <div class="container">
                        <h1 class="display-4">Portifolio</h1>
                        <hr class="my-4">
                    </div>
                </div>
                  <a href="#" data-toggle="modal" data-target="#modalSpaJardim">
                      <img src="imgs/spajardim-portifolio-logo.jpg" class="img-fluid mt-3 col-lg-3">
                  </a>
                  <a href="#" data-toggle="modal" data-target="#modalCaligula">
                      <img src="imgs/caligula-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">
                  </a>
                  <a href="#" data-toggle="modal" data-target="#modalLuigi">
                      <img src="imgs/luigi-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">
                  </a>
                  <a href="#" data-toggle="modal" data-target="#modalMelhor">
                      <img src="imgs/melhordavez-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">
                  </a>
                      <img src="imgs/primolar-portifolio-logo.jpg" class="img-fluid mt-3 col-lg-3">
                      <img src="imgs/omqf-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">
                      
                  <a href="#" data-toggle="modal" data-target="#modalHotel">
                      <img src="imgs/hotel-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">
                  </a>
                  <a href="#" data-toggle="modal" data-target="#modalAgprofile">
                      <img src="imgs/agprofile-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">
                  </a>
                  <a href="#" data-toggle="modal" data-target="#modalBradesco">
                      <img src="imgs/bradesco-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">
                  </a> 
                  <img src="imgs/larjac-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">   
                  
                  <a href="#" data-toggle="modal" data-target="#modalEvolutime">
                      <img src="imgs/evolutime-portifolio-logo.png" class="img-fluid mt-3 col-lg-3">
                  </a>      
              </div>
              
               <!-- CONTACT -->
                <div class="jumbotron jumbotron-fluid custom-jumbotrom text-center mt-5 mb-0">
                    <div class="container">
                        <h1 class="display-4">Contato</h1>
                        <hr class="my-4">
                    </div>
                </div>
                
                <div class="col-12 col-lg-8 mx-auto mb-5">
                    <small></small>
                    <form method="post" action="" class="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Digite seu nome">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="Digite seu email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="msgcontact">Deixe sua mensagem</label>
                            <textarea class="form-control" name="msgcontact" rows="5"></textarea>
                        </div>
                        <button type="submit" name="btn-send" class="btn btn-outline-success btn-block btn-send">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
                        </button>
                    </form>
                </div>
              
          </div>
      </div>
      
     
      
    <!-- Modals -->  
 <div class="modal fade bd-example-modal-lg" id="modalSpaJardim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente: <em>Spa Jardim</em></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="lead text-center"><strong>Criação de site responsivo, loja virtual e sistema administrativo.</strong></p>
          <img src="imgs/spajardim-portifolio.png" class="img-fluid">
      </div>
      <div class="modal-footer">
        <a href="http://spajardim.com.br" target="_blank" class="btn btn-outline-primary btn-block hidden-md-up">Visualizar Site</a>
        <a href="http://spajardim.com.br" target="_blank" class="btn btn-outline-primary hidden-md-down">Visualizar Site</a>
      </div>
    </div>
  </div>
</div>
 
 <div class="modal fade bd-example-modal-lg" id="modalCaligula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente: <em>Caligula</em></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="lead text-center"><strong>Criação de site responsivo e sistema administrativo.</strong></p>
          <img src="imgs/caligula-portifolio.png" class="img-fluid">
      </div>
      <div class="modal-footer">
        <a href="http://caligula.com.br" target="_blank" class="btn btn-outline-primary btn-block hidden-md-up">Visualizar Site</a>
        <a href="http://caligula.com.br" target="_blank" class="btn btn-outline-primary hidden-md-down">Visualizar Site</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalLuigi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente: <em>Luigi Restaurante</em></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="lead text-center"><strong>Integração ao PapDelivery</strong></p>
          <img src="imgs/luigi-portifolio.png" class="img-fluid">
      </div>
      <div class="modal-footer">
        <a href="http://luigidelivery.com.br/" target="_blank" class="btn btn-outline-primary btn-block hidden-md-up">Visualizar Site</a>
        <a href="http://luigidelivery.com.br/" target="_blank" class="btn btn-outline-primary hidden-md-down">Visualizar Site</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalMelhor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente: <em>Melhor da Vez</em></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="lead text-center"><strong>Criação de Rede social, site responsivo e sistema administrativo.</strong></p>
          <img src="imgs/melhordavez-portifolio.png" class="img-fluid">
      </div>
      <div class="modal-footer">
        <a href="http://melhordavez.com" target="_blank" class="btn btn-outline-primary btn-block hidden-md-up">Visualizar Site</a>
        <a href="http://melhordavez.com" target="_blank" class="btn btn-outline-primary hidden-md-down">Visualizar Site</a>
      </div>
    </div>
  </div>
</div>
 
<div class="modal fade bd-example-modal-lg" id="modalHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente: <em>Hotel Village Montana</em></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="lead text-center"><strong>Criação de layout</strong></p>
          <img src="imgs/hotel-portifolio.png" class="img-fluid">
      </div>
      <div class="modal-footer">
        <a href="http://villagemontana.com.br" target="_blank" class="btn btn-outline-primary btn-block hidden-md-up">Visualizar Site</a>
        <a href="http://villagemontana.com.br" target="_blank" class="btn btn-outline-primary hidden-md-down">Visualizar Site</a>
      </div>
    </div>
  </div>
</div> 

<div class="modal fade bd-example-modal-lg" id="modalAgprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente: <em>Agência Profile</em></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="lead text-center"><strong>Criação de site responsivo e sistema administrativo.</strong></p>
          <img src="imgs/agprofile-portifolio.png" class="img-fluid">
      </div>
      <div class="modal-footer">
        <a href="http://www.agenciaprofile.com.br" target="_blank" class="btn btn-outline-primary btn-block hidden-md-up">Visualizar Site</a>
        <a href="http://www.agenciaprofile.com.br" target="_blank" class="btn btn-outline-primary hidden-md-down">Visualizar Site</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalBradesco" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente: <em>Bradesco</em></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="lead text-center"><strong>Reestruturação de layout do internet banking.</strong></p>
          <img src="imgs/bradesco-portifolio.png" class="img-fluid">
      </div>
      <div class="modal-footer">
        <a href="http://banco.bradesco" target="_blank" class="btn btn-outline-primary btn-block hidden-md-up">Visualizar Site</a>
        <a href="http://banco.bradesco" target="_blank" class="btn btn-outline-primary hidden-md-down">Visualizar Site</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="modalEvolutime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente: <em>Evolutime</em></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p class="lead text-center"><strong>Criação de sistema interno responsivo.</strong></p>
          <img src="imgs/evolutime-portifolio.png" class="img-fluid">
      </div>
    </div>
  </div>
</div>
 
  </body>
</html>