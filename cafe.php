
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engelsiz Ortam</title>
    <script src="js/main.js"></script>
    
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="anasayfa.css">
    <link rel="stylesheet" href="cafe.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


</head>

<body>

    <div class="wrapper">
        <nav id="sidebar" class="sticky-top">
            <div class="sidebar-header">
                <h3>Engelsiz Ortam</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Cafe ve Restorantlar</p>
                <div class="container-fluid " style="max-width: 400px; " >
                    <form class="d-flex ">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-light" type="submit">Arama</button>
                    </form>
                  </div>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kategoriler</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#"  >Restorant</a>
                        </li>
                        <li>
                            <a href="#">Bar</a>
                        </li>
                        <li>
                            <a href="#">Gece Klubü</a>
                        </li>
                    </ul>
                    <li>
                    <a href="#pagesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Konumu</a>
                    <ul class="collapse list-unstyled" id="pagesSubmenu">
                        <li>
                            <a href="#">İl</a>
                        </li>
                        <li>
                            <a href="#">İlçe</a>
                        </li>
                        <li>
                            <a href="#">Mahalle</a>
                        </li>
                    </ul>
                </li>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mekan Puanı</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Yemek Puanı</a>
                        </li>
                        <li>
                            <a href="#">Ortam ve Çevre Puanı</a>
                        </li>
                        <li>
                            <a href="#">Ulaşım Puanı</a>
                        </li>
                        <li>
                            <a href="#">Muzik Seçimi</a>
                        </li>
                    </ul>
                </li>
    
            </ul>

       
        </nav>

        <div id="content">

        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light   ">
          <div class="container-fluid">

              <button type="button" id="sidebarCollapse" class="navbar-btn">
                  <span></span>
                  <span></span>
                  <span></span>
              </button>
              <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-align-justify"></i>
              </button>

              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="nav navbar-nav justify-content-space-between ">
                      <li class="nav-item active">
                          <a class="nav-link" href="anasayfa.php">Anasayfa</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="hakkımızda.html">Hakkımızda</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="iletisim.html">İletişim</a>
                      </li>
                  </ul>
                  <div class="container-fluid " style="max-width: 700px;  " >
                    <form class="d-flex ">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-light" type="submit">Arama</button>
                    </form>
                  </div>
                  <button type="button" class="btn btn-light"> <a href="login.php"> Giriş</a></button>

              </div>
              
          </div>
      </nav>


            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row justify-content-xl-center">
               
                        <div class="__area text-center">
                          <a href="#" class="__card">
                            <button class="__favorit"><i class="la la-heart-o"></i></button>
                            <img src="https://i.pinimg.com/originals/74/84/4c/74844c4207ec819b6ffaa6291591311e.jpg" class="img-fluid __img" />
                          </a>
                        </div> 
                      </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row justify-content-xl-center">
               
                        <div class="__area text-center">
                          <a href="#" class="__card">
                            <button class="__favorit"><i class="la la-heart-o"></i></button>
                            <img src="https://i.pinimg.com/originals/74/84/4c/74844c4207ec819b6ffaa6291591311e.jpg" class="img-fluid __img" />
                          </a>
                        </div> 
                      </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row justify-content-xl-center">
               
                        <div class="__area text-center">
                          <a href="#" class="__card">
                            <button class="__favorit"><i class="la la-heart-o"></i></button>
                            <img src="https://i.pinimg.com/originals/74/84/4c/74844c4207ec819b6ffaa6291591311e.jpg" class="img-fluid __img" />
                          </a>
                        </div> 
                      </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="opacity: 0;">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden" >Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="opacity: 0;">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
<div>

<div style="display:flex; justify-content:center">





<div class="containers">
  <div class="card">
    <h3 class="title">Card 1</h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle class="stroke" cx="60" cy="60" r="50"/>
    </svg>
    </div>
  </div>
  <div class="card">
    <h3 class="title">Card 2</h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle class="stroke" cx="60" cy="60" r="50"/>
    </svg>
    </div>
  </div>
  <div class="card">
    <h3 class="title">Card 3</h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle class="stroke" cx="60" cy="60" r="50"/>
    </svg>
    </div>
  </div>
  <div class="card">
    <h3 class="title">Card 4</h3>
    <div class="bar">
      <div class="emptybar"></div>
      <div class="filledbar"></div>
    </div>
    <div class="circle">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle class="stroke" cx="60" cy="60" r="50"/>
    </svg>
    </div>
  </div>
</div>



</div>
</div>























</body>


<footer id="footer" class="footer-1">
  <div class="main-footer widgets-dark typo-light">
  <div class="container">
  <div class="row">
  
    <div class="col-xs-12 col-sm-6 col-md-3">
  <div class="widget subscribe no-box">
  <h5 class="widget-title">Engelsiz Ortam<span></span></h5>
  <p>Engelsiz Mekanlar bir değerlendirme programıdır... </p>
  </div>
  </div>
  
    
  <div class="col-xs-12 col-sm-6 col-md-3">
  <div class="widget no-box">
  <h5 class="widget-title">Amaç<span></span></h5>
  <ul class="thumbnail-widget">
  <li>
  <div class="thumb-content">Bu uygulama engelli vatandaşların deneyimlerini birbirleri ile paylaşma imkanı vermesi için hazırlanmıştır.</div> 
  </li>
  <li>
  <div class="thumb-content">Piyasadaki değerlendirme uygulamaların aksine bu uygulama engelli bireylere özel hazırlanmıştır ve daha basit, 
    anlaşılır bir arayüze sahiptir.</div> 
  </li>
  <li>
  </ul>
  </div>
  </div>
  
    
  
        <div class="col-xs-12 col-sm-6 col-md-3">
  <div class="widget no-box">
  <h5 class="widget-title">Sosyal Medya<span></span></h5>
              <a href="#"> <i class="bi bi-facebook " style="font-size: 30px; margin: 5px;"></i> </a>
              <a href="#"> <i class="bi bi-youtube"   style="font-size: 30px; margin: 5px;"></i> </a>
              <a href="#"> <i class="bi bi-twitter"   style="font-size: 30px; margin: 5px;"></i></a>
  </div>
  </div>
  <br>
    <br>
  
  
  <div class="col-xs-12 col-sm-6 col-md-3">
  <div class="widget no-box">
  <h5 class="widget-title">İletişim<span></span></h5>
              <p>Bizim ile e-posta aracılıyla iletişime geçebilir ve yeni restorantlardan haberdar olabilirsiniz.</p>
    <div class="emailfield">
  <input type="text" name="email" value="Email">
  <input name="uri" type="hidden" value="arabiantheme">
  <input name="loc" type="hidden" value="en_US">
  <input class="submitbutton ripplelink" type="submit" value="Subscribe">
  </form>  
  </div>
  </div>
  
  </div>
  </div>
  </div>
    
  <div class="footer-copyright">
  <div class="container">
  <div class="row">
  <div class="col-md-12 text-center">
  <p>since © 2021 by alper bayram.</p>
  </div>
  </div>
  </div>
  </div>
  </footer>



</html>