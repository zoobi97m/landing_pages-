<!DOCTYPE html>
<html>
    <head>
        <!-- character encoding-->
        <meta charset = "utf-8">
        <!-- include JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- include Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <title> Air Filters</title>
        
        <!-- scaling -->
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <!-- include CSS File -->
        <link rel="stylesheet" href="main_styles.css" type="text/css" />
        
    </head>
    <?php
        
            $data = file_get_contents('data.json');
            $json_val = json_decode($data,true);
            
            if ($json_val === null)
            {
               echo "null value";
            }
    ?>
    <body>
        
        <!-- Top navigation bar, Bootstrap  -->
        <nav class="navbar navbar-expand-sm bg-dark fixed-top">
            
            <!-- Componay Logo container -->
            <div class = "container-fluid justify-content-start">
                <h3 class="text-white">Automotive Filters </h1>
            </div>
            
            
            <!-- Hamburger menu if window gets resized, mobile first design -->
            <div id = "burger_menu_top" class = "container-fluid ">
                 
                <button class="navbar-toggler ml-auto hamburger_toggle" type="button" data-bs-toggle="collapse" data-bs-target="#burger_menu" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon ">
                    </span>
                </button>
                
                
            <!-- When menu is clicked -->
                <div class="collapse navbar-collapse" id="burger_menu">

                
                    <ul class="navbar-nav ">
                  
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="OilFilter.php">Oil Filters</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="FuelFilter.php">Fuel Filters</a>
                        </li> 
                        
                        <li class="nav-item ">
                            <a class="nav-link  active text-white" href="main.php">Main Menu</a>
                        </li>
                        
                    </ul>
                </div>
                
            </div>
            
            
            <!-- default menu for larger screens -->
            <div id = "options_flat" class = "container-fluid justify-content-end ">   
                <ul class="navbar-nav ">
              
                  <li class="nav-item">
                    <a class="nav-link active text-white" href="OilFilter.php">Oil Filters</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active text-white" href="FuelFilter.php">Fuel Filters</a>
                  </li> 
                  <li class="nav-item ">
                   
                    <a class="nav-link  active text-white" href="main.php">Main Menu</a>
                  </li>
                </ul>
            </div>
            
            
            
            

         
            <!-- Script to handle window resize -->
            <script type="text/javascript">
            
                function handleResize(event)
                {
                    if($(window).width() <= 550)
                    {
                        $("#options_flat").hide();
                        $("#burger_menu_top").show();
                        $("#bg_img_af").css("height", "50vh");
                        $("#bg_img_af").css("max-width", "100%");


                    }
                    else 
                    {
                         $("#options_flat").show();
                         $("#burger_menu_top").hide();
                          $("#bg_img_af").css("height", "60vh");
                        $("#bg_img_af").css("max-width", "35%");

                    }
                }
                
                $(document).ready(function(){
                    $("#burger_menu_top").hide();
                    console.log($(window).width());
                    
                    $(window).resize(handleResize);
                });
            </script>
            
        </nav>
        <div id = "bg_img_af" class = " container bg-img">
        </div>
        
        
        <div class = "container">
            <div class = "row">
                <div class = "col-md">
                    <div class = "container titles d-flex justify-content-center">
                        <h1>
                            <?php
                                echo $json_val['faqs'][0]["title"];
                                echo "<br>";
                        
                            ?>
                            
                        </h1>
                    </div>
                </div>
            </div>
            <div class = "row">
                <div class = "col-md">
                    <div class = "container desc d-flex justify-content-center">
            
                        <p5>
                            <?php
                                echo $json_val['faqs'][0]["desc"];
                        
                            ?>
                        </p5>
                        
                    </div>
                </div>
            </div>
            <div class = "row">
                <div class = "col-lg">
                
                <div class = "container titles d-flex justify-content-center">
                    <h1>
                       FAQ
                    </h1>
                    
                </div>  
               
                <div class="container d-flex justify-content-center">
                    
                    <p>
                  
                        <button class="btn btn-primary btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <?php
                            
                                echo $json_val['faqs'][0]["faq"][0]["q"];
                            ?>
                        </button>
                    </p>
                    
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                           <?php
                           
                                echo $json_val['faqs'][0]["faq"][0]["a"];
                                
                            ?>
                        </div>
                    </div>
              
                </div>
                
                
                <div class="container d-flex justify-content-center">
                    
                    <p>
                  
                        <button class="btn btn-primary btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                            <?php
                            
                                echo $json_val['faqs'][0]["faq"][1]["q"];
                            ?>
                        </button>
                    </p>
                    
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                           <?php
                           
                                echo $json_val['faqs'][0]["faq"][1]["a"];
                                
                            ?>
                        </div>
                    </div>
              
                </div>
                
                
                <div class="container d-flex justify-content-center">
                    
                    <p>
                    
                        <button class="btn btn-primary btn-block " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                            <?php
                            
                                echo $json_val['faqs'][0]["faq"][2]["q"];
                            ?>
                        </button>
                    </p>
                    
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                           <?php
                           
                                echo $json_val['faqs'][0]["faq"][2]["a"];
                                
                            ?>
                        </div>
                    </div>
              
                </div>
            </div>
            </div>
        </div>
    </body>
</html>

<?php
    
    
?>




