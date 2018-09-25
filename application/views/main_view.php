<html>
    <head>
        <title>Ma page</title>
    </head>
    <body>
<!-- ex tableau -->
        <header>Tableau table user</header>

        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                </tr>
                <!--appelle de la fonction fetch_data-- >
                <?php 
                if($fetch_data->num_rows() > 0){
                    foreach($fetch_data->result() as $row){
                ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->password; ?></td>
                        <td><?php echo $row->email; ?></td>
                    </tr> 
                <?php       
                    }
                } else{
                    ?>

                    <tr>
                        <td colspan="3">No data found</td>
                    </tr>
                <?php
                }
                ?>


                 


            </table>
            
        </div>

        <footer>Ceci est le footer</footer>
    </body>
</html>