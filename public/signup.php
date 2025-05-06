<?php
  require_once("./config.php");
?>
<?php include("./includes/header.php"); ?>
  <body>
    <!-- Form Section -->
    <section id="signup-form">
      <div class="auth--wrapper">
        <?php include("./includes/navbar.php"); ?>

        <div class="bg-image">
          <div class="form-progress">
            <span>Set up your account in 3 simple steps</span>
            <div class="form-progress-item complete">Phone number</div>
            <hr />
            <div class="form-progress-item--divider d-none"></div>
            <div class="form-progress-item">Personal info</div>
            <hr />
            <div class="form-progress-item--divider d-none"></div>
            <div class="form-progress-item">Credentials</div>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form-card">
            <h2>Sign up</h2>
            <form action="" id="signup_user" method="post" class="form">
              <!-- Part 1 of form -->
              <div class="part part-1">
    <div class="form-group">
        <label for="user_phone">Phone number</label>
        <input
            type="tel"
            name="user_phone"
            id="user_phone"
            class="form-control"
            placeholder="Enter your 10 digit phone number"
            required
            pattern="[0-9]{10}"
            title="Please enter a 10-digit phone number"
        />
        <small id="phone_error" class="error-message text-danger" style="display:none;">Please enter a valid 10-digit phone number</small>
    </div>

    <!-- Step 1 buttons -->
    <div class="form-group">
        <div class="step">
            <a class="btn" href="./index.html" id="cancel-part-1">Cancel</a>
            <button class="btn" id="proceed-part-2" disabled>Next</button>
        </div>
    </div>
    <!-- Step 1 buttons end -->
</div>

<!-- Part 2 of form -->
<div class="part part-2" style="display:none;">
    <div class="form-group">
        <label for="user_fname">First name</label>
        <input
            type="text"
            class="form-control"
            name="user_fname"
            id="user_fname"
            placeholder="Enter your first name"
            required
        />
        <small id="fname_error" class="error-message text-danger" style="display:none;">Please enter your first name</small>
    </div>
    <div class="form-group">
        <label for="user_lname">Last name</label>
        <input
            type="text"
            class="form-control"
            name="user_lname"
            id="user_lname"
            placeholder="Enter your last name"
            required
        />
        <small id="lname_error" class="error-message text-danger" style="display:none;">Please enter your last name</small>
    </div>
    <div class="form-group">
        <label for="user_dob">Date of birth</label>
        <input
            type="date"
            class="form-control"
            name="user_dob"
            id="user_dob"
            required
        />
        <small id="dob_error" class="error-message text-danger" style="display:none;">Please enter your date of birth</small>
    </div>

    <!-- Step 2 buttons -->
    <div class="form-group">
        <div class="step">
            <button class="btn" id="cancel-part-2">Back</button>
            <button class="btn" id="proceed-part-3" disabled>Next</button>
        </div>
    </div>
    <!-- Step 2 buttons end -->
</div>

<!-- Part 3 of form -->
<div class="part part-3" style="display:none;">
    <div class="form-group">
        <label for="user_email">Email</label>
        <input
            type="email"
            name="user_email"
            id="user_email"
            placeholder="Enter your email"
            class="form-control"
            required
        />
        <small id="email_error" class="error-message text-danger" style="display:none;">Please enter a valid email</small>
    </div>
    <div class="form-group">
        <label for="user_password">Password</label>
        <input
            type="password"
            name="user_password"
            id="user_password"
            placeholder="Enter your password"
            class="form-control"
            required
            minlength="8"
        />
        <small id="user_password_error" class="error-message text-danger" style="display:none;">Password must be at least 8 characters</small>
    </div>

    <!-- Step 3 buttons -->
    <div class="form-group">
        <div class="step">
            <button class="btn" id="cancel-part-3">Back</button>
            <button
                type="submit"
                name="signup-user"
                id="signup-user"
                class="btn btn-primary"
                disabled
            >
                Signup
            </button>
        </div>
    </div>
</div>

                <!-- Step 3 buttons end -->
              </div>
              <!-- Part 3 of form ends -->

              <div class="alternate-auth">
                <span>
                  Already have an account?
                  <a href="./login.php">&nbsp;Login here</a>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php include("./includes/footer.php"); ?>

    <script src="./js/handle-sign-up.js"></script>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Part 1 validation
    const phoneInput = document.getElementById('user_phone');
    const proceedPart2 = document.getElementById('proceed-part-2');
    const phoneError = document.getElementById('phone_error');

    phoneInput.addEventListener('input', function() {
        const isValid = /^[0-9]{10}$/.test(this.value);
        proceedPart2.disabled = !isValid;
        phoneError.style.display = isValid ? 'none' : 'block';
    });

    // Part 2 validation
    const fnameInput = document.getElementById('user_fname');
    const lnameInput = document.getElementById('user_lname');
    const dobInput = document.getElementById('user_dob');
    const proceedPart3 = document.getElementById('proceed-part-3');
    const fnameError = document.getElementById('fname_error');
    const lnameError = document.getElementById('lname_error');
    const dobError = document.getElementById('dob_error');

    function validatePart2() {
        const fnameValid = fnameInput.value.trim() !== '';
        const lnameValid = lnameInput.value.trim() !== '';
        const dobValid = dobInput.value !== '';
        
        fnameError.style.display = fnameValid ? 'none' : 'block';
        lnameError.style.display = lnameValid ? 'none' : 'block';
        dobError.style.display = dobValid ? 'none' : 'block';
        
        proceedPart3.disabled = !(fnameValid && lnameValid && dobValid);
    }

    fnameInput.addEventListener('input', validatePart2);
    lnameInput.addEventListener('input', validatePart2);
    dobInput.addEventListener('input', validatePart2);

    // Part 3 validation
    const emailInput = document.getElementById('user_email');
    const passwordInput = document.getElementById('user_password');
    const signupButton = document.getElementById('signup-user');
    const emailError = document.getElementById('email_error');
    const passwordError = document.getElementById('user_password_error');

    function validatePart3() {
        const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value);
        const passwordValid = passwordInput.value.length >= 8;
        
        emailError.style.display = emailValid ? 'none' : 'block';
        passwordError.style.display = passwordValid ? 'none' : 'block';
        
        signupButton.disabled = !(emailValid && passwordValid);
    }

    emailInput.addEventListener('input', validatePart3);
    passwordInput.addEventListener('input', validatePart3);

    // Navigation between parts
    document.getElementById('proceed-part-2').addEventListener('click', function(e) {
        e.preventDefault();
        if (!/^[0-9]{10}$/.test(phoneInput.value)) {
            phoneError.style.display = 'block';
            return;
        }
        document.querySelector('.part-1').style.display = 'none';
        document.querySelector('.part-2').style.display = 'block';
    });

    document.getElementById('cancel-part-2').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.part-2').style.display = 'none';
        document.querySelector('.part-1').style.display = 'block';
    });

    document.getElementById('proceed-part-3').addEventListener('click', function(e) {
        e.preventDefault();
        if (fnameInput.value.trim() === '' || lnameInput.value.trim() === '' || dobInput.value === '') {
            validatePart2();
            return;
        }
        document.querySelector('.part-2').style.display = 'none';
        document.querySelector('.part-3').style.display = 'block';
    });

    document.getElementById('cancel-part-3').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.part-3').style.display = 'none';
        document.querySelector('.part-2').style.display = 'block';
    });
});
</script>

    <!-- Custom -->
    <script>
      $(document).ready(function () {
        var d = new Date();
        var year = d.getFullYear();
        d.setFullYear(year);
        $("#user_dob").datepicker({
          dateFormat: "yy-mm-dd",
          changeMonth: true,
          changeYear: true,
          yearRange: "2000:" + year + "",
          defaultDate: d,
        });
        $("nav").addClass("navbar-light");


        $("#user_phone").val("");
        $("#user_fname").val("");
        $("#user_lname").val("");
        $("#user_dob").val("");
        $("#user_email").val("");
        $("#user_password").val("");

        
      function handleError(about, message) {
        console.log("IN ERROR");
        $(`#${about}`).addClass("is-invalid");
        $(`#${about}_error`).html("<span>"+message+"</span>");
      }

        // Login user
        $("#signup_user").submit(function (e) {
          $(".error-message").html("");
          $(".form-control").removeClass("is-invalid");
          $("#signup-user").html("Signing you in...");

          e.preventDefault();
          var formData = new FormData(this);

          $.ajax({
            url: "core/signup_user.php",
            type: "POST",
            data: formData,
            success: function (data) {
              console.log("SUCCESS");
              console.log(data);
              if (data.error == 1) {
                console.log(data.error);
                handleError(data.about, data.message);
                $("#signup-user").html("Sign up");
              } else {
                $("#signup-user").html("Signed up");
                window.location.href="verify_user.php";
                // return;
              }

            },
            error: function (data, message, errorThrown) {
              console.log("ERROR" + errorThrown + message);
              // $("#error-form").html("<span class=\"p-2\">" + message + errorThrown + "</span>");
              $("#signup-user").html("Sign up");
            },
            cache: false,
            contentType: false,
            processData: false
          });
        });
      });
      
    </script>

    <!-- Include this script at the end of your HTML -->
<script>
  // Validate Part 1
  document.getElementById("proceed-part-2").addEventListener("click", function (e) {
    const phone = document.getElementById("user_phone").value;
    if (!phone) {
      alert("Please enter your phone number.");
      e.preventDefault();
    }
  });

  // Validate Part 2
  document.getElementById("proceed-part-3").addEventListener("click", function (e) {
    const firstName = document.getElementById("user_fname").value;
    const lastName = document.getElementById("user_lname").value;
    const dob = document.getElementById("user_dob").value;

    if (!firstName || !lastName || !dob) {
      alert("Please complete all fields (First Name, Last Name, Date of Birth).");
      e.preventDefault();
    }
  });

  // Validate Part 3
  document.getElementById("signup-user").addEventListener("click", function (e) {
    const email = document.getElementById("user_email").value;
    const password = document.getElementById("user_password").value;

    if (!email || !password) {
      alert("Please provide your Email and Password.");
      e.preventDefault();
    }
  });
</script>

  </body>
</html>
