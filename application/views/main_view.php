<html>
    <head>
        <title>Ma page</title>
        <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>
    <body>
        <!--formulaire-->
        <div class="container">
            <br /><br /><br />
            <h3 align="center">Insert data using Codeigniter</h3><br />
            <form method="post" action="<?php echo base_url()?>main/form_validation">
                <?php
                    if($this->uri->segment(2) == "inserted"){
                        echo '<p class="text-sucess">Data Inserted</p>';
                    }
                ?>

                <div class="form-group">
                    <label>Enter username</label>
                    <input type="text" name="username" class="form-control"/>
                    <span class="text-danger"><?php echo form_error("username")?></span>
                </div>
                <div class="form-group">
                    <label>Enter password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Enter email</label>
                    <input type="text" name="email" class="form-control"/>
                    <span class="text-danger"><?php echo form_error("email")?></span>
                </div>
                <div class="form-group">
                    <input type="submit" name="insert" value="Insert" class="btn btn-info"/>
                </div>
            </form><br/><br/><br/>

            <h3>Fetch Data from TAble using Codeigniter</h3><br/>
            <div class="table-reponsive">
                <table class=" table table-reponsive">
                    <tr>
                        <th>ID</th>
                        <th>username</th>
                        <th>password</th>
                        <th>email</th>
                    </tr>   
                </table>
            </div>
            

        </div>
    </body>
</html>