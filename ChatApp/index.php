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
      <section class="form signup">
        <header>Chat Application</header>
        <form action="#" enctype="multipart/form-data">
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <labl>First name</labl>
              <input type="text" name="fname" placeholder="First name" required>
            </div>
            <div class="field input">
              <labl>Last name</labl>
              <input type="text" name="lname" placeholder="Last name" required>
            </div>
            </div>
            <div class="field input">
              <labl>Email</labl>
              <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field input">
              <labl>Password</labl>
              <input type="password" name="password" placeholder="Password" required>
              <i class= "fas fa-eye"></i>
            </div>
            <div class="field image">
              <labl>Select image</labl>
              <input type="file" name="image" required>
            </div>
            <div class="field button">
              <input type="submit" value="Continue to chat">
            </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login here</a></div>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
  </body>
</html>
