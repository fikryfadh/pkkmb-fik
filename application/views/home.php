<!DOCTYPE html>
<html>
<head>


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <style type="text/css">
      
     @media (max-width: 768px) {
      
    }

      </style>


</head>
  <body>
    
    <div style="padding-bottom: 10px"></div>
    
     <div class="container">  
            <div class="row">
            <div class="col">
            <div class="logo">
              <a   href=""><img src="<?php echo base_url() ?>assets/img/imagi.jpg"  width="50px""></a>
            </div>
            </div>
            <div class="logo">
            <div class="col-auto">
            <nav class="navbar-expand-lg navbar-dark">    
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"        aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item active">
                      <a class="nav-link" href="<?php echo base_url() ?>"">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url() ?>about"">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url() ?>profile"">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url() ?>guide"">Guide Book</a>
                    </li>
                </ul>
              </div>
              </nav>
            </div>
      </div>
    </div>  
  </div>  
      
    <br>  

   <div class="container">
        <div class="row">
        <div class="col-lg-auto">
          <div class="float-sm-right">
       <img  class="img-fluid" src="<?php echo base_url() ?>assets/img/ceka.gif" width="1100">
        </div>
      <div class="float">
      <h1>PKKMB<br>FIK</h1>
      <p>Halaman ini responsive untuk semua jenis perangkat</p> 
      </div>    
      </div>
    </div>
    </div>
          
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>Kolom pertama</h3>
          <p>Paragraf pertama</p>
          <p>Paragraf kedua</p>
        </div>
        <div class="col-sm-4">
          <h3>Kolom kedua</h3>
        <p>Paragraf pertama</p>
          <p>Paragraf kedua</p>
        </div>
        <div class="col-sm-4">
          <h3>Kolom ketiga</h3>        
          <p>Paragraf pertama</p>
          <p>Paragraf kedua</p>
        </div>
      </div>
    </div>

    <div class="container" style="margin-top: 200px;">

      <?php require_once('footer.php') ?>
    </div>

</body>
</html> 