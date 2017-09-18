<?php
if(isset($_POST['submit'])){
    $to = "alcerus@hotmail.com"; // this is your Email address
    $from = "info@leedshome.ddns.net"; // this is the sender's Email address
    $fullName = $_POST['name'];
    $subject = "Rasperry Pi Server - Leeds Home Contact";
    $message = $fullName . "\n\n" . $_POST['email'] . "\n\n" . " Message:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
}?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SODA VISUAL</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>

  <body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="naviation">
    <!-- BRAND & TOGGLE GROUP-->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- NAVLINKS COLLECTOR & DATA TOGGLING-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav">
            <li> 
            <a href="http://twitter.com">
                <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x twittericoncolor"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
            </li>
            <li>
            <a href="http://facebook.com">
                <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x facebookiconcolor"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
            </li>
            <li>
            <a href="http://instagram.com">
                <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x instagramiconcolor"></i>
                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a>
            </li>
            <li><p><?php 
                  if(isset($_POST['submit'])){
                      echo "Mail Sent. Thank you " . $fullName . ", we will contact you shortly.";
                  }?></p></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Another way to handle the navbar
    <div class="navbar navbar-default">
      <div class="container d-flex justify-content-between">
        <div class="social"> 
          <a href="http://twitter.com">
              <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x twittericoncolor"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
          <a href="http://facebook.com">
              <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x facebookiconcolor"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
          <a href="http://instagram.com">
              <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x instagramiconcolor"></i>
              <i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a>
        </div>
      </div>
    </div>
    -->
    <section class="jumbotron text-center">
      <div class="container">
        <img src="img/logo_soda.png" alt="SODA">
        <p class="lead">Pushing boundaries,<br>realising indeas.</p>
      </div>
    </section>

    <div class="container">
      <div class="about-us">
        <div class="row">
          <div class="col-md-4">
            <h3>A little bit about our company.</h3>
          </div>
          <div class="col-md-8">
            <p>SODA Visual is an agency with years of experience in Creative Commercial Photography. Whether you're creating a campaign from scratch or want to give your existing campaign an extra creative touch, we have the tools and the skills to make things happen.</p>
             <p>Paul & Romain are 2 professional photographers who work alongside you and your team to help you create and launch new products and strengthen your brand.</p>
             <p>We help clients bring concept and ideas to life with stills and video work and lots of other cool stuff ' We try and bring a little bit of our personalities into every job we do, and we think that's what makes us a little different.</p>
             <p>We try not to bark orders, but know when to step in, and the open collaborative approach we bring to each job ensures we meet the clients needs.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="album text-muted">
        <h1>our clients</h1>
      <div class="container">
        <div class="row">
          <div class="card col-sm-6 col-md-3">
            <img src="img/logo_barclays.png" alt="Card image cap">
          </div>
          <div class="card col-sm-6 col-md-3">
            <img src="img/logo_freeview.png" alt="Card image cap">
          </div>
          <div class="card col-sm-6 col-md-3">
            <img src="img/logo_grand.png" alt="Card image cap">
          </div>

          <div class="card col-sm-6 col-md-3">
            <img src="img/logo_kings.png" alt="Card image cap">
          </div>
          <div class="card col-sm-6 col-md-3">
            <img src="img/logo_ministry.png" alt="Card image cap">
          </div>
          <div class="card col-sm-6 col-md-3">
            <img src="img/logo_peldonrose.png" alt="Card image cap">
          </div>

          <div class="card col-sm-6 col-md-3">
            <img src="img/logo_sony.png" alt="Card image cap">
          </div>
          <div class="card col-sm-6 col-md-3">
            <img src="img/logo_studio.png" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>

    <div class="section-d">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3>Contact Soda Visual</h3>
            <br/>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cras mattis consectetur purus sit amet fermentum.</p>
              <p><b>Paul:</b> +44 (0)794 921 2037</p>
              <p><b>Romain:</b> +44 (0)794 921 2037</p>
              <p><b>Email:</b><a href="mailto:info@soda-visual.com">info@soda-visual.com</a></p>
          </div>
          <div class="col-md-4 formS">
          <br/>
          <br/>
            <form method="post" action="index.php">
              <div class="form-group row">
                <input class="form-control input-md" type="text" value="Full Name" id="name">    
              </div>
              <div class="form-group row">
                <input class="form-control input-md" type="email" value="your@email.com" id="name">    
              </div>
              <div class="form-group row">
                <textarea class="form-control input-lg" id="message" rows="3"></textarea>
              </div>
              <button type="Submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>



    <footer class="text-muted">
    <div class="container">
      <div class="col-lg-2 col-md-4"><p>Copyright Soda Visual &copy;2017</p></div>
      <div class="col-lg-2 col-md-4"></div>
      <div class="col-lg-2 col-md-4"></div>
      <div class="col-lg-2 col-md-4"><a href="#">Back to top</a></div>
    </div>

    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>    
    <script type="text/javascript" src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <script src="js/holder.min.js"></script>
    <script src="js/tether.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
