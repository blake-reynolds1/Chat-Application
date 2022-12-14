<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Project Manhattan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Chat Application</header>
        <form action="#">
          <div class="error-txt"></div>
            <div class="field input">
              <labl>Email</labl>
              <input type="text" name= "email" placeholder="Enter your email">
            </div>
            <div class="field input">
              <labl>Password</labl>
              <input type="password" name = "password" placeholder="Enter your password">
              <i class= "fas fa-eye"></i>
            </div>
            <div class="field button">
              <input type="submit" value="Continue to chat">
            </div>
        </form>
        <div class="link">Don't have an account? <a href="index.php">Signup here</a></div>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
  </body>
</html>
