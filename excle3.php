<?php
session_start();
?>
<!DOCTYPE html>
<html>
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
  <!-- <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
  <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/> -->

  <!-- CSS | Theme Color -->
  <link href="css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

  <!-- external javascripts -->
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="js/jquery-plugin-collection.js"></script>
 
  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
  <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
  </head>
<body>
  <div class="container">
    <div class="col-md-12" style="">
      <div class="table-responsive">
        <table id ="student_info"class="table table-bordered table-striped table-dark" >
          <tr id="mm0">
            <th>Name</th>
            <th>Collage Name</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Year</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>Event</th>
            <th>Address</th>
            <th>Gender</th>
            <th>UID</th>
          </tr>
          <?php 
           if(isset($_POST['register1']))
            {
              require "connection.php";
              $Name = $_POST['event'];
              $_SESSION['name']=$Name;
              $gender = $_POST['gender'];
              $_SESSION['gender1'] = $gender;
              $_SESSION['name1'] = $Name;
              // $CollageName = $_POST['subEvent'];
              $sql = "select *from $Name where gender='$gender'";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result)>0)
              {
                while ($row=mysqli_fetch_assoc($result)) {
                  $name = $row['Name'];
                  $collageName = $row['CollageName'];
                  $Course = $row['Course'];
                  $Branch = $row['Branch'];
                  $Event = $row['Event'];
                  $Year = $row['Year'];
                  $Mobile = $row['Mobile'];
                  $Email = $row['Email'];
                  $Address = $row['Address'];
                  $gender = $row['gender'];
                  $UID = $row['UID'];
                   echo"<tr id='mm'><td>".$name."</td><td>".$collageName."</td><td>".$Course."</td><td>".$Branch."</td><td>".$Year."</td><td>".$Mobile."</td><td>".$Email."</td><td>".$Event."</td><td>".$Address."</td><td>".$gender."</td><td>".$UID."</td></tr>";                     
                }
              }
              else
              {
                echo "<LABEL id='UserNotFound_error'>*Data Not Found</LABEL>";
              }     
            }    

            


             
             


          ?>                             
        </table>
        
      </div>        
    </div>
    <form action="excle11.php">
      <input type="submit" name="submit1" value="download" class="btn btn-success">
      <a href="demoAdmin.php" class="btn btn-primary">Back To Addmin</a>   
    </form>  
  </div>

</body>
</html>



        