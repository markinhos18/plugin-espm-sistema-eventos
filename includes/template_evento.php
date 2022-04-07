<?php

/** Template Eventos **/


if( isset($_POST["checkeboxes"]) ){
  echo "============[";
  var_dump($_POST["checkeboxes"]);
  echo "]============";


  $checkeboxes = $_POST["checkeboxes"];

  // $eventoCampus = EventosCampus_API::Evento_Campus($checkeboxes);

  $evento = Eventos_API::Evento($checkeboxes);


}


?>


<form action="" method="post" id="form" >
  <div class="row ">

    <div class="col-xxl-3 col-lg-3 col-md-6 p-0 gap-3 mb-3">
      <div class="row bg-sidebar py-4 mx-2">
        <h3 class="title-white">Encontre o evento ideal para você</h3>
      
        <div class="col-12  mb-2">
          <div class="checkbox-widgets">

            <?php  for ($i=0; $i < count($eventoCampus) ; $i++) {  ?>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?php  echo $eventoCampus[$i]["descr"]; ?>"  id="inputCampus" >
                <label class="form-check-label" type="checkbox" for="inputCampus">
                  <?php echo $eventoCampus[$i]["descr"]; ?>
                </label>
              </div>
            
            <?php }?>

          </div>
        </div>

        
        

        <div class="col-12 my-3">
          <div class="title-white">
            <span>Publico</span>
            <select class="form-select" aria-label="Default select example">
              <option selected>...</option>

                <?php  for ($i=0; $i < count($eventoPublicos["data"]) ; $i++) {  ?>

                  <option value="<?php echo $eventoPublicos["data"][$i]["id"] ?>"><?php echo $eventoPublicos["data"][$i]["descricao"] ?></option>
                  
                <?php }?>

            </select>
          </div>
        </div>

        
       

        <div class="col-12 my-3">
          <div class="title-white">
            <span>Modelo</span>
              <select class="form-select" aria-label="Default select example">

                <option selected>...</option>
                <option value="On-line">Online</option>
                <option value="Presencial">Presencial</option>
                <option value="Hibrido">Hibrido</option>

               

              </select>
            
          </div>
        </div>
        
        <div class="col-12 my-3">
          <div class="title-white">
            <span>Investimento</span>
            <select class="form-select" aria-label="Default select example">

              <option selected>...</option>
              <option value="Gratuito">Gratuito</option>
              <option value="Pago">Pago</option>
              
              

            </select>
          </div>
        </div>
       
      
        <div class="col-12 my-3">
          <div class="title-white mb-2">
            <i aria-hidden="true" class="far fa-calendar-alt me-2"></i>
            <span>Data do evento</span>
          </div>
          <div class="row">
            
            <div class="col-6">
              <label class="title-white">De:</label>
              <input type="date" >
            </div>
            
            <div class="col-6">
              <label class="title-white">Até:</label>
              <input type="date" >
            </div>
          </div>
          <div class="row d-flex justify-content-center mt-3">
            <button type="button" class="jet-date-range__submit apply-filters__button btn-green">
              <i class="fa fa-calendar-o"></i>    
              <span class="jet-date-range__submit-text">Encontrar</span>
            </button>
          </div>
        </div>


      

      </div>
    </div>


    <div class=" col-xxl-9 col-lg-9 col-md-6">

      <?php if($eventoBannerTopo["data"][$i]["bannerDestaqueArquivo"]){ ?>
        <div class="col-12 mb-3">


          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">


            <div class="carousel-inner">

              

                <?php for ($i=0; $i < count($eventoBannerTopo["data"]) ; $i++) { 

                  $img = $eventoBannerTopo["data"][$i]["bannerDestaqueArquivo"];
                  $title = $eventoBannerTopo["data"][$i]["paginaEventoTitulo"];
                  $subtitle = $eventoBannerTopo["data"][$i]["paginaEventoSubTitulo"];
                  $item_class = ($i) ? 'carousel-item ' : 'carousel-item active';

                  echo '<div class="' . $item_class. '">';
                                    
                      echo  '<img style="height: 300px" class="card-img-top img-fluid" src="' . $img . '"' . 'alt="Card image cap">';
                        
                      echo  '<div class="carousel-caption d-none d-md-block">';
                      echo    '<h5 style="color:white;">' . $title. '</h5>';
                      echo    '<p>' . $subtitle. '</p>';
                      echo  '</div>';


                  echo '</div>'; } 
                
                ?>

            

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div>

          
        </div>
      <?php } ?>


      <div class="col-12 mb-4">
        <select class="form-select" aria-label="Default select example">

          <option selected>Ordenar por ...</option>
      
          <?php  for ($i=0; $i < count($evento["data"]) ; $i++) {  ?>

            <option value="<?php echo $eventoPublicos["data"][$i]["descricao"] ?>"><?php echo $eventoPublicos["data"][$i]["descricao"] ?></option>
            
          <?php }?>

        </select>
      </div>

            
      <div class="col-12">

        <div class="row">
          
        

          <?php  for ($i=0; $i < count($evento["data"], $eventoAtividades["eventosId"]) ; $i++) {  ?>
            

            <div class="card-eventos col-xxl-4 col-lg-4 mb-3">

              <img style="height: 150px"  class="card-img-top img-fluid" src="<?php echo $evento["data"][$i]["eventosIdiomas"][0]["bannerTopoArquivo"] ?>" alt="Card image cap">      
              

              <div class="card-body">

                <div class="mb-3">

                  <?php if($eventoAtividades["data"][$i]["eventosAtividadesEncontros"][$i]["modelo"]) { ?>

                    <span class="btn-red me-3">

                      <?php echo $eventoAtividades["data"][$i]["eventosAtividadesEncontros"][$i]["modelo"] ?>
                      
                    </span>
                
                  <?php } ?>

            

                  <?php if($eventoAtividades["data"][$i]["investimento"] === null) { ?>

                    <span class="btn-grey">

                      <?php echo "Gratuito"  ?>
                      

                  <?php } else { ?>

                      <?php echo $eventoAtividades["data"][$i]["investimento"] ?>

                    </span>

                  <?php } ?>
                
          

                  <a href="#" class="float-right">
                    <i aria-hidden="true" class="fas fa-share-alt"></i>
                  </a>
                </div>

                
                <div class="mb-3">

                
                  
                
          
                </div>
                
                
                  
              <h2><?php echo $evento["data"][$i]["titulo"]  ?></h2>


              
                
                
                <div class="my-2">
  
                    <span class="text-publico"><strong>Público:</strong> <?php echo $eventoPublicos["data"][$i]["descricao"] ?></span>
                  
                </div>
                
               
                  
                <!-- <p class="text-p mb-3"><?php echo $evento["data"][$i]["eventosIdiomas"][0]["paginaEventoDescricao"] ?></p> -->
                  
                
                <div class="mb-3">
                  
                  <i aria-hidden="true" class="far fa-calendar-alt"></i> <?php echo $evento["data"][$i]["eventosIdiomas"][$i]["paginaEventoData"] ?>  <?php echo $evento["data"][$i]["inscricaoHoraInicial"] ?> até <?php echo $evento["data"][$i]["inscricaoHoraFinal"] ?><br>
                  
                </div>


                                            
                <button class="btn-eventos me-3" href='<?php echo $evento["data"][$i]["url"] ?>'> Inscrições </button>
                <button class="btn-eventos" href='<?php echo $evento["data"][$i]["url"] ?>'> Saiba mais</button>
                
              </div>
            </div>

          <?php  } ?>

        </div>

      </div>

            
    </div> 

  </div>
</form>
