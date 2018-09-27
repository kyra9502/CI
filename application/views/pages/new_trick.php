
  
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
                             
                                
                                <b><?php echo $row->name; ?><a class="mb-0" href="<?= site_url('detail_trick'); ?>" /></b>
                                <a href="#"><img src="https://png.icons8.com/office/30/000000/edit.png"></a>
                                <a href="#"><img src="https://png.icons8.com/ios/30/000000/delete.png"></a>
                              
                              

                    <?php
                            }


                        }
                    ?>

              </div> 
            </div>
          </div>
        </div>