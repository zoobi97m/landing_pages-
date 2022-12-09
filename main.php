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
        
        <title> Main Menu</title>
        
        <!-- scaling -->
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <!-- include CSS File -->
        <link rel="stylesheet" href="main_styles.css" type="text/css" />
        
    </head>
    <body >
        
        
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
                            <a class="nav-link  active text-white" href="AirFilter.php">Air Filters</a>
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
                   
                    <a class="nav-link  active text-white" href="AirFilter.php">Air Filters</a>
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
                        $("#bg_img").css("height", "50vh");

                    }
                    else 
                    {
                        $("#options_flat").show();
                        $("#burger_menu_top").hide();
                        $("#bg_img").css("height", "60vh");

                    }
                }
                
                $(document).ready(function(){
                    $("#burger_menu_top").hide();
                    console.log($(window).width());
                    
                    $(window).resize(handleResize);
                });
                console.log($("title").html());
            </script>
            
        </nav>
        
        <div id = "bg_img" class = " container- fluid bg-img">
        </div>
        <div class = spacer_div></div> 


        
        <div class="container">
            
            <div class="row">
                <div class = "col-sm">
                    <div class="card img-fluid" style="width:410px">
                        <img class="card-img-top-center" src="pics/airFilter.webp" alt="Card image" style="width:70%" height = "250px">
                            <a href="AirFilter.php?slug=airfilters" target = "_self"  class="btn btn-primary">Air Filter</a>
                    </div>
                </div>
             
                
                <div class = "col-sm">
                    <div class="card img-fluid" style="width:410px">
                        <img class="card-img-top-center" src="pics/fuelFilter.webp" alt="Card image" style="width:70%" height = "250px">
                            <a href="FuelFilter.php?slug=fuelfilters" target = "_self"  class="btn btn-primary">Fuel Filter </a>
                    </div>
                </div>    
                
                <div class = "col-sm"> 
                    <div class="card img-fluid" style="width:410px">
                        <img class="card-img-top-center" src="pics/OilFilter.webp" alt="Card image" style="width:70%" height = "250px">
                        <a href="OilFilter.php?slug=airfilters" target = "_self"  class="btn btn-primary">Oil Filter</a>
                        

                    </div>
                </div>
                
            </div>
        </div> 
        
        
        
    
      
                    <div class = spacer_div></div> 


 
    </body>


</html>
        
       

<?php
    $_GET['title'] = "Air Filters";
    
   
                   $data = file_get_contents('data.json');
                   $json_val = json_decode($data,true);
                   if ($json_val === null)
                   {
                       echo "null value";
                   }
                   //echo $json_val['faqs'][0]["title"];


?>

    

<?php
    
    
?>