        <div class="d-flex align-items-center py-5 cover " style="background-image: url(&quot;assets/img/new.jpg&quot;);">
          <div class="container">
            <div class="row">
              <div class="col-12 mt-5">
                <h1 class="display-4 text-warning text-uppercase"><b>Créer une nouelle figure</b></h1>
                
                <a class="d-block fa fa-angle-down pt-5 fa-3x pull-center" href="#tricks"></a>
              </div>
            </div>
          </div>
        </div>

        <h3 align="center">Formulaire d'ajout :</h3><br />
              <form method="post" action="<?php echo base_url()?>new_trick/form_validation">
                  <?php
                      if($this->uri->segment(2) == "inserted"){
                          echo '<p class="text-sucess">Ajout réussi</p>';
                      }
                  ?>
        <!--formulaire-->
             <div class="py-5 bg-info" id="tricks">
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
                <b>Sélectionner une photo :</b>
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
              <h2>Day 2</h2>
              <p class="lead">Design</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;
                <b>Guest speech</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                <b>Mobile design</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                <b>UI trends</b>
              </li>
              <li class="list-group-item bg-secondary">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30 –&nbsp;
                <b class="">Lunch break</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00 –&nbsp;
                <b>Discussion</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;
                <b>Party!</b>
              </li>
            </ul>
          </div>
        </div>
        <div class="p-4 col-lg-4 col-md-6" >
          <div class="card shadowed">
            <div class="card-block text-center card-primary p-2">
              <h2>Day 2</h2>
              <p class="lead">Design</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;
                <b>Guest speech</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                <b>Mobile design</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                <b>UI trends</b>
              </li>
              <li class="list-group-item bg-secondary">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30 –&nbsp;
                <b class="">Lunch break</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00 –&nbsp;
                <b>Discussion</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;
                <b>Party!</b>
              </li>
            </ul>
          </div>
        </div>
        <div class="p-4 col-lg-4 col-md-6" >
          <div class="card shadowed">
            <div class="card-block text-center card-primary p-2">
              <h2>Day 2</h2>
              <p class="lead">Design</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;
                <b>Guest speech</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                <b>Mobile design</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                <b>UI trends</b>
              </li>
              <li class="list-group-item bg-secondary">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30 –&nbsp;
                <b class="">Lunch break</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00 –&nbsp;
                <b>Discussion</b>
              </li>
              <li class="list-group-item">
                <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;
                <b>Party!</b>
              </li>
            </ul>
          </div>
        </div>


                 








                  

                      <div class="form-group">
                          <label>Nom</label>
                          <input type="text" name="name" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("name")?></span>
                      </div>
                      <div class="form-group">
                          <label>Description</label>
                          <input type="text" name="description" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("description")?></span>
                      </div>
                      <div class="form-group">
                          <label>Image</label>
                          <input type="text" name="picture" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("picture")?></span>
                      </div>
                      <div class="form-group">
                          <label>Video</label>
                          <input type="text" name="video" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("video")?></span>
                      </div>
                      <div class="form-group">
                          <label>Groupe</label>
                          <input type="text" name="group_id" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("group_id")?></span>
                      </div>
                      <div class="form-group">
                          <label>Discussion</label>
                          <input type="text" name="chat_id" class="form-control"/>
                          <span class="text-danger"><?php echo form_error("chat_id")?></span>
                      </div>
                      
                      <div class="form-group">
                          <input type="submit" name="insert" value="Insert" class="btn btn-info"/>
                      </div>
                  </form>
              </div>
            </div>
        