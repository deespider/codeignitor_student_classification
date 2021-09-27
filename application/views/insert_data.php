<html>  
 <head>  
   <title>Insert Update Delete Data using Codeigniter</title>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
 </head>  
 <body>  
 <div class="container bg-light">  
      <br /><br /><br />  
      <h2 align="center">Add New School</h2><br />  
      <form method="post"  action="<?php echo base_url()?>main/form_validation">  
           <?php  
           if($this->uri->segment(2) == "inserted")  
           {  
           //base url - http://localhost/tutorial/codeigniter  
           //redirect url - http://localhost/tutorial/codeigniter/main/inserted  
                //main - segment(1)  
                //inserted - segment(2)  
                echo '<p class="text-success">Data Inserted</p>';  
           }  
           if($this->uri->segment(2) == "updated")  
           {  
                echo '<p class="text-success">Data Updated</p>';  
           }  
           ?>  
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?>  
           <div class="form-group">  
                <label>School Name</label>  
                <input type="text" name="school_name" value="<?php echo $row->school_name; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("school_name"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>School Code</label>  
                <input type="text" name="school_code" value="<?php echo $row->school_code; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("school_code"); ?></span>  
           </div> 
           <div class="form-group">  
                <label>Address</label>  
                <input type="text" name="school_address" value="<?php echo $row->school_address; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("school_address"); ?></span>  
           </div> 
           <div class="form-group">  
                <label>School Type</label>  
                <input type="text" name="school_type" value="<?php echo $row->school_type; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("school_type"); ?></span>  
           </div>  
           <div class="form-group justify-content-center">  
                <input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>" />  
                <input type="submit" name="update" value="Update" class="btn btn-info" />  
           </div>       
           <?php       
                }  
           }  
           else  
           {  
           ?>  
           <div class="form-group">  
                <label>School Name</label>  
                <input type="text" placeholder="Enter School Name" name="school_name" class="form-control" />  
                <span class="text-danger"><?php echo form_error("school_name"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>School Code</label>  
                <input type="text" placeholder="Enter School Code" name="school_code" class="form-control" />  
                <span class="text-danger"><?php echo form_error("school_code"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>Address</label>  
                <input type="text" placeholder="Enter Address" name="school_address" class="form-control" />  
                <span class="text-danger"><?php echo form_error("school_address"); ?></span>  
           </div> 
           <div class="form-group">  
                <label>School Type</label>  
                <input type="text" placeholder="Boys’/Girls’/Co-ed " name="school_type" class="form-control" />  
                <span class="text-danger"><?php echo form_error("school_type"); ?></span>  
           </div> 
           <div class="form-group">  
                <input type="submit" name="insert" value="Insert" class="btn btn-info" />  
           </div>       
           <?php  
           }  
           ?>  
      </form>  
      
      
 </div>  
 </body>  
 </html>