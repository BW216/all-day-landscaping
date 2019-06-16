<?php
if(isset($_POST['submit'])){
    $email = "b.waller1@yahoo.com";
    $name = $_POST['name'];
    $from = $_POST['from'];
    $message = $_POST['message'];

    $sendMail = mail($email, $name, $from, $message);

      if($sendMail)
      {
      echo "Email Sent Successfully";
      }
      else

      {
      echo "Mail Failed";
      }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>All Day Landscaping</title>
  </head>
  <body class="is-preload">
    <!-- Header -->
      <div id="header">
        <span class="logo icon fa-gear fa-spin"></span>
        <h1>All Day Landscaping</h1>
        <p>Affordable | Local | Professional <br> Serving your community since 1987.</p>
      </div>

    <!-- Main -->
      <div id="main">

        <header class="major container medium">
          <h2>About</h2>
          <p>For over 30 years we have provided the highest quality landscaping in the area. It all started with one truck and one lawnmower. Our unrivaled dedication has propelled us into a trusted community partner.</p>
        </header>

        <div class="box alt container">
          <section class="feature left">
            <a href="#" class="image icon fa-usd"><img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" /></a>
            <div class="content">
              <h3>Affordable</h3>
              <p>Our analytics department has compiled comprehensive industry data to reflect the fact that we are the most affordable full-service landscaping business in the midwest.</p>
            </div>
          </section>
          <section class="feature right">
            <a href="#" class="image icon fa-map-signs"><img src="https://images.unsplash.com/photo-1473163928189-364b2c4e1135?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" /></a>
            <div class="content">
              <h3>Local</h3>
              <p>In your backyard. Literally and figuratively. Northeast Ohio means a lot to us too, <br>and there's nowhere we would rather be. <br>Ever.</p>
            </div>
          </section>
          <section class="feature left">
            <a href="#" class="image icon fa-suitcase"><img src="https://images.unsplash.com/photo-1472417583565-62e7bdeda490?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="" /></a>
            <div class="content">
              <h3>Professional</h3>
              <p>When you put your trust in us to get the job done we gurantee that our grounds experts will showcase all of our core values that make us the absolute best in the business.</p>
            </div>
          </section>
        </div>
      </div>

    <!-- Footer -->
      <div id="footer">
        <div class="container medium">

          <header class="major last">
            <h2>Request Service</h2>
          </header>

          <p>Get a quote today!</p>

          <form method="post" action="">
            <div class="row">
              <div class="col-6 col-12-mobilep">
                <input type="text" name="name" placeholder="Full Name">
              </div>
              <div class="col-6 col-12-mobilep">
                <input type="text" name="from" placeholder="Your Email">
              </div>
              <div class="col-12">
                <textarea name="message" placeholder="Message" rows="6"></textarea>
              </div>
                <div class="col-12">
                  <button name="submit" value="submit" class="btn btn-outline-light" type="submit">Submit</button>
                </div>
            </div>
          </form>

          <ul class="icons">
            <p>Social media pages under construction. Check back soon...</p>
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
          </ul>


        </div>
      </div>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
  </body>
</html>
