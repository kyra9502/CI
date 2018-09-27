        <div class="d-flex align-items-center py-5 cover " style="background-image: url(&quot;assets/img/new.jpg&quot;);">
          <div class="container">
            <div class="row">
              <div class="col-12 mt-5">
                <h1 class="display-4 text-warning text-uppercase"><b>Créer une nouelle figure</b></h1>
                
                <a class="d-block fa fa-angle-down pt-5 fa-3x pull-center" href="#form"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12" ></br>
          <h1 class="mb-4" id="form"><u>Formulaire d'ajout :</u></h1>
        </div>
        
          <form method="post" action="<?php echo base_url()?>new_trick/form_validation">
                  <?php
                      if($this->uri->segment(2) == "inserted"){
                          echo '<p class="text-sucess">Félicitation vous venez de créer une nouvelle figure :) </p>';
                      }else {
                        echo "Une erreur est survenue...";
                      }
                  ?>
        <!--formulaire-->
             <div class="py-5 bg-info" >
              <div class="container">
                <div class="row text-left">
                  <div class="p-4 col-lg-4 col-md-6" >
                    <div class="card shadowed">
                      <div class="card-block text-center card-primary p-2">
                        <h2>Nom de la figure </h2>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <input type="text" name="name" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("name")?></span>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                          <b>Bootstrap for UX</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                          <b>Q&amp;A</b>
                        </li>
                      </ul>
                    </div>
                   </div>
                  <div class="p-4 col-lg-4 col-md-6" >
                    <div class="card shadowed">
                      <div class="card-block text-center card-primary p-2">
                        <h2>Description</h2>
                        </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <input type="text" name="description" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("description")?></span>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                          <b>Mobile design</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                          <b>UI trends</b>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="p-4 col-lg-4 col-md-6" >
                    <div class="card shadowed">
                      <div class="card-block text-center card-primary p-2">
                        <h2>Image</h2>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <b>Sélectionner une ou plusieurs photos :</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                          <b>Mobile design</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                          <b>UI trends</b>
                       </ul>
                    </div>
                  </div>
                  <div class="p-4 col-lg-4 col-md-6" >
                    <div class="card shadowed">
                      <div class="card-block text-center card-primary p-2">
                        <h2>Vidéo</h2>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <b>Sélectionner une ou plusieurs vidéos :</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                          <b>Mobile design</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                          <b>UI trends</b>
                       </ul>
                    </div>
                  </div>
                  <div class="p-4 col-lg-4 col-md-6" >
                    <div class="card shadowed">
                      <div class="card-block text-center card-primary p-2">
                        <h2>Groupe</h2>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <b>Sélectionner le groupe :</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                          <b>Mobile design</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                          <b>UI trends</b>
                       </ul>
                    </div>
                  </div>
                  <div class="p-4 col-lg-4 col-md-6" >
                    <div class="card shadowed">
                      <div class="card-block text-center card-primary p-2">
                        <h2>Discussion</h2>
                        </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <input type="text" name="chat_id" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("chat_id")?></span>
                        </li>
                        <li class="list-group-item">
                          <b>Soyez le premier à écrire un commentaire !</b>
                        </li>
                        <li class="list-group-item">
                          <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                          <b>UI trends</b>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-12" >
                  <div class="form-group text-center">
                          <input type="submit" name="insert" value="Valider" class="btn btn-outline-primary"/>
                  </div>
                  </div>  
                  
        </form>
       </div>
      </div>


                 








                  

                      