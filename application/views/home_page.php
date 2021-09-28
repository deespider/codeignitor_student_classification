<!DOCTYPE html> 
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- <nav class="vh-100 gradient-custom">
    <a href="main_view.php"><img src="images/home.png" width="35" height="80" alt="Home" border="0" /></a>
    <a href="main_view.php"><img src="images/home.png" width="35" height="80" alt="Home" border="0" /></a>

    </nav> -->
    <header>
    <h1 align="center">Welcome to School Managment System</h1>
    </header>
    <div class="container d-flex justify-content-center py-5 h-100" style="background-color: #fce5de;">  
      <div class="card d-flex justify-content-center align-items-center" style="width: 350px;">
        <div class="card-body login-card-body ">
          <p class="login-box-msg">Login to Proceed</p> 
            <form method="post" action="<?php echo base_url(); ?>main/login_validation">  
                  <div class="form-group mb-3">  
                      <label>Enter Username</label>  
                      <input type="text" name="username" class="form-control" />  
                      <span class="text-danger"><?php echo form_error('username'); ?></span>                 
                  </div>  
                  <div class="form-group mb-3">  
                      <label>Enter Password</label>  
                      <input type="password" name="password" class="form-control" />  
                      <span class="text-danger"><?php echo form_error('password'); ?></span>  
                  </div>  
                  <div class="form-group">  
                      <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                      <?php 
                            // echo base_url ('main/addschool'); 
                            echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                      ?>  
                  </div>  
            </form>  
        </div>
      </div>
    </div>

    
</body>
</html>

