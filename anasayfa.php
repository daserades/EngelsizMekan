<?php>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engelsiz Ortam</title>
    <script src="js/main.js"></script>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="anasayfa.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>



</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Engelsiz Ortam</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
              
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light   ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="container-fluid " style="max-width: 700px; " >
                        <form class="d-flex ">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-light" type="submit">Arama</button>
                        </form>
                      </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Anasayfa</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Hakkımızda</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">İletişim</a>
                            </li>

                        </ul>
                        <button type="button" class="btn btn-light">Giriş</button>

                    </div>
                    
                </div>
            </nav>
            
<div class="row justify-content-xl-center">
    <div class="__area text-center">
        <a href="#" class="__card">
          <button class="__favorit"><i class="la la-heart-o"></i></button>
          <img src="https://i.pinimg.com/originals/74/84/4c/74844c4207ec819b6ffaa6291591311e.jpg" class="img-fluid __img" />
          <div class="__card_detail text-left">
            <h4>Fiorella</h4>
            <p>
              2238 Polk St, San Francisco, CA 94109, United States
            </p>
            <div class="__type">
              <span href="#Italian">Italian</span>
              <span href="#Vegetarian">Vegetarian</span>
              <span href="#Pizza">Pizza</span>
              <span href="#off">10%</span>
            </div>
            <div class="__detail">
              <i class="la la-star-o"></i> <span>5.0</span> <i class="la la-clock-o"></i> <span>30 m</span>
            </div>
          </div>
        </a>
      </div> 
      <div class="__area text-center">
        <a href="#" class="__card">
          <button class="__favorit"><i class="la la-heart-o"></i></button>
          <img src="https://i.pinimg.com/originals/74/84/4c/74844c4207ec819b6ffaa6291591311e.jpg" class="img-fluid __img" />
          <div class="__card_detail text-left">
            <h4>Fiorella</h4>
            <p>
              2238 Polk St, San Francisco, CA 94109, United States
            </p>
            <div class="__type">
              <span href="#Italian">Italian</span>
              <span href="#Vegetarian">Vegetarian</span>
              <span href="#Pizza">Pizza</span>
              <span href="#off">10%</span>
            </div>
            <div class="__detail">
              <i class="la la-star-o"></i> <span>5.0</span> <i class="la la-clock-o"></i> <span>30 m</span>
            </div>
          </div>
        </a>
      </div> 
      <div class="__area text-center">
        <a href="#" class="__card">
          <button class="__favorit"><i class="la la-heart-o"></i></button>
          <img src="https://i.pinimg.com/originals/74/84/4c/74844c4207ec819b6ffaa6291591311e.jpg" class="img-fluid __img" />
          <div class="__card_detail text-left">
            <h4>Fiorella</h4>
            <p>
              2238 Polk St, San Francisco, CA 94109, United States
            </p>
            <div class="__type">
              <span href="#Italian">Italian</span>
              <span href="#Vegetarian">Vegetarian</span>
              <span href="#Pizza">Pizza</span>
              <span href="#off">10%</span>
            </div>
            <div class="__detail">
              <i class="la la-star-o"></i> <span>5.0</span> <i class="la la-clock-o"></i> <span>30 m</span>
            </div>
          </div>
        </a>
      </div> 
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
<?>