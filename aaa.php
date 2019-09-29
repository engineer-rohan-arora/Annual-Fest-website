<?php
require 'connection.php';
                    if(isset($_POST['login_button'])){
                    require "connection.php";
                    $nam = $_POST['userName'];
                    $pass = $_POST['Password'];
                    $query = "select *from admin";
                    $Result = mysqli_query($con,$query);
                    $row = mysqli_fetch_assoc($Result);
                    
                      $name = $row['AdminId'];
                      $password = $row['Password'];
                      if($name==$nam && $password ==$pass)
                      {
                        header('location:demoAdmin.php');                 
                      }
                      else
                      {
                        echo "<lable class='has-error'>Invalid User name or Password.<lable>";
                        header('location:Admin.php');

                      }
                    }
                ?>