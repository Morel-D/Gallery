
<?php

include 'Upload.php';

$sql1 = "SELECT * FROM ch_images";
$query1 = mysqli_query($connection, $sql1);


?>


<!DOCTYPE html>
<html lang="en">

  <head>

<!-- Subscribe Form Starts Here -->
<div class="subscribe-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <div class="line-dec"></div>
          <h1>Upload Media</h1>
        </div>
      </div>
      <div class="col-md-8 offset-md-2">
        <div class="main-content">
          <p>Images, audio and Videos</p>
          <div class="container">
            <form id="subscribe" action="Index.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-7">
                  <fieldset>
                    <input name="image" type="file">
                  </fieldset>
                </div>
                <div class="col-md-5">
                  <fieldset>
                    <button type="submit" name = "save" value="upload" id="form-submit" class="button">Upload</button>
                  </fieldset>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Subscribe Form Ends Here -->





    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>CHRONOS Gallery</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>


    


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
          <h2>CHRONOS</h2>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  


    
    <div class="featured container no-gutter">
        <div class="row posts">
        <!-- <div  class="item new col-md-4">
              <a href="single-product.html">
                <div class="featured-item">
                  <img src="assets/images/product-01.jpg" alt="">
                  <h4>Proin vel ligula</h4>
                </div>
              </a>
            </div> -->


         <!-- Viewing Database records  -->

            <?php if(mysqli_num_rows($query1) > 0) {             
            while($row = mysqli_fetch_assoc($query1)) { ?>
            
            
                 
                   <div id="2" class="item new col-md-4">
                     <a href="#">
                       <div class="featured-item">
                         <img src="Upload_images/<?=$row['image']; ?>" alt="">
                         <h4><?=$row['name']; ?></h4>
                         <button type="button" class="btn btn-danger">Delete</button>
                       </div>
                       
                     </a>
                    </div> 
        <?php  }} ?>
       
     </div>   
            </div>

     
         

         

      


   

    
    <!-- Featred Page Ends Here -->


    

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


   





  </body>

</html>


