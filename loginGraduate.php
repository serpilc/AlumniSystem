<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title> Graduate user login </title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
 
   
  <link rel="stylesheet" href="css/demo.css"/>
   
 <link rel="stylesheet" href="css/theme1.css"/>
</head>
<body>
    <div style="margin-top: 20px" >
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar" style="margin-bottom: 50px">
  <a class="navbar-brand" href="#">
    <img src="8f885ec21f1b4a859bcaa4ca4b4eb69a.png" width="60" height="60" class="d-inline-block align-top" alt=""> 
    <a class="n" style="margin-top:2px">IEU_GRADUATION</a>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="navbar-nav"  style="margin-left: auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutUs.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="registrationGraduate.php">Register for Graduation</a>
          <a class="dropdown-item" href="registrationCompany.php">Register for Company</a>
        </div>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="HELP.html">Help(SSS)</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<div class="container">
	


	<form style="margin-bottom: 200px; margin-top: 170px"  class="container" action="indexlogin.php" method="POST">
        <?php include('errors.php'); ?>
      <h2>Login</h2>
                        <h5><strong>ID INFORMATION</strong></h5>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="E-mail" name="email" required>
                        </div>
                  
                        <h5><strong>LOGIN INFORMATION </strong></h5>
                        <div class="form-group"><input class="form-control" type="password" placeholder="Password" name="password" required>
                        </div>
                     
                        
                        
                        <div class="form-group">
                        <button type="submit" class="btn" name="loginGraduate">Login</button>
                        </div>

               
                    </form>
	</div>

                    <div class="card text-center" id="contact">
  <div class="card-header">
    <h4>Follow us on social Media</h4> <a href="https://www.facebook.com/izmirekonomiuniversitesi/"><img style="max-width: 20px" src="facebook_2.png"></a> <a href="https://www.instagram.com/izmirekonomiuni/?hl=tr"><img style="max-width: 20px" src="instagram.png"> </a><a href="https://twitter.com/izmirekonomiuni"><img style="max-width: 20px" src="twitter.png"></a>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <h4>Our Adress</h4>
  İzmir University of Economics 
  Sakarya Caddesi, No:156
  35330 Balçova <br> İzmir/TURKEY<br> 
  <img style="max-width: 20px" src="telephone.png">+90 232 279 2525 
    </div> 
    <br>
    
    <div class="col-sm">
       <!-- Map content-->
    </div>
    <div class="col-sm" >
     <iframe frameborder="0" style="width:inherit;height:inherit"  marginheight="inherit" marginwidth="inherit" scrolling="no" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ekonomi+%C3%9Cniversitesi,+Bal%C3%A7ova,+Sakarya+Cad.+156,+Izmir,+T%C3%BCrkiye&amp;aq=0&amp;oq=izmir+ekonomi&amp;sll=37.0625,-95.677068&amp;sspn=58.685917,114.169922&amp;t=m&amp;ie=UTF8&amp;hq=Ekonomi+%C3%9Cniversitesi,+Bal%C3%A7ova,+Sakarya+Cad.+156,&amp;hnear=Izmir%2FIzmir+Province,+Turkey&amp;ll=38.394146,27.04113&amp;spn=0.053816,0.111408&amp;z=13&amp;output=embed" width="150%"></iframe>
       <!-- Map content finished-->
    </div>
  </div>
</div>
   
  </div>
    <!-- Visited how many people content-->
  <div class="card-footer text-muted">
      <div ><a>Our website,
      <script language="Javascript"> document.write('<a target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/0.png" border="0" /></a>');document.write('<a  target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/0.png" border="0" /></a>');document.write('<a target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/0.png" border="0" /></a>');document.write('<a  target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/2.png" border="0" /></a>');document.write('<a  target="_blank"><img src="http://sa.sayaclar.com/../rkm/1a7/0.png" border="0" /></a>');
          var sc_project=11775990;var sc_invisible=1;var sc_security="7a33e1bd";
          ;document.write('<noscript><div class="statcounter"><img class="statcounter" src="//c.statcounter.com/11775990/0/7a33e1bd/1/" alt="s"></div></noscript>')
          </script>
         
      <a> people visited.</a></a></div>
      <footer>&copy; Copyright 2018 ieu.edu.tr</footer>

  </div>
</div>

                    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>