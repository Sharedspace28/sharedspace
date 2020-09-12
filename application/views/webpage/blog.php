<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" style="height: 80px;">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" ><h2 style="margin: auto; margin-top:10px;color:white;font-family: Josefin Sans;font-size: 20px;font-weight:bold;">SHARED <span style="color: red;">SPACE</span></h2></a>

    </div>
  
  </div>
</nav>
<?php foreach ($post as $key => $category): ?>









<div class="container">
  <h3>Comments</h3>
  <?php echo form_open(base_url().'admin/comments/insert/'. $category['post_id'], 
  array('class' => 'form-horizontal form-groups-bordered validate', 'enctype'=>'multipart/form-data'));?>
    <label for="">Name</label>
    <input type="text" name="name" placeholder="name">
    <label for="">comments</label>
    <input type="text" name="comments" placeholder="name">
  <?php   echo form_close(); ?>
</div>
<?php endforeach;  ?>
</body>
</html>
