<!-- Cover -->
        <div class="d-flex align-items-center py-5 cover section-fade-in-out" style="background-image: url(&quot;assets/img/cover.jpg&quot;);">
          <div class="container">
            <div class="row">
              <div class="col-12 mt-5">
                <h1 class="display-4">Snowtricks</h1>
                <h1>L'aventure vous attends !</h1>
                <a class="d-block fa fa-angle-down pt-5 fa-3x pull-right" href="#tricks"></a>
              </div>
            </div>
          </div>
        </div>
  
<!--List tricks-->        

  
        <div class="py-5 bg-info" id="tricks">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6" >
                  <?php 
                        if($fetch_data->num_rows() > 0){

                            foreach($fetch_data->result() as $row){

                    ?>
                            <?php isset($row->picture) ? $picture= $row->picture : $picture= '' ?>
                             <p><?='<img src="assets/img/'.$row->picture.'" class="center-block img-fluid my-3 shadowed border-warning width="300""/>';?> </p>
                             <a href="#">
                              <h3 class="mb-0">
                                <b><?php echo $row->name; ?></b>
                                <a href="#"><img src="https://png.icons8.com/office/30/000000/edit.png"></a>
                                <a href="#"><img src="https://png.icons8.com/ios/30/000000/delete.png"></a>
                              </h3>
                              </a>

                    <?php
                            }


                        }
                    ?>

              </div> 
            </div>
          </div>
          <div class="row">
              <div class="col-lg-10 col-md-12 ">
                  <a class="d-block fa fa-angle-up pt-5 fa-3x pull-right" href="#tricks"></a>
              </div>
          </div>
        </div>



        
  