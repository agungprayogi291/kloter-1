<?php
$conn = mysqli_connect('localhost',"root","","schooldata");
$query ="SELECT * FROM school_tb";
$result = mysqli_query($conn,"SELECT * FROM school_tb");


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark p-2">
   <?php
    while($data = mysqli_fetch_array($result)){
   ?>
    <div class="Card text-center mt-5 ">
        <div class="card bg-secondary m-auto  " style="width: 18rem;">
        <img src="<?php echo $data['logo_school'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data['name_school'];?></h5>
            <p class="card-text"><?php echo $data['status_School'];?></p>
            
            <a href="#" class="btn btn-warning px-4 ">details</a>
        </div>
    </div>
    <?php 

    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   
  </body>
</html>