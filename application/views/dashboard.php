<!DOCTYPE html>
<html>
<head>
        <title>Homepage</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="row"style="width:100%;">
       <div class="col-4 d-flex justify-content-center"style="padding: 30px;">
       <a class="mt-20" href="<?php echo base_url()?>main/addschool"><button class="btn btn-primary">Add New School</button></a>
       </div>
       <div class="col-4 d-flex justify-content-center"style="padding: 30px;">
       <a title="New School" href="<?php echo base_url()?>main/add_entry"><button class="btn btn-primary">Student Details Entry Form</button></a>
       </div>
       <div class="col-4 d-flex justify-content-center"style="padding: 30px;">
       <a title="New School" href="<?php echo base_url()?>main/view_entry"><button class="btn btn-primary">View Student Details Entry Form</button></a>
       </div> 
    </div>
</body>
</html>