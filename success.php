<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/success.css">
    <title>Submited Success</title>
  </head>
  <body>
    <div class="Container">
      <div class="inner-container">
        <div class="logo-wrapper">
          <img
            src="images/cloudicity-logo-1.png"
            id="logoImg"
            class="logo-img darken-logo"
            alt="A logo image"
          />
            
        </div>
        <h4 class="intro-heading-txt">Thanks for submitting!</h4>
        <div class="inner-box">
          <span><i class="fas fa-check-circle"></i></span>
          <p class="msg">Successfully Submitted!</p>
          <p class="txt">You would receive an Email message based on your data submission.</p>
          <button class="success__btn" onclick="redirect_user_home()">
            <span>Back to home
            </span>
          </button>
          <!-- <button class="btn" id="redirectBtn"></button> -->
        </div>
      </div>
    </div>

    <!-- Js file linked -->
    <script src="JS/success.js">
    </script>
  </body>
</html>
