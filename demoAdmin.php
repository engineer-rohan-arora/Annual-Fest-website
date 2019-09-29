  <?php
    // session_start();
  ?>
  <!DOCTYPE html>
  <html dir="ltr" lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <title>QUANTUM</title>
    <!-- Favicon and Touch Icons -->

  <!-- Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/css-plugin-collections.css" rel="stylesheet"/>
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
  <!-- CSS | Main style file -->
  <link href="css/style-main.css" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="css/preloader.css" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="css/responsive.css" rel="stylesheet" type="text/css">

  <link href="css/style.css" rel="stylesheet" type="text/css">

  <!-- Revolution Slider 5.x CSS settings -->
  <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

  <!-- CSS | Theme Color -->
  <link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="js/jquery-plugin-collection.js"></script>
  <style>
      .service-block {
          text-align: center;
      }
      .bg_qp {
          background-color:#812972;
      }
      
      .event{
          color:white;
      }
      #navTitle{
          color:white;
      }
  </style>
  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
  </head>

  <body class="">
    <div id="wrapper" class="" >
      <header id="header" class="header">
        <div class="header-top bg-color navbar-scrolltofixed  sm-text-center border-top-theme-333-3px p-0 bg_qp">
          <div class="container">           
            <div class="header-nav">
              <div class="header-nav-wrapper navbar-scrolltofixed bg-img bg_qp">
                <div class="container">
                  <nav id="menuzord-right" class="menuzord bg_qp">
                    <a class="menuzord-brand pull-left flip xs-pull-center mt-8" href="http://quantumuniversity.edu.in/">
                      <img src="img/logo.png" alt="quantumuniversity-logo">
                    </a>
                    <ul class="menuzord-menu" style="background-color:#812972">
                      <li><a id="navTitle" href="index.html">Home</a></li> 
                      <li><a id = "navTitle" >EVENTS</a>
                        <ul class="dropdown">
                          <li><a >EDGE</a>
                            <ul class="dropdown">
                              <li><a href="edge-inter.html">INTER COLLEGE</a></li>
                              <li><a href="edge-intra.html">INTRA COLLEGE</a></li>
                            </ul>
                          </li>
                          <li>
                            <a>UDAAN</a>
                            <ul class="dropdown">
                              <li><a href="udaan-inter.html">INTER COLLEGE</a></li>
                              <li><a href="udaan-intra.html">INTRA COLLEGE</a></li>
                            </ul>
                          </li>
                          <li>
                            <a>GLITZ</a>
                            <ul class="dropdown">
                              <li><a href="glitz-inter.html">INTER COLLEGE</a></li>
                              <li><a href="glitz-intra.html">INTRA COLLEGE</a></li>
                            </ul>
                          </li>
                          <li>
                            <a>OJAS</a>
                            <ul class="dropdown">
                              <li><a href="ojas-inter.html">INTER COLLEGE</a></li>
                              <li><a href="ojas-intra.html">INTRA COLLEGE</a></li>
                            </ul>
                          </li>
                                          
                        </ul>
                      </li>
                      <li><a id="navTitle" href="about.html">About Us</a></li>
                      <li><a id="navTitle" href="contact.html">Contact Us</a></li>
                      <li><a id="navTitle" href="register.html">Register</a></li>                  
                    </ul>
                  </nav>
                </div>
              </div> 
            </div> 
         </div>
        </div> 
      </header>   
      <div class="main-content">     
          
        
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class = "col-md-3 panel-body">
                <form action = "excle2.php" method ="post" id="form_reg" class="form-horizontal">
                  <div class = "form-group">
                    <label class = "control-label">Event</label>
                    <div class = "" id = "input-div">
                      <select class="form-control" name="event">
                                      <option value="">Select Event</option>
                                      <option value="edge_inter_college">EDGE(Inter collage)</option>
                                      <option value="edge_intra_college">EDGE(Intra collage)</option>
                                      <option value="ojas_inter_college">OJAS(Inter collage)</option>
                                      <option value="ojas_intra_college">OJAS(Intra collage)</option>
                                      <option value="udaan_inter_college">UDAAN(Inter collage)</option>
                                      <option value="udaan_intra_college">UDAAN(Intra collage)</option>
                                      <option value="glitz_inter_college">GLITZ(Inter collage)</option>
                                      <option value="glitz_intra_college">GLITZ(Intra collage)</option>
                      </select>
                    </div>    
                  </div>                     
                  <div class = "form-group">
                    <div class = "">
                      <input type = "submit" class = "form-control btn btn-success" value = "GetData" name = "register">
                    </div>
                  </div>
                </form>
              </div>
              <div class = "col-md-3 col-md-offset-1 panel-body">
                <form action = "excle3.php" method ="post" id="form_reg" class="form-horizontal">
                    <div class = "form-group">
                        <label class = "control-label">Event</label>                      
                        <select class="form-control" name="event">
                           <option value="">Select Event</option>
                                      <option value="edge_inter_college">EDGE(Inter collage)</option>
                                      <option value="edge_intra_college">EDGE(Intra collage)</option>
                                      <option value="ojas_inter_college">OJAS(Inter collage)</option>
                                      <option value="ojas_intra_college">OJAS(Intra collage)</option>
                                      <option value="udaan_inter_college">UDAAN(Inter collage)</option>
                                      <option value="udaan_intra_college">UDAAN(Intra collage)</option>
                                      <option value="glitz_inter_college">GLITZ(Inter collage)</option>
                                      <option value="glitz_intra_college">GLITZ(Intra collage)</option>
                        </select>                          
                    </div> 

                    <div class = "form-group">
                      
                        <select name="gender" class="form-control">
                          <option value="">Select Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <input type = "submit" class = "form-control btn btn-success" value = "Show Table" name = "register1">
                       </div>


                      
                   
                </form>
                  <input type="submit" name="excle">
              </div>
              <div class = "col-md-3 col-md-offset-1 panel-body">
                <form action = "sub_event_filter.php" method ="post" id="form_reg" class="form-horizontal">
                  <div class = "form-group">
                    <label class = "control-label">Event</label>
                      <select class="form-control" name="event">
                         <option value="">Select Event</option>
                                      <option value="edge_inter_college">EDGE(Inter collage)</option>
                                      <option value="edge_intra_college">EDGE(Intra collage)</option>
                                      <option value="ojas_inter_college">OJAS(Inter collage)</option>
                                      <option value="ojas_intra_college">OJAS(Intra collage)</option>
                                      <option value="udaan_inter_college">UDAAN(Inter collage)</option>
                                      <option value="udaan_intra_college">UDAAN(Intra collage)</option>
                                      <option value="glitz_inter_college">GLITZ(Inter collage)</option>
                                      <option value="glitz_intra_college">GLITZ(Intra collage)</option>
                      </select>
                  </div>  
                  <div class = "form-group">
                    <label class="control-label">Gender</label>
                    <select class="form-control" name="gender">
                      <option value="">Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div> 
                  <div class = "form-group">
                    <label class="control-label">Enter Sub Event</label>
                    <input type="text" class="form-control" name="sub_event" placeholder="Enter Sub Event">
                  </div>
                  <div class = "form-group">
                    <input type = "submit" class = "form-control btn btn-success" value = "GetData" name = "register2">
                  </div>  
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class = "col-md-3 panel-body">
                <form action = "sub_event_without_gender.php" method ="post" id="form_reg" class="form-horizontal">
                  <div class = "form-group">
                    <label class = "control-label">Event</label>
                      <select class="form-control" name="event">
                         <option value="">Select Event</option>
                                      <option value="edge_inter_college">EDGE(Inter collage)</option>
                                      <option value="edge_intra_college">EDGE(Intra collage)</option>
                                      <option value="ojas_inter_college">OJAS(Inter collage)</option>
                                      <option value="ojas_intra_college">OJAS(Intra collage)</option>
                                      <option value="udaan_inter_college">UDAAN(Inter collage)</option>
                                      <option value="udaan_intra_college">UDAAN(Intra collage)</option>
                                      <option value="glitz_inter_college">GLITZ(Inter collage)</option>
                                      <option value="glitz_intra_college">GLITZ(Intra collage)</option>
                      </select>
                  </div>  
                  <div class = "form-group">
                    <label class="control-label">Enter Sub Event</label>
                    <input type="text" class="form-control" name="sub_event" placeholder="Enter Sub Event">
                  </div>
                  <div class = "form-group">
                    <input type = "submit" class = "form-control btn btn-success" value = "GetData" name = "register3">
                  </div>  
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
  </body>
  <script type = "text/javascript">
    $(document).ready(function () {
      $("#form_reg").validate({
        rules: {
          event :"required",
          subEvent : "required",
          year:"required",
          CollageName:"required",
          course : "required",
          mobileNo : "required",
          email : "required",
          address : "required",
          amount : "required",
          paidAmount : "required",
          gender:"required",
          mainEvent:"required",
        },
        errorPlacement: function ( error, element ) {
             // Add thehelp-block class to the error element
            error.addClass( "help-block" );       
            error.insertAfter( element );
            
        }, 
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents( "#input-div" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( "#input-div" ).addClass( "has-success" ).removeClass( "has-error" );
        }
       
      });
    });
  </script>
      
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
  </html>
