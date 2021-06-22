<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pay Page</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2 class="my-4 text-center">Intro To React Course</h2>
    <form action="./charge.php" method="post" id="payment-form">
  <div class="form-row">
    <input class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name" type="text" name="first_name" value=""><br><br>
    <input class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name" type="text" name="last_name" value=""><br><br>
    <input class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email" type="email" name="email" value=""><br><br>
    <label for="card-element">

    </label>
    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>
  </body>
</html>
