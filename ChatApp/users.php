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
      <section class="users">
        <header>
        <div class="content">
          <img src="img.jpg" alt="">
          <div class="details">
            <span>Blake Reynolds</span>
            <p>Active now</p>
          </div>
        </div>
        <a href="#" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
        <a href="#">
          <div class="content">
            <img src="img.jpg" alt="">
            <div class="details">
              <span>Blake Reynolds</span>
              <p>Testing message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="img.jpg" alt="">
            <div class="details">
              <span>David Hadden</span>
              <p>Hey</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="img.jpg" alt="">
            <div class="details">
              <span>Kelby Clary</span>
              <p>Hi</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="img.jpg" alt="">
            <div class="details">
              <span>Random person</span>
              <p>...</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
        <a href="#">
          <div class="content">
            <img src="img.jpg" alt="">
            <div class="details">
              <span>Random person2</span>
              <p>...</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
      </div>
    </section>
    </div>
    <script src="javascript/users.js"></script>
  </body>
</html>
