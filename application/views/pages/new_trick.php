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
        <!--formulaire-->
         <div class="py-5 bg-info" id="tricks">
          <div class="container">


            <div class="row text-left">
              <div class="p-4 col-lg-4 col-md-6" >
                <div class="card shadowed">
                  <div class="card-block text-center card-primary p-2">
                    <h2>Day 1</h2>
                    <p class="lead">Prototype</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;
                      <b>Welcome</b>
                    </li>
                    <li class="list-group-item">
                      <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;
                      <b>Bootstrap for UX</b>
                    </li>
                    <li class="list-group-item">
                      <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;
                      <b>Q&amp;A</b>
                    </li>
                    <li class="list-group-item bg-secondary">
                      <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30 –&nbsp;
                      <b>Lunch break</b>
                    </li>
                    <li class="list-group-item">
                      <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00 –&nbsp;
                      <b>Best practices</b>
                    </li>
                    <li class="list-group-item">
                      <i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;
                      <b>Editing workshop</b>
                    </li>
                  </ul>
                </div>
              </div>
            


              <br /><br /><br />
              <h3 align="center">Formulaire d'ajout :</h3><br />
              <form method="post" action="<?php echo base_url()?>new_trick/form_validation">
                  <?php
                      if($this->uri->segment(2) == "inserted"){
                          echo '<p class="text-sucess">Ajout réussi</p>';
                      }
                  ?>

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
                      <label>User_id</label>
                      <input type="text" name="user_id" class="form-control"/>
                      <span class="text-danger"><?php echo form_error("user_id")?></span>
                  </div>
                  <div class="form-group">
                      <input type="submit" name="insert" value="Insert" class="btn btn-info"/>
                  </div>
              </form>
          </div>
        </div>
    