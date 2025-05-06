<?php
require_once("./config.php");
include("./includes/header.php");

?>
<body>


  <div id="home-header">
    <div id="home-header--bg-image">
    <link rel="stylesheet" href="./main.css">


    
      <?php include("./includes/navbar.php"); ?>
      <div class="home-header--title">
        <div class="container p-5">
          <h1>Find the best deals</h1>
          <h3 id="reservation-form">for your next trip</h3>
        </div>
      </div>
    </div>
  
  <main>
   
    <section id="decoration-accomodation">
      <div class="container my-5 py-5">
        <div class="row">
          <div class="col-md-5">
            <div class="content">
              <div class="section-title">
                <h2>Choose the perfect accomodation</h2>
              </div>
              <p>  
Discover comfort and luxury with our seamless hotel booking experience. 
Whether you're looking for a cozy retreat or a business-friendly stay, we have the perfect accommodation for you. Browse the rooms, enjoy exclusive deals, and book with confidence. Your perfect stay starts here!  
</p>

            </div>
          </div>
          <div class="col-md-7 card-container">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/2.jpg" alt="" />
              </div>
              <div class="card-footer"></div>
            </div>
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/4.jpg" alt="" />
              </div>
              <div class="card-footer"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="premium-section">
      <div class="container my-5 py-5">
        <div class="row">
          <div class="col-md-7">
            <div class="card-container">
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/rooms/6.jpg" alt="" />
                </div>
                <div class="card-footer">
                  <div class="footer-head">
                    <div class="label">Premium</div>
                    <div class="price">KSH.2500/day</div>
                  </div>
                  <div class="footer-body">Safari</div>
                  <!-- <div class="footer-foot">lemon</div> -->
                </div>
              </div>
              <!-- <div class="spacer"></div>
                <div class="spacer"></div> -->
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/rooms/1.jpg" alt="" />
                </div>
                <div class="card-footer">
                  <div class="footer-head">
                    <div class="label">Premium</div>
                    <div class="price">KSH2500/day</div>
                  </div>
                  <div class="footer-body">Adani</div>
                  <!-- <div class="footer-foot">lemon</div> -->
                </div>
              </div>
              <!-- <div class="card decoration"></div> -->
            </div>
          </div>
          <div class="col-md-5">
            <div class="content">
              <div class="section-title">
                <h2>Premium deals for your premium needs</h2>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
   
  </main>
  <?php include("./includes/footer.php"); ?>
  <script>
    $(document).ready(function () {
      $("#find-available-rooms-form").submit(function () {
        event.preventDefault();
        var indate = $("#check-in").val();
        var outdate = $("#check-out").val();
        var adults = $("#count-adults").val();
        var children = $("#count-children").val();
        console.log(children);
        if(indate != "" && indate != null && children != null && children != "") {
          window.location.href=`reservation.php?check_in_date=${indate}&check_out_date=${outdate}&adults=${adults}&children=${children}`;
        }
      });
    });
  </script>
</body>
</html>