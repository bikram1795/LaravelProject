<!--Home page of the CMS part-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ABCD School</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/project.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">ABCD</span> School
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#log_in">Log in</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--End of the Navigation Bar-->
    <!-- Intro Header -->
    <header class="intro"><!--The CSS class has the link to the image:Changing of image should be done in the CSS codes in the custom CSS file-->
        <div class="intro-body">
            <div class="container">
                <div class="row">

                  <!--Change ID SPV1-001  -->
                  <!--Changed to-->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!--Wrapper for slides-->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="img\book1.jpg" alt="IMAGE1">
                        <div class="col-md-4 offset-md-4">
                          <div class="carousel-caption d-none d-md-block">
                            <h2 class="p-2" style="text-align: left !important;">Title 1</h2>
                            <p style="text-align: left !important;">Iyat kiba kibi likhibo pari
                            <a href="#" class="btn btn-sm btn-info">Read more</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <img src="img\book2.jpg" alt="IMAGE2">
                      </div>
                      <div class="item">
                        <img src="img\book3.jpg" alt="IMAGE3">
                      </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <!--End of the Carousel part-->
                  <div style="padding-top: 20px;"></div>
                  <!--Notification Marquee-->
                  <div class="container" style="background-color: #595959;">
                    <div class="row">
                      <div class="alert" role="alert">
                        <p style="text-align: center !important;"><strong>Notification</strong></p>
                        <!--This notification marquee can be looped using php-->
                        <marquee>
                          <a href="#">Notification eneke hoi thakibo</a> ;
                          <a href="#">Second Notification</a>
                        </marquee>
                      </div>
                    </div>
                  </div>
                  <!--End of the Notification section-->

                </div>
              </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
        <!--Row with 3 columns in the section-->
        <!--Decrease the Column size to increase cards in the row:Preferably 4 cards maximum-->
        <!--The columns shall display information as cards-->
          <div class="col-md-4">
            <!--Card One-->
            <div class="card" style="border-radius:10px;background:#e6e6e6;padding:15px;">
              <img class="card-img-top" src="img\intro-bg.jpg" alt="Card image cap" id="card-image-cap" width="250" height="200" style="border-radius:10px;">
              <div class="card-body">
                <h4 class="card-title">Card One</h4>
                <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info btn-sm" style="opacity: 1;">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <!--Card two-->
            <div class="card" style="border-radius:10px;background:#e6e6e6;padding:15px;">
              <img class="card-img-top" src="img\intro-bg.jpg" alt="Card image cap" id="card-image-cap" width="250" height="200" style="border-radius:10px;">
              <div class="card-body">
                <h4 class="card-title">Card Two</h4>
                <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info btn-sm" style="opacity: 1;">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <!--Card three-->
            <div class="card" style="border-radius:10px;background:#e6e6e6;padding:15px;">
              <img class="card-img-top" src="img\intro-bg.jpg" alt="Card image cap" id="card-image-cap" width="250" height="200" style="border-radius:10px;">
              <div class="card-body">
                <h4 class="card-title">Card Three</h4>
                <p class="card-text" style="text-align: justify;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info btn-sm" style="opacity: 1;">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <!--Duplicate the row to increase card rows-->
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!--Log in section-->
    <section id="log_in" class="container content-section text-center">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Teacher Log in</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="uname" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                              </fieldset>
                        </form>
                        <!-- <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <hr>
      <div class="container">
        <!--This row shall display the footer links in 3 columns-->
        <div class="row" style="background:#dcdee2;">
          <div class="col-sm-4" style="border-radius:10px;background:#ffffff;">
            <!--This Section shall have all the meta links-->
            <a style="color:#000000;" href="#">META LINK 1</a><br>
            <a style="color:#000000;" href="#">META LINK 1</a>
          </div>
          <div class="col-sm-4" style="border-radius:10px;background:#ffffff;">
            <!--This Section shall have all the meta links-->
            <a style="color:#000000;" href="#">META LINK 1</a><br>
            <a style="color:#000000;" href="#">META LINK 1</a>
          </div>
          <div class="col-sm-4" style="border-radius:10px;background:#ffffff;">
            <!--This Section shall have all the meta links-->
            <a style="color:#000000;" href="#">META LINK 1</a><br>
            <a style="color:#000000;" href="#">META LINK 1</a>
          </div>
        </div>
      </div>
      <hr>
      <div class="container text-center">
            <p>Copyright &copy; ABCD School 2018</p>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/project.js"></script>

</body>

</html>
