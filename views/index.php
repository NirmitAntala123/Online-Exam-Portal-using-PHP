<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Contact Form</title>
  <!-- <link rel="stylesheet" href="styl.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <style>
        .main {
            padding: 50px;
            margin-top: 100px;
        }
  </style>
</head>

<body>

  <!--alert messages start-->

  <!--alert messages end-->
  <!--contact section start-->
  
  

    <div class="main">
      <div class="container">
          <center>
            <h2>Forgot Password</h2></br>
            <form class="contact" action="" method="post" style="padding: 0 100px 0 100px;">
              <input type="email" name="email" class="text-box" placeholder="Your Email" required><br><br>
              <input type="submit" name="submit" class="form-submit"" value="SEND"><br><br>
              <?php echo $alert; ?>
            </form>
          </center>
      </div>
   
  </div>
  <!-- contact section end -->

  <!-- <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script> -->

</body>

</html>