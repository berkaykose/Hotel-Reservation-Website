

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link text-light rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-sm bg-danger">
        <div class="container">
            <a href="index.php" class="navbar-brand"><h2 class="text-light">BAU HOTEL</h2></a>

            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#menuopen">
                <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="menuopen">
      
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a href="room.php" class="nav-link text-light">ROOMS</a>
                  </li>

                  <li class="nav-item">
                    <a href="about.php" class="nav-link text-light">ABOUT</a>
                  </li>

                  <li class="nav-item">
                    <a href="contact.php" class="nav-link text-light">CONTACT</a>
                  </li>
      
                  <li class="nav-item">
                    <a href="price.php" class="nav-link text-light">PRICE LIST</a>
                  </li>

                  <li class="nav-item">
                    <a href="gallery.php" class="nav-link text-light">GALLERY</a>
                  </li>

                  <?php 
                  session_start();
                  if(isset($_SESSION["oturum"])) {
                    echo "<li class='nav-item'><a href='logout.php' class='nav-link text-light'>LOG OUT</a></li>";
                  }else{
                    echo "<li class='nav-item'><a href='login.php' class='nav-link text-light'>LOG IN</a></li>";
                    echo "<li class='nav-item'><a href='signup.php' class='nav-link text-light'>SIGN UP</a></li>";
                  }
                  ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
      <div class="row mt-5">
          <div class="col-md-9 bg-image">
            <div class="row">
              <div class="container">
                <div class="row justify-content-center">
                    <h2>Contact</h2>
                </div>
                <hr class="bg-danger">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mt-4">
                <h4>THE BAU HOTEL</h4>
                <p class="mt-4">
                  <span class="mr-5">Adress</span>
                  <span class="ml-5">: Türkler Mah. Akdeniz Bul. No:26 Alanya / Antalya / Turkey</span>
                </p>
                <p>
                  <span class="mr-5">Phone</span>
                  <span class="ml-5">:  +90 0242 123 45 67</span>
                </p>
                <p>
                  <span class="mr-5">e-Mail</span>
                  <span class="ml-5">: bau@hotel.com.tr</span>
                </p>
              </div>
              <div class="col-md-12 mt-5">
                <p>
                  <h5>ROOM RESERVATION</h5>
                </p>
                <p>
                    <span class="mr-3">Phone</span>
                    <span>: +90 0242 123 45 68</span>
                </p>
                <p>
                    <span class="mr-3">e-Mail</span>
                    <span>: infobau@hotel.com.tr</span>
                </p>
              </div>
              <div class="col-md-12 mt-5">
                <p>
                  <h5>MEETING & ORGANIZATION</h5>
                </p>
                <p>
                  <span class="mr-3">Phone</span>
                  <span>: +90 0242 123 45 67 / 68</span>
                </p>
                <p>
                  <span class="mr-3">e-Mail</span>
                  <span>: infobau@hotel.com.tr</span>
                </p>
              </div>
            </div>


          </div>
          <div class="col-md-3">
              <div class="card mb-4">
                <h6 class="card-header bg-danger text-white">Advertisement</h6>
                <div class="card-body">
                  <div class="input-group">
                    <img class="img-fluid" src="images/advertisement.jpeg" alt="Advertising area">
                  </div>
                </div>
              </div>
            

              <div class="card mb-4">
                <h5 class="card-header bg-danger text-white">Comments</h5>
                <div class="card-body">
                    <div class="card mt-2">
                      <div class="card-body">
                        <p class="mt-2 ml-2">Lorem ipsum dolor sit amet consectetur, quis non tempore eveniet ut, molestias similique in ipsam doloremque!</p>
                      </div>
                      <div class="card-footer">
                        <span><small>Commented by random1, 12.04.2020</small></span>
                      </div>
                    </div> 
                    <div class="card mt-2">
                      <div class="card-body">
                        <p class="mt-2 ml-2">Lorem ipsum dolor sit amet consectetur, quis non tempore eveniet ut, molestias similique in ipsam doloremque!</p>
                      </div>
                      <div class="card-footer">
                        <span><small>Commented by random2, 12.04.2020</small></span>
                      </div>
                    </div> 
                    <div class="card mt-2">
                      <div class="card-body">
                        <p class="mt-2 ml-2">Lorem ipsum dolor sit amet consectetur, quis non tempore eveniet ut, molestias similique in ipsam doloremque!</p>
                      </div>
                      <div class="card-footer">
                        <span><small>Commented by random3, 12.04.2020</small></span>
                      </div>
                    </div>     
                </div>
              </div>   
          </div>
      </div>
  </div>

    <footer class="page-footer font-small bg-danger pt-4 text-light">
      <div class="container text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase">BAU HOTEL</h5>
            <p><small>Türkler Mah. Akdeniz Bul. No:26 Alanya / Antalya / Turkey</small></p>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">
          
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Social Media</h5>
            <ul class="list-unstyled">
              <li>
                <a href="https://www.instagram.com/" target="_blank">Instagram</a>
              </li>
              <li>
                <a href="https://twitter.com/explore" target="_blank">Twitter</a>
              </li>
              <li>
                <a href="https://www.facebook.com/" target="_blank">Facebook</a>
              </li>
              <li>
                <a href="https://tr.pinterest.com/" target="_blank">Pinterest</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">CONTACT</h5>
    
            <ul class="list-unstyled">
              <li>
                0505 123 45 67
              </li>
              <li>
                0312 123 45 67
              </li>
              <li>
                <a href="index.php">bauhotel</a>
              </li>
              <li>
                bau@hotel.com.tr
              </li>
            </ul>
        </div>
      </div>
      <div class="footer-copyright text-center py-3">
        © 2020 Copyright: BAU
      </div>
    </footer>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>