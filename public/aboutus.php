<?php
require_once("./config.php");
include("./includes/header.php");
include("./includes/navbar.php");

?>
<body>
    <style>
    .site-section{
        padding:4em 0;
    }

    /* .details{{
        background-color:grey;
    }} */

    p,ul{
        color:grey;
    }

    li{
        margin-left:20px;
    }

    h2{
        font-family:Sofia;
    }

    h3{
        font-family:Sofia;
    }

    .imgt{
        color:red;
    }

    .circle-border{
     border-radius: 50%;
    }

   
    </style>
     
  <header id="home">
  </header>
  <div class="site-section bg-light">
    <div class="container ">
        <div class="row align-items-center">
            <div class= "col-md-6 mb-5">
                <p><img src="./public/media/images/backgrounds/bg-1.jpg" width=450 height=350></p>
            </div>
            <div class= "col-md-6 mb-5">
                <div>
                    <h2>About Us</h2>
                    <hr>
                </div> 
                <p>
                Offering top quality services that every customer deserves. cross all of the seven continents. We aim to focus on:
                <ul>
                <li>Core Values and Heritage</li>
                <li>Diversity and Inclusion</li>
                <li>Sustainability and Social Impact</li>
                </ul></p>
                <p>
                Our main goal is to provide the best experience to every customer and make their stay memorable. So become part of an ever growing family at Nyuat Hotel.
                </p>
            </div>
        </div>
    </div>
  </div>
  
</body>
</html>